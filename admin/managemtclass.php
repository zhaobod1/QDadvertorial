<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<?php
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
$titleID=$_REQUEST["titleID"];

$sql="select count(*) from ".$titleID."_small";
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$num=$rs[0];

$sql="select * from ".$titleID."_small order by paixu asc";
$result=mysql_query($sql);
?>
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
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;<strong><strong>添加信息</strong>类型</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform2" name="myform2" method="post" action="savemtclass.php?action=add&amp;titleID=<?php echo $titleID;?>" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="27%" bgcolor="#F8F8F8">类型名称</td>
          <td width="22%" bgcolor="#F8F8F8">排序</td>
          <td width="25%" bgcolor="#F8F8F8">操 作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><input name="BigClass1" type="text" id="BigClass1" size="16" /></td>
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
        <td bgColor=#FFFFFF colSpan=4 align=middle>
		<?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo " ";
		 }
		 else
		 {
		?>
              <table style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center style="font-size:12px">
                <tr align="center" height=25 bgColor=#e3e8f3>
                  <td align="center">序号</td>
                  <td align="center">类型名称</td>
                  <td width="19%" align="center">排序</td>
                  <td width="19%" align="center">操 作</td>
                </tr>
                <?php
				$i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
                <form id="myform" name="myform" method="post" action="savemtclass.php?action=edit&amp;titleID=<?php echo $titleID;?>&amp;ID=<?php echo $rs["ID"]?>" onsubmit="return CheckForm();">
                  <tr align="center" onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
                    <td align="center"><?php echo $i;?></td>
                    <td><input name="BigClass" type="text" id="BigClass" value="<?php echo $rs["BigClass"];?>" size="16" /></td>
                    <td align="center"><input name="classidorder" type="text" id="classidorder" value="<?php echo $rs["paixu"];?>" size="4" /></td>
                    <td align="center"><DIV class="alink" align=center>
					  <input type="submit" name="Submit" value="修改"/>
                      <a href="savemtclass.php?action=del&amp;titleID=<?php echo $titleID;?>&amp;ID=<?php echo $rs["ID"]?>">删除</a></div></td>
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
                  <td colspan="4" bgcolor="#FFFFFF" class="red">*删除类别将会删除所有关于此类别的内容，请慎用!</td>
                </tr>
          </table></td>
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
