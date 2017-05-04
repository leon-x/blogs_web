<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone_sms_code extends CI_controller{

	public function __construct(){
			parent::__construct();
		}

	public function index(){
		$this->load->view('front/phone_sms_code');
	}

	/**
     * 查询手机号验证码接收情况 --- leon
     */
    public function phone_sms_status(){
        $data_array = $this->input->post();
        $phone = $data_array['phone'];
        $data_time = $data_array['data'];
        $phoneSend = $this->phone_send_data($phone,$data_time);//
        $phoneSend = (array)$phoneSend;
        $phoneSend = $phoneSend['values'];
        $phoneSend = (array)$phoneSend;
        $phoneSend = $phoneSend['fc_partner_sms_detail_dto'];
        foreach ($phoneSend as $key => $value){
            $value_data = (array)$value;
            $phone_send_data[$key]['sms_phone'] = $value_data['rec_num'];                    //接收人的号码
            $phone_send_data[$key]['sms_status'] = $value_data['sms_status'];                //短信发送状态    1：等待回执，    2：发送失败，   3：发送成功
            $phone_send_data[$key]['sms_content'] = $value_data['sms_content'];              //短信内容
            $phone_send_data[$key]['sms_receiver_time'] = $value_data['sms_receiver_time'];  //短信接收时间
            $phone_send_data[$key]['sms_send_time'] = $value_data['sms_send_time'];          //短信发送时间
        }
        //echo "手机短信信息：";
        echo json_encode($phone_send_data);
        exit;
    }

	/**
     * 查询手机号短信发送情况
     * @param string $phone    接收短信的手机号
     * @param string $data     查询的日期   格式;20151215
     */
    public function phone_send_data($phone='',$data=''){
        include_once APPPATH .'/third_party/taobao/TopSdk.php';
        $c = new TopClient;
        $c->appkey = "23362350";
        $c->secretKey = "7615d82fa94a199d8ad2c303f2e6c9e6";
        $req = new AlibabaAliqinFcSmsNumQueryRequest;
        //$req->setBizId("1234^1234");
        $req->setRecNum($phone);
        $req->setQueryDate($data);
        $req->setCurrentPage("1");
        $req->setPageSize("50");
        $resp = $c->execute($req);
        return $resp;
    }

}





















