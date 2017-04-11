<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2017/4/14
 * Time: 14:15
 */

class Isphone extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->view('front/isphone');
    }


    public function verification(){

        $phone_array = $this->input->post();

        $phone = $phone_array['phone'];

        $bool = is_phone($phone);

        $data = [
            'is'=>$bool
        ];

        echo json_encode($data);
        exit;


    }

}



