<?php
include ("checkuser.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理中心</title>
<link href="http://upload.ruanwenjie.com/css/reset.css" rel="stylesheet" type="text/css" />
<link href="http://upload.ruanwenjie.com/css/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="http://upload.ruanwenjie.com/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="http://upload.ruanwenjie.com/js/styleswitch.js"></script>
<script type='text/javascript' src='http://www.ruanwen.la/ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='http://www.ruanwen.la/ueditor/ueditor.all.js'></script>

<style type="text/css">
html{_overflow-y:scroll}.background{display:block;width:100%;height:100%;opacity:0.4;filter:alpha(opacity=40);background:while;position:absolute;top:0;left:0;z-index:2000;}.progressBar{border:solid 2px #86A5AD;background:white url(progressBar_m.gif) no-repeat 10px 10px;}.progressBar{display:block;width:148px;height:28px;position:fixed;top:50%;left:50%;margin-left:-74px;margin-top:-14px;padding:10px 10px 10px 50px;text-align:left;line-height:27px;font-weight:bold;position:absolute;z-index:2001;}.nextpage{background:#3E5F9B;color:#fff;bottom:0;margin:0px;left:0px;position:fixed;line-height:25px;width:100%;z-index:999;padding-left:10px;_bottom:auto;_width:100%;_position:absolute;font-size:14;padding-left:0px;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));}
</style>

</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
  <div class="col-2  col-auto" >
    <h6>软文发布
      <!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>-->
    </h6>
    <div class="content">
          <form id="form1" name="form1" method="post" action="action.php?a=rwadd" onsubmit="return check()" style="display:" >
        <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2'>
          <tr>
            <td width="12%" height="30" bgcolor="#FFFFFF"><div align="center">标    题</div></td>
            <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;"><input name="biaoti" type="text" class="txt" id="biaoti" lang='require'  size="100" xml:lang="require" value=""/>
              <input type="hidden" name="dingdan" id="dingdan"  value=""/>
              （标题字数尽量控制在18个汉字内！） </td>
          </tr>
          <tr>
            <td height="30" bgcolor="#FFFFFF"><div align="center">内    容</div></td>
            <td align="left" bgcolor="#FFFFFF" style="padding:10px;"><textarea name="neirong" id="myEditor"><BR />
</textarea>
              <script type='text/javascript'>
            var editor = new UE.ui.Editor();
            editor.render('myEditor');
        </script>
              <input type="submit" name="button" id="buttonsave" value=" 提 交 "  style="width:60px; height:25px;display:none" /></td>
          </tr>
	     <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="center">金    额</div></td>
	        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;">(余额：<font color="#FF0000"><b>0.00</b></font>元 )
			<font color="blue">第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。</font>
            </td>
          </tr>
        </table>
		<div align="center"><input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/> <input type="hidden" id='yixuanhidden' name='yixuanhidden'/><input type="button" value="下一步 选择媒体" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/></div>
      </form>
      <br />
      <div id="flselect" style="display:none"    >
        <table width="100%" border="0" cellpadding="0" style="border:1px solid #ccc;padding-bottom:5px;">
          <tr>
            <td bgcolor="#FFFFFF" style="padding-left:5px;"><ul class='meitilist'>
                <li onclick="mt_search3()" style=' cursor:pointer;'>媒体类型-》</li>
                <li onclick="mt_search1(44)" style=' cursor:pointer;'>十元专区</li><li onclick="mt_search1(22)" style=' cursor:pointer;'>最新秒杀</li><li onclick="mt_search1(21)" style=' cursor:pointer;'>套餐系列</li><li onclick="mt_search1(20)" style=' cursor:pointer;'>IT-科技</li><li onclick="mt_search1(19)" style=' cursor:pointer;'>新闻资讯</li><li onclick="mt_search1(18)" style=' cursor:pointer;'>财经商业</li><li onclick="mt_search1(17)" style=' cursor:pointer;'>房产家居</li><li onclick="mt_search1(16)" style=' cursor:pointer;'>健康医疗</li><li onclick="mt_search1(15)" style=' cursor:pointer;'>酒店旅游</li><li onclick="mt_search1(14)" style=' cursor:pointer;'>教育培训</li><li onclick="mt_search1(13)" style=' cursor:pointer;'>汽车网站</li><li onclick="mt_search1(12)" style=' cursor:pointer;'>游戏网站</li><li onclick="mt_search1(11)" style=' cursor:pointer;'>娱乐休闲</li><li onclick="mt_search1(10)" style=' cursor:pointer;'>女性时尚</li><li onclick="mt_search1(9)" style=' cursor:pointer;'>生活消费</li><li onclick="mt_search1(8)" style=' cursor:pointer;'>工业贸易</li>              </ul>
              <div style="clear:both;"></div>
              <ul class='meitilist'>
                <li  onclick="mt_search3()" style=' cursor:pointer;'>综合门户媒体-》</li>
                <li onclick="mt_search7('中国广播网')" style=' cursor:pointer;'>中国广播网</li><li onclick="mt_search7('中国新闻网')" style=' cursor:pointer;'>中国新闻网</li><li onclick="mt_search7('中国经济网')" style=' cursor:pointer;'>中国经济网</li><li onclick="mt_search7('中国日报网')" style=' cursor:pointer;'>中国日报网</li><li onclick="mt_search7('21CN网')" style=' cursor:pointer;'>21CN网</li><li onclick="mt_search7('TOM网')" style=' cursor:pointer;'>TOM网</li><li onclick="mt_search7('慧聪网')" style=' cursor:pointer;'>慧聪网</li><li onclick="mt_search7('中国网')" style=' cursor:pointer;'>中国网</li><li onclick="mt_search7('新华网')" style=' cursor:pointer;'>新华网</li><li onclick="mt_search7('千龙网')" style=' cursor:pointer;'>千龙网</li><li onclick="mt_search7('央视网')" style=' cursor:pointer;'>央视网</li><li onclick="mt_search7('人民网')" style=' cursor:pointer;'>人民网</li><li onclick="mt_search7('中华网')" style=' cursor:pointer;'>中华网</li><li onclick="mt_search7('凤凰网')" style=' cursor:pointer;'>凤凰网</li><li onclick="mt_search7('网易网')" style=' cursor:pointer;'>网易网</li><li onclick="mt_search7('腾讯网')" style=' cursor:pointer;'>腾讯网</li><li onclick="mt_search7('搜狐网')" style=' cursor:pointer;'>搜狐网</li><li onclick="mt_search7('新浪网')" style=' cursor:pointer;'>新浪网</li>              </ul>
              <div style="clear:both;"></div>
              <ul class='meitilist'>
                <li  onclick="mt_search3()" style=' cursor:pointer;'>价格分类媒体-》</li>
                <li onclick="mt_search2(0)" style=' cursor:pointer;'>0-40元</li><li onclick="mt_search2(1)" style=' cursor:pointer;'>40-70元</li><li onclick="mt_search2(2)" style=' cursor:pointer;'>70-120元</li><li onclick="mt_search2(3)" style=' cursor:pointer;'>120元以上</li>              </ul>
              <div style="clear:both;"></div>
              <ul class='meitilist'>
                <li  onclick="mt_search3()" style=' cursor:pointer;'>地区分类媒体-》</li>
                <li onclick="mt_search6('北京')" style=' cursor:pointer;'>北京</li><li onclick="mt_search6('上海')" style=' cursor:pointer;'>上海</li><li onclick="mt_search6('广东')" style=' cursor:pointer;'>广东</li><li onclick="mt_search6('浙江')" style=' cursor:pointer;'>浙江</li><li onclick="mt_search6('天津')" style=' cursor:pointer;'>天津</li><li onclick="mt_search6('重庆')" style=' cursor:pointer;'>重庆</li><li onclick="mt_search6('湖北')" style=' cursor:pointer;'>湖北</li><li onclick="mt_search6('湖南')" style=' cursor:pointer;'>湖南</li><li onclick="mt_search6('河北')" style=' cursor:pointer;'>河北</li><li onclick="mt_search6('河南')" style=' cursor:pointer;'>河南</li><li onclick="mt_search6('东北')" style=' cursor:pointer;'>东北</li><li onclick="mt_search6('山西')" style=' cursor:pointer;'>山西</li><li onclick="mt_search6('江苏')" style=' cursor:pointer;'>江苏</li><li onclick="mt_search6('江西')" style=' cursor:pointer;'>江西</li><li onclick="mt_search6('四川')" style=' cursor:pointer;'>四川</li><li onclick="mt_search6('辽宁')" style=' cursor:pointer;'>辽宁</li><li onclick="mt_search6('吉林')" style=' cursor:pointer;'>吉林</li><li onclick="mt_search6('甘肃')" style=' cursor:pointer;'>甘肃</li><li onclick="mt_search6('青海')" style=' cursor:pointer;'>青海</li><li onclick="mt_search6('海南')" style=' cursor:pointer;'>海南</li><li onclick="mt_search6('安徽')" style=' cursor:pointer;'>安徽</li><li onclick="mt_search6('福建')" style=' cursor:pointer;'>福建</li><li onclick="mt_search6('其他地区')" style=' cursor:pointer;'>其他地区</li>              </ul>
              <div style="clear:both;"></div>
              <ul class='meitilist'>
                <li  onclick="mt_search3()" style=' cursor:pointer;'>新闻源-》</li>
                <li onclick="mt_search4('百度新闻源')" style=' cursor:pointer;'>百度新闻源</li><li onclick="mt_search4('无')" style=' cursor:pointer;'>非新闻源</li>              </ul>
              <div style="clear:both;"></div>
              <ul class='meitilist'>
                <li  onclick="mt_search3()" style=' cursor:pointer;'>链接-》</li>
                <li onclick="mt_search5('可带网址')" style=' cursor:pointer;'>可带网址</li><li onclick="mt_search5('可超链接')" style=' cursor:pointer;'>可超链接</li><li onclick="mt_search5('不能带网址')" style=' cursor:pointer;'>不能带网址</li>              </ul>
              <div style="clear:both;"></div></td>
          </tr>
        </table>
        <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
              <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
                    <td><div align="center">自定义搜索：媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
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
        <div id='yixuan' class="nextpage"> &nbsp;已选媒体: <span id="yixuantr"></span>总额：<b><span id='totalmoney2'>0</span></b>元（余额：<b>0.00</b>元）
          <!--<input type="button" value=" 清 空 " onclick="clearall()" style="width:80px;height:30px; text-align:center;margin-top:3px;"/>-->
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
	$.get("search.php?a=mt_search",{
		"mc":$("#meiti_name").val(),"fl":$("#select").val(),"lj":$("#select2").val(),"xw":$("#select3").val()
	}
	,function(data){
				$("#s_meti").html(data);
	});
}

function mt_search1(id){
	$.get("search.php?a=mt_search",{
		"fl":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search2(id){
	$.get("search.php?a=mt_search",{
		"jg":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search3(id){
	$.get("search.php?a=mt_searchall",{
		"jg":"all"
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search4(id){
	$.get("search.php?a=mt_searchall",{
		"xw":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search5(id){
	$.get("search.php?a=mt_searchall",{
		"lj":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search6(id){
	$.get("search.php?a=mt_searchall",{
		"dq":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function mt_search7(id){
	$.get("search.php?a=mt_searchall",{
		"zhmh":id
	}
	,function(data){
		$("#s_meti").html(data);
	});
}

function meiturn(){
	$("#searchtrun").slideToggle();
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
	yx=yx.replace("$"+tr+"$,","");
	$("#yixuanhidden").val(yx);
	$("#xz_"+tr).attr("checked",false);
	$("#yixuantr2_"+tr).remove();
	$("#totalmoney").val(	$("#totalmoney").val()*1 - je*1 )
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