<?php

class Mouse_right_click extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('front/mouse_right_click');
    }
    
    
}



