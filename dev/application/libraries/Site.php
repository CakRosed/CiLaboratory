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
    } //end

    
    function is_logged_in(){
        $_this =& get_instance();

        $user_session = $_this->session->userdata;
        
        if ($this->side == 'backend') {
            if ($_this->uri->segment(2) == "login") {
                if (isset($user_session['logged_in']) 
                    && $user_session['logged_in'] == TRUE
                    && $user_session['group']== "admin") {
                    
                    redirect(set_url('dashboard'));
                } 
            }else{
                if (!isset($user_session['logged_in'])
                    || $user_session['group'] !== "admin") {
                    
                    $_this->session->sess_destroy();
                    redirect(set_url('login'));
                }
            } //end sub if
        }else{
            if (!isset($user_session['logged_in'])) {
                $_this->session->sess_destroy();
                redirect(set_url('user/login'));
            }
        } //end if
    } //end

} //end controller

