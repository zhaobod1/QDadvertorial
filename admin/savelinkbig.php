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
  $ID=$_REQUEST["ID"];
  switch($action)
  {
  case "add":
  
   $sql="insert into piclink_class (BigClass,propic,linkurl,paixu) values ('".$_REQUEST["BigClass"]."','".$_REQUEST["propic"]."','".$_REQUEST["linkurl"]."',".$_REQUEST["classidorder1"].")";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('添加成功！');location.href='managelinkbigclass.php';</script>";

  break;
 
  case "edit":
  $sql="update piclink_class set BigClass='".$_REQUEST["BigClass"]."',propic='".$_REQUEST["propic"]."',linkurl='".$_REQUEST["linkurl"]."',paixu=".$_REQUEST["classidorder"]." where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='managelinkbigclass.php';</script>";

  break;
 
  case "del":
  $sql="delete from piclink_class where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('删除成功！');location.href='managelinkbigclass.php';</script>";
  break;
  }
}
?>