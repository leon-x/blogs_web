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








