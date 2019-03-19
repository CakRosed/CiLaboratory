<?php 
defined('BASEPATH') OR exit('No script direct access allowed');

Class Kategori_model extends MY_Model{
    protected $_table_name       = 'category';
    protected $_primary_key      = 'category_ID';
    protected $_order_by         = 'category_sort';
    protected $_order_by_type    = 'ASC';
    public $rules = array(
        'category_name' => array(
            'field'  => 'category_name',
            'label'  => 'Nama Kategori',
            'rules'  => 'trim|required'
        )
    );

    function __construct(){
        parent::__construct();
    }
}