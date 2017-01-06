<?php
header("Content-Type: text/html; charset=utf-8");
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
  $action=@$_REQUEST["action"];
  $ID=@$_REQUEST["ID"];
  switch($action)
  {
   case "save":
   
   $sql="update page_seo set Title='".$_REQUEST["Title"]."',enTitle='".$_REQUEST["enTitle"]."',KeyWords='".$_REQUEST["KeyWords"]."',enKeyWords='".$_REQUEST["enKeyWords"]."',Descr='".$_REQUEST["Descr"]."',enDescr='".$_REQUEST["enDescr"]."' where ID=".$ID."";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('修改成功!');location.href='manage_seo.php?ID=".$ID."';</script>";
   break;
  }
 }
?>