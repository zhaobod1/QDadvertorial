<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
    <!--王庆路 将kindeditor替换为ueditor-->
    <!--<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script>
KE.show({
	id : 'content',
		afterCreate : function(id) {
			KE.event.ctrl(document, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
			KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
	}
});
</script>-->
    <?php include("../ueditor.php")?>
    <!--王庆路 将kindeditor替换为ueditor end-->
</head>
<body>
<?php
$ID=$_REQUEST["ID"];
$titleID=$_REQUEST["titleID"];
$class_id=$_REQUEST["class_id"];
$sqlN="select * from ".$titleID."_info where ID=".$ID."";
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savebiginfo.php?action=edit&ID=<?php echo $ID;?>&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改信息内容</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">信息类别：</td>
      <td><select name="class_id" size="1" id="class_id">
          <?php
			$sql="select * from ".$titleID."_class";
            //$result=mysql_db_query($dbname,$sql);
			$result=mysql_query($sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
        <option value="<?php echo $rs["ID"];?>" <?php if($rs["ID"]==$class_id) {echo "selected";}?>><?php echo $rs["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">信息标题：</td>
      <td width="83%"><input name="title" type="text" id="title" value="<?php echo $rsN["title"];?>" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">来源： </td>
      <td><label>
        <input name="entitle" type="text" id="entitle" value="<?php echo $rsN["entitle"];?>" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">内容：</td>
      <td><textarea name="content"  style="width:100%;height:330px;visibility:hidden;"><?php echo htmlspecialchars($rsN["content"]);?></textarea>
	   </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <td height="35">
      <?php 
	  if($rsN["tj"]<>1)
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' />";
	  }
	  else
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' checked='checked' />";
	  }
	  ?>
      是</td>
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
<?php
include ("footx.php");
?>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.title.value==""){
           document.form1.title.focus();
           alert("信息标题不能空!");
           return false;
		}
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.title.value))
		{
			alert("不能输入特殊字符！");
			document.form1.title.focus();
			return false;
		}
	}
</script>