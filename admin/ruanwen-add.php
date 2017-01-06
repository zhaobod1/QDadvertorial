<?php
include ("checkuser.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理中心</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
<script type="text/javascript">
	window.focus();
	var pc_hash = 'oxB0Wa';
	</script>
<script type='text/javascript' src='../ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='../ueditor/ueditor.all.js'></script>
<link type="text/css" href="../ueditor/themes/default/css/ueditor.css"/>
</head>
<body>
<style type="text/css">
html{_overflow-y:scroll}
.background { 
display: block; 
width: 100%; 
height: 100%; 
opacity: 0.4; 
filter: alpha(opacity=40); 
background:while; 
position: absolute; 
top: 0; 
left: 0; 
z-index: 2000; 
} 
.progressBar { 
border: solid 2px #86A5AD; 
background: white url(progressBar_m.gif) no-repeat 10px 10px; 
} 
.progressBar { 
display: block; 
width: 148px; 
height: 28px; 
position: fixed; 
top: 50%; 
left: 50%; 
margin-left: -74px; 
margin-top: -14px; 
padding: 10px 10px 10px 50px; 
text-align: left; 
line-height: 27px; 
font-weight: bold; 
position: absolute; 
z-index: 2001; 
} 
 
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>软文发布<!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>--></h6>
	<div class="content"> 
     
    <form id="form1" name="form1" method="post" action="action.php?a=rwadd" onsubmit="return check()" style="display:none" >
		<input type="button" value="返回媒体选择" onclick="perpage()" style="width:100px;height:30px; text-align:center;margin-top:5px;"/>
	    <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2'>
	      <tr>
	        <td width="33%" height="30" bgcolor="#FFFFFF"><div align="center">标题</div></td>
	        <td width="67%" align="left" bgcolor="#FFFFFF" style="padding:10px;"><input name="biaoti" type="text" class="txt" id="biaoti" lang='require'  size="80" xml:lang="require" value=""/>
            <input type="hidden" name="dingdan" id="dingdan"  value=""/>（标题字数尽量控制在18个汉字内！） </td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="center">内容</div></td>
	        <td align="left" bgcolor="#FFFFFF" style="padding:10px;">
            <textarea name="neirong" id="myEditor"><BR /></textarea>
        <script type='text/javascript'>
            var editor = new UE.ui.Editor();
			textarea:'neirong';
            editor.render('myEditor');
        </script><input type="submit" name="button" id="buttonsave" value=" 提 交 "  style="width:60px; height:25px;display:none" /></td>
          </tr>
	     <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="center">金额</div></td>
	        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;">(余额：<font color="#FF0000"><b>0.00</b></font>元 )
			<font color="blue"><!--第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。--></font>
            </td>
          </tr>
        </table>
	     <tr>
         <td colspan="2"> <input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/> <input type="hidden" id='yixuanhidden' name='yixuanhidden'/> <input type="button" value="上一步" onclick="perpage()" style="width:100px;height:30px; text-align:center;margin-top:5px;"/> <input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:100px;height:30px; text-align:center;margin-top:5px;"/>
		  </td>
         </tr>
      </form>
    <br />
<div id="flselect" style="display:" >
    <!--input type="button" value="返回编辑内容" onclick="perpage()" style="width:100px;height:30px; text-align:center;margin-top:5px;"/-->
    <table width="100%" border="0" cellpadding="0" style="border:1px solid #ccc;padding-bottom:5px;">
  
  <tr>
    <td bgcolor="#FFFFFF" style="padding-left:5px;">
    <UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>媒体类型-》</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(45)>十元专区</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(44)>最新秒杀</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(43)>套餐系列</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(42)>IT-科技</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(41)>新闻资讯</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(40)>财经商业</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(39)>房产家居</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(38)>健康医疗</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(37)>酒店旅游</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(36)>教育培训</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(35)>汽车网站</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(34)>游戏网站</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(33)>娱乐休闲</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(32)>女性时尚</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(31)>生活消费</LI>
        <LI style="CURSOR: pointer" onclick=mt_search1(30)>工业贸易</LI></UL>
    <div style="clear:both;"></div>
    <UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>综合门户媒体-》</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中国广播网')">中国广播网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中国新闻网')">中国新闻网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中国经济网')">中国经济网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中国日报网')">中国日报网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('21CN网')">21CN网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('TOM网')">TOM网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('慧聪网')">慧聪网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中国网')">中国网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('新华网')">新华网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('千龙网')">千龙网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('央视网')">央视网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('人民网')">人民网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('中华网')">中华网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('凤凰网')">凤凰网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('网易网')">网易网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('腾讯网')">腾讯网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('搜狐网')">搜狐网</LI>
        <LI style="CURSOR: pointer" onclick="mt_search7('新浪网')">新浪网</LI></UL>
        <div style="clear:both;"></div>
    <UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>价格分类媒体-》</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(0)>0-40元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(1)>40-70元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(2)>70-120元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(3)>120元以上</LI></UL>
    <div style="clear:both;"></div>
	<UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>地区分类媒体-》</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('北京')">北京</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('上海')">上海</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('广东')">广东</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('浙江')">浙江</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('天津')">天津</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('重庆')">重庆</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('湖北')">湖北</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('湖南')">湖南</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('河北')">河北</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('河南')">河南</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('东北')">东北</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('山西')">山西</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('江苏')">江苏</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('江西')">江西</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('四川')">四川</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('辽宁')">辽宁</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('吉林')">吉林</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('甘肃')">甘肃</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('青海')">青海</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('海南')">海南</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('安徽')">安徽</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('福建')">福建</LI>
        <LI style="CURSOR: pointer" onclick="mt_search6('其他地区')">其他地区</LI></UL>
    <div style="clear:both;"></div>       
	<UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>新闻源-》</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('百度新闻源')">百度新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('谷歌新闻源')">谷歌新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('搜狗新闻源')">搜狗新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('360新闻源')">360新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('搜搜新闻源')">搜搜新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('无')">无</LI></UL>
    <div style="clear:both;"></div> 
    <UL class=meitilist>
        <LI style="CURSOR: pointer" onclick=mt_search3()>链接-》</LI>
        <LI style="CURSOR: pointer" onclick="mt_search5('可带网址')">可带网址</LI>
        <LI style="CURSOR: pointer" onclick="mt_search5('可超链接')">可超链接</LI>
        <LI style="CURSOR: pointer" onclick="mt_search5('不能带网址')">不能带网址</LI></UL>
    <div style="clear:both;"></div>      
  </td>
  </tr>
</table>
      
<form name="form2" id='searchtrun'>
  <br />
    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
	      <!--<tr>
	        <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
	        <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF">
            <table border="0" cellpadding="5" cellspacing="2">
	          <tr>
	            <td><div align="center">自定义搜索：媒体名称</div></td>
	            <td><input name="meiti_name" type="text" class="txt" id="meiti_name" /></td>
	            <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
	            <td></td>
	            </tr>
            </table></td>
          </tr>-->
	      <tr>
	        <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
          </tr>
        </table>
     </form>
     
<div id='yixuan' style="margin-top:5px;display:none;" >
<div style="width:60px;border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc; color:#00C; padding:5px;float:left;">已选媒体</div>
<div style="float:right;"> 总额：<font color="#FF0000"><b><span id='totalmoney2'> 0 </span>元</font></b>(余额:<font color="#FF0000"><b>0.00</b></font>元 )  
</div> 
<table width="100%" border="0" cellspacing="1" bgcolor="#CCCCCC" id='yixuantr'>
  <tr>
    <td height="30" bgcolor="#CDD3EB"><div align="center"><strong>媒体分类</strong></div></td>
    <td bgcolor="#CDD3EB"><div align="center"><strong>媒体名称</strong></div></td>
    <td bgcolor="#CDD3EB"><div align="center"><strong>链接</strong></div></td>
    <td bgcolor="#CDD3EB"><div align="center"><strong>价格</strong></div></td>
    <td bgcolor="#CDD3EB"><div align="center"><strong>操作</strong></div></td>    
  </tr> 
</table>
</div>
<input type="button" value="下一步" onclick="nextpage()" style="width:100px; height:30px; text-align:center; margin-top:5px; "/>
</div>


	</div>
</div>
	<div class="bk20 hr"></div>	
</div>
<div id="background" class="background" style="display: none; "></div> 
<div id="progressBar" class="progressBar" style="display: none; ">数据加载中，请稍等...</div> 
<iframe name="main" width="0" height="0" id="main"  frameborder="0"></iframe>
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

function setprice(val)
{
	$("#jiage").val(val*15);
}

function mt_search()
{
	$.get("../vip/../vip/search.php?a=mt_search",{"mc":$("#meiti_name").val(),"fl":$("#select").val(),"lj":$("#select2").val(),"xw":$("#select3").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("../vip/search.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("../vip/search.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("../vip/search.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("../vip/search.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("../vip/search.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("../vip/search.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("../vip/search.php?a=mt_searchall",{"zhmh":id},function(data){

		$("#s_meti").html(data);
	});
}

function meiturn()
{ 
	$("#searchtrun").slideToggle();
}
function yixuan(s1,s2,s3,s4,s5,s6,tr,id)
{
	
	
	
	var ye=0.00;
	var s7=s3;
	

	if($("#xz_"+id).attr("checked")==false) 
	{
		yixuansc(id,s7);
		return false;
	}	
	
	if(ye >= ($("#totalmoney").val()*1 + s7*1)){
		var yx=$("#yixuanhidden").val();
		$("#yixuan").show(); 
		if( yx.indexOf(tr)==-1 ) 
		{
			$("#yixuanhidden").val(tr+","+yx); 
			$("#totalmoney").val($("#totalmoney").val()*1 + s7*1)
			$("#totalmoney2").html(	$("#totalmoney2").html()*1 + s7*1)
			
			$("#yixuantr").append("<tr id='yixuantr2_"+id+"' align='center'><td height='25' bgcolor='#ffffff' align='center'>"+s1+"</td><td  bgcolor='#ffffff' align='center'>"+s2+"</td><td bgcolor='#ffffff' align='center' >"+s5+"</td><td bgcolor='#ffffff' align='center'>"+s7+"</td><td align='center' bgcolor='#ffffff' onclick=\"yixuansc('"+id+"',"+s7+")\" style='cursor:pointer'>删除</td></tr>");
		}
	}
	else
	{
		$("#biaoti")[0].focus();
		alert('余额不足,请先充值.');
		$("#xz_"+id).attr("checked",false);
		return false;
	}
		
}

function yixuansc(tr,je)
{
	var yx=$("#yixuanhidden").val();
	yx=yx.replace("$"+tr+"$,","");
	$("#yixuanhidden").val(yx); 
  	$("#xz_"+tr).attr("checked",false);
	$("#yixuantr2_"+tr).remove();
	$("#totalmoney").val( $("#totalmoney").val()*1 - je*1 )
	$("#totalmoney2").html(	$("#totalmoney2").html()*1 - je*1 )

}
function check()
    {
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
		
		if(flg==false || flg1==false)
		{
	 	    alert('红色提示为关键信息,请填写完整!');
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
		if(s7.replace("$","").replace(",","").replace(" ","")=="")
		{
			alert('未选择任何频道');
			return false;    
		} 
		
        return true;
    }  

/*
function nextpage()
{
	if($("#biaoti").val()!="")
	{
		$("#flselect").show();
		$("#form1").hide();
	}
	else
	{
		alert('请先填写标题与内容!');
	}
}

function perpage()
{
	$("#flselect").hide();
	$("#form1").show();
}
*/

function perpage()
{
	$("#flselect").show();
	$("#form1").hide();
}

function nextpage()
{
	$("#flselect").hide();
	$("#form1").show();
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
</body></html>