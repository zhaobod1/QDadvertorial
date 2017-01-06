<?php
require_once('rand.inc.php');
?>
<HTML>
<HEAD>
<TITLE>VIP后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE http-equiv=X-UA-Compatible ="EmulateIE7">
<LINK rel=stylesheet type=text/css href="images/user.css">
<LINK rel=stylesheet type=text/css href="images/index.css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<DIV id=Login>
<DIV class=LoginHead>
<H1>VIP后台管理中心</H1>
<DIV class=CopyRight></DIV></DIV>
<FORM action="checklogin.php" method="post" name="Vipinfo" id="Vipinfo" onSubmit="return check();">
<DIV class=LoginContent>
<DIV class=InputContent1><B><LABEL>用户名</LABEL></B> <INPUT class=ipt name="VipUser" type="text" id="VipUser"></DIV>
<DIV class=InputContent2><B><LABEL>密码</LABEL></B> <INPUT class=ipt name="VipPass" type="password" id="VipPass"></DIV>
<DIV class=InputContent3><B><LABEL>验证码</LABEL></B> <INPUT style="TEXT-TRANSFORM: uppercase; IME-MODE: disabled" class="ipt ipt_reg" name="checkcode" type="text" id="checkcode"><SPAN><div class="checkcodeimg"><?php echo $_SESSION['authnum'];?></div></SPAN></DIV>
<DIV class=LoginBtn><table><tr><td><INPUT class=SubBtn type=submit name=dosubmit value=""></td> <td><INPUT class=NosubBtn type=button></td></tr></table></DIV></DIV></FORM></DIV>
</BODY>
</HTML>
<SCRIPT language=JScript>
var code_hidden = '<?php echo $_SESSION['authnum'];?>';
function check(){
if(document.Vipinfo.VipUser.value==""){
document.Vipinfo.VipUser.focus();
alert("VIP帐号不能够为空!");
return false;
}
if(document.Vipinfo.VipPass.value==""){
document.Vipinfo.VipPass.focus();
alert("VIP密码不能够为空!");
return false;
}
if(code_hidden != Vipinfo.checkcode.value){
document.Vipinfo.checkcode.focus();
alert('验证码输入错误!');
return false;
}
}
function refreshimg(){document.all.checkcode.src='checkcode.php?authnum=<?php echo $_SESSION['authnum']?>';} 
</SCRIPT>