<?php
//设置工程相对路径
$root_path="../";
if(file_exists("$root_path/pay/payconfig.php")){	  
	require_once("$root_path/pay/payconfig.php");
}

//修改密码
if(isset($_POST['mod']) && isset($_POST['submit'])){
	
	$content = '<?' ."php\n";
	$apayok=$_POST['apayok'];
	$apartner=$_POST['apartner'];
	$akey=$_POST['akey'];
	$seller_email=$_POST['seller_email'];
	$bpayok=$_POST['bpayok'];
	$bpartner=$_POST['bpartner'];
	$bkey=$_POST['bkey'];
	$content .= "\$apayok   = \"$apayok\";\n\n";
	if(!empty($apartner)){
		 $content .= "\$apartner   = \"$apartner\";\n\n";
	}
	if(!empty($akey)){
		 $content .= "\$akey   = \"$akey\";\n\n";
	}
	if(!empty($seller_email)){
		 $content .= "\$seller_email   = \"$seller_email\";\n\n";
	}
	if(!empty($bpayok)){
		 $content .= "\$bpayok   = \"$bpayok\";\n\n";
	}
	if(!empty($bpartner)){
		 $content .= "\$bpartner   = \"$bpartner\";\n\n";
	}
	if(!empty($bkey)){
		 $content .= "\$bkey   = \"$bkey\";\n\n";
	}
    $content .= '?>';
	if(empty($apayok) && empty($apartner) && empty($seller_email) && empty($akey) && empty($bpayok) && empty($bpartner) && empty($bkey)){
		echo "<script>alert('没有输入在线充值全部信息！');</script>";
	}else{
		$fp = @fopen('../pay/payconfig.php', 'wb+');
		if (!$fp)
		{
			echo "<script>alert('文件不存在！');</script>";
		}
		if (!@fwrite($fp, trim($content)))
		{
		  echo "<script>alert('文件写入失败，如果是linux系统，把 pay/payconfig.php 设为777！');</script>";
		}else{		
			echo "<script>alert('设置成功！');</script>";
		}
		@fclose($fp);	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body >

<div class="main" >
<div class="content" >
<div class="title">支付宝或网银在线充值开启后，才可以支付，身份信息请到支付宝或网银在线申请即时支付</div>
</div>
<div class="list">
<form id="form1" name="form1" method="post"action="pay.php">
<table cellpadding=0 cellspacing=0 width=100% class="role_table" >
<tr>
	<td class="tRight" width="160" >支付宝在线充值是否开启：</td>
<td  class="tLeft" > <input name="apayok" type="text" size="50" value="<?echo $apayok?>"/>1为开启0为关闭 </td>
</tr>
<tr>
	<td class="tRight" width="160">合作身份者ID：</td>
	<td  class="tLeft" > <input type="text" name="apartner" size="50"  value="<?echo $apartner?>"/> </td>
</tr>
<tr>
	<td class="tRight" width="160">安全检验码：</td>
	<td  class="tLeft" > <input name="akey" type="text" size="50" value="<?echo $akey?>"/> </td>
</tr>
<tr>
	<td class="tRight" width="160">签约支付宝账号：</td>
	<td  class="tLeft" > <input type="text" name="seller_email"  size="50"  value="<?echo $seller_email?>"/> </td>
</tr>
</table>
</div>

<div class="list" style="margin-top:5px">
<table cellpadding=0 cellspacing=0 width=100% class="role_table" >
<tr>
	<td class="tRight" width="160" >网银在线充值是否开启：</td>
<td  class="tLeft" > <input name="bpayok" type="text" size="50" value="<?echo $bpayok?>"/>1为开启0为关闭 </td>
</tr>
<tr>
	<td class="tRight" width="160">商户号：</td>
	<td  class="tLeft" > <input type="text" name="bpartner" size="50"  value="<?echo $bpartner?>"/> </td>
</tr>
<tr>
	<td class="tRight" width="160">MD5密钥：</td>
	<td  class="tLeft" > <input name="bkey" type="text" size="50" value="<?echo $bkey?>"/> </td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="center" colspan="3">
    <input name="mod" type="hidden" value="1" />
	<input type="submit" value="保 存"  name="submit" class="button small">  </td>
</tr>
</table>
</form>
</div>
</div>
</body>

</html>