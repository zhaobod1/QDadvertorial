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
  $sql="select * from piclink_class where propic='".$_REQUEST["propic"]."' and linkurl='".$_REQUEST["linkurl"]."'";
  //$result=mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  if(mysql_num_rows($result)==NULL)
  {
   $sql="insert into piclink_class (propic,linkurl,paixu) values ('".$_REQUEST["propic"]."','".$_REQUEST["linkurl"]."',".$_REQUEST["classidorder1"].")";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('添加成功！');location.href='managepiclinkbigclass.php';</script>";
  }
  else
  {
   echo "<script>alert('此类型已存在！');history.go(-1);</script>";
  }
  break;
 
  case "edit":
  $sql="update piclink_class set propic='".$_REQUEST["propic"]."',linkurl='".$_REQUEST["linkurl"]."',paixu=".$_REQUEST["classidorder"]." where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='managepiclinkbigclass.php';</script>";

  break;
 
  case "del":
  $sql="delete from piclink_class where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('删除成功！');location.href='managepiclinkbigclass.php';</script>";
  break;
  }
}
?>