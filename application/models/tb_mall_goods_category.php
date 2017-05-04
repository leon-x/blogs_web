<?php

class tb_mall_goods_category extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    
    /**
     * 获取全部可用的分类内容
     * @return [type] [description]
     */
    public function get_all(){
        $this->db->from('mall_goods_category');   //访问的数据表
        //$this->db->where('parent_id',0);        //父类
        //$this->db->where('language_id',2);      //语言区域
        $this->db->where('status',1);             //状态
        //$this->db->like('goods_name',$search);
        //$this->db->where("cate_id IN($cate_id)", null, false);
        $query = $this->db->get()->result_array();
        return $query;
    }

    /**
     * 获取全部的分类内容
     * @return [type] [description]
     */
    public function get_all_perpage($data,$perPage = 12){
        
        $this->db->from('mall_goods_category');
        //$this->db->where('parent_id',0);//父类
        //$this->db->where('language_id',2);//语言区域
        $this->db->where('status',1);//状态
        //$this->db->like('goods_name',$search);
        //$this->db->where("cate_id IN($cate_id)", null, false);
        
        $cate_id = $data['cate_id'];
        $this->db->where("cate_id IN($cate_id)", null, false);
        
        $query = $this->db->limit( $perPage , ($data['page']-1)*$perPage )->get()->result_array();
        
        return $query;
    }

    /**
     * 获取不通区域的分类内容
     * @return [type] [description]
     */
    public function get_area_content($data){
        $this->db->from('mall_goods_category');   //访问的数据表
        $this->db->where('parent_id',0);        //父类
        $this->db->where('language_id',$data['language_id']);      //语言区域
        $this->db->where('status',1);             //状态
        //$this->db->like('goods_name',$search);
        //$this->db->where("cate_id IN($cate_id)", null, false);
        $query = $this->db->get()->result_array();
        return $query;
    }


    /**
     * 获取指定国家下的分类信息
     * @return [type] [description]
     */
    public function get_area_content_all($data){
        $this->db->from('mall_goods_category');   //访问的数据表
        $this->db->where('language_id',$data['language_id']);      //语言区域
        $this->db->where('status',1);             //状态
        $query = $this->db->get()->result_array();
        return $query;
    }




    /**
     * 获取指定ID的分类信息
     */
    public function get_id_content($id){
        $this->db->from('mall_goods_category');
        $cate_id = $id;
        $this->db->where("cate_id IN($cate_id)", null, false);
        //$this->db->where_in("cate_id",trim($id,"'"));
        $query = $this->db->get()->result_array();
        //echo $this->db->last_query();
        return $query;
    }
    
}
