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
  $title=@$_REQUEST["biaoti"];
  $content=@$_REQUEST["yaoqiu"];
  $pianshu=@$_REQUEST["pianshu"];
  $price=@$_REQUEST["jiage"];
  $data=date("Y-m-d H:i:s");
  
  $flag=@$_REQUEST["flag"];
  $encontent=@$_REQUEST["yijian"];
  $ID=@$_REQUEST["userid"];
  
  switch($action)
  {
   case "add":
	$flag=0;
	$flag1=3;
	$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
	
	$sqls="select * from admin where AdminUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	if($rss!=NULL)
	{
		$leixing="软文代写";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
		
		$yue=$rss["yue"]-$price;
		$sqlu="update admin set yue=".$yue." where AdminUser='".$VipUser."'";
		mysql_db_query($dbname,$sqlu);

		$sql="insert into daixie_info (order_id,title,content,pianshu,price,VipUser,data,flag) values ('".$order_id."','".$title."','".$content."',".$pianshu.",".$price.",'".$VipUser."','".$data."',".$flag.")";
		mysql_db_query($dbname,$sql);
		//mysql_select_db($dbname);
		//$result=mysql_query($sql);
		echo "<script>alert('提交代写成功！');location.href='daixie.php';</script>";
	}
	else
	{
		echo "<script>alert('提交代写失败！');location.href='daixie.php';</script>";
	}
	break;
 
  case "edit":

   $sql="update daixie_info set flag=".$flag.",encontent='".$encontent."' where ID=".$ID."";
   mysql_db_query($dbname,$sql);
   //mysql_select_db($dbname);
   //$result=mysql_query($sql);
   echo "<script>alert('成功保存处理意见！');location.href='daixie.php';</script>";
   break;

  case "isdel":
  
	$ID=@$_REQUEST["ID"];
	$dyn=1;
	$flag1=5;

	$sql1="select * from daixie_info where ID=".$ID."";
	$result1=mysql_db_query($dbname,$sql1);
	$rs1=mysql_fetch_array($result1);
	$price=$rs1["price"];
	
	$leixing="代写删单";
	$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
	mysql_db_query($dbname,$sqlc);

	$sqls="select * from admin where AdminUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);	
	
	$yue=$rss["yue"]+$price;
	$sqlu="update admin set yue=".$yue." where AdminUser='".$VipUser."'";
	mysql_db_query($dbname,$sqlu);
   
	$sql="update daixie_info set dyn=".$dyn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('删单操作成功！');location.href='daixie.php';</script>";
	break;
	
  case "isok":
  
	$ID=@$_REQUEST["userid"];
	$yn=@$_REQUEST["yn"];
	$encontent=@$_REQUEST["encontent"];
	if($yn==1){
		$flag=2;
		$sql="update daixie_info set encontent='".$encontent."',flag=".$flag." where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('交稿操作成功！');location.href='daixie.php';</script>";
	}
	else{
		$sql="update daixie_info set encontent='".$encontent."' where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('操作成功！');location.href='daixie.php';</script>";
	}
	break;
	
  case "rep":
  
	$ID=@$_REQUEST["userid"];
	$order_id=@$_REQUEST["order_id"];
	$encontent=@$_REQUEST["encontent"];
	$recontent=@$_REQUEST["recontent"];
	$flag=3;
   
	$sql="update daixie_info set encontent='".$encontent."',flag=".$flag." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	
	$sql="insert daixie_discuss (order_id,recontent,VipUser,data) values ('".$order_id."','".$recontent."','".$VipUser."','".$data."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('回复操作成功！');location.href='daixie.php';</script>";
	break;

  case "del":
   foreach(@$_REQUEST["ID"] as $it)
   {
    $sql2="delete from daixie_info where ID=".$it."";
    mysql_db_query($dbname,$sql2);
    //mysql_select_db($dbname);
    //$result2=mysql_query($sql2);
   }
   echo "<script>alert('删除代写成功！');location.href='daixie.php';</script>";
   break;
  }
}
?>