<?php 
defined('BASEPATH') OR exit('No script direct access allowed');


Class Site{
    public $side;
    public $template;
    public $template_setting;
    public $website_setting;
    public $_isHome     = FALSE;
    public $_isCategory = FALSE;
    public $_isSearch   = FALSE;
    public $_isDetail   = FALSE;

    function view($pages, $data = NULL){
        $_this =& get_instance();
        
        if ($data) {
            $_this->load->view($this->side.'/'.$this->template.'/'.$pages, $data);
            // backend/black/index.php
        }else{
            $_this->load->view($this->side.'/'.$this->template.'/'.$pages);
        }
    }
}

