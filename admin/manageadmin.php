<?php
include ("../include/config.php");
include ("checkuser.php");

if($_COOKIE["fg"]!=1)
{
  echo "<script>alert('您的权限有限，请与管理员联系！');history.go(-1);</script>";
}
?>

<?php
$sql="select * from admin";
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
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;<strong>添加后台管理帐号</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="saveadmin.php?action=add" onsubmit="return CheckForm();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="25%" bgcolor="#F8F8F8">管理帐号</td>
          <td width="25%" bgcolor="#F8F8F8">密 码</td>
          <td width="25%" bgcolor="#F8F8F8">权 限</td>
          <td width="25%" bgcolor="#F8F8F8">操 作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><input name="AUser" type="text" id="AUser" size="16" /></td>
          <td bgcolor="#FFFFFF"><input name="APass" type="password" id="APass" size="16" /></td>
          <td bgcolor="#FFFFFF"><input name="flag" type="radio" value="1" />
            站长
            <input name="flag" type="radio" value="2" checked="checked" />
            副站长
            <input name="flag" type="radio" value="3" />
            检查员 </td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="添加" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
<br />
<table border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
  <tr>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgColor=#FFFFFF colSpan=4 align=middle>
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
                <td width="25%">管理帐号</td>
                <td width="25%">密 码</td>
                <td width="25%">权 限</td>
                <td width="25%">操 作</td>
              </tr>
			  <?php
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
			  <form id="myform" name="myform" method="post" action="saveadmin.php?action=edit&amp;ID=<?php echo $rs["ID"];?>"  onsubmit="return CheckForm1();">
              <tr align="center" onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
                <td><input name="User" type="text" id="User" value="<?php echo $rs["AdminUser"];?>" size="16" /></td>
                <td><input name="Pass" type="password" id="Pass" size="16" /></td>
                <td>
				<?php
				$flag=$rs["flag"];
				switch($flag)
				{
				 case "1":
				 echo "<input type=radio name=flag value=1 checked=checked />站长
				       <input name=flag type=radio value=2>副站长
					   <input type=radio name=flag value=3>检查员";
				 break;
				    
				 case "2":
				 echo "<input type=radio name=flag value=1>站长
				       <input name=flag type=radio value=2  checked=checked/>副站长
					   <input type=radio name=flag value=3 >检查员";
			     break;
				 
				 case "3":
				 echo "<input type=radio name=flag value=1>站长
				       <input name=flag type=radio value=2>副站长
					   <input type=radio name=flag value=3 checked=checked/>检查员";
				 break;
				}
				?></td>
                <td><DIV class="alink" align=center>
                <input type="submit" name="Submit" value="修改"/>
               &nbsp;<a href="saveadmin.php?action=del&amp;ID=<?php echo $rs["ID"];?>">删除</a></div></td>
              </tr>
		      </form>
			  <?php
			  }
			  ?>
			<?php
			}
			?> 
              <tr align="center" height=35>
                <td colspan="4" bgcolor="#FFFFFF" class="red">*在修改后台管理用户里请先确保管理用户和管理密码不为空，再修改!</td>
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
<script language="javascript">
	function CheckForm()
	{
		if(!checkLength("AUser" , "管理员" , 2 , 15 , "~!@#$%^&*+=\\\'\"\<\>"))
			return false;
		if(!checkLength("APass" , "密码" , 1 , 15 , "&<>\'"))
			return false;
	}
</script>
