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
  $data=date("Y-m-d H:i:s");
  $order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
  
  switch($action)
  {
   case "add":
	$flag=0;
	
	$sql="insert into tixian (order_id,title,accnumber,jine,VipUser,data) values ('".$order_id."','".$title."','".$accnumber."',".$jine.",'".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('提交提现申请成功！');location.href='tixianlist.php';</script>";
	break;
 
  case "edit":
  
	$sql="update tixian set accnumber='".$accnumber."',jine=".$jine." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('修改提现申请成功！');location.href='tixianlist.php';</script>";
	break;
 
  case "isyn":
  
	$ID=@$_REQUEST["ID"];
	$flag=1;
   
	$sql="update tixian set flag=".$flag." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('确认办理提现操作成功！');location.href='tixianlist.php';</script>";
	break;
	
  case "isok":
	
	$operator=$_COOKIE["AdminUser"];
	$ID=@$_REQUEST["userid"];
	$jine=@$_REQUEST["jine"];
	$content=@$_REQUEST["content"];
	$flag=2;
	$flag1=6;
	
	$sqls="select * from user where VipUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	if($rss!=NULL){
		$leixing="提现结款";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$operator."','".$leixing."',".$jine.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
		
		$yue=$rss["yue"]-$jine;
		$tyue=$rss["tyue"]-$jine;
		$sqlu="update user set yue=".$yue.",tyue=".$tyue." where VipUser='".$VipUser."'";
		mysql_db_query($dbname,$sqlu);
		
		$sql="update tixian set content='".$content."',flag=".$flag.",edata='".$data."' where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('提现办结操作成功！');location.href='tixianlist.php';</script>";
	}
	else{
		echo "<script>alert('提现办结操作失败！');location.href='tixianlist.php';</script>";
	}
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