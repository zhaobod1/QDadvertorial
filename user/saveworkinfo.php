<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("../include/function.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>3)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=@$_REQUEST["action"];
  $VipUser=$_COOKIE["VipUser"];
  $title=@$_REQUEST["title"];
  $content=@$_REQUEST["content"];
  $data=date("Y-m-d h:i:s");
  
  $ID=@$_REQUEST["userid"];
  switch($action)
  {
   case "add":
   
	$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
	$sql="insert into ask_info (order_id,title,content,VipUser,data) values ('".$order_id."','".$title."','".$content."','".$VipUser."','".date("Y-m-d")."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('提交反馈问题成功！');location.href='work_list.php';</script>";
	break;
 
  case "edit":
  
	$ID=@$_REQUEST["ID"];
	$sql="update ask_info set title='".$title."',content='".$content."' where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('修改反馈问题成功！');location.href='work_list.php';</script>";
	break;

  case "isdel":
  
	$ID=@$_REQUEST["ID"];
	$dyn=1;
   
	$sql="update ask_info set dyn=".$dyn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('删除操作成功！');location.href='work_list.php';</script>";
	break;
	
  case "rep":
  
	$ID=@$_REQUEST["userid"];
	$order_id=@$_REQUEST["order_id"];
	$recontent=@$_REQUEST["recontent"];
	$flag=3;
   
	$sql="update ask_info set flag=".$flag." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	
	$sql="insert ask_discuss (order_id,recontent,VipUser,data) values ('".$order_id."','".$recontent."','".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('反馈操作成功！');location.href='work_list.php';</script>";
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