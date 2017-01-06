<?php
//设置工程相对路径
$root_path="../";
if(file_exists("$root_path/pay/bankconfig.php")){	  
	require_once("$root_path/pay/bankconfig.php");
}

//修改密码
if(isset($_POST['mod']) && isset($_POST['submit'])){
	
	$content = '<?' ."php\n";
	$payok=$_POST['payok'];
	$partner=$_POST['partner'];
	$key=$_POST['key'];
	$content .= "\$payok   = \"$payok\";\n\n";
	if(!empty($partner)){
		 $content .= "\$partner   = \"$partner\";\n\n";
	}
	if(!empty($key)){
		 $content .= "\$key   = \"$key\";\n\n";
	} 	
    $content .= '?>';
	if(empty($payok) && empty($partner) && empty($key)){
		echo "<script>alert('没有输入全部信息！');</script>";
	}else{
		$fp = @fopen('../pay/bankconfig.php', 'wb+');
		if (!$fp)
		{
			echo "<script>alert('文件不存在！');</script>";
		}
		if (!@fwrite($fp, trim($content)))
		{
		  echo "<script>alert('文件写入失败，如果是linux系统，把 pay/bankconfig.php 设为777！');</script>";
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
<div class="title">网银在线配置 开启，才可以支付,身份id,请到网银在线，商家服务里申请即时支付</div>
</div>
<div class="list">
<form id="form1" name="form1" method="post"action="chinabank.php">
<table cellpadding=0 cellspacing=0 width=100% class="role_table" >
<tr>
	<td class="tRight" width="160" >网银在线是否开启：</td>
<td  class="tLeft" > <input name="payok" type="text" size="50" value="<?echo $payok?>"/>1为开启0为关闭 </td>
</tr>
<tr>
	<td class="tRight" width="160">商户号</td>
	<td  class="tLeft" > <input type="text" name="partner" size="50"  value="<?echo $partner?>"/> </td>
</tr>
<tr>
	<td class="tRight" width="160">MD5密钥</td>
	<td  class="tLeft" > <input name="key" type="text" size="50" value="<?echo $key?>"/> </td>
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