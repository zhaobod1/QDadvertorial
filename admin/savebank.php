<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>2)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=$_REQUEST["action"];
  switch($action)
  {
  case "add":
  
	$sql="insert into bank_info (propic,name,accnumber,bankname) values ('".$_REQUEST["propic"]."','".$_REQUEST["name"]."','".$_REQUEST["accnumber"]."','".$_REQUEST["bankname"]."')";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('添加成功！');location.href='managebank.php';</script>";
	break;
 
  case "edit":
	$sql="update bank_info set propic='".$_REQUEST["propic"]."',name='".$_REQUEST["name"]."',accnumber='".$_REQUEST["accnumber"]."',bankname='".$_REQUEST["bankname"]."' where ID=".$_REQUEST["ID"]."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('修改成功！');location.href='managebank.php';</script>";
	break;
 
  case "del":
	$sql="delete from bank_info where ID=".$_REQUEST["ID"]."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('删除成功！');location.href='managebank.php';</script>";
	break;
  }
}
?>