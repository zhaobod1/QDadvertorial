<?php
include ("checkuser.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>main</title>
<base target="_self">
<link rel="stylesheet" type="text/css" href="skin/css/base.css" />
<link rel="stylesheet" type="text/css" href="skin/css/main.css" />
<style type="text/css">
<!--
.STYLE2 {color: #000000}
-->
</style>
</head>
<body leftmargin="8" topmargin='8'>
<table width="98%" align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px;margin-top:8px;">
  <tr>
    <td background="skin/images/frame/wbg.gif" bgcolor="#EEF4EA" class='title'><span>消息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="14" valign="middle"><marquee scrollamount="3">
    欢迎使用郑州市新成机械设备厂内容管理系统，建站的首选工具。
</marquee></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr bgcolor="#EEF4EA">
    <td colspan="2" background="skin/images/frame/wbg.gif" class='title'><span>系统基本信息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="50%" height="25" bgcolor="#FFFFFF">&nbsp;PHP程式版本：<font class="t4"><?PHP echo PHP_VERSION; ?></font></td>
    <td width="50%" height="25" bgcolor="#FFFFFF">&nbsp;脚本运行占用最大内存：<?PHP echo get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无" ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">&nbsp;服务器操作系统：<?PHP echo PHP_OS; ?></td>
    <td height="25">&nbsp;MYSQL支持：<?php echo function_exists(mysql_close)?"是":"否"; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">&nbsp;服务器端信息：<?PHP echo $_SERVER['SERVER_SOFTWARE']; ?></td>
    <td height="25">&nbsp;MySQL最大连接数：<?php echo @get_cfg_var("mysql.max_links")==-1 ? "不限" : @get_cfg_var("mysql.max_links");?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">&nbsp;最大上传限制：<?PHP echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件"; ?></td>
    <td height="25"><b>&nbsp;</b>MySQL数据库持续连接：<?php echo @get_cfg_var("mysql.allow_persistent")?"是":"否"; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">&nbsp;最大执行时间：<?PHP echo get_cfg_var("max_execution_time")."秒"; ?></td>
    <td height="25"><b>&nbsp;</b>服务器端信息：<?PHP echo $_SERVER['SERVER_SOFTWARE']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">是不是支持mysql数据库：<span class="STYLE2"><?php
		$aa=function_exists("mysql_close");
		if ($aa=="1"){
		echo "支持";
		}elseif ($aa=="0"){
		echo "不支持";
		}
		?></span></td>
    <td height="25">&nbsp;单个脚本运行时占用的最大内存：<span class="STYLE2"><?php echo get_cfg_var("memory_limit");?></span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25">脚本超时时间：<span class="STYLE2"><?php echo get_cfg_var("max_execution_time")."秒";?></span></td>
    <td height="25">&nbsp;脚本上传文件大小：&nbsp;<span class="STYLE2"><?php echo get_cfg_var("upload_max_filesize");?></span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="2">是否支持session：<span class="STYLE2"><?php echo function_exists("mysql_close");?></span></td>
  </tr>
</table>

<table width="98%" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
include ("footx.php");
?>
</body>
</html>