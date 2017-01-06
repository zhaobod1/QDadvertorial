<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
$VipUser=$_COOKIE["VipUser"];
$ips=$_COOKIE["ips"];
$dt=$_COOKIE["dt"];
$sql="update user set ip='".$ips."',data='".$dt."' where VipUser='".$VipUser."'";
mysql_db_query($dbname,$sql);
echo "<script>alert('注销成功！');location.href='logout.php';</script>";
?>