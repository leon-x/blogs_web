<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 获取全部的子类 内容
 * 指定父类ID
 * 获取全部的子类内容
 */
class Huoququanbyzilei extends CI_Controller{

	protected $_viewData = array();

	public function __construct(){
		parent::__construct();

		$this->load->model('tb_mall_goods_category');
	}

	/**
	 * 显示全部的 一级分类
	 * @return [type] [description]
	 */
	public function index(){

		$usa = $this->tb_mall_goods_category->get_area_content(['language_id'=>1]);    //美国
		$china = $this->tb_mall_goods_category->get_area_content(['language_id'=>2]);  //中国
		$hk = $this->tb_mall_goods_category->get_area_content(['language_id'=>3]);     //香港
		$hg = $this->tb_mall_goods_category->get_area_content(['language_id'=>4]);     //韩国

		$this->_viewData['usa']=$usa;
		$this->_viewData['china']=$china;
		$this->_viewData['hk']=$hk;
		$this->_viewData['hg']=$hg;
		$this->_viewData['title']="显示父类对应的全部子类内容";
		//$this->_viewData['usa']=$usa;
		$this->load->view('front/huoququanbyzilei',$this->_viewData);
	}


	/**
	 * 获取父类对应的全部子类内容
	 * @return [type] [description]
	 */
	public function get_child_content(){
		
	}



}



