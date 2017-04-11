<?php

class Text extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        parent::index('front', 'text');
    }
    
    
}

