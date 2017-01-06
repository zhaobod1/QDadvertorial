<?php
 include ("../include/config.php");
 include ("checkuser.php");
?>
<?php
 $sql="select * from webinfo";
 $result=mysql_db_query($dbname,$sql);
 //mysql_select_db($dbname);
 //$result=mysql_query($sql);
 $rs=mysql_fetch_array($result);
 if($rs!=NULL){
	$flag="save";
  }
 else {
	$flag="add";
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站设置</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
</head>
<body>
<table width="98%" height="453" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="453">
      <form id="myform" name="myform" method="post" action="saveSetInfo.php?action=<?php echo $flag?>" onSubmit="return CheckForm();">
      <table width="98%" height="507" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
        <tr bgcolor="#EEF4EA">
          <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>网站信息设置</strong></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td width="17%" align="right" bgcolor="#FFFFFF">网站名称：</td>
          <td width="83%" bgcolor="#FFFFFF"><span style="PADDING-LEFT: 10px">
            <input name="webname" type="text" id="webname" value="<?php echo $rs["webname"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">网站网址：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="weburl" type="text" id="weburl" value="<?php echo $rs["weburl"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">ICP备案号：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="icp" type="text" id="icp" value="<?php echo $rs["icp"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">版权所有：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="banquan" type="text" id="banquan" value="<?php echo $rs["banquan"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">联 系 人：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="cname" type="text" id="cname" value="<?php echo $rs["cname"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
		<tr bgcolor="#FFFFFF">
          <td align="right">手　　机：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="mob" type="text" id="mob" value="<?php echo $rs["mob"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
		<tr bgcolor="#FFFFFF">
          <td align="right">电　　话：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="dianhua" type="text" id="dianhua" value="<?php echo $rs["dianhua"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">传　　真：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="fax" type="text" id="fax" value="<?php echo $rs["fax"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
		<tr bgcolor="#FFFFFF">
          <td align="right">客服QQ：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="qq" type="text" id="qq" value="<?php echo $rs["qq"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <!--王庆路 更改前台客服昵称-->
        <tr bgcolor="#FFFFFF">
          <td align="right">售前1：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="kefu_name2" type="text" id="qq2" value="<?php echo $rs["kefu_name2"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售前1QQ：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="qq2" type="text" id="qq2" value="<?php echo $rs["qq2"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售前2：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="kefu_name3" type="text" id="qq2" value="<?php echo $rs["kefu_name3"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售前2QQ：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="qq3" type="text" id="qq2" value="<?php echo $rs["qq3"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售后1：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="kefu_name4" type="text" id="qq2" value="<?php echo $rs["kefu_name4"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售后1QQ：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="qq4" type="text" id="qq2" value="<?php echo $rs["qq4"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售后2：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="kefu_name5" type="text" id="qq2" value="<?php echo $rs["kefu_name5"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">售后2QQ：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="qq5" type="text" id="qq2" value="<?php echo $rs["qq5"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <!--王庆路 更改前台客服昵称 end-->

        <tr bgcolor="#FFFFFF">
          <td align="right">E-mail：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="myemail" type="text" id="myemail"	onkeypress	= "return regInput(this,	/^[0-9]*$/,		String.fromCharCode(event.keyCode))" value="<?php echo $rs["myemail"];?>" size="35"
onpaste		= "return regInput(this,	/^[0-9]*$/,		window.clipboardData.getData('Text'))"
ondrop		= "return regInput(this,	/^[0-9]*$/,		event.dataTransfer.getData('Text'))" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">公司地址：</td>
          <td><span style="PADDING-LEFT: 10px">
            <input name="address" type="text" id="address" value="<?php echo $rs["address"];?>" size="35" />
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">Title优化：</td>
          <td><span style="PADDING-LEFT: 10px">
            <textarea name="title" cols="73" rows="3" id="title"><?php echo $rs["title"];?></textarea>
          </span><font color="#ff0000">**</font></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">KeyWords优化：</td>
          <td><span style="PADDING-LEFT: 10px">
            <textarea name="keyword" cols="73" rows="3" id="keyword"><?php echo $rs["keyword"];?></textarea>
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td align="right">Description优化：</td>
          <td><span style="PADDING-LEFT: 10px">
            <textarea name="descr" cols="73" rows="3" id="descr"><?php echo $rs["descr"];?></textarea>
            <font color="#ff0000">**</font></span></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="39">&nbsp;</td>
          <td><span style="PADDING-LEFT: 10px">
            <input type="submit" name="Submit" value=" 修改保存 " />
&nbsp;
<input type="reset" name="Submit2" value=" 重新添写 " />
          </span></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>