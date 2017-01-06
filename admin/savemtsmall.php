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
  $tj=0;

  switch($action)
  {
  case "add":
  $sql="select * from media_class where SmallClass='".$_REQUEST["SmallClass1"]."'";
  //$result=mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  if(mysql_num_rows($result)==NULL)
  {
   $sql="insert into media_class (BigID,SmallClass,paixu) values (".$_REQUEST["BigClass1"].",'".$_REQUEST["SmallClass1"]."',".$_REQUEST["classidorder1"].")";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('添加成功！');location.href='managemtsmallclass.php';</script>";
  }
  else
  {
   echo "<script>alert('此类别已存在！');history.go(-1);</script>";
  }
  break;
 
  case "edit":
  $sql="update media_class set BigID=".$_REQUEST["BigClass"].",SmallClass='".$_REQUEST["SmallClass"]."',paixu=".$_REQUEST["paixu"]." where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='managemtsmallclass.php';</script>";

  break;
 
  case "del":
  $sql2="delete from media_class where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql2);
  mysql_select_db($dbname);
  $result2=mysql_query($sql2);
  $sql3="delete from media_info where smallID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql3);
  mysql_select_db($dbname);
  $result3=mysql_query($sql3);
  echo "<script>alert('删除成功！');location.href='managemtsmallclass.php';</script>";
  break;
  }
}
?>