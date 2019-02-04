<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
    protected $_table_name;
    protected $_order_by;
    protected $_order_by_type;
    protected $_primary_filter = 'intval';
    protected $_primary_key;
    public $rules;

    function __construct(){
        parent::__construct();
    }

    public function insert($data, $batch=FALSE){
        if ($batch == TRUE) {
            $this->db->insert_batch('{PRE}'.$this->_table_name, $data);
            // $This->db->insert_batch('tbl_users', $data);
        }else{
            $this->db->set($data);
            $this->db->insert('{PRE}'.$this->_table_name);
            $id = $this->db->insert_id(); //mengambil id dari data yang diinsert tarakhir kali
            return $id;
        }
    } //end insert

    public function update($data, $where=array()){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('{PRE}'.$this->_table_name);
    } //end update

    public function get($id = NULL, $single = FALSE){
        if ($id !== NULL) {
            $filter = $this->_primary_filter;
            $id     = $filter($id);
            $method = 'row';
        }else if($single = TRUE){
            $method = 'row';
        }else{
            $method = 'result';
        } //end 

        if ($this->_order_by_type) {
            $this->db->order_by($this->_order_by, $this->_order_by_type);
            // $this->db->order_by('id','DESC');
        }else{
            $this->db->order_by($this->_order_by);
        } //end

        return $this->db->get('{PRE}', $this->_table_name)->$method();
    }//end get

    public function get_by($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL){
        if ($select) {
            $this->db->selct($select);
        }
        if ($where) {
            $this->db->where($where);
        }
        if (($limit) && ($offset)) {
            $this->db->limit($limit,$offset);
        }
        if ($limit) {
            $this->db->limit($limit);
        }

        return $this->db->get(NULL, $single);
    } //end get_by

    public function delete($id){
        $filter = $this->_primary_filter;
        $id     = $filter($id);

        if (!$id) {
            return FALSE;
        }

        $this->db->where($this->_primary_key,$id);
        $this->db->delete('{PRE}'.$this->_table_name);
    } //end delete

    public function delete_by($where = NULL){
        if ($where) {
            $this->db->where($where);
        }
        $this->db->delete('{PRE}'.$this->_table_name);
    } //end delete_by

    public function count($where = NULL){
        if (!empty($this->_type)) {
            $where['post_type'] = $this->_type;
        }

        if ($where) {
            $this->db->where($where);
        }
        $this->db->from('{PRE}'.$this->_table_name);
        return $this->db->count_all_results();
    } //end count

} //end model