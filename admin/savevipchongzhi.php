<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("../include/function.php");
include ("checkuser.php");
$VipUser=$_REQUEST["VipUser"];
$operator=$_COOKIE["AdminUser"];
$leixing="账号代充值";
$flag=1;
$jine=$_REQUEST["money"];
$data=date("Y-m-d H:i:s");
//$order_id=strtotime("now").rand(0,10000);
$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);

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
	echo "<script>alert('".$VipUser."充值成功！');location.href='viplist.php';</script>";
}
else{
	echo "<script>alert('".$VipUser."充值失败！'location.href='viplist.php';);</script>";
}
?>
