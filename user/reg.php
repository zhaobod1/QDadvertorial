<?php
require_once("rand.inc.php");
include ("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<title><?php echo $A_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $A_KeyWords;?>" />
<meta name="description" content="<?php echo $A_Descr;?>" />
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="images/index.css">
<LINK rel=stylesheet type=text/css href="images/css.css">
<link href="../images/resets.css" rel="stylesheet" type="text/css">
<SCRIPT type=text/javascript src="images/jquery.min.js"></SCRIPT>
<STYLE type=text/css>* {
	WORD-BREAK: break-all
}
BODY {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; COLOR: #333333; FONT-SIZE: 12px; PADDING-TOP: 0px
}
UL {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
FORM {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
.reg_title {
	BORDER-BOTTOM: #cccccc 1px solid; PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 0px; COLOR: #ff6600; FONT-SIZE: 14px; FONT-WEIGHT: bold; PADDING-TOP: 0px
}
TD {
	PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 5px
}
.reg_inp {
	BORDER-BOTTOM: #bdc7d8 1px solid; BORDER-LEFT: #bdc7d8 1px solid; PADDING-BOTTOM: 5px; LINE-HEIGHT: 16px; PADDING-LEFT: 4px; PADDING-RIGHT: 4px; HEIGHT: 16px; BORDER-TOP: #bdc7d8 1px solid; BORDER-RIGHT: #bdc7d8 1px solid; PADDING-TOP: 5px
}
.f_red {
	COLOR: red
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav .nav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .nav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav .nav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav .nav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav .nav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav .nav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav .nav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav .nav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<DIV class=top>
<DIV class=head>
<H1><A href="/"></A></H1><IMG src="images/chongzhi.png"> 
</DIV>
</DIV>
<?php
include("menu.php");
?>
<DIV class=clear></DIV>
<DIV style="PADDING-BOTTOM: 20px; MARGIN: 0px auto; PADDING-LEFT: 50px; WIDTH: 870px; PADDING-RIGHT: 50px; PADDING-TOP: 10px">
<DIV 
style="PADDING-BOTTOM: 2px; LINE-HEIGHT: 24px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; BACKGROUND: #fafafa; PADDING-TOP: 20px"><SPAN 
class=f_b>&gt;&gt;&nbsp;已经是会员？请点： <A class=susua href="../user/"><FONT color=red><FONT size=5>登录</FONT></FONT></A>！ &nbsp;忘记了密码？请点： <A class=susua href="../system/contact.php">联系客服找回</A>！</SPAN><BR><SPAN class=f_gray>&gt;&gt;&nbsp;请认真、仔细地填写以下信息，<SPAN class=f_red>*</SPAN>为必填项 
</SPAN></DIV><BR>
<FORM name="form1" id="form1" onsubmit="return postform();" method="post" action="../user/savevip.php?action=add"><FONT color=red></FONT>
<DIV class=reg_title>帐户信息</DIV>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl width=137>会员类型 <SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT id=g_1 value=3 CHECKED type="radio" name="flag">企业用户　<INPUT id=g_2 value=2 type="radio" name="flag">加盟合作用户</TD>
  </TR>
  </TBODY>
</TABLE>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl>会员名：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT onblur=checknew() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="user" class="reg_inp" type="text" name="user"> <SPAN id="un" class="f_red"></SPAN><SPAN 
      style="COLOR: #ccc">用户名不能小于6个字符(0-9 a-z A-Z _ -)，并且不能大于20个字符</SPAN> </TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD class=tl width=137>登录密码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass1" class="reg_inp" type="password" name="pass1"> 密码不能小于6个字符</TD>
    <TD><SPAN id=dpassword class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>重复输入密码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT onblur=twopass() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass2" class="reg_inp" size=30 type="password" name="pass2"> <SPAN id=un1 
      class=f_red></SPAN><SPAN style="COLOR: #ccc">两次密码请输入一致</SPAN> </TD>
    <TD><SPAN id=dcpassword class=f_red></SPAN>&nbsp; </TD></TR></TBODY></TABLE>
<DIV class=reg_title>联系方式</DIV>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl width=137>电子邮箱：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="email" class="reg_inp" type="text" 
      name="email"></TD>
    <TD>
      <DIV style="DISPLAY: none" id=temail class=tips></DIV><SPAN id=demail 
      class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>QQ号码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="qq" class="reg_inp" type="text" name="qq"></TD>
    <TD>&nbsp;</TD>
    <TD><SPAN id=dqq class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>联系电话：</TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="tel" class="reg_inp" type="text" name="tel"></TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD class=tl>网站地址：</TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="web" class="reg_inp" type="text" name="web"></TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD></TR></TBODY></TABLE>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl width=137>验证码 <SPAN class=f_red>*</SPAN></TD>
    <TD id=verify_img><DIV style="float:left; margin-top:10px"><INPUT style="LINE-HEIGHT: 22px; WIDTH: 130px; HEIGHT: 22px" id=ver maxLength=5 type=text name=code></div> <div class="checkcodeimg" style="float:left; padding-left:10px; padding-top:3px; margin-left:10px"><?php echo $_SESSION['authnum'];?></div></TD>
    <TD><SPAN id=dcaptcha class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>完成啦</TD>
    <TD width=300><INPUT style="PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; FONT-SIZE: 14px; PADDING-TOP: 5px" value="                 注   册               " type="submit" name="submit"></TD>
    <TD>&nbsp;</TD></TR></TBODY></TABLE></FORM><BR>
<SCRIPT type=text/javascript>
        function postform()
        {
			var code_hidden = '<?php echo $_SESSION['authnum'];?>';
            var username = $("#user").val();         
            var pass1 = $("#pass1").val();
            var pass2 = $("#pass2").val();
            var email = $("#email").val();
            var qq = $("#qq").val();
            var code = $("#ver").val();
            if(username=='')
            {
                alert("用户名不能为空！");
                return false;
            }
            if(pass1=='')
            {
                alert("密码不能为空！");
                return false;
            }
            if(pass2=='')
            {
                alert("确认密码不能为空！");
                return false;
            }
			
            
            if(pass1!=pass2)
            {
                alert('两次输入的密码不一致');
                return false;
            }
			
            if(email=='')
            {
                alert("Email不能为空！");
                return false;
            }
            if(qq=='')
            {
                alert("qq不能为空！");
                return false;
            }
            if(code=='')
            {
                alert("验证码不能为空！");
                return false;
            }
            
			if(code_hidden != code)
			{
				document.form1.code.focus();
				alert('验证码输入错误!');
				return false;
			}
			
            var emailPat=/^(.+)@(.+)$/;
            var matchArray=email.match(emailPat);
            if (matchArray==null) {
                alert("电子邮件格式不正确");
                return false;
            }
            
            var qqmatch = /^[\d]{5,12}$/;
            var matchqqArray=qq.match(qqmatch);
            
            if (matchqqArray==null) {
                alert("qq格式不对");
                return false;
            }
            
        }
		
		function checknew()
		{
				if($("#user").val()!=""){
			$.get("user/action.php?a=checknew",{"u":$("#user").val()},function(data){
				if(data==1)
				{
					$("#un").html("<BR>用户名已注册，请更换!");
					$("#user")[0].focus();
				}
				else if(data==0)
				{
					$("#un").html("<BR>可以注册!");
				}
				else
				{
					$("#un").html("<BR>新用户名检测失败!");
				}
			});}
		}
		
		
		function twopass()
		{
			if($("#pass1").val()!=$("#pass2").val())
			{
				$("#un1").html("<BR>两次密码不一致");
				return false;
			}
			else
			$("#un1").html(" ");
		}
    </SCRIPT>
</DIV>
<?php
include("footer.php");
?>
</BODY>
</HTML>
