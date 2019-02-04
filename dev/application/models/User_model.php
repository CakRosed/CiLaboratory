<?php 
defined('BASEPATH') OR exit('No script direct access allowed');

class User_model extends MY_Model{
    protected $_table_name      = 'user';
    protected $_primary_key     = 'ID';
    protected $_order_by_type   = 'DESC';
} //end model