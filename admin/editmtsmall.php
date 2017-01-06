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
$BigID=$_REQUEST["BigID"];
$sqlN="select * from media_class where ID=".$ID."";
//$resultN=mysql_db_query($dbname,$sqlN);
mysql_select_db($dbname);
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savemtsmall.php?action=edit&amp;ID=<?php echo $ID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改小类信息</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">大类名称：</td>
      <td><select name="BigClass" size="1" id="BigClass">
        <?php
			$sql="select * from nav_class";
            //$result=mysql_db_query($dbname,$sql);
			mysql_select_db($dbname);
			$result=mysql_query($sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
        <option value="<?php echo $rs["ID"];?>" <?php if($rs["ID"]==$BigID) {echo "selected";}?>><?php echo $rs["BigClass"];?></option>
        <?php
			  }
			  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="23%" align="right">小类名称：</td>
      <td width="77%"><input name="SmallClass" type="text" id="SmallClass" value="<?php echo $rsN["SmallClass"];?>" size="30" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">排序：</td>
      <td><input name="paixu" type="text" id="paixu" value="<?php echo $rsN["paixu"];?>" size="5" /></td>
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
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.SmallClass.value==""){
           document.form1.SmallClass.focus();
           alert("小类名称（中文）不能空!");
           return false;
		}
		if(document.form1.enSmallClass.value==""){
           document.form1.enSmallClass.focus();
           alert("小类名称（英文）不能空!");
           return false;
		}
		if(document.form1.paixu.value==""){
           document.form1.paixu.focus();
           alert("排序不能空!");
           return false;
		}
	}
</script>

