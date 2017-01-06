<?php
session_start();
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "../lib/WxPay.Api.php";
require_once '../lib/WxPay.Notify.php';
require_once 'log.php';


//初始化日志
$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class NativeNotifyCallBack extends WxPayNotify
{
	public $totalFee = 0;
	public function unifiedorder($openId, $product_id)
	{
		//统一下单
		$input = new WxPayUnifiedOrder();
		$input->SetBody("微信充值");
		$input->SetAttach("微信充值");
		$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
		$input->SetTotal_fee($this->values["cash_fee"]);
		$input->SetTime_start(date("YmdHis"));
		$input->SetTime_expire(date("YmdHis", time() + 600));
		$input->SetGoods_tag("微信充值");
		$input->SetNotify_url("http://www.ruanwenztc.com/wechatPay/example/native_notify.php");
		$input->SetTrade_type("NATIVE");
		$input->SetOpenid($openId);
		$input->SetProduct_id($product_id);
		$result = WxPayApi::unifiedOrder($input);
		Log::DEBUG("unifiedorder:" . json_encode($result));
		return $result;
	}
	
	public function NotifyProcess($data, &$msg)
	{
		//echo "处理回调";
		Log::DEBUG("call back:" . json_encode($data));
		/*
		if(!array_key_exists("openid", $data) ||
			!array_key_exists("product_id", $data))
		{
			$msg = "回调数据异常";
			return false;
		}
		 
		$openid = $data["openid"];
		$product_id = $data["product_id"];
		
		//统一下单
		$result = $this->unifiedorder($openid, $product_id);
		if(!array_key_exists("appid", $result) ||
			 !array_key_exists("mch_id", $result) ||
			 !array_key_exists("prepay_id", $result))
		{
		 	$msg = "统一下单失败";
		 	return false;
		 }
		
		$this->SetData("appid", $result["appid"]);
		$this->SetData("mch_id", $result["mch_id"]);
		$this->SetData("nonce_str", WxPayApi::getNonceStr());
		$this->SetData("prepay_id", $result["prepay_id"]);
		$this->SetData("result_code", "SUCCESS");
		$this->SetData("err_code_des", "OK");*/

		//充值设置：
		$dbhost = 'localhost';		//数据库服务器
		$dbuser = 'advertorial';			//数据库用户名
		$dbpasswd = 'huo15_adv';		//数据库密码
		$dbname = 'advertorial';		//数据库名
		mysql_connect($dbhost,$dbuser,$dbpasswd);//建立连接
		mysql_query("set names utf8");
		$VipUser = $data["attach"];
		$operator = $VipUser;
		$leixing = "微信充值";
		$flag = 1;
		$order_id=$data["out_trade_no"];

		$jine = floatval($data["cash_fee"])/100;
		//2016-12-22-144854
		$data1 = date("Y-m-d H:i:s", time());
		$sqls="select * from user where VipUser='".$VipUser."'";
		$results=mysql_db_query($dbname,$sqls);
		$rss=mysql_fetch_array($results);
		if($rss!=NULL)
		{
			$sqls="select * from caiwu where order_id='".$order_id."'";
			$results=mysql_db_query($dbname,$sqls);
			$rss=mysql_fetch_array($results);
			if ($rss==null) {
				$sql="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$operator."','".$leixing."',".$jine.",".$flag.",'".$data1."')";
				mysql_db_query($dbname,$sql);

				$yue=$rss["yue"]+$jine;
				$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
				mysql_db_query($dbname,$sqlu);
				die;

			} else {
				return true;
			}


		}
		else{
			//Log::DEBUG("error:" . json_encode(mysql_error()));
			Log::DEBUG("error:" . json_encode($VipUser));
			echo "<script>alert('".$VipUser."充值失败！'location.href='/user/index.php';);</script>";


		}

		return true;
	}
}

Log::DEBUG("begin notify!");
$notify = new NativeNotifyCallBack();
$notify->Handle(true);
