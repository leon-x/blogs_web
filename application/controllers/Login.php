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

    	//$publicDomain = get_public_domain();//路径的子名称
    	//set_cookie("leon_login", "555555555555555555555", 3600 * 24 * 7, $publicDomain);//保存cookie



    	
    	//$this->load->model('tb_mall_goods_category');
    	//$aaa = $this->tb_mall_goods_category->getAll();

    	//print_r($aaa);exit;


        $this->load->view('front/login');
    }

}


