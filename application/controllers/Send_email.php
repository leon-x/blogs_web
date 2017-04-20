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
        $content_array = $this->input->post();
        //$this->email_send($content_array);
        $this->email_send111($content_array);
    }

    public function email_send($content_array){

        $email_name = $content_array['email_name'];
        $email_title = $content_array['title_name'];
        $email_content = $content_array['content'];

        $data['email'] = $email_name;
        $data['content'] = sprintf($email_content);
        $content = $this->load->view('front/email_template111',$data,TRUE);

        /**
         * $email ； 收件人
         * $title_name :
         */
        send_mail($email_name,$email_title,$content);

        return TRUE;
    }


    public function email_send111($content_array){


        //发送人信息
        $send_email_site = "leon_xll@163.com";
        $send_email_name = "leon";

        //接收人信息
        $receive_email_site = $content_array['email_name'];
        $receive_email_title = $content_array['title_name'];
        $receive_email_content = $content_array['content'];

        $data['content'] = sprintf($receive_email_content);
        $content = $this->load->view('front/email_template111',$data,TRUE);

        $param = array(
            'api_user' => 'ayonggege_xn',     # 使用api_user和api_key进行验证
            'api_key' => 'qABg3tbVfWLMvS3x',
            'from' => $send_email_site,      # 发信人 邮件地址
            'fromname' => $send_email_name,              # 发信人 名字
            'to' => $receive_email_site,                      # 收件人地址, 用正确邮件地址替代, 多个地址用';'分隔
            'subject' => $receive_email_title,
            'html' => $content,
            'resp_email_id' => 'true'
        );

        /**
         * $email ； 收件人
         * $title_name :
         */
        send_mail_leon($param);

        return TRUE;
    }

}









