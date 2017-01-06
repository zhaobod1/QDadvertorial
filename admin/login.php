<?php
require_once('rand.inc.php');
?>
<HTML>
<HEAD>
<TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE http-equiv=X-UA-Compatible ="EmulateIE7">
<LINK rel=stylesheet type=text/css href="images/user.css">
<LINK rel=stylesheet type=text/css href="images/index.css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<DIV id=Login>
<DIV class=LoginHead>
<H1>后台管理中心</H1>
<DIV class=CopyRight></DIV></DIV>
<FORM action="checklogin.php" method="post" name="admininfo" id="admininfo" onSubmit="return check();">
<DIV class=LoginContent>
<DIV class=InputContent1><B><LABEL>用户名</LABEL></B> <INPUT class=ipt name="AdminUser" type="text" id="AdminUser"></DIV>
<DIV class=InputContent2><B><LABEL>密码</LABEL></B> <INPUT class=ipt name="AdminPass" type="password" id="AdminPass"></DIV>
<DIV class=InputContent3><B><LABEL>验证码</LABEL></B> <INPUT style="TEXT-TRANSFORM: uppercase; IME-MODE: disabled" class="ipt ipt_reg" name="checkcode" type="text" id="checkcode"> <SPAN><div class="checkcodeimg"><?php echo $_SESSION['authnum'];?></div></SPAN> </DIV>
<DIV class=LoginBtn><table><tr><td><INPUT class=SubBtn type=submit name=dosubmit value=""></td> <td><INPUT class=NosubBtn type=button></td></tr></table></DIV></DIV></FORM></DIV>
</BODY>
</HTML>
<SCRIPT language=JScript>
var code_hidden = '<?php echo $_SESSION['authnum'];?>';
function check(){
if(document.admininfo.AdminUser.value==""){
document.admininfo.AdminUser.focus();
alert("管理员帐号不能够为空!");
return false;
}
if(document.admininfo.AdminPass.value==""){
document.admininfo.AdminPass.focus();
alert("管理员密码不能够为空!");
return false;
}
if(code_hidden != admininfo.checkcode.value){
document.admininfo.checkcode.focus();
alert('验证码输入错误!');
return false;
}
}
function refreshimg(){document.all.checkcode.src='checkcode.php?authnum=<?php echo $_SESSION['authnum']?>';} 
</SCRIPT>