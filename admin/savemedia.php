<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
  $action=@$_REQUEST["action"];
  $ID=@$_REQUEST["userid"];
  $medianame=substr(@$_REQUEST["yixuanhidden"],0,-1);
  
  switch($action)
  {
  
  case "save":
  $sql="update user set medianame='".$medianame."' where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  echo "<script>alert('媒介编辑资源设置成功！');location.href='medialist.php';</script>";
  break;
  }
?>