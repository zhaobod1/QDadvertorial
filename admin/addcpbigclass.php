<?php
include ("../include/config.php");
include ("checkuser.php");

$titleID=$_REQUEST["titleID"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
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
</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="savecpbiginfo.php?action=add&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>添加信息内容</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">信息类别：</td>
      <td><select name="class_id" size="1" id="class_id">
          <?php
			$sql="select * from ".$titleID."_class";
            //$result=mysql_db_query($dbname,$sql);
			mysql_select_db($dbname);
			$result=mysql_query($sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
          <option value="<?php echo $rs["ID"];?>"><?php echo $rs["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">信息标题：</td>
      <td width="83%"><input name="title" type="text" id="title" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">来源： </td>
      <td><label>
        <input name="entitle" type="text" id="entitle" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">缩略图：</td>
      <td><input name="propic" type="text" class="webInput" id="propic" size="60" />
          <input type="button" name="Submit4" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=form1&amp;setpic=propic&amp;setress=propic','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" /></td>
    </tr>
    <!--tr bgcolor="#FFFFFF">
      <td width="17%" align="right">摘要： </td>
      <td><label>
		<textarea id="encontent" name="encontent"  rows="5" cols="90" ><?=$rs["encontent"];?></textarea>
      </label></td>
    </tr-->
    <tr bgcolor="#FFFFFF">
      <td align="right">内容：</td>
      <td><textarea name="content" style="width:100%;height:330px;visibility:hidden;"></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <td height="35"><input name="tj" type="checkbox" id="tj" value="1" />
      是</td>
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
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.title.value==""){
           document.form1.title.focus();
           alert("新闻标题（中文）不能空!");
           return false;
		}
		if(document.form1.entitle.value==""){
           document.form1.entitle.focus();
           alert("新闻标题（英文）不能空!");
           return false;
		}
		if(document.form1.nb.value==""){
           document.form1.nb.focus();
           alert("浏览次数不能空!");
           return false;
		}
	}
</script>