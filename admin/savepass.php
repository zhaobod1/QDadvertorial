<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
$AdminUser=$_COOKIE["AdminUser"];
$AdminPass=$_REQUEST["pass1"];
$AdminPass2=$_REQUEST["pass2"];
if($AdminPass==$AdminPass2){
	$sql="update admin set AdminPass='".md5($AdminPass)."' where AdminUser='".$AdminUser."'";
	mysql_db_query($dbname,$sql);
	//mysql_select_db($dbname);
	//$result=mysql_query($sql);
	echo "<script>alert('修改成功！');location.href='editpass.php';</script>";
}
else{
	echo "<script>alert('两次输入的密码不一致，修改失败！');location.href='editpass.php';</script>";
}
?>
