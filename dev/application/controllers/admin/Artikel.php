<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Artikel extends Backend_Controller{
    function __construct(){
        parent::__construct(); 
        $this->load->model(array('Artikel_model', 'Kategori_model'));
    }

    function index(){
        $data = array();
        $this->site->view('artikel', $data);
    } //end index

    public function action($param){
        global $SConfig;
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if ($param == "tambah" || $param == "edit") {
                
                $rules = $this->Artikel_model->rules;
                $this->form_validation->set_rules($rules);

                if ($this->form_validation->run() == TRUE) {
                    $post = $this->input->post(NULL, TRUE);
                    $data = array(
                        'post_author'   => get_user_info('ID'),
                        'post_title'    => $post['post_title'],
                        'post_name'     => url_title($post['post_title'], '-', TRUE),
                        'post_content'  => $post['post_content'],
                        'post_date'     => date('Y-m-d H:i:s') 
                    );

                    if(!empty($post['post_id'])){
                        $this->Artikel_model->update($data, array('post_ID' => $post['post_id']));
                        $result = array('status' => 'success', 'tipe' => 'edit');
                    }else{
                        if ($this->Artikel_model->insert($data)) {
                            $result = array('status' => 'success', 'tipe' => 'insert');
                        }else{
                            $result = array('status' => 'failed');
                        }
                    }
                }else{
                    $result = array('status' => 'failed', 'errors' => $this->form_validation->error_array());
                }

                echo json_encode($result);
                
            }else if($param == 'ambil'){
                $post = $this->input->post(NULL,TRUE);
                
                if(!empty($post['id'])){
                    echo json_encode(array(
                        'status'   => 'success',
                        'data'     => $this->Artikel_model->get($post['id']) 
                    ));
                }else{
                    $total_rows = $this->Artikel_model->count();
                    $offset = NULL;
                    
    
                    if(!empty($post['hal_aktif']) && $post['hal_aktif'] > 1 ){
                        $offset = ($post['hal_aktif'] - 1) * $SConfig->_backend_perpage;
                    }
    
                    $record = $this->Artikel_model->get_by(NULL,$SConfig->_backend_perpage, $offset);
    
                    echo json_encode(
                        array(
                                'total_rows' => $total_rows,
                                'perpage' => $SConfig->_backend_perpage,
                                'record' => $record
                            )
    
                    );
                } 
            }else if($param == 'hapus'){
                $post = $this->input->post(NULL, TRUE);
                if(!empty($post['post_id'])){
                    $this->Artikel_model->delete($post['post_id']);
                    $result = array('status' => 'success', 'tipe' => 'delete');
                }

                echo json_encode($result);
            }
            
        }
    } //end action

    public function kategori($action =''){
        global $SConfig;
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
            if($action == 'tambah' || $action == 'edit'){
                $rules = $this->Kategori_model->rules;
                $this->form_validation->set_rules($rules);

                if($this->form_validation->run() == TRUE){
                    $post = $this->input->post(NULL, TRUE);
                    $data = array(
                        'category_name'        => htmlspecialchars($post['category_name']),
                        'category_slug'        => htmlspecialchars(url_title($post['category_name'],'-',TRUE)),
                        'category_description' => htmlspecialchars($post['category_description']),
                        'category_parent'      => htmlspecialchars($post['category_parent']),
                        'category_type'        => 'artikel'
                    );

                    if(!empty($post['category_id'])){
                        $this->Kategori_model->update($data, array('category_ID' => $post['category_id']));
                        $result = array('status' => 'success', 'tipe' => 'edit');
                    }else{
                        // jika ada kategori yang sama/ kelanjutan artikel sebelumnya dengan judul yangsama
                        $is_exist = $this->Kategori_model->count(array('category_name' => $data['category_name']));
                        if($is_exist > 0){
                            $data['category_name'] = $data['category_name'].' 2';
                            $data['category_slug'] = url_title($data['category_name'], '-', TRUE);
                        }						
                        $this->Kategori_model->insert($data);
                        $result = array('status' => 'success', 'tipe' => 'insert');
                    }

                    echo json_encode($result);
                }
            }else if($action == 'ambil'){
                $post = $this->input->post(NULL,TRUE);
                
                if(!empty($post['id'])){
                    echo json_encode(array('data' => $this->Kategori_model->get($post['id'])));
                }
                else{
                    $total_rows = $this->Artikel_model->count();
                    $offset     = NULL;

                    if(!empty($post['hal_aktif']) && $post['hal_aktif'] > 1){
                        $offset = ($post['hal_aktif'] -1) * $SConfig->_backend_perpage; 
                    }

                    $record     = $this->Kategori_model->get();	
                    
                    echo json_encode(array(
                        'total_rows'    => $total_rows,
                        'perpage'       => $SConfig->_backend_perpage,
                        'record'        => $record
                    ));
                }					
            }else if($action == 'hapus'){
                $post = $this->input->post();
                if(!empty($post['category_id'])){
                    $this->Kategori_model->delete($post['category_id']);
                    $this->Kategori_model->delete_by(array('category_parent' => $post['category_id']));
                    $result = array('status' => 'success', 'tipe' => 'delete');
                }
                echo json_encode($result);
            }else if($action == 'sortir'){
                $post = $this->input->post(NULL, TRUE);
                foreach($post['ID'] as $sort => $id)
                $this->Kategori_model->update(array('category_sort' => $sort+1),array('category_ID' => $id));								
            }
        }else{
            $data = array();
            $this->site->view('kategori_artikel', $data);
        }
    }

} //end controller