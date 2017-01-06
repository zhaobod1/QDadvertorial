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
<script type='text/javascript' src='images/jquery.min.js'></script>
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
$ID=$_REQUEST["ID"];
$titleID=$_REQUEST["titleID"];
$nav_id=$_REQUEST["nav_id"];
$class_id=$_REQUEST["class_id"];
$small_id=$_REQUEST["small_id"];
$sqlN="select * from ".$titleID."_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="menhuhz_save.php?action=editmt&ID=<?php echo $ID;?>&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改媒体资源</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">媒体大类：</td>
      <td><select name="nav_id" size="1" id="nav_id">
          <?php
			$sql="select * from nav_class";
            $result=mysql_db_query($dbname,$sql);
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
        <option value="<?php echo $rs["ID"];?>" <?php if($rs["ID"]==$nav_id) {echo "selected";}?>><?php echo $rs["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td align="right">媒体小类：</td>
      <td>
		<select name="sc_id" id="sc_id" title="选择媒体二级分类">
<?php if( isset($_GET['class_id']) ){//返回要编辑的媒体所属的二级分类
$sqls="SELECT * FROM ".$titleID."_class WHERE BigID=".$nav_id;
//$resultds=mysql_query($sql,$conn);
$results=mysql_db_query($dbname,$sqls);
while($rss=mysql_fetch_array($results)){ ?>
<option value="<?php echo $rss['ID'] ?>" <?php if( $rss['ID']==$class_id ){echo "selected";} ?> name="class_id"><?php echo $rss['SmallClass'] ?></option>
<?php } ?>
<?php } ?>
		</select> 
	  </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">优惠类别：</td>
      <td><select name="small_id" size="1" id="small_id">
		<option value="0">无</option>
          <?php
			$sqls="select * from ".$titleID."_small";
            $results=mysql_db_query($dbname,$sqls);
			//mysql_select_db($dbname);
			//$results=mysql_query($sqls);
			while($rss=mysql_fetch_array($results))
			{
			?>
        <option value="<?php echo $rss["ID"];?>" <?php if($rss["ID"]==$small_id) {echo "selected";}?>><?php echo $rss["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体名称：</td>
      <td width="83%"><input name="medianame" type="text" id="medianame" value="<?php echo $rsN["medianame"];?>" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">所在地区：</td>
      <td><select name="diqu" size="1" id="diqu">
          <?php
			$sqld="select * from diqu_class";
            $resultd=mysql_db_query($dbname,$sqld);
			while($rsd=mysql_fetch_array($resultd))
			{
			?>
        <option value="<?php echo $rsd["BigClass"];?>" <?php if($rsd["BigClass"]==$rsN["diqu"]) {echo "selected";}?>><?php echo $rsd["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体网址： </td>
      <td><label>
        <input name="weburl" type="text" id="weburl" value="<?php echo $rsN["weburl"];?>" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">案例网址： </td>
      <td><label>
        <input name="anliurl" type="text" id="anliurl" value="<?php echo $rsN["anliurl"];?>" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">链接情况： </td>
      <td><select name="linkurl" size="1" id="linkurl">
          <option value="" <?if($rsN["linkurl"]==""){echo "selected";}?>>请选择</option>
		  <option value="可超链接" <?if($rsN["linkurl"]=="可超链接"){echo "selected";}?>>可超链接</option>
		  <option value="文本链接" <?if($rsN["linkurl"]=="文本链接"){echo "selected";}?>>文本链接</option>
		  <option value="可带网址" <?if($rsN["linkurl"]=="可带网址"){echo "selected";}?>>可带网址</option>
		  <option value="不能带连接" <?if($rsN["linkurl"]=="不能带连接"){echo "selected";}?>>不能带连接</option>
		  <option value="不能带网址" <?if($rsN["linkurl"]=="不能带网址"){echo "selected";}?>>不能带网址</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">新闻源： </td>
      <td><select name="xinwenyuan" size="1" id="xinwenyuan">
          <option value="非新闻源" <?if($rsN["xinwenyuan"]=="非新闻源"){echo "selected";}?>>非新闻源</option>
		  <option value="网页收录" <?if($rsN["xinwenyuan"]=="网页收录"){echo "selected";}?>>网页收录</option>
		  <option value="百度新闻源" <?if($rsN["xinwenyuan"]=="百度新闻源"){echo "selected";}?>>百度新闻源</option>
		  <option value="谷歌新闻源" <?if($rsN["xinwenyuan"]=="谷歌新闻源"){echo "selected";}?>>谷歌新闻源</option>
		  <option value="搜狗新闻源" <?if($rsN["xinwenyuan"]=="搜狗新闻源"){echo "selected";}?>>搜狗新闻源</option>
		  <option value="360新闻源" <?if($rsN["xinwenyuan"]=="360新闻源"){echo "selected";}?>>360新闻源</option>
		  <option value="搜搜新闻源" <?if($rsN["xinwenyuan"]=="搜搜新闻源"){echo "selected";}?>>搜搜新闻源</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">综合门户媒体： </td>
      <td><select name="zhmh" size="1" id="zhmh">
          <option value="" <?if($rsN["zhmh"]==""){echo "selected";}?>>非门户</option>
		  <?php
			$sql2="select * from menhu_class";
            $result2=mysql_db_query($dbname,$sql2);
			while($rs2=mysql_fetch_array($result2))
			{
			?>
          <option value="<?php echo $rs2["BigClass"];?>" <?if($rsN["zhmh"]==$rs2["BigClass"]){echo "selected";}?>><?php echo $rs2["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">成本价格： </td>
      <td><label>
        <input name="scprice" type="text" id="scprice" value="<?php echo $rsN["scprice"];?>" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">代理价格： </td>
      <td><label>
        <input name="dlprice" type="text" id="dlprice" value="<?php echo $rsN["dlprice"];?>" size="13" />元
      </label></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">零售价格： </td>
      <td><label>
        <input name="price" type="text" id="price" value="<?php echo $rsN["price"];?>" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">备注说明： </td>
      <td><textarea name="content"  style="width:100%;height:330px;visibility:hidden;"><?php echo $rsN["content"];?></textarea></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <!--td height="35"-->
      <!--?php 
	  if($rsN["tj"]<>1)
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' />";
	  }
	  else
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' checked='checked' />";
	  }
	  ?>
      是</td-->
	  
	  <td height="35"><select onchange="document.x1.src=options[selectedIndex].value" size="1" name="tj">
<option value="../images/stars.gif" <?if($rsN["tj"]=="../images/stars.gif"){echo "selected";}?>>无推荐</option>
<option value="../images/stars1.gif" <?if($rsN["tj"]=="../images/stars1.gif"){echo "selected";}?>>1星推荐</option>
<option value="../images/stars2.gif" <?if($rsN["tj"]=="../images/stars2.gif"){echo "selected";}?>>2星推荐</option>
<option value="../images/stars3.gif" <?if($rsN["tj"]=="../images/stars3.gif"){echo "selected";}?>>3星推荐</option>
<option value="../images/stars4.gif" <?if($rsN["tj"]=="../images/stars4.gif"){echo "selected";}?>>4星推荐</option>
<option value="../images/stars5.gif" <?if($rsN["tj"]=="../images/stars5.gif"){echo "selected";}?>>5星推荐</option>
</select>&nbsp;&nbsp;<img  alt="" src="<?php echo $rsN["tj"];?>" name="x1"  height="12"/></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input style="WIDTH: 73px; HEIGHT: 25px" type="submit" name="Submit" value="确认提交" />
&nbsp;
<input style="WIDTH: 73px; HEIGHT: 25px" type="reset" name="Submit2" value="重新添写" />
      </span></td>
    </tr>
  </table>
</form>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.medianame.value==""){
           document.form1.medianame.focus();
           alert("媒体名称不能空!");
           return false;
		}
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.medianame.value))
		{
			alert("不能输入特殊字符！");
			document.form1.medianame.focus();
			return false;
		}
		if(document.form1.scprice.value==""){
           document.form1.scprice.focus();
           alert("成本价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.scprice.value))
		{
			alert("请正确输入成本价格");
			document.form1.scprice.focus();
			return false;
		}
		if (Number(document.form1.scprice.value) < 0.01) {
			alert("成本价格最小是0.01.");
			document.form1.scprice.focus();
			return false;
		}
		if(document.form1.dlprice.value==""){
           document.form1.dlprice.focus();
           alert("代理价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.dlprice.value))
		{
			alert("请正确输入代理价格");
			document.form1.dlprice.focus();
			return false;
		}
		if (Number(document.form1.dlprice.value) < 0.01) {
			alert("代理价格最小是0.01.");
			document.form1.dlprice.focus();
			return false;
		}
		if(document.form1.price.value==""){
           document.form1.price.focus();
           alert("零售价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.price.value))
		{
			alert("请正确输入零售价格");
			document.form1.price.focus();
			return false;
		}
		if (Number(document.form1.price.value) < 0.01) {
			alert("零售价格最小是0.01.");
			document.form1.price.focus();
			return false;
		}
	}
	
function getVal(){
	$.getJSON("select.php",{nav_id:$("#nav_id").val()},function(json){
	var sc_id = $("#sc_id");
	$("option",sc_id).remove(); //清空原有的选项，也可使用 sc_id.empty();
	$.each(json,function(index,array){
	var option = "<option value='"+array['sc_id']+"'>"+array['sc_name']+"</option>";
	sc_id.append(option);
	});
	});
	}
	//下面是页面加载时自动执行一次getVal()函数
	$().ready(function(){
	//if(empty($sc_id)){
	//getVal();
	//}
	$("#nav_id").change(function(){//有变动时，执行getVal()函数
	getVal();
	});
	});
</script>