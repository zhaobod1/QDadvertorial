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
  $action=@$_REQUEST["action"];
  
  $ID=@$_REQUEST["ID"];
  switch($action)
  {
   case "del":
   foreach(@$_REQUEST["ID"] as $it)
  {
   $sql2="delete from caiwu where ID=".$it."";
   mysql_db_query($dbname,$sql2);
  }
   echo "<script>alert('删除问题成功！');location.href='caiwu.php';</script>";
   break;
  }
}
?>