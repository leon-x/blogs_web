<?php
/**
 * Created by PhpStorm.
 * User: leon
 * Date: 2017/4/14
 * Time: 11:47
 */

if(!defined('BASEPATH')){
    exit('No direct script access allowed');
}



/**
 * 手机号检测
 * $phone   字符串类型的手机号
 * return
 *          手机号正确返回   真  1
 *          手机号不正确返回 假  0
 */
if(!function_exists('is_phone')){
    function is_phone($phone){
        $bool = preg_match('/^1[34578]{1}\d{9}$/',$phone);//是手机号 返回 true
        return $bool;
    }
}

/**
 * 邮箱检测
 * $email    字符串类型的邮箱账号
 * return
 *           邮箱账号正确   真  1
 *           邮箱账号不正确 假  0
 */
if(!function_exists('is_email')){
    function is_email($email){
        $bool = preg_match('/^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$/',$email);
        return $bool;
    }
}

if(!function_exists('send_mail')){
    function send_mail($to,$title,$body,$bccs=array(),$attach='')
    {

        $url = 'http://sendcloud.sohu.com/webapi/mail.send.json';

        $param = array(
            'api_user' => 'ayonggege_xn',     # 使用api_user和api_key进行验证
            'api_key' => 'qABg3tbVfWLMvS3x',
            'from' => 'info@tps138.com',      # 发信人，用正确邮件地址替代
            'fromname' => 'TPS',
            'to' => $to,                      # 收件人地址, 用正确邮件地址替代, 多个地址用';'分隔
            'subject' => $title,
            'html' => $body,
            'resp_email_id' => 'true'
        );


        $data = http_build_query($param);

        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $data
            ));
        $context  = stream_context_create($options);
        $result = file_get_contents($url, FILE_TEXT, $context);

        return $result;
    }
}






