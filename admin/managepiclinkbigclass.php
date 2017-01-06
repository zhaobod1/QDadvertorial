<?php
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
$sql="select count(*) from piclink_class where propic<>'" . "'";
$result=mysql_db_query($dbname,$sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$num=$rs[0];

$sql="select * from piclink_class where propic<>'" . "' order by paixu asc";
$result=mysql_db_query($dbname,$sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
</head>
<body>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>滚动图片管理</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td height="47" valign="top" bgcolor="#FFFFFF">
		<?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>还没有添加数据！</span></td></tr></table>";
		 }
		 else
		 {
		?>
            <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
              <tr align="center" bgcolor="#F8F8F8" >
                <td align="center" bgcolor="#FFFFFF">图片</td>
                <td width="38%" align="center" bgcolor="#FFFFFF">图片地址</td>
                <td width="38%" align="center" bgcolor="#FFFFFF">链接地址</td>
                <td width="8%" align="center" bgcolor="#FFFFFF">排序</td>
                <td width="8%" align="center" bgcolor="#FFFFFF">操作</td>
              </tr>
			  <?php
			  $i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
			  <form id="myform<?php echo $i;?>" name="myform<?php echo $i;?>" method="post" action="savepiclinkbig.php?action=edit&amp;ID=<?php echo $rs["ID"]?>" onsubmit="return CheckForm();">
              <tr align="center" >
                <td width="14%" align="center" bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
                  <tr>
                    <td bgcolor="#FFFFFF"><img src="<?php echo $rs["propic"];?>" width="99" height="44" /></td>
                  </tr>
                </table></td>
                <td><input name="propic" type="text" class="webInput" id="propic" value="<?php echo $rs["propic"];?>" size="30" />
                    <input type="button" name="Submit2" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=myform<?php echo $i;?>&amp;setpic=propic&amp;setress=Partners','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
                    <?php echo $rs["chicun"];?></td>
                <td width="24%" align="center" bgcolor="#FFFFFF"><input name="linkurl" type="text" id="linkurl" value="<?php echo $rs["linkurl"];?>" size="40" /></td>
                <td width="11%" align="center" bgcolor="#FFFFFF"><input name="classidorder" type="text" id="classidorder" value="<?php echo $rs["paixu"];?>" size="4" /></td>
                <td width="23%" align="center" bgcolor="#FFFFFF">
                  <input type="submit" name="Submit" value="修改"/>
                  <a href="savepiclinkbig.php?action=del&amp;ID=<?php echo $rs["ID"]?>">删除</a></td>
              </tr>
		      </form>
			  <?php
			  $i++;
			  }
			  ?>
			<?php
			}
			?> 
              <tr align="center" >
                <td colspan="6" bgcolor="#FFFFFF" class="red">&nbsp;</td>
              </tr>
            </table>
		  </td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>添加产品分类</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="savepiclinkbig.php?action=add" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="38%" bgcolor="#FFFFFF">图片地址</td>
          <td width="38%" bgcolor="#FFFFFF">链接地址</td>
          <td width="8%" bgcolor="#FFFFFF">排序</td>
          <td width="8%" bgcolor="#FFFFFF">操作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td><input name="propic" type="text" class="webInput" id="propic" value="<?php echo $rs["propic"];?>" size="33" />
              <input type="button" name="Submit2" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=form1&setpic=propic&amp;setress=Partners','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
              </td>
          <td bgcolor="#FFFFFF"><input name="linkurl" type="text" id="linkurl" size="33" /></td>
          <td bgcolor="#FFFFFF"><input name="classidorder1" type="text" id="classidorder1" value="<?php echo $num+1;?>" size="4" /></td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="确认添加" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<?php
include ("footx.php");
?>
</body>
</html>
