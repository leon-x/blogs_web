<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2017/4/14
 * Time: 16:54
 */

class Isemail extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    /**
     * 邮箱验证界面
     */
    public function index(){
        $this->load->view('front/isemail');
    }

    public function verification(){

        $email_array = $this->input->post();
        $email = $email_array['email'];
        $bool = is_email($email);

        $data =[
            'is'=>$bool,
            'nr'=>$email
        ];

        echo json_encode($data);
        exit;
    }

}



