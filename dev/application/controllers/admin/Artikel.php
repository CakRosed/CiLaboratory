<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Artikel extends Backend_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data = array();
        $this->site->view('artikel', $data);
    } //end index
} //end controller