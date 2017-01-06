<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
//include ("checkuser.php");
?>

<?php
  $action=@$_REQUEST["action"];
  switch($action)
  {
  case "add":
  $sql="select * from admin where AdminUser='".@$_REQUEST["AUser"]."'";
  //$result=mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  if(mysql_num_rows($result)==NULL)
  {
   $sql="insert into admin (AdminUser,AdminPass,flag) values ('".@$_REQUEST["AUser"]."','".md5(@$_REQUEST["APass"])."',".@$_REQUEST["flag"].")";
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('添加成功！');location.href='manageadmin.php';</script>";
  }
  else
  {
   echo "<script>alert('管理用户已存在！');history.go(-1);</script>";
  }
  break;
 
  case "edit":
  $sql="update admin set AdminUser='".@$_REQUEST["User"]."',AdminPass='".md5(@$_REQUEST["Pass"])."',flag=".@$_REQUEST["flag"]." where ID=".@$_REQUEST["ID"]."";
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='manageadmin.php';</script>";
  break;
 
  case "del":
  $sql="delete from admin where ID=".@$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('删除成功！');location.href='manageadmin.php';</script>";
  break;
  }
?>