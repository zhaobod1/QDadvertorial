<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("../include/function.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>2)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=@$_REQUEST["action"];
  $VipUser=$_COOKIE["AdminUser"];
  $data=date("Y-m-d H:i:s");
  
  $ID=@$_REQUEST["ID"];
  switch($action)
  {
  case "rec":
  
	$ID=@$_REQUEST["userid"];
	$order_id=@$_REQUEST["order_id"];
	$recontent=@$_REQUEST["recontent"];
	$flag=1;

	$sql="update ask_info set flag=".$flag." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	  
	$sql="insert ask_discuss (order_id,recontent,VipUser,data) values ('".$order_id."','".$recontent."','".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('收单操作成功！');location.href='work_list.php';</script>";
	break;
  
  case "reply":

	$ID=@$_REQUEST["userid"];
	$order_id=@$_REQUEST["order_id"];
	$recontent=@$_REQUEST["recontent"];
	$yn=@$_REQUEST["yn"];
	$flag=2;

	$sql="update ask_info set flag=".$flag.",yn=".$yn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	  
	$sql="insert ask_discuss (order_id,recontent,VipUser,data) values ('".$order_id."','".$recontent."','".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('回复反馈问题成功！');location.href='work_list.php';</script>";
	break;
 
  case "del":
	foreach(@$_REQUEST["ID"] as $it)
	{
	$sql2="delete from ask_info where ID=".$it."";
	mysql_db_query($dbname,$sql2);
	}
	echo "<script>alert('删除反馈问题成功！');location.href='work_list.php';</script>";
	break;
  }
}
?>