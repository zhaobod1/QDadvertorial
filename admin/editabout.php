<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
  <!--王庆路 将kindeditor替换为ueditor-->
  <!--<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
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
</script>-->
    <?php include("../ueditor.php")?>
  <!--王庆路 将kindeditor替换为ueditor end-->
</head>
<body>
<?php
$action=@$_REQUEST["action"];
$titleID=@$_REQUEST["titleID"];
$ID=@$_REQUEST["ID"];

if($action=="edit")
{
  $sql="update ".$titleID." set content='".$_REQUEST["content"]."',encontent='".$_REQUEST["encontent"]."' where ID=".$_REQUEST["ID"]."";
  //mysql_db_query($dbname,$sql);
  mysql_select_db($dbname);
  $result=mysql_query($sql);
  echo "<script>alert('修改成功！');location.href='manageabout.php?titleID=".$titleID."';</script>";
}

$sqlS="select * from ".$titleID." where ID=".$ID."";
//$resultS=mysql_db_query($dbname,$sqlS);
mysql_select_db($dbname);
$resultS=mysql_query($sqlS);
$rsS=mysql_fetch_array($resultS)
?>
<form id="form1" name="form1" method="post" action="?action=edit&titleID=<?php echo $titleID;?>&ID=<?php echo $ID;?>">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改<?php echo $rsS["title"];?>信息</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">内容（中文）：</td>
      <td width="83%"><textarea name="content"  style="width:100%;height:330px;visibility:hidden;"><?php echo htmlspecialchars($rsS["content"]);?></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input type="submit" name="Submit" value="确认提交"  style="width:73px; height:25px;" />
        &nbsp;
        <input type="reset" name="Submit2" value="重新添写"  style="width:73px; height:25px;" />
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

