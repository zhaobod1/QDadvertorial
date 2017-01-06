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
  switch($action)
  {
   case "add":
	   $sql="insert into webinfo (webname,enwebname,cname,weburl,icp,enicp,banquan,enbanquan,dianhua,fax,myemail,bgtel,qq,mob,address,enaddress,gcadd,engcadd,title,entitle,keyword,enkeyword,descr,endescr) values ('".$_REQUEST["webname"]."','".$_REQUEST["enwebname"]."','".$_REQUEST["cname"]."','".$_REQUEST["weburl"]."','".$_REQUEST["icp"]."','".$_REQUEST["enicp"]."','".$_REQUEST["banquan"]."','".$_REQUEST["enbanquan"]."','".$_REQUEST["dianhua"]."','".$_REQUEST["fax"]."','".$_REQUEST["myemail"]."','".$_REQUEST["bgtel"]."','".$_REQUEST["qq"]."','".$_REQUEST["mob"]."','".$_REQUEST["address"]."','".$_REQUEST["enaddress"]."','".$_REQUEST["gcadd"]."','".$_REQUEST["engcadd"]."','".$_REQUEST["title"]."','".$_REQUEST["entitle"]."','".$_REQUEST["keyword"]."','".$_REQUEST["enkeyword"]."','".$_REQUEST["descr"]."','".$_REQUEST["endescr"]."')";
	   mysql_db_query($dbname,$sql);
	   //mysql_select_db($dbname);
	   //$result=mysql_query($sql);
	   echo "<script>alert('设置成功!');location.href='setinfo.php';</script>";
	   break;
   case "save":
	   $sql="update webinfo set webname='".$_REQUEST["webname"]."',enwebname='".$_REQUEST["enwebname"]."',weburl='".$_REQUEST["weburl"]."',icp='".$_REQUEST["icp"]."',enicp='".$_REQUEST["enicp"]."',banquan='".$_REQUEST["banquan"]."',enbanquan='".$_REQUEST["enbanquan"]."',dianhua='".$_REQUEST["dianhua"]."',fax='".$_REQUEST["fax"]."',myemail='".$_REQUEST["myemail"]."',bgtel='".$_REQUEST["bgtel"]."',address='".$_REQUEST["address"]."',enaddress='".$_REQUEST["enaddress"]."',gcadd='".$_REQUEST["gcadd"]."',engcadd='".$_REQUEST["engcadd"]."',title='".$_REQUEST["title"]."',entitle='".$_REQUEST["entitle"]."',keyword='".$_REQUEST["keyword"]."',enkeyword='".$_REQUEST["enkeyword"]."',descr='".$_REQUEST["descr"]."',endescr='".$_REQUEST["endescr"]."'";
	   mysql_db_query($dbname,$sql);
	   //mysql_select_db($dbname);
	   //$result=mysql_query($sql);
	   echo "<script>alert('修改成功!');location.href='setinfo.php';</script>";
	   break;
  }
 }
?>