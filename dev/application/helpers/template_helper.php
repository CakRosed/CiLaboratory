<?php 
    function get_template_directory($path, $dir_file){
        global $SConfig;
        
        $replace_path = str_replace('\\', '/', $path);
        $get_digit_doc_root = strlen($SConfig->_document_root);
        $full_path = substr($replace_path,$get_digit_doc_root);

        return $SConfig->_site_url.$full_path.'/'.$dir_file;
    } //end

    function get_template($view){
        $_this =& get_instance();
        return $_this->site->view($view);
    } //end 

    function set_url($sub){
        $_this =& get_instance();
        if ($_this->site->side == "backend") {
            return site_url('admin/'.$sub);
        }
    } //end

    function is_active_page($page, $class){
        $_this =& get_instance();

        if ($_this->site->side == "backend" && $page == $_this->uri->segment(2)) {
            return $class;
        }
    } //end

    function title(){
        $_this =& get_instance();
        global $SConfig;
        
        $array_backend_page = array(
            'dashboard'     => 'Dashboard',
            'artikel'       => 'Daftar Artikel',
            'halaman'       => 'Daftar Halaman',
            'produk'        => 'Daftar produk',
            'komentar'      => 'Daftar komentar',
            'statistik'     => 'Statistik',
            'konfigurasi'   => 'Konfigurasi',
            'user'          => 'Daftar user'
        );

        $title = NULL;
        if ($_this->site->side == "backend" && 
            (array_key_exists($_this->uri->segment(2), $array_backend_page))) {
            
            return $array_backend_page[$_this->uri->segment(2)];
        }
    }

?>