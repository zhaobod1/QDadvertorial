<?php
include("checkuser.php");
include("../include/config.php");
include("../include/function.php");
$fg = $_COOKIE["fg"];

$VipUser = $_COOKIE["VipUser"];
$sql = "select * from user where VipUser='" . $VipUser . "'";
$result = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($result);
if ($rs != NULL) {
	$yue = $rs["yue"];
	$tyue = $rs["tyue"];
	$txyue = $yue - $tyue;
	$ip = $rs["ip"];
	$data = $rs["data"];
}
?>
<HTML>
<HEAD><TITLE>后台管理中心</TITLE>
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<META content=IE=7 http-equiv=X-UA-Compatible>
	<LINK rel=stylesheet type=text/css href="../images/reset.css">
	<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
	<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
	<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>
	<SCRIPT type=text/javascript>
		window.focus();
		var pc_hash = 'oxB0Wa';
	</SCRIPT>

	<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
		_overflow-y: scroll
	}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid
     class="pad-10 display">
	<DIV class="col-2  col-auto">
		<H6>我的个人信息</H6>
		<DIV class=content>
			<div width="120px" style="float:left;padding-top:3px;padding-bottom:5px;"><img
					src="<?php echo $rs["headpic"]; ?>" border="0" width="110" height="110"><br><a
					href="info.php">编辑资料</a> | <a href="info.php">修改头像</a></div>
			<div width="830px" style="float:left;margin-left:8px;"><?php echo $_COOKIE["VipUser"]; ?>，欢迎您！<BR>所属角色：<?php
				echo userIdentity($fg);
				?> <BR>账号余额：<b
					style='color:#FF0000'><?php echo $rs["yue"]; ?></b>元<?php if ($_COOKIE["fg"] == 2) { ?>，可提现金额：<b
					style='color:#FF0000'><?php echo $txyue; ?></b>元<?php } ?><a href="chongzhi.php"><img
						src="../images/chongzhi.gif" border="0" width="27" height="15"></a><BR>
				<DIV class="bk20 hr">
					<HR>
				</DIV>
				上次登录时间：<?php echo $data; ?><BR>上次登录IP：<?php echo $ip; ?> <BR></div>
		</DIV>
	</DIV>
	<DIV class="bk20 hr"></DIV>
	<DIV style="WIDTH: 48%" class="col-2 lf mr10">
		<H6>资讯中心</H6>
		<DIV class=content>
			<?php
			$sqls = "select * from news_info where class_id=28 order by ID asc limit 0,2";
			$results = mysql_db_query($dbname, $sqls);
			while ($rss = mysql_fetch_array($results)) {
				?>
				<P style="BORDER-BOTTOM: #ccc 1px dotted; PADDING-BOTTOM: 5px; HEIGHT: 25px; CLEAR: both"><SPAN
						style="FLOAT: left">※ <A style="COLOR: #f00"
				                                 href="../news/newsinfo.php?ID=<?php echo $rss["ID"]; ?>"
				                                 target="_blank"><?php echo $newsOB->utfSubstr($rss["title"], 0, 80); ?></A></SPAN>
					<EM style="FLOAT: right"><?php echo $rss["data"]; ?></EM></P>
				<?php
			} ?>
		</DIV>
	</DIV>
	<DIV class="col-2 col-auto">
		<H6>发稿帮助</H6>
		<DIV class=content>
			<?php
			$sqls = "select * from news_info where class_id=29 order by ID asc limit 0,2";
			$results = mysql_db_query($dbname, $sqls);
			while ($rss = mysql_fetch_array($results)) {
				?>
				<P style="BORDER-BOTTOM: #ccc 1px dotted; PADDING-BOTTOM: 5px; HEIGHT: 25px; CLEAR: both"><SPAN
						style="FLOAT: left">※ <A style="COLOR: #f00"
				                                 href="../news/newsinfo.php?ID=<?php echo $rss["ID"]; ?>"
				                                 target="_blank"><?php echo $newsOB->utfSubstr($rss["title"], 0, 80); ?></A></SPAN>
					<EM style="FLOAT: right"><?php echo $rss["data"]; ?></EM></P>
				<?php
			} ?>
		</DIV>
	</DIV>

	<div class="col-2 col-auto infocon3">
		<h6>后台快速使用步骤</h6>
		<div class="content">
			<p><b>Step1：注册账号</b> <a target="_blank" href="http://www.ruanwenztc.com">http://www.ruanwenztc.com</a>，填写账号、密码、联系方式，点击[提交]完成注册</p>
			<p><b>Step2：预存款项</b> 登陆后台，点击[在线充值]，选择您的支付方式充值，充值发布文章费用</p>
			<p><b>Step3：开始发稿</b> 点击[软文发布]，填写标题、内容，点击[下一步]，选择您要发布的媒体，点击[提交]完成发布</p>
			<p><b>Step4：查看软文</b> 点击[软文管理]，查看软文发布状态，软文发布成功后后台会显示链接，发布时间24小时内</p>
			<p><b>Step5：售后服务</b> 如果您的软文发布没有发布成功不收费，如您有任何疑问有，可以通过后台显示的QQ联系我们</p>
			<p><b>Step6：软文代写</b> 如果您没有准备软文，点击[软文代写]，填写代写要求，工作时间2日内交稿，不满意可重写</p>

		</div>
	</div>
	<style>
		.infocon3 {
			padding: 10px;
			font-size: 14px;
			color: #777;
		}
		.infocon3{padding:10px;font-size:14px;color:#777;}
		.infocon3 p{line-height:30px;border-bottom:1px dashed #ddd;}
		.infocon3 p b{font-weight:bold;color:#FF9900;margin-right:15px;font-size:14px;}
	</style>

</DIV>
</BODY>
</HTML>
