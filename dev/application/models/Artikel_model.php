<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

Class Artikel_model extends MY_Model{
    protected $_table_name    = 'post';
    protected $_primary_key   = 'post_ID';
    protected $_order_by      = 'post_ID';    
    protected $_order_by_type = 'DESC';    
    public $rules   = array(
        'post_title'    => array(
            'field' =>  'post_title',
            'label' =>  'Judul Artikel',
            'rules' =>  'trim|required'
        ),
        'post_content'  => array(
            'field' =>  'post_content',
            'label' =>  'Isi Artikel',
            'rules' =>  'trim|required'
        )
    ); 

    function __construct(){
        parent::__construct();
    }
} //end model