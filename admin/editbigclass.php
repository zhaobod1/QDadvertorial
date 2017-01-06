<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
</head>
<body>
<?php
$ID=$_REQUEST["ID"];
$sqlN="select * from danye where ID=".$ID."";
//$resultN=mysql_db_query($dbname,$sqlN);
mysql_select_db($dbname);
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savenews.php?action=edit&amp;ID=<?php echo $ID;?>" onSubmit="return checknews();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改信息</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">内容：</td>
      <td width="83%"><input name="content" type="hidden" id="content" value="<?php echo htmlspecialchars($rsN["content"]);?>" />
<IFRAME ID="eWebEditor1" SRC="ewebeditor/ewebeditor.htm?id=content&style=popup" FRAMEBORDER="0" SCROLLING="no" WIDTH="100%" HEIGHT="400"></IFRAME></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input type="submit" name="Submit" value=" 确认提交 " />
        &nbsp;
        <input type="reset" name="Submit2" value=" 重新添写 " />
      </span></td>
    </tr>
  </table>
</form>
<?php
include ("footx.php");
?>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript" src="comm_js/javascriptTxt.js"></script>

