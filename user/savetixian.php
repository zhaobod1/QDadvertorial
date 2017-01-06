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
  $VipUser=@$_REQUEST["VipUser"];
  $title="提现申请";
  $accnumber=@$_REQUEST["accnumber"];
  $jine=@$_REQUEST["money"];
  $tyue=@$_REQUEST["tyue"];
  $tyue=$jine+$tyue;
  $data=date("Y-m-d h:i:s");
  
  switch($action)
  {
   case "add":
	$flag=0;
	$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
	
	$sql="insert into tixian (order_id,title,accnumber,jine,VipUser,data) values ('".$order_id."','".$title."','".$accnumber."',".$jine.",'".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	
	$sqlt="update user set tyue=".$tyue." where VipUser='".$VipUser."'";
	mysql_db_query($dbname,$sqlt);
	echo "<script>alert('提交提现申请成功！');location.href='tixianlist.php';</script>";
	break;
 
  case "edit":
	
	$ID=@$_REQUEST["txid"];
	$sql="update tixian set accnumber='".$accnumber."' where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('修改提现申请成功！');location.href='tixianlist.php';</script>";
	break;
 
  case "isdel":
  
	$ID=@$_REQUEST["ID"];
	$dyn=1;
	$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
	
	$sqls="select * from tixian where ID=".$ID."";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	
	$sqlt="update user set tyue=tyue-".$rss['jine']." where VipUser='".$VipUser."'";
	mysql_db_query($dbname,$sqlt);
	
	$sql="update tixian set dyn=".$dyn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('删单操作成功！');location.href='tixianlist.php';</script>";
	break;
 
  case "isok":
  
	$ID=@$_REQUEST["ID"];
	$yn=1;
   
	$sql="update tixian set yn=".$yn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('确认提现操作成功！');location.href='tixianlist.php';</script>";
	break;

  case "del":
   foreach(@$_REQUEST["ID"] as $it)
   {
    $sql2="delete from tixian where ID=".$it."";
    mysql_db_query($dbname,$sql2);
   }
   echo "<script>alert('删除提现记录成功！');location.href='tixianlist.php';</script>";
   break;
  }
}
?>