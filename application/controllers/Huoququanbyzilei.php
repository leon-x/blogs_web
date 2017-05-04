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

		$usa   = $this->tb_mall_goods_category->get_area_content(['language_id'=>1]);    //美国区 全部的一级分类
		$china = $this->tb_mall_goods_category->get_area_content(['language_id'=>2]);    //中国区 全部的一级分类
		$hk    = $this->tb_mall_goods_category->get_area_content(['language_id'=>3]);    //香港区 全部的一级分类
		$hg    = $this->tb_mall_goods_category->get_area_content(['language_id'=>4]);    //韩国区 全部的一级分类

		$this->_viewData['usa']   = $usa;
		$this->_viewData['china'] = $china;
		$this->_viewData['hk']    = $hk;
		$this->_viewData['hg']    = $hg;
		$this->_viewData['title'] = "显示父类对应的全部子类内容";
		//$this->_viewData['usa']=$usa;
		$this->load->view('front/huoququanbyzilei',$this->_viewData);
	}


	/**
	 * 获取父类对应的全部子类内容
	 * @return [type] [description]
	 */
	public function get_child_content(){
		$parent = $this->input->post();

		$language_id = $parent['language_id'];
		$parent_id   = $parent['parent_id'];
		$data = array();
		if(isset($parent_id)){
			//$data['aaa'] ="555555";
			//$comob_all = $this->tb_mall_goods_category->get_all();
			$usa = $this->tb_mall_goods_category->get_area_content_all(['language_id'=>$language_id]);    //美国
			//print_r($comob_all);exit;
			$child = getChildArr($usa,$parent_id);
			$child = trim($child,",");
			$kkk = $this->tb_mall_goods_category->get_id_content($child);
			$data = $kkk;
		}
		echo json_encode($data);
		exit;
	}
}



