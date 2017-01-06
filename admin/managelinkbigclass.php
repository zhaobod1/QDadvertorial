<?php
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
$sql="select count(*) from piclink_class where BigClass<>'" . "'";
//$result=mysql_db_query($dbname,$sql);
mysql_select_db($dbname);
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$num=$rs[0];

$sql="select * from piclink_class where BigClass<>'" . "' order by paixu asc";
//$result=mysql_db_query($dbname,$sql);
mysql_select_db($dbname);
$result=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<STYLE type=text/css>
.alink{
line-height:32px;}
.alink a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.alink a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
.ok{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#3399FF; font-weight:bold;
}
.pager{
background:#ffffff; line-height:32px; padding-left:6px;}
.pager a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.pager a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
</STYLE>
</head>
<body>
<table style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 35px" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" align=center>
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>添加链接</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="savelinkbig.php?action=add" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="18%" bgcolor="#F8F8F8">链接名称</td>
          <td width="22%" bgcolor="#F8F8F8">链接网址</td>
          <td width="13%" bgcolor="#F8F8F8">排序</td>
          <td width="23%" bgcolor="#F8F8F8">操 作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><label>
            <input name="BigClass" type="text" id="BigClass" />
          </label></td>
          <td bgcolor="#FFFFFF"><input name="linkurl" type="text" id="linkurl" size="40" /></td>
          <td bgcolor="#FFFFFF"><input name="classidorder1" type="text" id="classidorder1" value="<?php echo $num+1;?>" size="4" /></td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="确认添加" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<table border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
  <tr bgColor=#7691c7>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgColor=#FFFFFF colSpan=5 align=middle>
		<?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "";
		 }
		 else
		 {
		?>
            <table style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center style="font-size:12px">
                <tr align="center" height=25 bgColor=#e3e8f3>
                <td align="center">序号</td>
                <td align="center">链接名称</td>
                <td align="center">链接网址</td>
                <td width="19%" align="center">排序</td>
                <td width="19%" align="center">操 作</td>
              </tr>
			  <?php
			  $i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
			  <form id="myform<?php echo $i;?>" name="myform<?php echo $i;?>" method="post" action="savelinkbig.php?action=edit&amp;ID=<?php echo $rs["ID"]?>" onsubmit="return CheckForm();">
              <tr align="center" onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
                <td align="center"><?php echo $i;?></td>
                <td align="center"><input name="BigClass" type="text" id="BigClass" value="<?php echo $rs["BigClass"];?>" /></td>
                <td align="center"><input name="linkurl" type="text" id="linkurl" value="<?php echo $rs["linkurl"];?>" size="40" /></td>
                <td align="center"><input name="classidorder" type="text" id="classidorder" value="<?php echo $rs["paixu"];?>" size="4" /></td>
                <td align="center"><DIV class="alink" align=center>
                  <input type="submit" name="Submit" value="修改"/>
                  <a href="savelinkbig.php?action=del&amp;ID=<?php echo $rs["ID"]?>">删除</a></div></td>
              </tr>
		      </form>
			  <?php
			  $i++;
			  }
			  ?>
			<?php
			}
			?> 
              <tr align="center" height=35>
                <td colspan="5" bgcolor="#FFFFFF" class="red">*删除友情链接前请做好检查，确认后再删除。</td>
              </tr>
            </table>
		  </td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<?php
include ("footx.php");
?>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>