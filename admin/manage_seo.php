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
$action=$_REQUEST["ID"];
switch($action)
{
case "10":
$titleID="会员注册";
break;

case "11":
$titleID="会员登录";
break;

case "12":
$titleID="新闻中心";
break;

case "13":
$titleID="合作媒体";
break;

case "14":
$titleID="软文案例";
break;

case "15":
$titleID="软文价格";
break;

case "16":
$titleID="软文套餐";
break;

case "17":
$titleID="软文代写";
break;

case "18":
$titleID="联系我们";
break;

}

$sqlN="select * from page_seo where ID=".$action."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="saveseo.php?action=save&ID=<?php echo $action;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong><?php echo $titleID;?>栏目优化</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">Title优化：</td>
      <td><span style="PADDING-LEFT: 10px">
        <textarea name="Title" cols="40" rows="3" id="Title"><?php echo $rsN["Title"];?></textarea>
      </span><font color="#ff0000">**</font></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">KeyWords优化：</td>
      <td><span style="PADDING-LEFT: 10px">
        <textarea name="KeyWords" cols="40" rows="3" id="KeyWords"><?php echo $rsN["KeyWords"];?></textarea>
        <font color="#ff0000">**</font></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">Description优化：</td>
      <td><span style="PADDING-LEFT: 10px">
        <textarea name="Descr" cols="40" rows="3" id="Descr"><?php echo $rsN["Descr"];?></textarea>
        <font color="#ff0000">**</font></span></td>
    </tr>
    
    <tr bgcolor="#FFFFFF">
      <td width="22%">&nbsp;</td>
      <td width="78%" height="35"><span style="PADDING-LEFT: 10px">
        <input type="submit" name="Submit" value=" 确认提交 " />
        &nbsp;
        <input type="reset" name="Submit2" value=" 重新添写 " />
      </span></td>
    </tr>
  </table>
</form>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.Title.value==""){
           document.form1.Title.focus();
           alert("Title优化（中文）不能空");
           return false;
		}
		if(document.form1.enTitle.value==""){
           document.form1.enTitle.focus();
           alert("Title优化（英文）不能空!");
           return false;
		}
		if(document.form1.KeyWords.value==""){
           document.form1.KeyWords.focus();
           alert("KeyWords优化（中文）不能空");
           return false;
		}
		if(document.form1.enKeyWords.value==""){
           document.form1.enKeyWords.focus();
           alert("KeyWords优化（英文）不能空!");
           return false;
		}
		if(document.form1.Descr.value==""){
           document.form1.Descr.focus();
           alert("Description优化（中文）不能空");
           return false;
		}
		if(document.form1.enDescr.value==""){
           document.form1.enDescr.focus();
           alert("Description优化（英文）不能空!");
           return false;
		}
	}
</script>

