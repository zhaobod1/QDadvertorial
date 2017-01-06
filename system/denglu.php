<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2016/11/1
 * Time: 上午8:07
 */
session_start();
require_once("../rand.inc.php");
include("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>登录_<?php echo $webname;?></title>
	<meta name="keywords" content="<?php echo $H_KeyWords;?>"/>
	<meta name="description" content="<?php echo $H_Descr;?>"/>
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="../huo15template/css/normalize.css">
	<link rel="stylesheet" href="../huo15template/css/main.css">
	<script src="../huo15template/js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- Bootstrap -->
	<link href="../huo15template/static/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<!--公共样式-->
	<link rel="stylesheet" href="../huo15template/css/base.css">
	<link rel="stylesheet" href="../huo15template/css/style.css">
	<!--公共样式 end-->
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->




<?php
include("../header.php");
include("../menu.php");
?>


<!--main-->
<div class="writes clearfix">
	<style>
		.denglu_l {
			width: 580px;
			padding-left: 18px;
			padding-right: 37px;
			_padding-right: 27px;
			float: left;
		}
		.denglu_b {
			width: 580px;
			height: 90px;
			padding-bottom: 6px;
			margin-bottom: 14px;
			color: #fff;
		}
		.denglu_b h2 {
			font-size: 18px;
			line-height: 40px;
			margin-bottom: 6px;
			font-weight: bold;
			margin-left: 35px;
		}
		.denglu_b p {
			margin-left: 35px;
		}
	</style>
	<div class="banner" style="background:url(/images/banner_bg.png) no-repeat center top; height:550px;">
		<div class="wrapper">
			<div class="denglu_l" style="padding-left:0px; padding-top:50px; ">
				<div class="denglu_b ">
					<h2>平台简介</h2>
					<p>国内信任的软文发布平台，合作网站媒体1000余家，日发稿3000篇以上，服务企业客户5000余家，专注于新闻推广。</p>
				</div>
				<div class="denglu_b">
					<h2>优势发稿</h2>
					<p>五年软文推广经验和资源积累，一站式透明的资源采购价格，为企业节省大量人力成本和新闻采购成本。</p>
				</div>
				<div class="denglu_b">
					<h2>方便快捷</h2>
					<p>在本站注册账号、充值所需稿费（无最低限额，冲多有惠），后台申请发布，即可选择千余家网站媒体快速发稿。</p>
				</div>
				<div class="denglu_b">
					<h2>企业保障</h2>
					<p>针对企业客户推出软文策划、收录查询、效果跟踪、删稿补发、定时发布等服务，所有服务均可签订正式合同，开具发票。</p>
				</div>
			</div>
			<?php include "../loginDialog.php"; ?>
			<!--login end-->
		</div>
	</div>
	<div class="wrapper">

		<div class="body">
			<div class="box2">
				<!--王庆路 内容替换-->

				<ul class="ul_rw">
					<li class="rw_li1 rw_li"><span>1</span>
						<p>咨询客服</p></li>
					<li><img src="/huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="咨询客服"></li>
					<li class="rw_li2 rw_li"><span>2</span>
						<p>注册登录</p></li>
					<li><img src="/huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="注册登录"></li>
					<li class="rw_li3 rw_li"><span>3</span>
						<p>选择媒体资源</p></li>
					<li><img src="/huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="选择媒体资源"></li>
					<li class="rw_li4 rw_li"><span>4</span>
						<p>付款</p></li>
					<li><img src="/huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="付款"></li>
					<li class="rw_li1 rw_li"><span>5</span>
						<p>提交文案</p></li>
					<li><img src="/huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="提交文案"></li>
					<li class="rw_li2 rw_li"><span>6</span>
						<p>发布成功</p></li>
				</ul>
				<!--王庆路 内容替换 end-->

			</div>
		</div>
	</div>
</div>
<!--main end-->
<?php
include("../footer.php");
?>
<!--王庆路 主页qq联系栏-->
<script charset="utf-8" src="/huo15template/js/ServiceQQ.js"></script>
<!--王庆路 主页qq联系栏 end-->
<!-- Add your site or application content here  end-->


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="/huo15template/js/jquery1.42.min.js"></script>
<script src="/huo15template/static/js/jquery-3.1.0.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/huo15template/static/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="/huo15template/js/plugins.js"></script>
<script src="/huo15template/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. end-->



</body>
</html>
