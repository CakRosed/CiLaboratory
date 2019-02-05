<?php
defined('BASEPATH') OR exit('Nor direc script ccess allowed');

class MY_Controller extends CI_Controller{
    public $data = array();
    
    function __construct(){
        parent::__construct();

        $this->load->helper(array('template_helper'));
        $this->load->library(array('Site'));
        $this->load->model(array());
    }
} //end controller