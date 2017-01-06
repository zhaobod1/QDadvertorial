<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
$VipUser=$_COOKIE["VipUser"];
$qq=$_REQUEST["qq"];
$dianhua=$_REQUEST["tel"];
$weburl=$_REQUEST["web"];
$myemail=$_REQUEST["email"];
$headpic=$_REQUEST["headpic"];

$sql="update user set qq='".$qq."',dianhua='".$dianhua."',weburl='".$weburl."',myemail='".$myemail."',headpic='".$headpic."' where VipUser='".$VipUser."'";
mysql_db_query($dbname,$sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
echo "<script>alert('修改成功！');location.href='info.php';</script>";
?>
