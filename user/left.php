<?php
include("../include/config.php");
include("checkuser.php");
$fg = $_COOKIE["fg"];
?>
<HTML>
<HEAD>
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<META name=GENERATOR content="MSHTML 8.00.6001.19394">
	<script language='javascript'>var curopenItem = '1';</script>
	<script language="javascript" type="text/javascript" src="skin/js/frame/menu.js"></script>
</HEAD>
<BODY>
<script language="JavaScript" type="text/javascript" id="clientEventHandlersJS">
	<!--
	var number = 4;

	function LMYC() {
		var lbmc;
//var treePic;
		for (i = 1; i <= number; i++) {
			lbmc = eval('LM' + i);
			//treePic = eval('treePic'+i);
			//treePic.src = 'images/file.gif';
			lbmc.style.display = 'none';
		}
	}

	function ShowFLT(i) {
		lbmc = eval('LM' + i);
		//treePic = eval('treePic' + i)
		if (lbmc.style.display == 'none') {
			LMYC();
			//treePic.src = 'images/nofile.gif';
			lbmc.style.display = '';
		}
		else {
			//treePic.src = 'images/file.gif';
			lbmc.style.display = 'none';
		}
	}
	//-->
</script>
<style>
	.left_menu {
		background: #0181b6;
	}
	.left_menu h3 {
		color: #ffce44;
	}
	.left_menu ul li a {
		background: #1ea6de;
		color:#fff;
	}
	.left_menu ul li a:hover {
		color:#0181b6;
	}
	.left_menu ul li.on a {
		color:#333;
	}

</style>
<a onclick="javascript:ShowFLT(1)" href="javascript:void(null)">
	<h3 class="f14">
		<span class="switchs cu on" title="展开与收缩"></span>
		个人管理
	</h3>
</a>
<ul id="LM1">
	<?php
	if ($fg == "2") {
		?>
		<li id="_MP2" class="sub_menu"><a href="javascript:_MP(2,'tixian.php');" hidefocus="true" style="outline:none;">我要提现</a>
		</li>
		<li id="_MP3" class="sub_menu"><a href="javascript:_MP(3,'tixianlist.php');" hidefocus="true"
		                                  style="outline:none;">提现记录</a></li>
		<?php
	} else {
		?>
		<li id="_MP1" class="sub_menu"><a href="javascript:_MP(1,'chongzhi.php');" hidefocus="true"
		                                  style="outline:none;">我要充值</a></li>
	<?php } ?>
	<li id="_MP4" class="sub_menu"><a href="javascript:_MP(4,'caiwu.php');" hidefocus="true"
	                                  style="outline:none;">财务报表</a></li>
	<li id="_MP5" class="sub_menu"><a href="javascript:_MP(5,'editpass.php');" hidefocus="true" style="outline:none;">修改密码</a>
	</li>
</ul>
<?php
if ($fg != "2") {
	?>
	<a onclick="javascript:ShowFLT(2)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
	                                                                                      title="展开与收缩"></span>软文管理</h3>
	</a>
	<ul id="LM2" style="DISPLAY: none">
		<li id="_MP6" class="sub_menu"><a href="javascript:_MP(6,'ruanwen_add.php');" hidefocus="true"
		                                  style="outline:none;">软文发布</a></li>
		<li id="_MP7" class="sub_menu"><a href="javascript:_MP(7,'ruanwen.php');" hidefocus="true"
		                                  style="outline:none;">软文列表</a></li>
	</ul>
	<a onclick="javascript:ShowFLT(3)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
	                                                                                      title="展开与收缩"></span>代写管理</h3>
	</a>
	<ul id="LM3" style="DISPLAY: none">
		<li id="_MP8" class="sub_menu"><a href="javascript:_MP(8,'daixie_add.php');" hidefocus="true"
		                                  style="outline:none;">代写发布</a></li>
		<li id="_MP9" class="sub_menu"><a href="javascript:_MP(9,'daixie.php');" hidefocus="true" style="outline:none;">代写列表</a>
		</li>
	</ul>
	<!--王庆路 添加微信营销-->
	<a onclick="javascript:ShowFLT(5)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
	                                                                                      title="展开与收缩"></span>微信营销</h3>
	</a>
	<ul id="LM5" style="DISPLAY: none">
		<li id="_MP37" class="sub_menu"><a href="javascript:_MP(37,'wechat_price.php');" hidefocus="true"
		                                   style="outline:none;">微信报价</a></li>
		<li id="_MP38" class="sub_menu"><a href="javascript:_MP(38,'wechat_add.php');" hidefocus="true"
		                                   style="outline:none;">微信发布</a></li>
		<li id="_MP39" class="sub_menu"><a href="javascript:_MP(39,'wechat.php');" hidefocus="true"
		                                   style="outline:none;">微信列表</a></li>
	</ul>
	<!--王庆路 添加微信营销 end-->
<?php } elseif ($fg == "2") {
	?>
	<a onclick="javascript:ShowFLT(2)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
	                                                                                      title="展开与收缩"></span>订单管理</h3>
	</a>
	<ul id="LM2" style="DISPLAY: none">
		<!--li id="_MP6" class="sub_menu"><a href="javascript:_MP(6,'ruanwen_add.php');" hidefocus="true" style="outline:none;">任务发布</a></li-->
		<li id="_MP7" class="sub_menu"><a href="javascript:_MP(7,'ruanwen_list.php');" hidefocus="true"
		                                  style="outline:none;">订单列表</a></li>
	</ul>
	<a onclick="javascript:ShowFLT(3)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
	                                                                                      title="展开与收缩"></span>媒介管理</h3>
	</a>
	<ul id="LM3" style="DISPLAY: none">
		<!--li id="_MP10" class="sub_menu"><a href="javascript:_MP(10,'ruanwen_list.php');" hidefocus="true" style="outline:none;">出稿处理</a></li-->
		<li id="_MP11" class="sub_menu"><a href="javascript:_MP(11,'website_list.php');" hidefocus="true"
		                                   style="outline:none;">媒体资源管理</a></li>
		<li id="_MP12" class="sub_menu"><a href="javascript:_MP(12,'addmtbigclass.php?titleID=media');" hidefocus="true"
		                                   style="outline:none;">添加媒体资源</a></li>
	</ul>
<?php } else {
	echo "<script>alert('对不起！您没有使用权限，请联系管理员。');location.href='logout.php';</script>";
} ?>
<a onclick="javascript:ShowFLT(4)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on"
                                                                                      title="展开与收缩"></span>反馈管理</h3></a>
<ul id="LM4" style="DISPLAY: none">
	<li id="_MP13" class="sub_menu"><a href="javascript:_MP(13,'work_add.php?titleID=ask');" hidefocus="true"
	                                   style="outline:none;">问题反馈</a></li>
	<li id="_MP14" class="sub_menu"><a href="javascript:_MP(14,'work_list.php?titleID=ask');" hidefocus="true"
	                                   style="outline:none;">反馈列表</a></li>
</ul>
</BODY>
</HTML>
