<?php
include ("checkuser.php");
include ("../include/config.php");
include("../include/function.php");
$AdminUser=$_COOKIE["AdminUser"];
$sql="select * from admin where AdminUser='".$AdminUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $yue=$rs["yue"];
}

$ID=@$_REQUEST["ID"];
if($ID<>""){
	$sqlN="select * from huiyuan_info where ID=".$ID."";
	$resultN=mysql_db_query($dbname,$sqlN);
	$rsN=mysql_fetch_array($resultN);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理中心</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
	<!--王庆路 将kindeditor替换为ueditor-->
	<!--<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script>
KE.show({
	id : 'neirong',
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
<style type="text/css">
html{_overflow-y:scroll}.background{display:block;width:100%;height:100%;opacity:0.4;filter:alpha(opacity=40);background:while;position:absolute;top:0;left:0;z-index:2000;}.progressBar{border:solid 2px #86A5AD;background:white url(progressBar_m.gif) no-repeat 10px 10px;}.progressBar{display:block;width:148px;height:28px;position:fixed;top:50%;left:50%;margin-left:-74px;margin-top:-14px;padding:10px 10px 10px 50px;text-align:left;line-height:27px;font-weight:bold;position:absolute;z-index:2001;}.nextpage{background:#3E5F9B;color:#fff;bottom:0;margin:0px;left:0px;position:fixed;line-height:25px;width:100%;z-index:999;padding-left:10px;_bottom:auto;_width:100%;_position:absolute;font-size:14;padding-left:0px;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));}
</style>

</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
  <div class="col-2  col-auto" >
    <h6>会员发布
      <!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>-->
    </h6>
    <div class="content">
        <form id="form1" name="form1" method="post" action="huiyuan_save.php?action=add" onsubmit="return check()" style="display:" >
        <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2' style="font-size:12px">
          <tr>
            <td width="12%" height="30" bgcolor="#FFFFFF"><div align="center">标    题</div></td>
            <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;"><input name="biaoti" type="text" class="txt" id="biaoti" lang='require'  size="100" xml:lang="require" value="<?php if($ID<>""){ echo $rsN["title"];}?>"/>
              <input type="hidden" name="dingdan" id="dingdan"  value=""/>
              （标题字数尽量控制在18个汉字内！） </td>
          </tr>
          <tr>
            <td height="30" bgcolor="#FFFFFF"><div align="center">内    容</div></td>
            <td align="left" bgcolor="#FFFFFF" style="padding:10px;"><textarea name="neirong"  style="width:100%;height:330px;"><?php if($ID<>""){ echo htmlspecialchars($rsN["content"]);}?></textarea>
              <input type="submit" name="button" id="buttonsave" value=" 提 交 "  style="width:60px; height:25px;display:none" /></td>
          </tr>
	     <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="center">金    额</div></td>
	        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;"><input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/>(余额：<font color="#FF0000"><b><?php echo $yue;?></b></font>元 )
			<font color="blue">第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。</font>
            </td>
          </tr>
        </table>
		<div align="center"><!--input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/--> <input type="hidden" id='yixuanhidden' name='yixuanhidden'/><input type="button" value="下一步 选择媒体" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/><!--input type="button" value="上一步 选择媒体" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/><input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/--></div>
      </form>
      <br />
      <div id="flselect" style="display:none">
        <table width="100%" border="0" cellpadding="0" style="border:1px solid #ccc;padding-bottom:5px;">
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>会员类型-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
			  <?php
				$sqls="select * from media_class where BigID=49 order by paixu desc";
				$results=mysql_db_query($dbname,$sqls);
				while($rss=mysql_fetch_array($results))
				{
			  ?>
				<LI style="CURSOR: pointer" onclick=mt_search1(<?php echo $rss["ID"];?>)><?php echo $rss["SmallClass"];?></LI>
			  <?php
				}?>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>综合门户媒体-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
			  <?php
				$sqls="select * from menhu_class order by paixu desc";
				$results=mysql_db_query($dbname,$sqls);
				while($rss=mysql_fetch_array($results))
				{
			  ?>
				<LI style="CURSOR: pointer" onclick="mt_search7('<?php echo $rss["BigClass"];?>')"><?php echo $rss["BigClass"];?></LI>
			  <?php
				}?>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>价格分类媒体-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search2(0)>0-40元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(1)>40-70元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(2)>70-120元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(3)>120元以上</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>地区分类媒体-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
			  <?php
				$sqls="select * from diqu_class order by paixu asc";
				$results=mysql_db_query($dbname,$sqls);
				while($rss=mysql_fetch_array($results))
				{
			  ?>
				<LI style="CURSOR: pointer" onclick="mt_search6('<?php echo $rss["BigClass"];?>')"><?php echo $rss["BigClass"];?></LI>
			  <?php
				}?>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>新闻源-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick="mt_search4('百度新闻源')">百度新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('谷歌新闻源')">谷歌新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('搜狗新闻源')">搜狗新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('360新闻源')">360新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('搜搜新闻源')">搜搜新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('非新闻源')">无</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>链接-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick="mt_search5('可带网址')">可带网址</LI>
				<LI style="CURSOR: pointer" onclick="mt_search5('可超链接')">可超链接</LI>
				<LI style="CURSOR: pointer" onclick="mt_search5('不能带网址')">不能带网址</LI>
			  </UL>
			</TD>
		  </TR>
        </table>
        <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
              <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
                    <td><div align="center">媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				   <td><select name="class_id" size="1" id="class_id">
			  <option value=''>全部分类</option>
			  <?php
				$sqlc="select * from media_class where BigID=49";
				$resultc=mysql_db_query($dbname,$sqlc);
				while($rsc=mysql_fetch_array($resultc))
				{
				?>
			  <option value="<?php echo $rsc["ID"];?>"><?php echo $rsc["SmallClass"];?></option>
			  <?php
				}
			  ?>
			</select></td>
				   <td><select name="diqu" size="1" id="diqu">
				   <option value="">全部地区</option>
			  <?php
				$sqld="select * from diqu_class";
				$resultd=mysql_db_query($dbname,$sqld);
				while($rsd=mysql_fetch_array($resultd))
				{
				?>
			  <option value="<?php echo $rsd["BigClass"];?>"><?php echo $rsd["BigClass"];?></option>
			  <?php
				}
			  ?>
			</select></td>
				   <td><select name="linkurl" size="1" id="linkurl">
			  <option value="">选择链接情况</option>
			  <option value="可超链接">可超链接</option>
			  <option value="文本链接">文本链接</option>
			  <option value="可带网址">可带网址</option>
			  <option value="不能带连接">不能带连接</option>
			  <option value="不能带网址">不能带网址</option>
		  </select></td>
				   <td><select name="xinwenyuan" size="1" id="xinwenyuan">
			  <option value="">选择新闻源</option>
			  <option value="非新闻源">非新闻源</option>
			  <option value="网页收录">网页收录</option>
			  <option value="百度新闻源">百度新闻源</option>
			  <option value="谷歌新闻源">谷歌新闻源</option>
			  <option value="搜狗新闻源">搜狗新闻源</option>
			  <option value="360新闻源">360新闻源</option>
			  <option value="搜搜新闻源">搜搜新闻源</option>
		  </select></td>
				   <td><select name="zhmh" size="1" id="zhmh">
			  <option value="">选择门户</option>
			  <option value=" ">非门户</option>
			  <?php
				$sql2="select * from menhu_class";
				$result2=mysql_db_query($dbname,$sql2);
				while($rs2=mysql_fetch_array($result2))
				{
				?>
			  <option value="<?php echo $rs2["BigClass"];?>"><?php echo $rs2["BigClass"];?></option>
			  <?php
				}
			  ?>
		  </select></td>
				   <td><select name='skey' id="skey">
                <option value=''>默认排序</option>
                <option value="1">价格=>升序</option>
				<option value="2">价格=>降序</option>
              </select></td>
                    <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
            </tr>
          </table>
        </form>
        <div id='yixuan' class="nextpage"> &nbsp;已选媒体: <span id="yixuantr"></span>&nbsp;&nbsp;总额：<b><span id='totalmoney2'>0</span></b>元（余额：<b><span id="yue"><?php echo $yue;?></span></b>元）
          <!--<input type="button" value=" 清 空 " onclick="clearall()" style="width:80px;height:30px; text-align:center;margin-top:3px;"/>-->
		  <!--input type="button" value="下一步 编辑内容" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/-->
          <input type="button" value="上一步 编辑内容" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/>
          <input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/>
        </div>
      </div>
    </div>
  </div>
  <div class="bk20 hr"></div>
</div>
<div id="background" class="background" style="display: none; "></div>
<div id="progressBar" class="progressBar" style="display: none; ">数据加载中，请稍等...</div>

<script type="text/javascript">
$(document).ready(function(){
	var ajaxbg = $("#background,#progressBar");
	ajaxbg.hide();
	$(document).ajaxStart(function () {
		ajaxbg.show();
	}).ajaxStop(function () {
		ajaxbg.hide();
	});
	mt_search();
})

function setprice(val){
	$("#jiage").val(val*15);
}

function mt_search(){
	$.get("huiyuan_search.php?a=mt_search",{
		"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search1(id){
	$.get("huiyuan_search.php?a=mt_search",{
		"fl":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search2(id){
	$.get("huiyuan_search.php?a=mt_search",{
		"jg":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search3(id){
	$.get("huiyuan_search.php?a=mt_searchall",{
		"jg":"all"
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search4(id){
	$.get("huiyuan_search.php?a=mt_searchall",{
		"xw":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search5(id){
	$.get("huiyuan_search.php?a=mt_searchall",{
		"lj":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search6(id){
	$.get("huiyuan_search.php?a=mt_searchall",{
		"dq":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search7(id){
	$.get("huiyuan_search.php?a=mt_searchall",{
		"zhmh":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function meiturn(){
	$("#searchtrun").slideToggle();
}

function sel(id,tr,jg,yue){
	var ye=yue;
	var s7=jg;
	var s2=$("#xz_mc_"+id).val();
	//alert(yue);
	//alert(s7);
	
	//如何取消选择，运行yixuansc，减掉选择金额
	if($("#xz_"+id).attr("checked")==false) {
		yixuancl(id,s2,s7);
		return false;
	}
	
	if(ye >= ($("#totalmoney").val()*1 + s7*1)){
		var yx=$("#yixuanhidden").val();
		$("#yixuan").show();
		if( yx.indexOf(tr)==-1 ) {
			$("#yixuanhidden").val(id+":"+s2+","+yx);
			$("#totalmoney").val($("#totalmoney").val()*1 + s7*1)
			$("#totalmoney2").html(	$("#totalmoney2").html()*1 + s7*1)
			$("#yixuantr").append("<span id='yixuantr2_"+id+"'>&nbsp;"+s2+s7+"元<a href='javascript:;'onclick=\"yixuancl('"+id+"','"+s2+"',"+s7+")\" style='color:#FF0'>[X]</a></span>");
		}
	}
	else{
		$("#biaoti")[0].focus();
		alert('余额不足，请先充值');
		$("#xz_"+id).attr("checked",false);
		return false;
	}
	}
	
function yixuancl(tr,mc,je){
	var yx=$("#yixuanhidden").val();
	//yx=yx.replace("$"+tr+"$,","");
	//yx=yx.replace(tr+",","");
	
	yx=yx.replace(tr+":"+mc+",","");
	$("#yixuanhidden").val(yx);
	$("#xz_"+tr).attr("checked",false);
	$("#yixuantr2_"+tr).remove();
	$("#totalmoney").val( $("#totalmoney").val()*1 - je*1 )
	$("#totalmoney2").html(	$("#totalmoney2").html()*1 - je*1 )
}
	
function yixuan(s1,s2,s3,s4,s5,s6,tr,id){
	var ye=0.00;
	var s7=s3;

	if($("#xz_"+id).attr("checked")==false) {
		yixuansc(id,s7);
		return false;
	}
		if(ye >= ($("#totalmoney").val()*1 + s7*1)){
		var yx=$("#yixuanhidden").val();
		$("#yixuan").show();
		if( yx.indexOf(tr)==-1 ) {
			$("#yixuanhidden").val(tr+","+yx);
			$("#totalmoney").val($("#totalmoney").val()*1 + s7*1)
			$("#totalmoney2").html(	$("#totalmoney2").html()*1 + s7*1)
			$("#yixuantr").append("<span id='yixuantr2_"+id+"'>"+s2+s7+"元<a href='javascript:;' onclick=\"yixuansc('"+id+"',"+s7+")\" style='color:#FF0'>[X]</a></span>&nbsp;&nbsp;");
		}
	}
	else{
		$("#biaoti")[0].focus();
		alert('余额不足，请先充值');
		$("#xz_"+id).attr("checked",false);
		return false;
	}
	}

function yixuansc(tr,je){
	var yx=$("#yixuanhidden").val();
	//yx=yx.replace("$"+tr+"$,","");
	yx=yx.replace(tr+",","");
	$("#yixuanhidden").val(yx);
	$("#xz_"+tr).attr("checked",false);
	$("#yixuantr2_"+tr).remove();
	$("#totalmoney").val( $("#totalmoney").val()*1 - je*1 )
	$("#totalmoney2").html(	$("#totalmoney2").html()*1 - je*1 )
}

function check(){
	var flg = true;
	var flg1= true;
	$("input[lang='require']").each(function(){
		$(this).css("border-color","#ffffff");
		if($(this).val() == "") {
			flg = false;
			$(this).css("border-color","#FF0000");
		}
	})
		$("select[lang='require']").each(function(){
		$(this).css("background-color","#ffffff");
		if($(this).val() == "0") {
			flg1 = false;
			$(this).css("background-color","#FF0000");
		}
	})
	if(flg==false || flg1==false){
		alert('红色提示为关键信息,请填写完整,不能空!');
		return false;
	}
	var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
	if (! reg.test(document.form1.biaoti.value))
	{
		alert("不能输入特殊字符！");
		document.form1.biaoti.focus();
		return false;
	}
	var s7=$("#yixuanhidden").val();
	if(s7.replace("$","").replace(",","").replace(" ","")==""){
		alert('未选择任何频道');
		return false;
	}
        return true;
}

/*
function perpage(){
	$("#flselect").show();
	$("#form1").hide();
}

function nextpage(){
	$("#flselect").hide();
	$("#form1").show();
}
*/

function nextpage(){
	if($("#biaoti").val()!=""){
		$("#flselect").show();
		$("#form1").hide();
	}
	else{
		alert('请先填写标题与内容!');
	}
}

function perpage(){
	$("#flselect").hide();
	$("#form1").show();
}


function clearall() {
	var checkboxs = $(":checkbox");
	for(var i=0;i<checkboxs.length;i++) {
		if(checkboxs[i].name=="xz") {
			if(checkboxs[i].checked) {
				checkboxs[i].click();
				checkboxs[i].checked = false;
			}
		}
	}
	$("#yixuantr").html("");
}

</script>

<script language="javascript"> 
var rows = document.getElementsByTagName('tr');//获取所有表格行
for (var i=0;i<rows.length;i++){//然后对其遍历
    rows[i].onmouseover = function(){      
        this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
    }
    rows[i].onmouseout = function(){       
        this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
    }
}

</script>
</body>
</html>