<?php 
/**
 * cookie 的使用测试
 */
class Cookie_use extends CI_Controller{

	/**
	 * 设置cookie 
	 * 和 
	 * 输出 cookie
	 */
	public function index(){
		
		$publicDomain = get_public_domain();//路径的子名称
		
		
		//第一种方式：采用php原生态的方法设置的cookie的值
		// setcookie("cookie_one_id","cookie_one_id",time()+3600);
		// setcookie("cookie_one_name","cookie_one_name",time()+3600);
		// setcookie("cookie_one_password","cookie_one_password",time()+3600);
		// echo $_COOKIE['cookie_one_id']."<br>";
		// echo $_COOKIE['cookie_one_name']."<br>";
		// echo $_COOKIE['cookie_one_password']."<br>";
		
		
    	
		//第二种方式：通过CI框架的input类库设置cookie的值
		// $this->input->set_cookie("cookie_two_id","cookie_two_id",3600 * 24 * 7, $publicDomain);
		// $this->input->set_cookie("cookie_two_name","cookie_two_name",3600 * 24 * 7, $publicDomain);
		// $this->input->set_cookie("cookie_two_password","cookie_two_password",3600 * 24 * 7, $publicDomain);
		// echo $this->input->cookie("cookie_two_id")."<br>";          //适用于控制器
		// echo $this->input->cookie("cookie_two_name")."<br>";        //适用于控制器
		// echo $this->input->cookie("cookie_two_password")."<br>";    //适用于控制器
		// echo $_COOKIE['cookie_two_id']."<br>";                      //在模型类中可以通过这种方式获取cookie值
		// echo $_COOKIE['cookie_two_name']."<br>";                    //在模型类中可以通过这种方式获取cookie值
		// echo $_COOKIE['cookie_two_password']."<br>";                //在模型类中可以通过这种方式获取cookie值
		
		
		
		/**
    	 * 	$name (mixed) -- cookie 的名字
			$value (string) -- Cookie 的值
			$expire (int) -- 规定 cookie 的有效期
			$domain (string) -- Cookie domain (usually: .yourdomain.com)  规定 cookie 的域名。
			$path (string) -- Cookie path（路径）规定 cookie 的服务器路径
			$prefix (string) -- Cookie name prefix（名字的前缀）
			$secure (bool) -- Whether to only send the cookie through HTTPS（是不是只是通过 Http 发送 cookie） 规定是否通过安全的 HTTPS 连接来传输 cookie
			$httponly (bool) -- Whether to hide the cookie from JavaScript(是不是可以从 javaScript 中隐藏cookie)
    	 */
		//第三种方式：通过CI框架的cookie_helper.php辅助函数库设置cookie的值
		//php 的原生态用法
    	set_cookie("cookie_three_id", "cookie_three_id", 3600 * 24 * 7, $publicDomain);//保存cookie
    	set_cookie("cookie_three_name", "cookie_three_name", 3600 * 24 * 7, $publicDomain);//保存cookie
    	set_cookie("cookie_three_password", "cookie_three_password", 3600 * 24 * 7, $publicDomain);//保存cookie
    	echo get_cookie("cookie_three_id")."<br>";
    	echo get_cookie("cookie_three_name")."<br>";
    	echo get_cookie("cookie_three_password")."<br>";
    	
		
	}
	
}

?>

