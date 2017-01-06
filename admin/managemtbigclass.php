<?php
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
$titleID=$_REQUEST["titleID"];

$sql="select count(*) from ".$titleID."_class";
//$result=mysql_db_query($dbname,$sql);
mysql_select_db($dbname);
$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$num=$rs[0];

$sql="select * from ".$titleID."_class order by paixu asc";
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
</head>
<body>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;&nbsp;<strong>媒体类型管理</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td height="47" valign="top" bgcolor="#FFFFFF"><?php
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
                  <td align="center" bgcolor="#F8F8F8">序号</td>
                  <td bgcolor="#F8F8F8">类型名称</td>
                  <td width="19%" align="center" bgcolor="#F8F8F8">排序</td>
                  <td width="23%" align="center" bgcolor="#F8F8F8">更新时间</td>
                  <td width="19%" align="center" bgcolor="#F8F8F8">操 作</td>
                </tr>
                <?php
				$i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
                <form id="myform" name="myform" method="post" action="savemtbigclass.php?action=edit&amp;titleID=<?php echo $titleID;?>&amp;ID=<?php echo $rs["ID"]?>" onsubmit="return CheckForm();">
                  <tr align="center" >
                    <td align="center" bgcolor="#FFFFFF"><?php echo $i;?></td>
                    <td><input name="BigClass" type="text" id="BigClass" value="<?php echo $rs["BigClass"];?>" size="16" /></td>
                    <td width="19%" align="center" bgcolor="#FFFFFF"><input name="classidorder" type="text" id="classidorder" value="<?php echo $rs["paixu"];?>" size="4" /></td>
                    <td bgcolor="#FFFFFF"><?php echo $rs["data"];?></td>
                    <td width="19%" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="修改"/>
                      <a href="savemtbigclass.php?action=del&amp;titleID=<?php echo $titleID;?>&amp;ID=<?php echo $rs["ID"]?>">删除</a></td>
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
                  <td colspan="5" bgcolor="#FFFFFF" class="red">*删除类别将会删除所有关于此类别的内容，请慎用!</td>
                </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;<strong><strong>添加信息</strong>类型</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform2" name="myform2" method="post" action="savemtbigclass.php?action=add&amp;titleID=<?php echo $titleID;?>" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="27%" bgcolor="#FFFFFF">类型名称</td>
          <td width="22%" bgcolor="#FFFFFF">排序</td>
          <td width="25%" bgcolor="#FFFFFF">操 作</td>
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
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
