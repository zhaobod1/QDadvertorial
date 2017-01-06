<?php
session_start();
ini_set('date.timezone', 'Asia/Shanghai');
error_reporting(E_ALL);

require_once "../lib/WxPay.Api.php";
require_once "WxPay.NativePay.php";
require_once 'log.php';

include("../../include/function.php");


$order_id = @$_POST["v_oid"];
$_SESSION["VipUser"] = @$_COOKIE["VipUser"];
$amount = @intval(floatval($_POST["v_amount"]) * 100);
//模式一
/**
 * 流程：
 * 1、组装包含支付信息的url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、确定支付之后，微信服务器会回调预先配置的回调地址，在【微信开放平台-微信支付-支付配置】中进行配置
 * 4、在接到回调通知之后，用户进行统一下单支付，并返回支付信息以完成支付（见：native_notify.php）
 * 5、支付完成之后，微信服务器会通知支付成功
 * 6、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
$notify = new NativePay();
$url1 = $notify->GetPrePayUrl("123456789");

//模式二
/**
 * 流程：
 * 1、调用统一下单，取得code_url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、支付完成之后，微信服务器会通知支付成功
 * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
$input = new WxPayUnifiedOrder();
$input->SetBody("微信充值");
$input->SetAttach($_COOKIE["VipUser"]);
$input->SetOut_trade_no(WxPayConfig::MCHID . date("YmdHis"));
$input->SetTotal_fee($amount);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("订单号：".$order_id);
$input->SetNotify_url("www.ruanwenztc.com/wechatPay/example/native_notify.php");
$input->SetTrade_type("NATIVE");
$input->SetProduct_id($order_id);
$result = $notify->GetPayUrl($input);
$url2 = $result["code_url"];

?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>微信支付样例-退款</title>
	<style>
		body {
			width:100%;
			height:100%;
			font-family: "微软雅黑";
		}
		.clearfix {
			clear: both;
		}
		.hide {
			display: none;
		}
		.lf {
			float: left;
		}
		.red {
			color:#ea2324;
			font-weight:bold;
		}
		.orange {
			color:#ff6601;
			font-weight:bold;
		}
		.container {
			width:500px;
			height:470px;
			margin:0 auto;
			border:1px solid #ddd;
		}
		.container .logo {

		}
		.container .logo .img {
			margin-left: 20px;
		}
		.container .logo .txt {
			font-family: "微软雅黑";
		}

		.container .order {
			background: #f2f2f2;
			width:100%;
			overflow: hidden;
		}
		.container .order .info {
			margin-left: 10px;
		}
		.container .order .amount {
			height:52px;
			line-height:52px;
			float: right;
			margin-right:20px;
		}
		.container .description {
			width:440px;
			height:30px;
			border:2px solid #fc6620;
			margin:0 auto;
			margin-top:10px;
		}
		.container .description .logo {
			margin-top:5px;
			padding-left:5px;
			float: left;
		}
		.container .description .txt {
			float: left;
			margin-left:5px;
			height:20px;
		}
		.container .description .txt .wechat {
			height:28px;
			line-height:28px;
			margin-right:10px;
			padding:0;
			float: left;
		}
		.container .description .txt .recommend {
			width:47px;
			height:20px;
			margin-top:5px;
			padding:0;
			float: left;
			background: url("/images/wechat_recommend.png") no-repeat;
		}
		.container .description .amount {
			float: right;
			height:28px;
			line-height:28px;
			padding-right:5px;
		}
		.container .qrcode {
			margin: 5px 0 5px 26px;
			width:200px;
			height:200px;
			border:1px solid #ccc;
		}
		.container .comment {
			margin-left:25px;
			margin-top:0px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="logo">
		<div class="img lf">
			<img src="/images/logo_01.png" width="200" alt="">
		</div>
		<div class="txt lf">
			<h2>收银台</h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="order">
		<div class="info lf">
			<table>
				<tr>
					<td>用户名：</td>
					<td><?php echo @$_COOKIE["VipUser"]; ?></td>
				</tr>
				<tr>
					<td>订单号：</td>
					<td><?php echo @$order_id; ?></td>
				</tr>
			</table>
		</div>
		<div class="amount">
			应付金额：<span class="red">￥<?php echo $_POST["v_amount"]; ?></span>
		</div>
	</div>
	<div class="description">
		<div class="logo">
			<img src="/images/wechat_logo.png" height="20" alt="">
		</div>
		<div class="txt">
			<div class="wechat">微信支付</div>
			<div class="recommend"></div>
		</div>
		<div class="amount">
			支付 <span class="orange"><?php echo $_POST["v_amount"]; ?></span> 元
		</div>
	</div>
	<div class="qrcode">
		<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url2); ?>"
		     style="width:200px;"/>
	</div>
	<div class="comment">
		<img src="/images/wechat_comment.png" width="200" alt="">
	</div>
	<div class="comment">
		<p>支付以后请点击这里 <a href="/user/caiwu.php">返回</a></p>
	</div>
</div>
<div class="hide">
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div>
	<br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url1); ?>"
	     style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div>
	<br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url2); ?>"
	     style="width:150px;height:150px;"/>
</div>


</body>
</html>