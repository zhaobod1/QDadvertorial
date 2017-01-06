<?php
header("Content-Type: text/html; charset=utf-8");
include ("include/config.php");
$VipUser=$_COOKIE["VipUser"];
$AdminUser=$_COOKIE["AdminUser"];
$ips=$_COOKIE["ips"];
$dt=$_COOKIE["dt"];
if($VipUser<>""){
$sql="update user set ip='".$ips."',data='".$dt."' where VipUser='".$VipUser."'";
mysql_db_query($dbname,$sql);
echo "<script>alert('用户注销成功！');location.href='logout.php';</script>";
}
else{
$sql="update admin set ip='".$ips."',data='".$dt."' where AdminUser='".$AdminUser."'";
mysql_db_query($dbname,$sql);
echo "<script>alert('管理注销成功！');location.href='logout.php';</script>";
}
?>