<?php
/* * 
 * 功能：支付宝页面跳转同步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 该页面可在本机电脑测试
 * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
 * 该页面可以使用PHP开发工具调试，也可以使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyReturn
 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

include("../include/config.php");
include("../include/function.php");


?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php
	//计算得出通知验证结果
	$alipayNotify = new AlipayNotify($alipay_config);
	$verify_result = $alipayNotify->verifyReturn();
	if ($verify_result) {//验证成功
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//请在这里加上商户的业务逻辑程序代码

		//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
		//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

		//商户订单号
		/*
		 * array(18) {
			  ["body"]=>
			  string(21) "软文直通车充值"
			  ["buyer_email"]=>
			  string(11) "15288986891"
			  ["buyer_id"]=>
			  string(16) "2088702085216861"
			  ["exterface"]=>
			  string(25) "create_direct_pay_by_user"
			  ["is_success"]=>
			  string(1) "T"
			  ["notify_id"]=>
			  string(70) "RqPnCoPT3K9%2Fvwbh3InZcXrjAHOCJuI6uEXQxX0heyvFxyiGf9OkMuL2V8ThJAvjjFAF"
			  ["notify_time"]=>
			  string(19) "2016-12-18 11:43:35"
			  ["notify_type"]=>
			  string(17) "trade_status_sync"
			  ["out_trade_no"]=>
			  string(19) "RWZTC20161218111422"
			  ["payment_type"]=>
			  string(1) "1"
			  ["seller_email"]=>
			  string(11) "18561783895"
			  ["seller_id"]=>
			  string(16) "2088702047601627"
			  ["subject"]=>
			  string(21) "软文直通车充值"
			  ["total_fee"]=>
			  string(4) "0.01"
			  ["trade_no"]=>
			  string(28) "2016121821001004860239984802"
			  ["trade_status"]=>
			  string(13) "TRADE_SUCCESS"
			  ["sign"]=>
			  string(32) "27af1e93f4367bcd8a99f67b812d1271"
			  ["sign_type"]=>
			  string(3) "MD5"
			}
		 *
		 * */

		$out_trade_no = $_GET['out_trade_no'];

		//支付宝交易号

		$trade_no = $_GET['trade_no'];

		//交易状态
		$trade_status = $_GET['trade_status'];


		if ($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
			//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序

			//TRADE_SUCCESS
			$VipUser = $_COOKIE["VipUser"];
			$operator = $VipUser;
			$leixing = "支付宝充值";
			$flag = 1;
			$order_id=$out_trade_no;
			$jine = $_GET["total_fee"];
			$data = $_GET["notify_time"];

			$sqls="select * from user where VipUser='".$VipUser."'";
			$results=mysql_db_query($dbname,$sqls);
			$rss=mysql_fetch_array($results);
			if($rss!=NULL)
			{
				$sql="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$operator."','".$leixing."',".$jine.",".$flag.",'".$data."')";
				mysql_db_query($dbname,$sql);

				$yue=$rss["yue"]+$jine;
				$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
				mysql_db_query($dbname,$sqlu);
				echo "<script>alert('".$VipUser."充值成功！');location.href='/user/index.php';</script>";
			}
			else{
				echo "<script>alert('".$VipUser."充值失败！'location.href='/user/index.php';);</script>";
			}


		} else {
			echo "trade_status=" . $_GET['trade_status'];
		}


		echo "验证成功<br />";

		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	} else {
		//验证失败
		//如要调试，请看alipay_notify.php页面的verifyReturn函数
		echo "验证失败";
	}
	?>
	<title>支付宝即时到账交易接口</title>
</head>
<body>
</body>
</html>