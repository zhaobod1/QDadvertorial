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
  $titleID=$_REQUEST["titleID"];
  $data=date("Y-m-d");
  switch($action)
  {
  case "add":
  $sql="select * from ".$titleID."_small where BigClass='".$_REQUEST["BigClass1"]."' and enBigClass='".$_REQUEST["enBigClass1"]."'";
  //$result=mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  if(mysql_num_rows($result)==NULL)
  {
   $sql="insert into ".$titleID."_small (BigClass,enBigClass,paixu,data) values ('".$_REQUEST["BigClass1"]."','".$_REQUEST["enBigClass1"]."',".$_REQUEST["classidorder1"].",'".$data."')";
   
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   
   
   echo "<script>alert('添加成功！');location.href='managemtclass.php?titleID=".$titleID."';</script>";
  }
  else
  {
   echo "<script>alert('此类别已存在！');history.go(-1);</script>";
  }
  break;
 
  case "edit":
  $sql="update ".$titleID."_small set BigClass='".$_REQUEST["BigClass"]."',enBigClass='".$_REQUEST["enBigClass"]."',paixu=".$_REQUEST["classidorder"].",data='".$data."' where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='managemtclass.php?titleID=".$titleID."';</script>";

  break;
 
  case "del":
  $sql="delete from ".$titleID."_small where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  $sql2="delete from ".$titleID."_info where clss_id=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql2);
  mysql_select_db($dbname);
  $result2=mysql_query($sql2);
  echo "<script>alert('删除成功！');location.href='managemtclass.php?titleID=".$titleID."';</script>";
  break;
  }
}
?>