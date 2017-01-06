<?php
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
$sqlN="select count(*) from bank_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$num=$rsN[0];

$sql="select * from bank_info order by ID asc";
$result=mysql_db_query($dbname,$sql);
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
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>添加银行账户</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="savebank.php?action=add" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="38%" bgcolor="#F8F8F8">图片地址</td>
          <td width="5%" bgcolor="#F8F8F8">户名</td>
          <td width="13%" bgcolor="#F8F8F8">帐号</td>
		  <td width="10%" bgcolor="#F8F8F8">开户行</td>
          <td width="8%" bgcolor="#F8F8F8">操作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><input name="propic" type="text" class="webInput" id="propic" value="<?php echo $rs["propic"];?>" size="28" />
              <input type="button" name="Submit2" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=form1&setpic=propic&amp;setress=Partners','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
              </td>
          <td bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="8" /></td>
          <td bgcolor="#FFFFFF"><input name="accnumber" type="text" id="accnumber" size="23" /></td>
		  <td bgcolor="#FFFFFF"><input name="bankname" type="text" id="bankname" size="23" /></td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="确认添加" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<table border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
  <tr>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgColor=#FFFFFF colSpan=6 align=middle>
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
                <td align="center">图片</td>
                <td width="23%" align="center">图片地址</td>
                <td width="5%" align="center">户名</td>
                <td width="13%" align="center">帐号</td>
                <td width="10%" align="center" >开户行</td>
				<td width="23%" align="center">操作</td>
              </tr>
			  <?php
			  $i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
			  <form id="myform<?php echo $i;?>" name="myform<?php echo $i;?>" method="post" action="savebank.php?action=edit&amp;ID=<?php echo $rs["ID"]?>" onsubmit="return CheckForm();">
              <tr align="center" onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=55>
                <td align="center"><table border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
                  <tr>
                    <td bgcolor="#FFFFFF"><img src="<?php echo $rs["propic"];?>" width="99" height="44" /></td>
                  </tr>
                </table></td>
                <td><input name="propic" type="text" class="webInput" id="propic" value="<?php echo $rs["propic"];?>" size="23" />
                    <input type="button" name="Submit2" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=myform<?php echo $i;?>&amp;setpic=propic&amp;setress=Partners','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
                    <?php echo $rs["chicun"];?></td>
                <td align="center"><input name="name" type="text" id="name" value="<?php echo $rs["name"];?>" size="8" /></td>
				<td align="center"><input name="accnumber" type="text" id="accnumber"  value="<?php echo $rs["accnumber"];?>" size="23" /></td>
				<td align="center"><input name="bankname" type="text" id="bankname" value="<?php echo $rs["bankname"];?>" size="23" /></td>
                <td align="center"><DIV class="alink" align=center>
                  <input type="submit" name="Submit" value="修改"/>
                  <a href="savebank.php?action=del&amp;ID=<?php echo $rs["ID"]?>">删除</a></div></td>
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
<?php
include ("footx.php");
?>
</body>
</html>
