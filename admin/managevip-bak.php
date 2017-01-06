<?php
include ("../include/config.php");
include ("checkuser.php");

if($_COOKIE["fg"]!=1)
{
  echo "<script>alert('您的权限有限，请与管理员联系！');history.go(-1);</script>";
}
?>

<?php
$sql="select * from user";
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
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;&nbsp;<strong>会员管理设置</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td height="47" valign="top" bgcolor="#FFFFFF">
		<?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>还没有添加后台用户！</span></td></tr></table>";
		 }
		 else
		 {
		?>
            <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
              <tr align="center" bgcolor="#F8F8F8" >
                <td width="25%" bgcolor="#FFFFFF">会 员</td>
                <td width="25%" bgcolor="#FFFFFF">密 码</td>
                <td width="35%" bgcolor="#FFFFFF">权 限</td>
                <td width="15%" bgcolor="#FFFFFF">操 作</td>
              </tr>
			  <?php
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
			  <form id="myform" name="myform" method="post" action="savevip.php?action=edit&amp;ID=<?php echo $rs["ID"];?>"  onsubmit="return CheckForm1();">
              <tr align="center" >
                <td bgcolor="#FFFFFF"><input name="User" type="text" id="User" value="<?php echo $rs["VipUser"];?>" size="16" /></td>
                <td bgcolor="#FFFFFF"><input name="Pass" type="password" id="Pass" size="16" /></td>
                <td bgcolor="#FFFFFF">
				<?php
				$flag=$rs["flag"];
				switch($flag)
				{
				 case "1":
				 echo "<input type=radio name=flag value=1 checked=checked />核心代理商
				       <input name=flag type=radio value=2>媒介编辑
					   <input type=radio name=flag value=3>一般会员";
				 break;
				    
				 case "2":
				 echo "<input type=radio name=flag value=1>核心代理商
				       <input name=flag type=radio value=2  checked=checked/>媒介编辑
					   <input type=radio name=flag value=3 >一般会员";
			     break;
				 
				 case "3":
				 echo "<input type=radio name=flag value=1>核心代理商
				       <input name=flag type=radio value=2>媒介编辑
					   <input type=radio name=flag value=3 checked=checked/>一般会员";
				 break;
				}
				?></td>
                <td bgcolor="#FFFFFF">
                <input type="submit" name="Submit" value="修改"/>
                &nbsp; <a href="savevip.php?action=del&amp;ID=<?php echo $rs["ID"];?>">删除</a></td>
              </tr>
		      </form>
			  <?php
			  }
			  ?>
			<?php
			}
			?> 
              <tr align="center" >
                <td colspan="4" bgcolor="#FFFFFF" class="red">*在修改后台管理用户里请先确保管理用户和管理密码不为空，在修改!</td>
              </tr>

            </table>

		  </td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;<strong><strong>添加</strong>后台用户管理设置</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="savevip.php?action=add" onsubmit="return CheckForm();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="25%" bgcolor="#FFFFFF">会 员</td>
          <td width="25%" bgcolor="#FFFFFF">密 码</td>
          <td width="35%" bgcolor="#FFFFFF">权 限</td>
          <td width="15%" bgcolor="#FFFFFF">操 作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><input name="AUser" type="text" id="AUser" size="16" /></td>
          <td bgcolor="#FFFFFF"><input name="APass" type="password" id="APass" size="16" /></td>
          <td bgcolor="#FFFFFF"><input name="flag" type="radio" value="1" />
            核心代理商
            <input name="flag" type="radio" value="2" checked="checked" />
            媒介编辑
            <input name="flag" type="radio" value="3" />
            一般会员 </td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="添加会员" /></td>
        </tr>
      </table>
        </form>
    </td>
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
		if(!checkLength("AUser" , "会员" , 2 , 15 , "~!@#$%^&*+=\\\'\"\<\>"))
			return false;
		if(!checkLength("APass" , "密码" , 1 , 15 , "&<>\'"))
			return false;
	}
</script>
