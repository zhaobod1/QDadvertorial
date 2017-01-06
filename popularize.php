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

require_once("rand.inc.php");
include("include/config.php");
include("include/function.php");
$VipUser = $_COOKIE["VipUser"];
$AdminUser = $_COOKIE["AdminUser"];
if ($VipUser <> "") {
	$sql = "select * from user where VipUser='" . $VipUser . "'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);
	if ($rs != NULL) {
		$yue = $rs["yue"];
		$ip = $rs["ip"];
		$data = $rs["data"];
	}
	$ufalg = 1;
	$username = $VipUser;
	$userpath = "../user/";
	$fg = $_COOKIE["fg"];
	switch ($_COOKIE["fg"]) {
		case "1":
			$jiaose = "核心代理";
			break;
		case "2":
			$jiaose = "合作加盟供应商";
			break;
		case "3":
			$jiaose = "企业用户";
			break;
	}
} elseif ($AdminUser <> "") {
	$sql = "select * from admin where AdminUser='" . $AdminUser . "'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);
	if ($rs != NULL) {
		$yue = $rs["yue"];
		$ip = $rs["ip"];
		$data = $rs["data"];
	}
	$ufalg = 1;
	$username = $AdminUser;
	$userpath = "../admin/";
	$fg = $_COOKIE["fg"];
	switch ($_COOKIE["fg"]) {
		case "1":
			$jiaose = "站长";
			break;
		case "2":
			$jiaose = "副站长";
			break;
		case "3":
			$jiaose = "检查员";
			break;
	}
} else {
	$ufalg = 0;
}
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
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="<?php echo $keyword; ?>"/>
	<meta name="description" content="<?php echo $descr; ?>"/>
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="huo15template/css/normalize.css">
	<link rel="stylesheet" href="huo15template/css/main.css">
	<script src="huo15template/js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- Bootstrap -->
	<link href="huo15template/static/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<!--公共样式-->
	<link rel="stylesheet" href="huo15template/css/base.css">
	<link rel="stylesheet" href="huo15template/css/style.css">
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
include("header.php");
include("menu.php");
?>

<!--banner-->
<div class="fullSlide">

	<!--王庆路 首页滚动图片更换-->
	<div class="bd">
		<ul>
			<li><a target="_blank" href="#"><img src="/huo15template/img/new_banner1.jpg"/></a></li>
			<li><a target="_blank" href="#"><img src="/huo15template/img/new_banner2.jpg"/></a></li>
			<li><a target="_blank" href="#"><img src="/huo15template/img/new_banner3.jpg"/></a></li>
		</ul>
	</div>
	<!--王庆路 首页滚动图片更换 end-->

	<div class="hd">
		<ul></ul>
	</div>

	<a class="prev" href="javascript:void(0)"></a>
	<a class="next" href="javascript:void(0)"></a>
	<?php include('loginDialog.php'); ?>
</div>


<!--banner end-->

<!--main-->
<div class="main">
	<div class="bk50"></div>
	<div class="row_01">
		<div class="wrapper">
			<div class="body1">
				<div class="hd">
					<ul>
						<li><img src="huo15template/img/popularize/pic_01.png" alt="软文推广"></li>
						<li><img src="huo15template/img/popularize/pic_02.png" alt=""></li>
						<li><img src="huo15template/img/popularize/pic_03.png" alt=""></li>
						<li><img src="huo15template/img/popularize/pic_04.png" alt=""></li>
						<li><img src="huo15template/img/popularize/pic_05.png" alt=""></li>
						<li><img src="huo15template/img/popularize/pic_06.png" alt=""></li>
						<li><img src="huo15template/img/popularize/pic_07.png" alt=""></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="bd">
					<div class="left">
						<ul>
							<li><img src="huo15template/img/popularize/pic_08.png" alt=""></li>
							<li><img src="huo15template/img/popularize/pic_09.png" alt=""></li>
						</ul>
					</div>
					<div class="center">
						<p style="font-size: 34px;color: #20bdf7;">全网最大超10000家新闻媒体资源</p>
					</div>
					<div class="right">
						<ul>
							<li><img src="huo15template/img/popularize/pic_10.png" alt=""></li>
							<li><img src="huo15template/img/popularize/pic_11.png" alt=""></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="hd">
					<ul>
						<li><img src="huo15template/img/popularize/pic_12.png" alt="软文广告"></li>
						<li><img src="huo15template/img/popularize/pic_13.png" alt="新闻稿"></li>
						<li><img src="huo15template/img/popularize/pic_14.png" alt="新闻推广"></li>
						<li><img src="huo15template/img/popularize/pic_15.png" alt="软文发布"></li>
						<li><img src="huo15template/img/popularize/pic_16.png" alt="新闻营销"></li>
						<li><img src="huo15template/img/popularize/pic_17.png" alt="文章代写"></li>
						<li><img src="huo15template/img/popularize/pic_18.png" alt="微信营销"></li>
					</ul>
				</div>
			</div>
			<div class="bk40"></div>
		</div>
		<!--wrapper end-->
	</div>
	<div class="clearfix"></div>
	<div class="row_09 com_bg">
		<div class="wrapper">
			<div class="bk40"></div>
			<div class="box1">
				<!--王庆路 内容替换-->
				<div class="head">
					<h3>选择软文直通车的理由</h3>
				</div>
				<div class="body">
					<ul>
						<li><i>1.</i><em>专业：</em>专业新闻营销服务商，5000+合作客户！</li>
						<li><i>2.</i><em>低价：</em>直编合作一手媒体资源，节省推广成本！</li>
						<li><i>3.</i><em>规模：</em>上万家微信微博媒体资源，主流媒体地方媒体微博红人全面覆盖！</li>
						<li><i>4.</i><em>高效：</em>简单易用的24h自助发稿平台，让您发稿无忧！</li>
						<li class="last"><i>5.</i><em>规范：</em>合同、发票等可开且财务流程规范，让您放心有保证！</li>
					</ul>
				</div>
				<!--王庆路 内容替换 end-->
			</div>
			<div class="bk40"></div>
			<!--王庆路 内容替换-->

			<!--王庆路 内容替换 end-->
			<div class="bk40"></div>
			<div class="box3">
				<div class="head">
					<h3>选择我们的优势</h3>
				</div>
				<div class="body">
					<ul>
						<!--王庆路 内容更改-->
						<li class="i1">
							<h3>权威平台</h3>
							<p>正规实力公司运作，安全有保证，消费明细轻松查。</p>
						</li>
						<li class="i2">
							<h3>消费保障</h3>
							<p>售后有保障，一年内失效的可免费重新发布。</p>
						</li>
						<!--王庆路 内容更改 end-->
						<li class="i3">
							<h3>实名认证</h3>
							<p>所有商家均通过实名认证，让您放心交易。</p>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="bk40"></div>
		</div>
		<!--wrapper end-->
	</div>
	<div class="row_01">
		<div class="bk40"></div>
		<div class="wrapper">
			<div class="head">
				<h2>软文营销</h2>
			</div>
			<div class="bk40"></div>
			<div class="body2">
				<!--王庆路 文字替换-->
				<div class="box1">
					<div class="hd">
						<h3>什么是软文推广？</h3>
					</div>
					<div class="bd">
						软文推广是指以文字的形式对自己所要营销的产品进行推广，来促进产品的销售。
						把自己的产品、服务、技术、文化、事迹等等通过不同的新闻媒体宣传让更多的人和组织机构等了解、接受，在搜索从而达到宣传普及的目的。
					</div>
				</div>
				<div class="bk30"></div>
				<div class="box2">
					<div class="hd">
						<h3>为什么要选择软文推广？</h3>
					</div>
					<div class="bd">
						在信息化急速发展的新时代，传统硬性广告已经不能满足于企业发展及推广的需要，软文推广相对于传统硬性广告，有着强大的优势：成本更低；且软文追求的是春风化雨、润物无声的传播效果，因此在传播过程中更容易被受众接受；传播速度快，无网不欢的互联网时代，更极速的推进了传播的速度，据研究报告表明，同等费用支出下，网络广告已经达到四倍于传统媒体广告的效果；各大新闻媒体权威报道，更具公信力！
					</div>
				</div>
				<div class="bk30"></div>
				<!--王庆路 文字替换 end-->
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<div class="row_10 com_bg">
		<div class="wrapper">
			<div class="bk30"></div>
			<div class="head">
				<!--王庆路 内容替换-->
				<h2>软文营销——对症下药，方得效果</h2>
				<!--王庆路 内容替换 end-->
			</div>
			<div class="body">
				<div class="hd">
					<h3>您是否遇到以下问题？</h3>
				</div>
				<div class="bd">
					<div class="left">
						<ul>
							<!--王庆路 内容替换-->

							<li>品牌缺乏知名度，客户不信任？</li>
							<li>企业有负面信息，客户不认可？</li>
							<li>天价竞价推广，高成本低回报？</li>
							<li>迷茫，找不到合适的更专业的服务商？</li>

							<!--王庆路 内容替换 end-->
						</ul>
					</div>
					<div class="icon"></div>
					<div class="right">
						<h4>我们能做什么？</h4>
						<div class="desc">
							<!--王庆路 内容替换-->
							<p>软文营销，权威媒体发布，提升品牌公信力和知名度；</p>
							<p>软文营销，大范围投放，全面撒网，有效压制；</p>
							<p>软文营销，成本低，效率高，提升企业形象；</p>
							<p>软文直通车，一站式解决软文营销问题，高效专业。</p>
							<!--王庆路 内容替换 end-->
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<!--王庆路 删除"我们的四大优势"-->
	<!--王庆路 删除"我们的四大优势" end-->
	<div class="row_10 com_bg">
		<div class="wrapper">
			<div class="bk30"></div>
			<div class="head">
				<h2>软文发布</h2>
			</div>
			<div class="bk20"></div>
			<div class="body1_h">
				<!--王庆路 内容替换-->
				<div class="hd">
					本平台拥有国内上万多家媒体资源，覆盖大多数网络媒体、专业及行业媒体、国内大型门户网站、地方网站、专业网络门户、专业垂直站、微信公众号、微博推广、百科制作、论坛发帖加精置顶等多样化的互联网推广形式。
				</div>
				<div class="bd">
					<div class="left">
						<ul>
							<li>① 在分秒之间把信息迅速精准地传播出去。当企业需要危机公关时，软文推广可以几小时内同时在数十家知名媒体上发布公告及新闻，有效压制负面信息，以将企业的损失降至最低。</li>
							<li>② 用新闻的形式推广，可以迅速、低成本地提高企业或产品的形象，增加企业知名度及权威性。</li>
							<li>③ 采用新闻传播模式进行推广可以产生频繁的新闻曝光率；根据您的地域及行业覆盖要求，保证新闻稿发布辐射到各地区及各专业领域媒体。</li>
						</ul>
					</div>
					<div class="right">
						<p class="p1">执行效率高</p>
						<p class="p2">节省成本</p>
						<p class="p3">较高曝光率</p>
						<p class="p4">地域覆盖广</p>
					</div>
					<div class="clear"></div>
				</div>
				<!--王庆路 内容替换 end-->
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<div class="row_11">
		<div class="wrapper">
			<div class="bk50"></div>
			<div class="box2">
				<!--<div class="head">
					<h2>合作媒体</h2>
				</div>-->
				<div class="body">
					<ul>
						<li><img src="huo15template/img/popularize/pic_03.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_04.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_02.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_05.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_18.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_06.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_19.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_20.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_08.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_21.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_09.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_10.png" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_22.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_23.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_24.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_25.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/img_26.jpg" alt="合作媒体"></li>
						<li><img src="huo15template/img/popularize/pic_01.png" alt="合作媒体"></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<!--wrapper end-->
	</div>
</div>

<!--main end-->
<?php
include("footer.php");
?>
<!--王庆路 主页qq联系栏-->
<script charset="utf-8" src="/huo15template/js/ServiceQQ.js"></script>
<!--王庆路 主页qq联系栏 end-->
<!-- Add your site or application content here  end-->


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="huo15template/js/jquery1.42.min.js"></script>
<script src="huo15template/static/js/jquery-3.1.0.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="huo15template/static/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="huo15template/js/plugins.js"></script>
<script src="huo15template/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. end-->

<script type="text/javascript">
	var jq310 = jQuery.noConflict(true);
	console.log($().jquery);//往下就是1.4.2
</script>
<script src="huo15template/js/jquery.SuperSlide.2.1.2.source.js"></script>

<script>
	$(".fullSlide").slide({
		titCell: ".hd ul",
		mainCell: ".bd ul",
		effect: "leftLoop",
		vis: "auto",
		autoPlay: true,
		autoPage: true,
		trigger: "click"
	});
</script>
<style>
	* {
		zoom: 1
	}

	.fullSlide {
		position: relative;
		background: #000;
		margin: 0 auto;
	}

	.fullSlide .bd {
		position: relative;
		z-index: 0;
	}

	.fullSlide .bd li img {
		width: 100%;
		vertical-align: top;
	}

	.fullSlide .hd {
		position: relative;
		z-index: 1;
		margin-top: -30px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		background: #000;
		filter: alpha(opacity=60);
		opacity: 0.6
	}

	.fullSlide .hd ul {
		text-align: center;
		padding-top: 5px;
	}

	.fullSlide .hd ul li {
		cursor: pointer;
		display: inline-block;
		*display: inline;
		zoom: 1;
		width: 8px;
		height: 8px;
		margin: 5px;
		background: url(huo15template/img/tg_flash_p.png) -18px 0;
		overflow: hidden;
		font-size: 0;
	}

	.fullSlide .hd ul .on {
		background-position: 0 0;
	}

	.fullSlide .prev, .fullSlide .next {
		z-index: 1;
		display: block;
		width: 55px;
		height: 55px;
		position: relative;
		margin: -15% 0 0 3%;
		float: left;
		background: url(huo15template/img/arrow.png) 0 0 no-repeat;
		filter: alpha(opacity=40);
		opacity: 0.4
	}

	.fullSlide .next {
		background-position: right 0;
		float: right;
		margin-right: 3%
	}

	.fullSlide .prev:hover, .fullSlide .next:hover {
		filter: alpha(opacity=80);
		opacity: 0.8
	}
</style>


<!--index-->
<script>
	var code_hidden = '<?php echo $_SESSION['authnum'];?>';
	function check() {
		if (document.getElementById('VipUser').value == "") {
			document.getElementById('VipUser').focus();
			alert("VIP帐号不能够为空!");
			return false;
		}
		if (document.getElementById('VipPass').value == "") {
			document.getElementById('VipPass').focus();
			alert("VIP密码不能够为空!");
			return false;
		}
		if (code_hidden != form1.checkcode.value) {
			document.form1.checkcode.focus();
			alert('验证码输入错误!');
			return false;
		}
		document.form1.action = "checklogin.php";
		document.form1.submit();
		return true;
	}
	function refreshimg() {
		document.all.checkcode.src = 'checkcode.php?authnum=<?php echo $_SESSION['authnum']?>';
	}
</script>
</body>
</html>
