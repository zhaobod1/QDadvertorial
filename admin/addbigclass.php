<?php
include ("../include/config.php");
include ("checkuser.php");

$titleID=$_REQUEST["titleID"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--王庆路 ie版本设置-->
<!--<meta http-equiv="X-UA-Compatible" content="IE=7"/>-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--王庆路 ie版本设置 end-->
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
    <script type="text/javascript">
        var browser=navigator.appName
        var b_version=navigator.appVersion
        var version=b_version.split(";");
        var trim_Version=version[1].replace(/[ ]/g,"");
        if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE6.0")
        {
            alert("IE 6.0");
        }
        else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0")
        {
            alert("IE 7.0");
        }
        else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0")
        {
            alert("IE 8.0");
        }
        else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0")
        {
            alert("IE 9.0");
        }
    </script>
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
<form id="form1" name="form1" method="post" action="savebiginfo.php?action=add&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
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
      <td align="right">内容：</td>
      <td><textarea name="content"  style="width:100%;height:330px;visibility:hidden;"></textarea>
	   </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <td height="35"><input name="tj" type="checkbox" id="tj" value="1" />
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
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.title.value==""){
           document.form1.title.focus();
           alert("标题不能空!");
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