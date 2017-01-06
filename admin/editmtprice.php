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
<script type='text/javascript' src='../ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='../ueditor/ueditor.all.js'></script> 
</head>
<body>
<?php
$titleID=$_REQUEST["titleID"];
$sqlN="select * from ".$titleID."_info";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savemtbiginfo.php?action=price&ID=<?php echo $ID;?>&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>媒体资源批量改价</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">选择加/减： </td>
      <td><label>
        <select name="jjprice" size="1" id="jjprice">
          <option value=1 >批量加价</option>
		  <option value=2 >批量减价</option>
      </select>
      </label></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">成本价格： </td>
      <td><label>
        <input name="scprice" type="text" id="scprice" value="0" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">代理价格： </td>
      <td><label>
        <input name="dlprice" type="text" id="dlprice" value="0" size="13" />元
      </label></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">零售价格： </td>
      <td><label>
        <input name="price" type="text" id="price" value="0" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input style="WIDTH: 73px; HEIGHT: 25px" type="submit" name="Submit" value="确认提交" />
&nbsp;
<input style="WIDTH: 73px; HEIGHT: 25px" type="reset" name="Submit2" value="重新添写" />
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
		if(document.form1.scprice.value==""){
           document.form1.scprice.focus();
           alert("成本价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.scprice.value))
		{
			alert("请正确输入成本价格");
			document.form1.scprice.focus();
			return false;
		}
		if (Number(document.form1.scprice.value) < 0) {
			alert("成本价格只能输入数字，并且不能是负数");
			document.form1.scprice.focus();
			return false;
		}
		if(document.form1.dlprice.value==""){
           document.form1.dlprice.focus();
           alert("代理价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.dlprice.value))
		{
			alert("请正确输入代理价格");
			document.form1.dlprice.focus();
			return false;
		}
		if (Number(document.form1.dlprice.value) < 0) {
			alert("代理价格只能输入数字，并且不能是负数");
			document.form1.dlprice.focus();
			return false;
		}
		if(document.form1.price.value==""){
           document.form1.price.focus();
           alert("零售价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.price.value))
		{
			alert("请正确输入零售价格");
			document.form1.price.focus();
			return false;
		}
		if (Number(document.form1.price.value) < 0) {
			alert("零售价格只能输入数字，并且不能是负数");
			document.form1.price.focus();
			return false;
		}
	}
</script>