<?php
require_once('rand.inc.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理平台</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	overflow:hidden;
}
.STYLE3 {color: #528311; font-size: 12px; }
.STYLE4 {
	color: #42870a;
	font-size: 12px;
}
-->
</style></head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#e5f6cf">&nbsp;</td>
  </tr>
  <tr>
    <td height="608" background="images/login_03.gif"><table width="862" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="266" background="images/login_04.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="95"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="424" height="95" background="images/login_06.gif">&nbsp;</td>
            <form action="checklogin.php" method="post" name="admininfo" id="admininfo" onSubmit="return check();">
			<td width="183" background="images/login_07.gif">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="21%"><div align="center"><span class="STYLE3">用户</span></div></td>
                  <td width="79%" height="23"><input name="AdminUser" type="text" id="AdminUser"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
                </tr>
                <tr>
                  <td><div align="center"><span class="STYLE3">密码</span></div></td>
                  <td height="23"><input name="AdminPass" type="password" id="AdminPass"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
                </tr>
                <tr>
                  <td><div align="center" class="STYLE3">验证</div></td>
                  <td height="23"><input name="checkcode" type="text" id="checkcode"  style="height:18px; width:50px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;">
                    <span class="STYLE4">
                    <?php
          echo $_SESSION['authnum'];
          ?>
                    </span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td height="23"><input type="image" name="imageField" src="images/dl1.gif"><a href="../index.php"><img src="images/dl2.gif" width="41" height="22" border="0"></a></td>
                </tr>
              </table>
              </td> 
			</form>
            <td width="255" background="images/login_08.gif">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="247" valign="top" background="images/login_09.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22%" height="30">&nbsp;</td>
            <td width="56%">&nbsp;</td>
            <td width="22%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="44%" height="20">&nbsp;</td>
                <td width="56%" class="STYLE4">版本 2012V1.0 </td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#a2d962">&nbsp;</td>
  </tr>
</table>

<map name="Map"><area shape="rect" coords="3,3,36,19" href="#"><area shape="rect" coords="40,3,78,18" href="#"></map></body>
</html>
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