<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2017/4/14
 * Time: 18:24
 */

class Send_email extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('front/send_email');
    }

    public function send(){
        //$content = $this->load->post();
        $this->email_send('326963413@qq.com');
    }




    public function email_send($email){

        //$code = generate_code(4);       //邮件验证码

        $code = "1234";

        $data['email'] = $email;
        $data['dear'] = "leon测试_dear";
        $data['email_end'] = "leon测试_email_end";
        $data['content'] = sprintf("leon测试_content",$code);
        $content = $this->load->view('front/email_template',$data,TRUE);

        /*********直接用框架邮件类发送*********/
        //send_mail($email,$real_lang['email_captcha_title'],$content);
        send_mail($email,"leon测试_email_captcha_title",$content);


        return TRUE;
    }

}









