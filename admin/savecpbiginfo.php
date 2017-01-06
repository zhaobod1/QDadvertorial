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
  $titleID=@$_REQUEST["titleID"];
  $class_id=@$_REQUEST["class_id"];
  $title=@$_REQUEST["title"];
  $entitle=@$_REQUEST["entitle"];
  $propic=@$_REQUEST["propic"];
  $nd=1;
  $content=@$_REQUEST["content"];
  $encontent=@$_REQUEST["encontent"];
  if(@$_REQUEST["tj"]<>1)
  {
   $tj=0;
  }
  else
  {
   $tj=@$_REQUEST["tj"];
  }
  
  $ID=@$_REQUEST["ID"];
  switch($action)
  {
   case "add":
   $sql="insert into ".$titleID."_info (class_id,title,entitle,nd,content,encontent,propic,tj,data) values (".$class_id.",'".$title."','".$entitle."',".$nd.",'".$content."','".$encontent."','".$propic."',".$tj.",'".date("Y-m-d")."')";
   //mysql_db_query($dbname,$sql);
   mysql_select_db($dbname);
   $result=mysql_query($sql);
   echo "<script>alert('添加成功！');location.href='addcpbigclass.php?titleID=".$titleID."';</script>";
  break;
 
  case "edit":

  $sql="update ".$titleID."_info set class_id=".$class_id.",title='".$title."',entitle='".$entitle."',nd=".$nd.",content='".$content."',encontent='".$encontent."',propic='".$propic."',tj=".$tj.",data='".date("Y-m-d")."' where ID=".$ID."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='managecpbiginfo.php?titleID=".$titleID."';</script>";
  break;
 
  case "del":
  foreach(@$_REQUEST["ID"] as $it)
  {
   $sql2="delete from ".$titleID."_info where ID=".$it."";
   //mysql_db_query($dbname,$sql2);
   mysql_select_db($dbname);
   $result2=mysql_query($sql2);
  }
   echo "<script>alert('删除成功！');location.href='managecpbiginfo.php?titleID=".$titleID."';</script>";
  break;
  }
}
?>