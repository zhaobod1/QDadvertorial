<?php
header("Content-Type: text/html; charset=utf-8");
 include ("../include/config.php");
 include ("checkuser.php");
?>

<?php
$qq = '';
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
       /*王庆路 更改前台客服昵称*/
       $kefu2 = $_REQUEST["kefu_name2"];
       $kefu3 = $_REQUEST["kefu_name3"];
       $kefu4 = $_REQUEST["kefu_name4"];
       $kefu5 = $_REQUEST["kefu_name5"];
       /*王庆路 更改前台客服昵称 end*/
       /*王庆路 更改前台QQ客服*/
       $qq = $_REQUEST["qq"];
       $qq2 = $_REQUEST["qq2"];
       $qq3 = $_REQUEST["qq3"];
       $qq4 = $_REQUEST["qq4"];
       $qq5 = $_REQUEST["qq5"];
	   $sql="update webinfo set webname='".$_REQUEST["webname"]."',enwebname='".$_REQUEST["enwebname"]."',cname='".$_REQUEST["cname"]."',weburl='".$_REQUEST["weburl"]."',icp='".$_REQUEST["icp"]."',enicp='".$_REQUEST["enicp"]."',banquan='".$_REQUEST["banquan"]."',enbanquan='".$_REQUEST["enbanquan"]."',dianhua='".$_REQUEST["dianhua"]."',fax='".$_REQUEST["fax"]."',myemail='".$_REQUEST["myemail"]."',bgtel='".$_REQUEST["bgtel"]."',qq='".$qq."',qq2='".$qq2."',qq3='".$qq3."',qq4='".$qq4."',qq5='".$qq5."',kefu_name2='".$kefu2."',kefu_name3='".$kefu3."',kefu_name4='".$kefu4."',kefu_name5='".$kefu5."',mob='".$_REQUEST["mob"]."',address='".$_REQUEST["address"]."',enaddress='".$_REQUEST["enaddress"]."',gcadd='".$_REQUEST["gcadd"]."',engcadd='".$_REQUEST["engcadd"]."',title='".$_REQUEST["title"]."',entitle='".$_REQUEST["entitle"]."',keyword='".$_REQUEST["keyword"]."',enkeyword='".$_REQUEST["enkeyword"]."',descr='".$_REQUEST["descr"]."',endescr='".$_REQUEST["endescr"]."'";
	   $res = mysql_db_query($dbname,$sql);

	   if($res) {
		   echo "<script>alert('修改成功!')</script>";
		   break;
	   } else {
		   echo "<script>alert('修改失败!')</script>";
	   }
       //mysql_select_db($dbname);
	   //$result=mysql_query($sql);


      /*王庆路 更改前台QQ客服 end*/
  }
 }
?>
<!--王庆路 更改前台QQ客服-->
<script>
    qq1="<?php echo $qq?>";
    qq2="<?php echo $qq2?>";
    qq3="<?php echo $qq3?>";
    qq4="<?php echo $qq4?>";
    qq5="<?php echo $qq5?>";
</script>
<script src='/huo15template/js/ServiceQQ.js'></script>
<script>window.onload=function(){location.href='setinfo.php';}</script>
<!--王庆路 更改前台QQ客服 end-->
