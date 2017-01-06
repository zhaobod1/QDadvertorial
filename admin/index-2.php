<?php
include ("checkuser.php");
include ("../include/config.php");
$fg=$_COOKIE["fg"];

$AdminUser=$_COOKIE["AdminUser"];
if($AdminUser<>""){
	$sql="select * from admin where AdminUser='".$AdminUser."'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
	if($rs!=NULL)
	{
		$yue=$rs["yue"];
		$ip=$rs["ip"];
		$data=$rs["data"];
	}
}
else{
	echo "<script>alert('对不起！您没有访问权限。');location.href='../index.php';</script>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>后台管理中心</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<link href="../images/dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
<script language="javascript" type="text/javascript" src="../images/dialog.js"></script>
<script language="javascript" type="text/javascript" src="../images/hotkeys.js"></script>
<script language="javascript" type="text/javascript" src="../images/jquery.sgallery.js"></script>
<script type="text/javascript">
var pc_hash = 'tPk1GW'
</script>
<style type="text/css">
.objbody{overflow:hidden}.btns{background-color:#666;}.btns{position:absolute;top:116px;right:30px;z-index:1000;opacity:0.6;}.btns2{background-color:rgba(0,0,0,0.5);color:#fff;padding:2px;border-radius:3px;box-shadow:0px 0px 2px #333;padding:0px 6px;border:1px solid #ddd;}.btns:hover{opacity:1;}.btns h6{padding:4px;border-bottom:1px solid #666;text-shadow:0px 0px 2px #000;}.btns .pd4{padding-top:4px;border-top:1px solid #999;}.pd4 li{border-radius:0px 6spx 0px 6px;margin-top:2px;margin-bottom:3px;padding:2px 0px;}.btns .pd4 li span{padding:0px 6px;}.pd{padding:4px;}.ac{background-color:#333;color:#fff;}.hvs{background-color:#555;cursor:pointer;}.bg_btn{width:32px;height:32px;}
body,td,th {
	font-family: 宋体;
}
</style>
</head>
<body scroll="no" class="objbody">
<div id="dvLockScreen" class="ScreenLock" style="display:none">
  <div id="dvLockScreenWin" class="inputpwd">
    <div class="input">
      <label class="lb">密码：</label>
      <input type="password" id="lock_password" class="input-text" size="24">
      <input type="submit" class="submit" value="&nbsp;" name="dosubmit" onClick="check_screenlock();return false;">
    </div>
  </div>
</div>
<div class="header">
  <div class="logo lf"><a href="index.php" title="好推手"><span class="invisible">内容管理系统</span></a></div>
  <div class="rt-col">
    <div class="tab_style white cut_line text-r">
      <ul id="Skin">
      
      </ul>
    </div>
  </div>
  <div class="col-auto">
    <div class="log white cut_line">您好！<span>|</span>所属角色：<span>|</span><a href="../logouts.php">[退出]</a><span>|</span> <a href="index.php" id="site_homepage">站点首页</a><span>|</span>企业QQ：115411360 <a href="http://wpa.qq.com/msgrd?v=3&uin=115411360&site=在线客服&menu=yes"><img src="images/qqaol.png" alt="点我咨询"></a><span>|</span><a onClick="javascript:ShowFLT(1)" href="javascript:_M(0,'info.php');">个人管理</a><span>|</span><a onClick="javascript:ShowFLT(4)" href="javascript:_TMP(11,13,'work_list.php?titleID=ask');">反馈管理</a></div>
    <ul class="nav white" id="top_menu">
      <li id="_M0" class="top_menu"><a onClick="javascript:ShowFLT(2)" href="javascript:_TMP(1,56,'meiti_list.php');"  hidefocus="true" style="outline:none;"><h3 class="f14">新闻投放</h3></a></li>
	  <li id="_M2" class="top_menu"><a onClick="javascript:ShowFLT(3)" href="javascript:_TMP(2,9,'daixie.php');" hidefocus="true" style="outline:none;">代写管理</a></li>
      <li id="_M3" class="top_menu"><a onClick="javascript:ShowFLT(5)" href="javascript:_TMP(3,16,'wyx_list.php');"  hidefocus="true" style="outline:none;">微营销</a></li>
      <li id="_M4" class="top_menu"><a onClick="javascript:ShowFLT(6)" href="javascript:_TMP(4,19,'shequ_list.php');"  hidefocus="true" style="outline:none;">社区营销</a></li>
      <li id="_M5" class="top_menu"><a onClick="javascript:ShowFLT(7)" href="javascript:_TMP(5,22,'huiyuan_list.php');" hidefocus="true" style="outline:none;">关键词营销</a></li>
	  <li id="_M6" class="top_menu"><a onClick="javascript:ShowFLT(8)" href="javascript:_TMP(6,25,'shuijun_list.php');" hidefocus="true" style="outline:none;">硬广投放</a></li>
	  <li id="_M7" class="top_menu"><a onClick="javascript:ShowFLT(9)" href="javascript:_TMP(7,28,'menhuhz_list.php');"  hidefocus="true" style="outline:none;">门户合作</a></li>
      <li id="_M8" class="top_menu"><a onClick="javascript:ShowFLT(10)" href="javascript:_TMP(8,31,'huodong_list.php');"  hidefocus="true" style="outline:none;">活动</a></li>
      <li id="_M9" class="top_menu"><a onClick="javascript:ShowFLT(11)" href="javascript:_TMP(9,34,'qunfa_list.php');"  hidefocus="true" style="outline:none;">群发</a></li>
      <li id="_M10" class="top_menu"><a onClick="javascript:ShowFLT(12)" href="javascript:_TMP(10,37,'appkf_list.php');" hidefocus="true" style="outline:none;">其他服务</a></li>
    </ul>
  </div>
</div>
<div id="content">
  <div class="col-left left_menu">
    <div id="Scroll" style="OVERFLOW-Y: auto; OVERFLOW-X:hidden">
      <div id="leftMain"></div>
    </div>
    <a href="javascript:;" id="openClose" style="outline-style: none; outline-color: invert; outline-width: medium;" hideFocus="hidefocus" class="open" title="展开与关闭"><span class="hidden">展开</span></a> </div>
  <div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
    <div class="content">
      <iframe name="center_frame" id="center_frame" src="" frameborder="false" scrolling="auto" style="border:none" width="100%" height="auto" allowtransparency="true"></iframe>
    </div>
  </div>
  <div class="col-auto mr8">
    <div class="crumbs">
      <div class="shortcut cu-span"></div>
      当前位置：<span id="current_pos">系统首页</span></div>
    <div class="col-1">
      <div class="content" style="position:relative; overflow:hidden">
        <iframe name="right" id="rightMain" src="right.php" frameborder="false" scrolling="auto" style="border:none; margin-bottom:0px" width="100%" height="auto" allowtransparency="true"></iframe> 
      </div>
    </div>
  </div>
</div> 
<script type="text/javascript"> 
if(!Array.prototype.map)
Array.prototype.map = function(fn,scope) {
  var result = [],ri = 0;
  for (var i = 0,n = this.length; i < n; i++){
	if(i in this){
	  result[ri++]  = fn.call(scope ,this[i],i,this);
	}
  }
return result;
};

var getWindowSize = function(){
return ["Height","Width"].map(function(name){
  return window["inner"+name] ||
	document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
});
}
window.onload = function (){
	if(!+"\v1" && !document.querySelector) { // for IE6 IE7
	  document.body.onresize = resize;
	} else { 
	  window.onresize = resize;
	}
	function resize() {
		wSize();
		return false;
	}
}
function wSize(){
	//这是一字符串
	var str=getWindowSize();
	var strs= new Array(); //定义一数组
	strs=str.toString().split(","); //字符分割
	var heights = strs[0]-150,Body = $('body');$('#rightMain').height(heights);   
	//iframe.height = strs[0]-46;
	if(strs[1]<980){
		$('.header').css('width',980+'px');
		$('#content').css('width',980+'px');
		Body.attr('scroll','');
		Body.removeClass('objbody');
	}else{
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		Body.attr('scroll','no');
		Body.addClass('objbody');
	}
	
	var openClose = $("#rightMain").height()+39;
	$('#center_frame').height(openClose+9);
	$("#openClose").height(openClose+30);	
	$("#Scroll").height(openClose-20);
	windowW();
}
wSize();
function windowW(){
	if($('#Scroll').height()<$("#leftMain").height()){
		$(".scroll").show();
	}else{
		$(".scroll").hide();
	}
}
windowW();
//站点下拉菜单
$(function(){
	var offset = $(".tab_web").offset();
	var tab_web_panel = $(".tab-web-panel");
	$(".tab_web").mouseover(function(){
			tab_web_panel.css({ "left": +$(this).offset().left+4, "top": +offset.top+$('.tab_web').height()});
			tab_web_panel.show();
			if(tab_web_panel.height() > 200){
				tab_web_panel.children("ul").addClass("tab-scroll");
			}
		});
	$(".tab_web span").mouseout(function(){hidden_site_list_1()});
	$(".tab-web-panel").mouseover(function(){clearh();$('.tab_web a').addClass('on')}).mouseout(function(){hidden_site_list_1();$('.tab_web a').removeClass('on')});
	//默认载入左侧菜单
	$("#leftMain").load("left.php?menuid=0");

	//面板切换
	$("#btnx").removeClass("btns2");
	$("#Site_model,#btnx h6").css("display","none");
	$("#btnx").hover(function(){$("#Site_model,#btnx h6").css("display","block");$(this).addClass("btns2");$(".bg_btn").hide();},function(){$("#Site_model,#btnx h6").css("display","none");$(this).removeClass("btns2");$(".bg_btn").show();});
	$("#Site_model li").hover(function(){$(this).toggleClass("hvs");},function(){$(this).toggleClass("hvs");});
	$("#Site_model li").click(function(){$("#Site_model li").removeClass("ac"); $(this).addClass("ac");});
})
    //左侧开关
$("#openClose").click(function(){
	if($(this).data('clicknum')==1) {
		$("html").removeClass("on");
		$(".left_menu").removeClass("left_menu_on");
		$(this).removeClass("close");
		$(this).data('clicknum', 0);
		$(".scroll").show();
	} else {
		$(".left_menu").addClass("left_menu_on");
		$(this).addClass("close");
		$("html").addClass("on");
		$(this).data('clicknum', 1);
		$(".scroll").hide();
	}
	return false;
});

function _M(menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#bigid").val(menuid);
	$("#leftMain").load("left.php?menuid="+menuid, {limit: 25}, function(){
			   windowW();
			 });
	$("#rightMain").attr('src', targetUrl);
	$('.top_menu').removeClass("on");
	$('#_M'+menuid).addClass("on");
	
	switch(menuid)
	{
		case 0:
		$("#current_pos").html("后台管理 > 后台首页");
		break;
		case 1:
		$("#current_pos").html("新闻投放 > 软文发布");
		break;	
		case 2:
		$("#current_pos").html("会员管理 > 提现申请");
		break;		
		case 3:
		$("#current_pos").html("代写管理 > 代写发布");
		break;		
		case 4:
		$("#current_pos").html("新闻投放 > 软文价格");
		break;	
		case 5:
		$("#current_pos").html("会员管理 > 个人信息");
		break;
		case 6:
		$("#current_pos").html("反馈管理 > 问题反馈");
		break;		
		case 7:
		$("#current_pos").html("会员管理 > 在线充值");
		break;	
		case 8:
		$("#current_pos").html("后台管理 > 后台首页");
		break;
	}
	//当点击顶部菜单后，隐藏中间的框架
	$('#display_center_id').css('display','none');
	//显示左侧菜单，当点击顶部时，展开左侧
	$(".left_menu").removeClass("left_menu_on");
	$("#openClose").removeClass("close");
	$("html").removeClass("on");
	$("#openClose").data('clicknum', 0);
	//$("#current_pos").data('clicknum', 1);
}
function _MP(menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>添加</em></a>');

	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP'+menuid).addClass("on fb blue");

	switch(menuid)
	{
		case 1:
			$("#current_pos").html("会员管理 > 在线充值");
			break;
		case 2:
			$("#current_pos").html("会员管理 > 提现申请");
			break;
		case 3:
			$("#current_pos").html("会员管理 > 提现记录");
			break;
		case 4:
			$("#current_pos").html("会员管理 > 财务报表");
			break;
		case 5:
			$("#current_pos").html("会员管理 > 修改密码");
			break;
		case 6:
			$("#current_pos").html("新闻投放 > 软文发布");
			break;
		case 7:
			$("#current_pos").html("新闻投放 > 软文列表");
			break;
		case 8:
			$("#current_pos").html("代写管理 > 代写发布");
			break;
		case 9:
			$("#current_pos").html("代写管理 > 代写列表");
			break;
		case 10:
			$("#current_pos").html("媒介管理 > 出稿处理");
			break;
		case 11:
			$("#current_pos").html("媒介管理 > 媒体资源管理");
			break;
		case 12:
			$("#current_pos").html("反馈管理 > 发票申请");
			break;
		case 13:
			$("#current_pos").html("反馈管理 > 问题反馈");
			break;
		case 14:
			$("#current_pos").html("微营销 > 任务发布");
			break;
		case 15:
			$("#current_pos").html("微营销 > 任务列表");
			break;
		case 16:
			$("#current_pos").html("微营销 > 资源列表");
			break;
		case 17:
			$("#current_pos").html("社区管理 > 任务发布");
			break;
		case 18:
			$("#current_pos").html("社区管理 > 任务列表");
			break;
		case 19:
			$("#current_pos").html("社区管理 > 资源列表");
			break;
		case 20:
			$("#current_pos").html("关键词营销 > 任务发布");
			break;
		case 21:
			$("#current_pos").html("关键词营销 > 任务列表");
			break;
		case 22:
			$("#current_pos").html("关键词营销 > 资源列表");
			break;
		case 23:
			$("#current_pos").html("硬广投放 > 任务发布");
			break;
		case 24:
			$("#current_pos").html("硬广投放 > 任务列表");
			break;
		case 25:
			$("#current_pos").html("硬广投放 > 资源列表");
			break;
		case 26:
			$("#current_pos").html("门户合作 > 任务发布");
			break;
		case 27:
			$("#current_pos").html("门户合作 > 任务列表");
			break;
		case 28:
			$("#current_pos").html("门户合作 > 资源列表");
			break;
		case 29:
			$("#current_pos").html("活动 > 任务发布");
			break;
		case 30:
			$("#current_pos").html("活动 > 任务列表");
			break;
		case 31:
			$("#current_pos").html("活动 > 资源列表");
			break;
		case 32:
			$("#current_pos").html("群发 > 任务发布");
			break;
		case 33:
			$("#current_pos").html("群发 > 任务列表");
			break;
		case 34:
			$("#current_pos").html("群发 > 资源列表");
			break;
		case 35:
			$("#current_pos").html("其他服务 > 任务发布");
			break;
		case 36:
			$("#current_pos").html("其他服务 > 任务列表");
			break;
		case 37:
			$("#current_pos").html("其他服务 > 资源列表");
			break;
		case 50:
			$("#current_pos").html("反馈管理 > 问题反馈列表");
			break;
	}
}
function _TMP(topmenuid,menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>添加</em></a>');

	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP'+menuid).addClass("on fb blue");
	$('.top_menu').removeClass("on");
	$('#_M'+topmenuid).addClass("on");

	switch(menuid)
	{
		case 1:
			$("#current_pos").html("会员管理 > 在线充值");
			break;
		case 2:
			$("#current_pos").html("会员管理 > 提现申请");
			break;
		case 3:
			$("#current_pos").html("会员管理 > 提现记录");
			break;
		case 4:
			$("#current_pos").html("会员管理 > 财务报表");
			break;
		case 5:
			$("#current_pos").html("会员管理 > 修改密码");
			break;
		case 6:
			$("#current_pos").html("新闻投放 > 软文发布");
			break;
		case 7:
			$("#current_pos").html("新闻投放 > 软文列表");
			break;
		case 8:
			$("#current_pos").html("代写管理 > 代写发布");
			break;
		case 9:
			$("#current_pos").html("代写管理 > 代写列表");
			break;
		case 10:
			$("#current_pos").html("媒介管理 > 出稿处理");
			break;
		case 11:
			$("#current_pos").html("媒介管理 > 媒体资源管理");
			break;
		case 12:
			$("#current_pos").html("反馈管理 > 发票申请");
			break;
		case 13:
			$("#current_pos").html("反馈管理 > 问题反馈");
			break;
		case 14:
			$("#current_pos").html("微营销 > 任务发布");
			break;
		case 15:
			$("#current_pos").html("微营销 > 任务列表");
			break;
		case 16:
			$("#current_pos").html("微营销 > 资源列表");
			break;
		case 17:
			$("#current_pos").html("社区管理 > 任务发布");
			break;
		case 18:
			$("#current_pos").html("社区管理 > 任务列表");
			break;
		case 19:
			$("#current_pos").html("社区管理 > 资源列表");
			break;
		case 20:
			$("#current_pos").html("关键词营销 > 任务发布");
			break;
		case 21:
			$("#current_pos").html("关键词营销 > 任务列表");
			break;
		case 22:
			$("#current_pos").html("关键词营销 > 资源列表");
			break;
		case 23:
			$("#current_pos").html("硬广投放 > 任务发布");
			break;
		case 24:
			$("#current_pos").html("硬广投放 > 任务列表");
			break;
		case 25:
			$("#current_pos").html("硬广投放 > 资源列表");
			break;
		case 26:
			$("#current_pos").html("门户合作 > 任务发布");
			break;
		case 27:
			$("#current_pos").html("门户合作 > 任务列表");
			break;
		case 28:
			$("#current_pos").html("门户合作 > 资源列表");
			break;
		case 29:
			$("#current_pos").html("活动 > 任务发布");
			break;
		case 30:
			$("#current_pos").html("活动 > 任务列表");
			break;
		case 31:
			$("#current_pos").html("活动 > 资源列表");
			break;
		case 32:
			$("#current_pos").html("群发 > 任务发布");
			break;
		case 33:
			$("#current_pos").html("群发 > 任务列表");
			break;
		case 34:
			$("#current_pos").html("群发 > 资源列表");
			break;
		case 35:
			$("#current_pos").html("其他服务 > 任务发布");
			break;
		case 36:
			$("#current_pos").html("其他服务 > 任务列表");
			break;
		case 37:
			$("#current_pos").html("其他服务 > 资源列表");
			break;
		case 50:
			$("#current_pos").html("反馈管理 > 问题反馈列表");
			break;
	}
}
setInterval("session_life()", 160000);
function session_life() {
	$.get("main.php?a=session");
}
</script>
</body>
</html>