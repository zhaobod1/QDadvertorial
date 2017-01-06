<?php
include ("checkuser.php");
//include ("../include/config.php");
$fg=$_COOKIE["fg"];
$AdminUser=$_COOKIE["AdminUser"];
if($AdminUser<>""){
	$yue=0;
	$ip=$_COOKIE["ips"];
	$data=$_COOKIE["dt"];
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
.objbody{overflow:hidden;position:relative;top:-20px}.btns{background-color:#666;}.btns{position:absolute;top:116px;right:30px;z-index:1000;opacity:0.6;}.btns2{background-color:rgba(0,0,0,0.5);color:#fff;padding:2px;border-radius:3px;box-shadow:0px 0px 2px #333;padding:0px 6px;border:1px solid #ddd;}.btns:hover{opacity:1;}.btns h6{padding:4px;border-bottom:1px solid #666;text-shadow:0px 0px 2px #000;}.btns .pd4{padding-top:4px;border-top:1px solid #999;}.pd4 li{border-radius:0px 6spx 0px 6px;margin-top:2px;margin-bottom:3px;padding:2px 0px;}.btns .pd4 li span{padding:0px 6px;}.pd{padding:4px;}.ac{background-color:#333;color:#fff;}.hvs{background-color:#555;cursor:pointer;}.bg_btn{width:32px;height:32px;}
</style>
</head>
<body scroll="no" class="objbody">
<div id="dvLockScreen" class="ScreenLock" style="display:none">
  <div id="dvLockScreenWin" class="inputpwd">
    <div class="input">
      <label class="lb">密码：</label>
      <input type="password" id="lock_password" class="input-text" size="24">
      <input type="submit" class="submit" value="&nbsp;" name="dosubmit" onclick="check_screenlock();return false;">
    </div>
  </div>
</div>
<div class="header">
  <div class="logo lf"><a href="index.php"><span class="invisible">内容管理系统</span></a></div>
  <div class="rt-col">
    <div class="tab_style white cut_line text-r">
      <ul id="Skin">
      
      </ul>
    </div>
  </div>
  <div class="col-auto">
    <div class="log white cut_line">您好！<?php echo $_COOKIE["AdminUser"];?><span>|</span>所属角色：<?php
		switch($fg)
		{
		 case "1":
			echo "站长";
			break;
		 case "2":
			echo "副站长";
			break;
		 case "3":
			echo "检查员";
			break;
		 default:
			echo "数据管理员";
		}
		?><span>|</span><a href="../logouts.php">[退出]</a><span>|</span> <a href="/" target="_blank" id="site_homepage">站点首页</a><span>|</span>企业QQ：<?php echo $qq;?> <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq;?>&site=在线客服&menu=yes"><img src="images/qqaol.png" alt="点我咨询"></a></div>
    <ul class="nav white" id="top_menu">
      <!--li id="_M1" class="top_menu"><a href="javascript:_M(1,'ruanwen_add.php')" hidefocus="true" style="outline:none;">软文发布</a></li>
      <li id="_M2" class="top_menu"><a href="javascript:_M(2,'daixie_add.php')"  hidefocus="true" style="outline:none;">代写文章</a></li>
      <li id="_M3" class="top_menu"><a href="javascript:_M(3,'../vip/index_1.php')"  hidefocus="true" style="outline:none;">软文价格</a></li>
      <!--li id="_M4" class="top_menu"><a href="javascript:_M(4,'info.php')"  hidefocus="true" style="outline:none;">个人信息</a></li>
      <li id="_M5" class="top_menu"><a href="javascript:_M(5,'work_add.php?titleID=ask')"  hidefocus="true" style="outline:none;">问题反馈</a><>
      <li id="_M6" class="top_menu"><a href="javascript:_M(6,'chongzhi.php')"  hidefocus="true" style="outline:none;">在线充值</a></li/li--> 
      <li id="_M7" class="on top_menu"><a href="javascript:_M(7,'rights.php')" hidefocus="true" style="outline:none;">后台首页</a></li>
      
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
        <iframe name="right" id="rightMain" src="rights.php" frameborder="false" scrolling="auto" style="border:none; margin-bottom:10px" width="100%" height="auto" allowtransparency="true"></iframe>
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
	var heights = strs[0]-130,Body = $('body');$('#rightMain').height(heights);   
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
	
	var openClose = $("#rightMain").height()+59;
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
	$("#leftMain").load("lefts.php?menuid=0");

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
	$("#leftMain").load("lefts.php?menuid="+menuid, {limit: 25}, function(){
			   windowW();
			 });
	$("#rightMain").attr('src', targetUrl);
	$('.top_menu').removeClass("on");
	$('#_M'+menuid).addClass("on");
	
	switch(menuid)
	{
		case 1:
		$("#current_pos").html("软文管理 > 软文发布");
		break;	
		case 2:
		$("#current_pos").html("代写管理 > 代写发布");
		break;		
		case 3:
		$("#current_pos").html("软文管理 > 软文价格");
		break;		
		case 4:
		$("#current_pos").html("会员管理 > 个人信息");
		break;	
		case 5:
		$("#current_pos").html("反馈管理 > 问题反馈");
		break;
		case 6:
		$("#current_pos").html("会员管理 > 在线充值");
		break;
		case 7:
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
		$("#current_pos").html("会员管理 > 提现记录");
		break;
		case 3:
		$("#current_pos").html("会员管理 > 财务报表");
		break;
		case 4:
		$("#current_pos").html("会员管理 > 修改密码");
		break;
		case 5:
		$("#current_pos").html("会员管理 > 会员列表");
		break;
		case 6:
		$("#current_pos").html("软文管理 > 软文发布");
		break;
		case 7:
		$("#current_pos").html("软文管理 > 软文列表");
		break;
		case 8:
		$("#current_pos").html("代写管理 > 代写发布");
		break;
		case 9:
		$("#current_pos").html("代写管理 > 代写列表");
		break;
		case 10:
		$("#current_pos").html("资讯管理 > 资讯类型管理");
		break;
		case 11:
		$("#current_pos").html("资讯管理 > 添加资讯信息");
		break;
		case 12:
		$("#current_pos").html("资讯管理 > 管理资讯信息");
		break;
		case 13:
		$("#current_pos").html("反馈管理 > 问题反馈");
		break;
		case 14:
		$("#current_pos").html("媒体管理 > 媒体大类管理");
		break;
		case 15:
		$("#current_pos").html("媒体管理 > 媒体小类管理");
		break;
		case 16:
		$("#current_pos").html("媒体管理 > 媒体地区管理");
		break;
		case 17:
		$("#current_pos").html("媒体管理 > 门户媒体管理");
		break;
		case 18:
		$("#current_pos").html("媒体管理 > 添加媒体资源");
		break;
		case 19:
		$("#current_pos").html("媒体管理 > 管理媒体资源");
		break;
		case 20:
		$("#current_pos").html("媒体管理 > 待审媒体资源");
		break;
		case 21:
		$("#current_pos").html("媒体管理 > 媒体批量改价");
		break;
		case 22:
		$("#current_pos").html("网站管理 > 网站信息设置");
		break;
		case 23:
		$("#current_pos").html("网站管理 > 管理帐号设置");
		break;
		case 24:
		$("#current_pos").html("网站管理 > 银行帐号设置");
		break;
		case 25:
		$("#current_pos").html("网站管理 > 充值支付宝设置");
		break;
		case 26:
		$("#current_pos").html("网站管理 > 联系我们设置");
		break;
		case 27:
		$("#current_pos").html("栏目设置 > 栏目添加维护");
		break;
		case 28:
		$("#current_pos").html("链接管理 > 友情链接管理");
		break;
		case 29:
		$("#current_pos").html("数据管理 > 备份数据库");
		break;
		case 30:
		$("#current_pos").html("数据管理 > 还原数据库");
		break;
		case 31:
		$("#current_pos").html("微营销 > 任务发布");
		break;
		case 32:
		$("#current_pos").html("微营销 > 任务列表");
		break;
		case 33:
		$("#current_pos").html("微营销 > 资源列表");
		break;
		case 34:
		$("#current_pos").html("社区管理 > 任务发布");
		break;
		case 35:
		$("#current_pos").html("社区管理 > 任务列表");
		break;
		case 36:
		$("#current_pos").html("社区管理 > 资源列表");
		break;
		case 37:
		$("#current_pos").html("会员管理 > 任务发布");
		break;
		case 38:
		$("#current_pos").html("会员管理 > 任务列表");
		break;
		case 39:
		$("#current_pos").html("会员管理 > 资源列表");
		break;
		case 40:
		$("#current_pos").html("水军管理 > 任务发布");
		break;
		case 41:
		$("#current_pos").html("水军管理 > 任务列表");
		break;
		case 42:
		$("#current_pos").html("水军管理 > 资源列表");
		break;
		case 43:
		$("#current_pos").html("门户合作 > 任务发布");
		break;
		case 44:
		$("#current_pos").html("门户合作 > 任务列表");
		break;
		case 45:
		$("#current_pos").html("门户合作 > 资源列表");
		break;
		case 46:
		$("#current_pos").html("活动管理 > 任务发布");
		break;
		case 47:
		$("#current_pos").html("活动管理 > 任务列表");
		break;
		case 48:
		$("#current_pos").html("活动管理 > 资源列表");
		break;
		case 49:
		$("#current_pos").html("群发管理 > 任务发布");
		break;
		case 50:
		$("#current_pos").html("群发管理 > 任务列表");
		break;
		case 51:
		$("#current_pos").html("群发管理 > 资源列表");
		break;
		case 52:
		$("#current_pos").html("应用开发 > 任务发布");
		break;
		case 53:
		$("#current_pos").html("应用开发 > 任务列表");
		break;
		case 54:
		$("#current_pos").html("应用开发 > 资源列表");
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