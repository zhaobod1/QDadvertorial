<?php
 include ("../include/config.php");
 include ("checkuser.php");
?>

<?php
 if($_COOKIE["fg"]>2)
 {
  echo "<script>alert('您的权限有限，请与管理员联系！');history.go(-1);</script>";
 }
 else
 {
  $action=$_REQUEST["action"];
  switch($action)
  {
   case "save":
   $sql="update seo_about set title='".$_REQUEST["title"]."',keyword='".$_REQUEST["keyword"]."',descr='".$_REQUEST["descr"]."'";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('修改成功!');location.href='seo_about.php';</script>";
   break;
  }
 }
?>