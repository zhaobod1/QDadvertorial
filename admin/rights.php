<?php
include ("checkuser.php");
//include ("../include/config.php");
//include ("../include/function.php");
$fg=$_COOKIE["fg"];
$AdminUser=$_COOKIE["AdminUser"];
if($AdminUser<>""){
    $yue=0;
	$ip=$_COOKIE["ips"];
	$data=$_COOKIE["dt"];
}
?>
<HTML>
<HEAD><TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>
<SCRIPT type=text/javascript>
	window.focus();
	var pc_hash = 'oxB0Wa';
	</SCRIPT>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>我的个人信息</H6>
<DIV class=content>
<div width="120px" style="float:left;padding-top:3px;padding-bottom:5px;"><img src="../images/headpic.gif" border="0" width="110" height="110"><br></div><div width="830px" style="float:left;margin-left:10px"><?php echo $_COOKIE["AdminUser"];?>，欢迎您！<BR>所属角色：<?php
		switch($fg)
		{
		 case "1":
			echo "站长";
			break;
		 case "2":
			echo "副站长";
			break;
		 case "3":
			echo "检查员";
			break;
		 default:
			echo "数据管理员";
		}
		?> <BR>账号余额：<b style='color:#FF0000'><?php echo $yue;?></b>元 <a href="chongzhi.php"><img src="../images/chongzhi.gif" border="0" width="27" height="15"></a><BR>
<DIV class="bk20 hr">
<HR>
</DIV>本次登录时间：<?php echo $data;?><BR>本次登录IP：<?php echo $ip;?> <BR></div></DIV></DIV>
<DIV class="bk20 hr"></DIV>
<DIV style="WIDTH: 48%" class="col-2 lf mr10">
<H6>资讯中心</H6>
<DIV class=content></DIV>
</DIV>
<DIV class="col-2 col-auto">
<H6>发稿帮助</H6>
<DIV class=content></DIV>
</DIV>
</DIV>
</BODY>
</HTML>
