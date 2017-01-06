<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
$ID=$_REQUEST["ID"];
$flag=$_REQUEST["flag"];
$qq=$_REQUEST["qq"];
$dianhua=$_REQUEST["tel"];
$weburl=$_REQUEST["web"];
$myemail=$_REQUEST["email"];
$headpic=$_REQUEST["headpic"];
?>

<?php
  $action=@$_REQUEST["action"];
  switch($action)
  {
  
  case "edit":
  
  $sql="update user set flag=".$flag." where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  echo "<script>alert('修改成功！');location.href='viplist.php';</script>";
  break;
  
  case "save":
  
  $sql="update user set qq='".$qq."',dianhua='".$dianhua."',weburl='".$weburl."',myemail='".$myemail."',headpic='".$headpic."',flag=".$flag." where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  echo "<script>alert('修改成功！');location.href='viplist.php';</script>";
  break;
  
  case "pass":
	$VipPass=$_REQUEST["pass1"];
	$VipPass2=$_REQUEST["pass2"];
	if($VipPass==$VipPass2){
		$sql="update user set VipPass='".md5($VipPass)."' where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		//mysql_select_db($dbname);
		//$result=mysql_query($sql);
		echo "<script>alert('修改成功！');location.href='viplist.php';</script>";
	}
	else{
		echo "<script>alert('两次输入的密码不一致，修改失败！');location.href='editpass.php';</script>";
	}
	break;
  
  case "del":
	foreach(@$_REQUEST["ID"] as $it)
	{
	$sql2="delete from user where ID=".$it."";
	mysql_db_query($dbname,$sql2);
	}
	echo "<script>alert('删除成功！');location.href='viplist.php';</script>";
	break;
  }
?>