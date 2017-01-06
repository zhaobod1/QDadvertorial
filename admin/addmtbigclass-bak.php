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
<script type='text/javascript' src='../ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='../ueditor/ueditor.all.js'></script> 
</head>
<body>
<form id="form1" name="form1" method="post" action="savemtbiginfo.php?action=add&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>添加媒体资源</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体类别：</td>
	  <td><?php
			$sql="select * from ".$titleID."_class";
            $result=mysql_db_query($dbname,$sql);
			while($rs=mysql_fetch_array($result))
			{
			?><input type=checkbox name="class_id[]" value="<?php echo $rs["ID"];?>"><?php echo $rs["BigClass"];?>
		<?php
			}
		  ?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体名称：</td>
      <td width="83%"><input name="medianame" type="text" id="medianame" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">所在地区：</td>
      <td width="83%"><select name="diqu" size="1" id="diqu">
          <?php
			$sqls="select * from diqu_class";
            $results=mysql_db_query($dbname,$sqls);
			while($rss=mysql_fetch_array($results))
			{
			?>
          <option value="<?php echo $rss["BigClass"];?>"><?php echo $rss["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体网址： </td>
      <td><label>
        <input name="weburl" type="text" id="weburl" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">案例网址： </td>
      <td><label>
        <input name="anliurl" type="text" id="anliurl" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">链接情况： </td>
      <td><select name="linkurl" size="1" id="linkurl">
          <option value=" ">请选择</option>
		  <option value="可超链接">可超链接</option>
		  <option value="文本链接">文本链接</option>
		  <option value="可带网址">可带网址</option>
		  <option value="不能带连接">不能带连接</option>
		  <option value="不能带网址">不能带网址</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">新闻源： </td>
      <td><select name="xinwenyuan" size="1" id="xinwenyuan">
          <option value=" ">非新闻源</option>
		  <option value="百度新闻源">百度新闻源</option>
		  <option value="360新闻源">360新闻源</option>
		  <option value="腾讯新闻源">腾讯新闻源</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">综合门户媒体： </td>
      <td><select name="zhmh" size="1" id="zhmh">
          <option value=" ">非门户</option>
		  <?php
			$sql2="select * from menhu_class";
            $result2=mysql_db_query($dbname,$sql2);
			while($rs2=mysql_fetch_array($result2))
			{
			?>
          <option value="<?php echo $rs2["BigClass"];?>"><?php echo $rs2["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">零售价： </td>
      <td><label>
        <input name="price" type="text" id="price" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">代理价： </td>
      <td><label>
        <input name="dlprice" type="text" id="dlprice" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">备注说明： </td>
      <td><textarea name="content" id="myEditor"></textarea>
        <script type='text/javascript'>
            var editor = new UE.ui.Editor();
            editor.render('myEditor');
        </script></td>
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