<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Login
 *
 */
class Login extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * 首页
     */
    public function index(){

        $this->load->view('front/login');
    }

}


