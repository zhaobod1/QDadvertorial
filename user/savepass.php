<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
$VipUser=$_COOKIE["VipUser"];
$VipPass=$_REQUEST["pass1"];
$VipPass2=$_REQUEST["pass2"];
if($VipPass==$VipPass2){
	$sql="update user set VipPass='".md5($VipPass)."' where VipUser='".$VipUser."'";
	mysql_db_query($dbname,$sql);
	//mysql_select_db($dbname);
	//$result=mysql_query($sql);
	echo "<script>alert('修改成功！');location.href='editpass.php';</script>";
}
else{
	echo "<script>alert('两次输入的密码不一致，修改失败！');location.href='editpass.php';</script>";
}
?>
