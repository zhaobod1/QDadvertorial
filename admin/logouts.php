<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
$AdminUser=$_COOKIE["AdminUser"];
$ips=$_COOKIE["ips"];
$dt=$_COOKIE["dt"];
$sql="update admin set ip='".$ips."',data='".$dt."' where AdminUser='".$AdminUser."'";
mysql_db_query($dbname,$sql);
echo "<script>alert('注销成功！');location.href='logout.php';</script>";
?>