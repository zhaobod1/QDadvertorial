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

require_once("rand.inc.php");
include("include/config.php");
include("include/function.php");
$VipUser = @$_COOKIE["VipUser"] ? $_COOKIE["VipUser"] : "";
$AdminUser = @$_COOKIE["AdminUser"] ? $_COOKIE["AdminUser"] : "";
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
	$jiaose = userIdentity($fg);

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
	<title>媒体资源-软文直通车</title>
	<meta name="keywords" content="新闻营销,发新闻,新闻营销"/>
	<meta name="description" content="软文直通车致力于新闻营销,发新闻，帮助各大中小企业增加知名度。"/>
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
	<link rel="stylesheet" href="huo15template/css/index.css">
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

<div class="medias">
	<div class="wrapper">

		<div class="g-down"><a href="#" target="_blank" title="">点击下载《2017软文价格表》</a></div>
		<ul>
			<li>
				<div class="hd">
					<h2>地方媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>新浪网-辽宁</dd>
						<dd><b>&nbsp;</b>网易-河北</dd>
						<dd><b>&nbsp;</b>中国网-优讯</dd>
						<dd><b>&nbsp;</b>巴中新闻网</dd>
						<dd><b>&nbsp;</b>江苏新闻网</dd>
						<dd><b>&nbsp;</b>新闻传媒网</dd>
						<dd><b>&nbsp;</b>工大在线</dd>
						<dd><b>&nbsp;</b>东北新闻网-新闻</dd>
						<dd><b>&nbsp;</b>中国商务新闻网</dd>
						<dd><b>&nbsp;</b>江苏热线</dd>
						<dd><b>&nbsp;</b>中原资讯网</dd>
						<dd><b>&nbsp;</b>杭州热线</dd>
						<dd><b>&nbsp;</b>江苏新闻周刊网</dd>
						<dd><b>&nbsp;</b>漳州新闻网</dd>
						<dd><b>&nbsp;</b>上海视窗</dd>
						<dd><b>&nbsp;</b>长株潭新闻网</dd>
						<dd><b>&nbsp;</b>中国日报网-城市</dd>
						<dd><b>&nbsp;</b>中国崇阳网</dd>
						<dd><b>&nbsp;</b>赤峰广播电视网</dd>
						<dd><b>&nbsp;</b>娄底新闻网</dd>
						<dd><b>&nbsp;</b>宁海新闻网</dd>
						<dd><b>&nbsp;</b>新浪网-吉林</dd>
						<dd><b>&nbsp;</b>上海热点网</dd>
						<dd><b>&nbsp;</b>华东信息港</dd>
						<dd><b>&nbsp;</b>浏阳之窗</dd>
						<dd><b>&nbsp;</b>岳塘新闻网</dd>
						<dd><b>&nbsp;</b>央视网-广西</dd>
						<dd><b>&nbsp;</b>宣城新闻网</dd>
						<dd><b>&nbsp;</b>中国江门网</dd>
						<dd><b>&nbsp;</b>朝闻天下</dd>
						<dd><b>&nbsp;</b>光山网</dd>
						<dd><b>&nbsp;</b>青年网</dd>
						<dd><b>&nbsp;</b>商洛之窗</dd>
						<dd><b>&nbsp;</b>淄博时空</dd>
						<dd><b>&nbsp;</b>淄博信息港</dd>
						<dd><b>&nbsp;</b>上海新闻网</dd>
						<dd><b>&nbsp;</b>齐鲁网-临沂</dd>
						<dd><b>&nbsp;</b>中原网-资讯</dd>
						<dd><b>&nbsp;</b>恩施新闻网</dd>
						<dd><b>&nbsp;</b>九江新媒体</dd>
						<dd><b>&nbsp;</b>西江网</dd>
						<dd><b>&nbsp;</b>豫青网</dd>
						<dd><b>&nbsp;</b>中国网-滨海高新</dd>
						<dd><b>&nbsp;</b>山西信息港</dd>
						<dd><b>&nbsp;</b>搜狐网-滚动</dd>
						<dd><b>&nbsp;</b>东莞新闻网</dd>
						<dd><b>&nbsp;</b>广东之窗</dd>
						<dd><b>&nbsp;</b>广佛都市网</dd>
						<dd><b>&nbsp;</b>韶关网</dd>
						<dd><b>&nbsp;</b>深圳网</dd>
						<dd><b>&nbsp;</b>深圳之窗</dd>
						<dd><b>&nbsp;</b>中国新闻网-湖南</dd>
						<dd><b>&nbsp;</b>大连电视台</dd>
						<dd><b>&nbsp;</b>今讯网</dd>
						<dd><b>&nbsp;</b>山东在线</dd>
						<dd><b>&nbsp;</b>商广网</dd>
						<dd><b>&nbsp;</b>深圳热线-聚焦</dd>
						<dd><b>&nbsp;</b>中国吉安网</dd>
						<dd><b>&nbsp;</b>深圳都市网</dd>
						<dd><b>&nbsp;</b>东南网-厦门</dd>
						<dd><b>&nbsp;</b>广州在线</dd>
						<dd><b>&nbsp;</b>中国新闻网-辽宁</dd>
						<dd><b>&nbsp;</b>开封网</dd>
						<dd><b>&nbsp;</b>白鹿网</dd>
						<dd><b>&nbsp;</b>商都网</dd>
						<dd><b>&nbsp;</b>苏州新闻网</dd>
						<dd><b>&nbsp;</b>新浪网-黑龙江</dd>
						<dd><b>&nbsp;</b>中国新闻网-湖北</dd>
						<dd><b>&nbsp;</b>中国新闻网-安徽</dd>
						<dd><b>&nbsp;</b>中国网-消费</dd>
						<dd><b>&nbsp;</b>河北广电网</dd>
						<dd><b>&nbsp;</b>中国日报网-公益</dd>
						<dd><b>&nbsp;</b>中国广播网-江西</dd>
						<dd><b>&nbsp;</b>中国新闻网-河北</dd>
						<dd><b>&nbsp;</b>苏州都市网</dd>
						<dd><b>&nbsp;</b>浙江在线-嘉兴</dd>
						<dd><b>&nbsp;</b>新疆青年网</dd>
						<dd><b>&nbsp;</b>中华网-黑龙江</dd>
						<dd><b>&nbsp;</b>邯郸之窗</dd>
						<dd><b>&nbsp;</b>中国新闻网-江苏</dd>
						<dd><b>&nbsp;</b>中国新闻网-江西</dd>
						<dd><b>&nbsp;</b>中华网-河南</dd>
						<dd><b>&nbsp;</b>浙江在线-磐安</dd>
						<dd><b>&nbsp;</b>清远传媒网</dd>
						<dd><b>&nbsp;</b>齐齐哈尔新闻网</dd>
						<dd><b>&nbsp;</b>新浪网-广西</dd>
						<dd><b>&nbsp;</b>网易-云南</dd>
						<dd><b>&nbsp;</b>北青网-质量</dd>
						<dd><b>&nbsp;</b>中华网-新疆</dd>
						<dd><b>&nbsp;</b>枞阳在线</dd>
						<dd><b>&nbsp;</b>塞北新闻网</dd>
						<dd><b>&nbsp;</b>东快网</dd>
						<dd><b>&nbsp;</b>佛山资讯网</dd>
						<dd><b>&nbsp;</b>石榴网</dd>
						<dd><b>&nbsp;</b>江苏快讯网</dd>
						<dd><b>&nbsp;</b>四川新闻网-巴中</dd>
						<dd><b>&nbsp;</b>万州热线</dd>
						<dd><b>&nbsp;</b>中网资讯</dd>
						<dd><b>&nbsp;</b>莞讯网</dd>
						<dd><b>&nbsp;</b>中国青年网-江西</dd>
						<dd><b>&nbsp;</b>西安网</dd>
						<dd><b>&nbsp;</b>四川在线-巴中</dd>
						<dd><b>&nbsp;</b>中国网-江苏</dd>
						<dd><b>&nbsp;</b>汉网-新闻</dd>
						<dd><b>&nbsp;</b>微山信息港</dd>
						<dd><b>&nbsp;</b>映象网</dd>
						<dd><b>&nbsp;</b>青岛新闻网</dd>
						<dd><b>&nbsp;</b>浙江在线-宁波</dd>
						<dd><b>&nbsp;</b>中国新闻网-东莞</dd>
						<dd><b>&nbsp;</b>中国新闻网-新疆</dd>
						<dd><b>&nbsp;</b>吉林在线</dd>
						<dd><b>&nbsp;</b>大洋网-新闻</dd>
						<dd><b>&nbsp;</b>广州视窗</dd>
						<dd><b>&nbsp;</b>深圳热线-品牌</dd>
						<dd><b>&nbsp;</b>三亚资讯网</dd>
						<dd><b>&nbsp;</b>香港大公网-河南</dd>
						<dd><b>&nbsp;</b>中国新闻网-吉林</dd>
						<dd><b>&nbsp;</b>华声在线-湖南</dd>
						<dd><b>&nbsp;</b>中国山东网-企业</dd>
						<dd><b>&nbsp;</b>内蒙古新闻网</dd>
						<dd><b>&nbsp;</b>齐鲁热线</dd>
						<dd><b>&nbsp;</b>重庆热线</dd>
						<dd><b>&nbsp;</b>扬子晚报网</dd>
						<dd><b>&nbsp;</b>黑龙江新闻网</dd>
						<dd><b>&nbsp;</b>石家庄热线</dd>
						<dd><b>&nbsp;</b>新快网</dd>
						<dd><b>&nbsp;</b>北国网-财经</dd>
						<dd><b>&nbsp;</b>中国网-科学</dd>
						<dd><b>&nbsp;</b>今晚网</dd>
						<dd><b>&nbsp;</b>金黔在线</dd>
						<dd><b>&nbsp;</b>闽南网</dd>
						<dd><b>&nbsp;</b>华龙网</dd>
						<dd><b>&nbsp;</b>武汉热线</dd>
						<dd><b>&nbsp;</b>中国广播网-新疆</dd>
						<dd><b>&nbsp;</b>惠州新闻网</dd>
						<dd><b>&nbsp;</b>中国质量新闻网-四川</dd>
						<dd><b>&nbsp;</b>桂工网</dd>
						<dd><b>&nbsp;</b>四川热线网</dd>
						<dd><b>&nbsp;</b>中国创新网-河南</dd>
						<dd><b>&nbsp;</b>东北网-企业</dd>
						<dd><b>&nbsp;</b>新浪网-湖南</dd>
						<dd><b>&nbsp;</b>凤凰网-宁波</dd>
						<dd><b>&nbsp;</b>中国广播网-河南</dd>
						<dd><b>&nbsp;</b>中国质量新闻网</dd>
						<dd><b>&nbsp;</b>中国网-联盟</dd>
						<dd><b>&nbsp;</b>长春新闻网</dd>
						<dd><b>&nbsp;</b>搜狐网-手机客户端</dd>
						<dd><b>&nbsp;</b>新华报业网</dd>
						<dd><b>&nbsp;</b>山西晚报网</dd>
						<dd><b>&nbsp;</b>和讯网-福建</dd>
						<dd><b>&nbsp;</b>香港卫视网[山西]</dd>
						<dd><b>&nbsp;</b>杭州日报网</dd>
						<dd><b>&nbsp;</b>齐鲁晚报网</dd>
						<dd><b>&nbsp;</b>重庆晚报网</dd>
						<dd><b>&nbsp;</b>和讯网-河南</dd>
						<dd><b>&nbsp;</b>和讯网-四川</dd>
						<dd><b>&nbsp;</b>南都网-企业</dd>
						<dd><b>&nbsp;</b>新浪网-河北</dd>
						<dd><b>&nbsp;</b>中国新闻网-福州</dd>
						<dd><b>&nbsp;</b>中国青年网-人物</dd>
						<dd><b>&nbsp;</b>新华网-湖北</dd>
						<dd><b>&nbsp;</b>福建之窗</dd>
						<dd><b>&nbsp;</b>凤凰网-海南</dd>
						<dd><b>&nbsp;</b>青海新闻网</dd>
						<dd><b>&nbsp;</b>中国江苏网</dd>
						<dd><b>&nbsp;</b>TOM-新闻</dd>
						<dd><b>&nbsp;</b>中国钢铁现货网</dd>
						<dd><b>&nbsp;</b>新华网-甘肃</dd>
						<dd><b>&nbsp;</b>大旗网</dd>
						<dd><b>&nbsp;</b>京报网</dd>
						<dd><b>&nbsp;</b>大众网-新闻</dd>
						<dd><b>&nbsp;</b>上海热线-乐活</dd>
						<dd><b>&nbsp;</b>龙虎网-财经</dd>
						<dd><b>&nbsp;</b>中国吉林网</dd>
						<dd><b>&nbsp;</b>浙江都市网</dd>
						<dd><b>&nbsp;</b>央视网-广东</dd>
						<dd><b>&nbsp;</b>凤凰网-广州</dd>
						<dd><b>&nbsp;</b>新浪网-广东[深圳]</dd>
						<dd><b>&nbsp;</b>中国日报网-热点新闻</dd>
						<dd><b>&nbsp;</b>凤凰网-手机端</dd>
						<dd><b>&nbsp;</b>今日头条-新视野</dd>
						<dd><b>&nbsp;</b>中国创新网</dd>
						<dd><b>&nbsp;</b>北京晚报网</dd>
						<dd><b>&nbsp;</b>新华网-广东</dd>
						<dd><b>&nbsp;</b>北青网-社会新闻</dd>
						<dd><b>&nbsp;</b>新华网-江苏</dd>
						<dd><b>&nbsp;</b>央视网-新闻</dd>
						<dd><b>&nbsp;</b>人民网-宁波</dd>
						<dd><b>&nbsp;</b>人民网-深圳</dd>
						<dd><b>&nbsp;</b>半月谈网</dd>
						<dd><b>&nbsp;</b>人民网-湖南</dd>
						<dd><b>&nbsp;</b>人民网-广西</dd>
						<dd><b>&nbsp;</b>和讯网-新闻</dd>
						<dd><b>&nbsp;</b>人民网-天津视窗</dd>
						<dd><b>&nbsp;</b>新浪网-新闻</dd>
						<dd><b>&nbsp;</b>网易-新闻</dd>
						<dd><b>&nbsp;</b>中青在线-新闻</dd>
						<dd><b>&nbsp;</b>新华网-会展</dd>
						<dd><b>&nbsp;</b>人民网-舆情</dd>
						<dd><b>&nbsp;</b>新华网-电力</dd>
						<dd><b>&nbsp;</b>内蒙古门户网</dd>
						<dd><b>&nbsp;</b>中南信息港</dd>
						<dd><b>&nbsp;</b>西北信息港</dd>
						<dd><b>&nbsp;</b>东北信息港</dd>
						<dd><b>&nbsp;</b>天府在线</dd>
						<dd><b>&nbsp;</b>新华网-重庆</dd>
						<dd><b>&nbsp;</b>深圳新闻网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>财经媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>中国日报网-商业</dd>
						<dd><b>&nbsp;</b>中华网-财经</dd>
						<dd><b>&nbsp;</b>慧聪网-商业</dd>
						<dd><b>&nbsp;</b>中财网</dd>
						<dd><b>&nbsp;</b>资本论财经网</dd>
						<dd><b>&nbsp;</b>华讯财经网</dd>
						<dd><b>&nbsp;</b>中国商业报道网</dd>
						<dd><b>&nbsp;</b>金级诺观察网</dd>
						<dd><b>&nbsp;</b>淄博信息港-财经</dd>
						<dd><b>&nbsp;</b>智库在线</dd>
						<dd><b>&nbsp;</b>商界在线</dd>
						<dd><b>&nbsp;</b>中国股市在线</dd>
						<dd><b>&nbsp;</b>河南金融网</dd>
						<dd><b>&nbsp;</b>山东财经网</dd>
						<dd><b>&nbsp;</b>湖南经济新闻网</dd>
						<dd><b>&nbsp;</b>慧聪网-广告</dd>
						<dd><b>&nbsp;</b>中国贸易新闻网</dd>
						<dd><b>&nbsp;</b>中原财经网</dd>
						<dd><b>&nbsp;</b>齐鲁网-财经</dd>
						<dd><b>&nbsp;</b>一比多商务</dd>
						<dd><b>&nbsp;</b>四川经济网</dd>
						<dd><b>&nbsp;</b>中国商业期刊网</dd>
						<dd><b>&nbsp;</b>青岛财经网</dd>
						<dd><b>&nbsp;</b>鲁网-天下鲁商</dd>
						<dd><b>&nbsp;</b>中国商业新闻网</dd>
						<dd><b>&nbsp;</b>企业家在线</dd>
						<dd><b>&nbsp;</b>聊城新闻网-财经</dd>
						<dd><b>&nbsp;</b>大众财经网</dd>
						<dd><b>&nbsp;</b>海外网-财经</dd>
						<dd><b>&nbsp;</b>第一财经网</dd>
						<dd><b>&nbsp;</b>顶尖财经网</dd>
						<dd><b>&nbsp;</b>华声在线-财经</dd>
						<dd><b>&nbsp;</b>至诚财经网</dd>
						<dd><b>&nbsp;</b>证券之星-生活</dd>
						<dd><b>&nbsp;</b>天下财经网</dd>
						<dd><b>&nbsp;</b>中国企业网</dd>
						<dd><b>&nbsp;</b>证券市场周刊</dd>
						<dd><b>&nbsp;</b>中国连锁网</dd>
						<dd><b>&nbsp;</b>中国贸易金融网</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[理财]</dd>
						<dd><b>&nbsp;</b>金投网-财经</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[财经]</dd>
						<dd><b>&nbsp;</b>中国企业电子商务网</dd>
						<dd><b>&nbsp;</b>山西经济日报</dd>
						<dd><b>&nbsp;</b>大众网-财经</dd>
						<dd><b>&nbsp;</b>天下金融网</dd>
						<dd><b>&nbsp;</b>水母网-财经</dd>
						<dd><b>&nbsp;</b>天下金融网</dd>
						<dd><b>&nbsp;</b>网易-商讯</dd>
						<dd><b>&nbsp;</b>第一金融网</dd>
						<dd><b>&nbsp;</b>四川新闻网-财经</dd>
						<dd><b>&nbsp;</b>广西新闻网-财经</dd>
						<dd><b>&nbsp;</b>浙江都市网-浙商网</dd>
						<dd><b>&nbsp;</b>网贷联盟网</dd>
						<dd><b>&nbsp;</b>万家热线-理财</dd>
						<dd><b>&nbsp;</b>联商网</dd>
						<dd><b>&nbsp;</b>中国黄金投资网</dd>
						<dd><b>&nbsp;</b>上海热线-财经</dd>
						<dd><b>&nbsp;</b>中国财经网</dd>
						<dd><b>&nbsp;</b>财经中国网</dd>
						<dd><b>&nbsp;</b>中孚网</dd>
						<dd><b>&nbsp;</b>网通社-财经</dd>
						<dd><b>&nbsp;</b>中国日报网-证券</dd>
						<dd><b>&nbsp;</b>中国电子商务中心</dd>
						<dd><b>&nbsp;</b>人民网-上海</dd>
						<dd><b>&nbsp;</b>中国经济新闻网</dd>
						<dd><b>&nbsp;</b>证券之星-新闻</dd>
						<dd><b>&nbsp;</b>慧聪网-财经</dd>
						<dd><b>&nbsp;</b>价值中国网</dd>
						<dd><b>&nbsp;</b>国际在线-企业</dd>
						<dd><b>&nbsp;</b>南方财富网</dd>
						<dd><b>&nbsp;</b>股城网</dd>
						<dd><b>&nbsp;</b>中国金融网</dd>
						<dd><b>&nbsp;</b>CCTV证券资讯</dd>
						<dd><b>&nbsp;</b>华夏经纬网</dd>
						<dd><b>&nbsp;</b>腾讯网-大豫</dd>
						<dd><b>&nbsp;</b>大众证券报-财信网</dd>
						<dd><b>&nbsp;</b>凤凰网-商业</dd>
						<dd><b>&nbsp;</b>北青网-财经</dd>
						<dd><b>&nbsp;</b>投资中国网</dd>
						<dd><b>&nbsp;</b>中国经营网</dd>
						<dd><b>&nbsp;</b>中金在线</dd>
						<dd><b>&nbsp;</b>光明网-经济</dd>
						<dd><b>&nbsp;</b>中国会展门户网</dd>
						<dd><b>&nbsp;</b>全景网</dd>
						<dd><b>&nbsp;</b>上海金融报网</dd>
						<dd><b>&nbsp;</b>大公网-财经</dd>
						<dd><b>&nbsp;</b>金融界网</dd>
						<dd><b>&nbsp;</b>和讯网-财经</dd>
						<dd><b>&nbsp;</b>中国资本证券网</dd>
						<dd><b>&nbsp;</b>环球网-财经</dd>
						<dd><b>&nbsp;</b>中国经济网-财经</dd>
						<dd><b>&nbsp;</b>投融界</dd>
						<dd><b>&nbsp;</b>东方财富网</dd>
						<dd><b>&nbsp;</b>光明网-经济[P2P]</dd>
						<dd><b>&nbsp;</b>中国日报网-财经</dd>
						<dd><b>&nbsp;</b>前瞻网</dd>
						<dd><b>&nbsp;</b>中国财经时报网</dd>
						<dd><b>&nbsp;</b>大洋网-财经</dd>
						<dd><b>&nbsp;</b>中国经济网-城市</dd>
						<dd><b>&nbsp;</b>一财网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>IT科技媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>硅谷网</dd>
						<dd><b>&nbsp;</b>慧聪网-数码</dd>
						<dd><b>&nbsp;</b>科技讯</dd>
						<dd><b>&nbsp;</b>IT168</dd>
						<dd><b>&nbsp;</b>IT世界网</dd>
						<dd><b>&nbsp;</b>IT专家网</dd>
						<dd><b>&nbsp;</b>电脑之家</dd>
						<dd><b>&nbsp;</b>飞象网</dd>
						<dd><b>&nbsp;</b>泡泡网</dd>
						<dd><b>&nbsp;</b>驱动中国网</dd>
						<dd><b>&nbsp;</b>赛迪网</dd>
						<dd><b>&nbsp;</b>小熊在线</dd>
						<dd><b>&nbsp;</b>中关村商情网</dd>
						<dd><b>&nbsp;</b>比特网</dd>
						<dd><b>&nbsp;</b>中国IDC服务网</dd>
						<dd><b>&nbsp;</b>三秦IT网</dd>
						<dd><b>&nbsp;</b>慧聪网-IT</dd>
						<dd><b>&nbsp;</b>IT经理网</dd>
						<dd><b>&nbsp;</b>支点网</dd>
						<dd><b>&nbsp;</b>站长资讯</dd>
						<dd><b>&nbsp;</b>威易网</dd>
						<dd><b>&nbsp;</b>第三媒体</dd>
						<dd><b>&nbsp;</b>A5站长网</dd>
						<dd><b>&nbsp;</b>电脑商情在线</dd>
						<dd><b>&nbsp;</b>计世网</dd>
						<dd><b>&nbsp;</b>杭州网-数码</dd>
						<dd><b>&nbsp;</b>北方网-IT</dd>
						<dd><b>&nbsp;</b>站长之家</dd>
						<dd><b>&nbsp;</b>挖贝网</dd>
						<dd><b>&nbsp;</b>机房360</dd>
						<dd><b>&nbsp;</b>中国家电资讯网</dd>
						<dd><b>&nbsp;</b>中国电力电子产业网</dd>
						<dd><b>&nbsp;</b>大洋网-家电</dd>
						<dd><b>&nbsp;</b>e-works</dd>
						<dd><b>&nbsp;</b>存储在线</dd>
						<dd><b>&nbsp;</b>南方网-科技</dd>
						<dd><b>&nbsp;</b>中文科技资讯</dd>
						<dd><b>&nbsp;</b>牛华网</dd>
						<dd><b>&nbsp;</b>机锋网</dd>
						<dd><b>&nbsp;</b>中小企业IT网</dd>
						<dd><b>&nbsp;</b>互联网周刊网</dd>
						<dd><b>&nbsp;</b>91手机网</dd>
						<dd><b>&nbsp;</b>安卓网</dd>
						<dd><b>&nbsp;</b>中国软件资讯网</dd>
						<dd><b>&nbsp;</b>中国软件网</dd>
						<dd><b>&nbsp;</b>环球家电网</dd>
						<dd><b>&nbsp;</b>网界网</dd>
						<dd><b>&nbsp;</b>物联中国网</dd>
						<dd><b>&nbsp;</b>cnet科技资讯</dd>
						<dd><b>&nbsp;</b>IT之家</dd>
						<dd><b>&nbsp;</b>中国IDC圈</dd>
						<dd><b>&nbsp;</b>睿商在线</dd>
						<dd><b>&nbsp;</b>安卓中文网</dd>
						<dd><b>&nbsp;</b>科易网</dd>
						<dd><b>&nbsp;</b>ITBear科技资讯</dd>
						<dd><b>&nbsp;</b>CSDN.NET</dd>
						<dd><b>&nbsp;</b>21CN-科技</dd>
						<dd><b>&nbsp;</b>太平洋电脑网</dd>
						<dd><b>&nbsp;</b>腾讯网-大秦数码</dd>
						<dd><b>&nbsp;</b>MSN-科技</dd>
						<dd><b>&nbsp;</b>TechWeb</dd>
						<dd><b>&nbsp;</b>硅谷动力</dd>
						<dd><b>&nbsp;</b>手机之家</dd>
						<dd><b>&nbsp;</b>通信产业网</dd>
						<dd><b>&nbsp;</b>万维家电网</dd>
						<dd><b>&nbsp;</b>北青网-数码</dd>
						<dd><b>&nbsp;</b>IT商业新闻网</dd>
						<dd><b>&nbsp;</b>天极网-主站</dd>
						<dd><b>&nbsp;</b>51CTO</dd>
						<dd><b>&nbsp;</b>中国经济网-科技</dd>
						<dd><b>&nbsp;</b>千龙网-家电</dd>
						<dd><b>&nbsp;</b>CIO时代网</dd>
						<dd><b>&nbsp;</b>网易-数码</dd>
						<dd><b>&nbsp;</b>腾讯网-大粤[数码]</dd>
						<dd><b>&nbsp;</b>中国科技网</dd>
						<dd><b>&nbsp;</b>至顶网</dd>
						<dd><b>&nbsp;</b>千龙网-科技</dd>
						<dd><b>&nbsp;</b>中国家电网</dd>
						<dd><b>&nbsp;</b>GQ男士网-数码</dd>
						<dd><b>&nbsp;</b>手机中国</dd>
						<dd><b>&nbsp;</b>通信世界网</dd>
						<dd><b>&nbsp;</b>家电消费网</dd>
						<dd><b>&nbsp;</b>环球网-科技</dd>
						<dd><b>&nbsp;</b>和讯网-科技</dd>
						<dd><b>&nbsp;</b>C114中国通信网</dd>
						<dd><b>&nbsp;</b>中关村在线</dd>
						<dd><b>&nbsp;</b>人民网-IT</dd>
						<dd><b>&nbsp;</b>亿邦动力网</dd>
						<dd><b>&nbsp;</b>非常在线</dd>
						<dd><b>&nbsp;</b>中原硅谷网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>房产家居媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>房天下-苏州</dd>
						<dd><b>&nbsp;</b>凤凰居悦网</dd>
						<dd><b>&nbsp;</b>搜狐网-家居</dd>
						<dd><b>&nbsp;</b>新浪网-房产[青岛]</dd>
						<dd><b>&nbsp;</b>新浪网-乐居[青岛]</dd>
						<dd><b>&nbsp;</b>安家啦</dd>
						<dd><b>&nbsp;</b>搜狐网-焦点</dd>
						<dd><b>&nbsp;</b>慧聪网-房产</dd>
						<dd><b>&nbsp;</b>中国日报网-家居</dd>
						<dd><b>&nbsp;</b>中国日报网-房产</dd>
						<dd><b>&nbsp;</b>515房产网</dd>
						<dd><b>&nbsp;</b>亚太家居-泉州站</dd>
						<dd><b>&nbsp;</b>网易-房产[南昌]</dd>
						<dd><b>&nbsp;</b>网易-房产[青岛]</dd>
						<dd><b>&nbsp;</b>网易-房产[福州]</dd>
						<dd><b>&nbsp;</b>凤凰网-房产[烟台]</dd>
						<dd><b>&nbsp;</b>慧聪网-家居</dd>
						<dd><b>&nbsp;</b>家天下</dd>
						<dd><b>&nbsp;</b>中国家具网</dd>
						<dd><b>&nbsp;</b>爱家家居</dd>
						<dd><b>&nbsp;</b>万巢网</dd>
						<dd><b>&nbsp;</b>网易-房产[苏州]</dd>
						<dd><b>&nbsp;</b>装一网</dd>
						<dd><b>&nbsp;</b>中国家装家居网</dd>
						<dd><b>&nbsp;</b>新浪网-乐居[广西]</dd>
						<dd><b>&nbsp;</b>腾讯网-房产[柳州]</dd>
						<dd><b>&nbsp;</b>亿房网</dd>
						<dd><b>&nbsp;</b>中国装饰网</dd>
						<dd><b>&nbsp;</b>腾讯网-房产[佛山]</dd>
						<dd><b>&nbsp;</b>新浪网-地产</dd>
						<dd><b>&nbsp;</b>新浪网-家居</dd>
						<dd><b>&nbsp;</b>网易-家居</dd>
						<dd><b>&nbsp;</b>太平洋家居网</dd>
						<dd><b>&nbsp;</b>MSN-家居</dd>
						<dd><b>&nbsp;</b>瑞丽网-家居</dd>
						<dd><b>&nbsp;</b>腾讯网-亚太家居[主站]</dd>
						<dd><b>&nbsp;</b>MSN-家居</dd>
						<dd><b>&nbsp;</b>房讯网</dd>
						<dd><b>&nbsp;</b>搜房网-主站</dd>
						<dd><b>&nbsp;</b>和家网</dd>
						<dd><b>&nbsp;</b>赢商网</dd>
						<dd><b>&nbsp;</b>猎房网</dd>
						<dd><b>&nbsp;</b>中国房地产行业网</dd>
						<dd><b>&nbsp;</b>南方网-房产</dd>
						<dd><b>&nbsp;</b>凤凰网-房产</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>健康医疗媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>河北新闻网-养生</dd>
						<dd><b>&nbsp;</b>七月网-健康</dd>
						<dd><b>&nbsp;</b>三峡传媒网-健康</dd>
						<dd><b>&nbsp;</b>惠州新闻网-健康</dd>
						<dd><b>&nbsp;</b>安阳新闻网-健康</dd>
						<dd><b>&nbsp;</b>每日甘肃网-健康</dd>
						<dd><b>&nbsp;</b>长江网-健康</dd>
						<dd><b>&nbsp;</b>宁化新闻网-健康</dd>
						<dd><b>&nbsp;</b>运城新闻网-健康</dd>
						<dd><b>&nbsp;</b>临汾新闻网-健康</dd>
						<dd><b>&nbsp;</b>咸宁新闻网-健康</dd>
						<dd><b>&nbsp;</b>中原网-健康</dd>
						<dd><b>&nbsp;</b>淄博新闻网-健康</dd>
						<dd><b>&nbsp;</b>兰州新闻网-健康</dd>
						<dd><b>&nbsp;</b>漳州新闻网-健康</dd>
						<dd><b>&nbsp;</b>潍坊新闻网-健康</dd>
						<dd><b>&nbsp;</b>新报网-健康</dd>
						<dd><b>&nbsp;</b>广佛都市网-健康</dd>
						<dd><b>&nbsp;</b>龙腾网-健康</dd>
						<dd><b>&nbsp;</b>健康安全网</dd>
						<dd><b>&nbsp;</b>浙江在线-健康</dd>
						<dd><b>&nbsp;</b>医药卫生网</dd>
						<dd><b>&nbsp;</b>广州网-健康</dd>
						<dd><b>&nbsp;</b>安阳网-健康</dd>
						<dd><b>&nbsp;</b>健康之家网</dd>
						<dd><b>&nbsp;</b>东北新闻网-健康</dd>
						<dd><b>&nbsp;</b>杭州网-健康</dd>
						<dd><b>&nbsp;</b>北青网-健康</dd>
						<dd><b>&nbsp;</b>一流健康网</dd>
						<dd><b>&nbsp;</b>知音网-健康</dd>
						<dd><b>&nbsp;</b>医通无忧网</dd>
						<dd><b>&nbsp;</b>用药安全网</dd>
						<dd><b>&nbsp;</b>大众健康网</dd>
						<dd><b>&nbsp;</b>网易-河南[健康]</dd>
						<dd><b>&nbsp;</b>家庭医生报</dd>
						<dd><b>&nbsp;</b>中医五绝网</dd>
						<dd><b>&nbsp;</b>华声在线-健康</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[健康]</dd>
						<dd><b>&nbsp;</b>中国山东网-健康</dd>
						<dd><b>&nbsp;</b>南方健康网</dd>
						<dd><b>&nbsp;</b>东北网-医疗</dd>
						<dd><b>&nbsp;</b>39健康网</dd>
						<dd><b>&nbsp;</b>中国健康网</dd>
						<dd><b>&nbsp;</b>健康报网</dd>
						<dd><b>&nbsp;</b>康路网</dd>
						<dd><b>&nbsp;</b>中国青年网-健康</dd>
						<dd><b>&nbsp;</b>就医网</dd>
						<dd><b>&nbsp;</b>新华网-河南[健康]</dd>
						<dd><b>&nbsp;</b>医药网</dd>
						<dd><b>&nbsp;</b>家庭医生网</dd>
						<dd><b>&nbsp;</b>凤凰网-中医</dd>
						<dd><b>&nbsp;</b>环球网-健康</dd>
						<dd><b>&nbsp;</b>新浪网-中医</dd>
						<dd><b>&nbsp;</b>腾讯网-健康</dd>
						<dd><b>&nbsp;</b>瑞丽网-健康</dd>
						<dd><b>&nbsp;</b>人民网-健康</dd>
						<dd><b>&nbsp;</b>深圳网-健康</dd>
						<dd><b>&nbsp;</b>咸宁新闻网-健康</dd>
						<dd><b>&nbsp;</b>新疆网-健康</dd>
						<dd><b>&nbsp;</b>舟山网-健康</dd>
						<dd><b>&nbsp;</b>平安健康网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>教育出国媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>评校网</dd>
						<dd><b>&nbsp;</b>河北教育网</dd>
						<dd><b>&nbsp;</b>中国山东网-教育</dd>
						<dd><b>&nbsp;</b>中国育儿在线</dd>
						<dd><b>&nbsp;</b>商都网-教育</dd>
						<dd><b>&nbsp;</b>大众网-艺术</dd>
						<dd><b>&nbsp;</b>翼牛网</dd>
						<dd><b>&nbsp;</b>凤凰网-出国</dd>
						<dd><b>&nbsp;</b>北方网-教育</dd>
						<dd><b>&nbsp;</b>21CN-教育</dd>
						<dd><b>&nbsp;</b>慧聪网-教育</dd>
						<dd><b>&nbsp;</b>大众网-教育</dd>
						<dd><b>&nbsp;</b>中国育儿网</dd>
						<dd><b>&nbsp;</b>上海热线-教育</dd>
						<dd><b>&nbsp;</b>北青网-教育</dd>
						<dd><b>&nbsp;</b>南方网-教育</dd>
						<dd><b>&nbsp;</b>中华网-考试</dd>
						<dd><b>&nbsp;</b>千龙网-教育</dd>
						<dd><b>&nbsp;</b>网易-传媒</dd>
						<dd><b>&nbsp;</b>网易-读书</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[教育]</dd>
						<dd><b>&nbsp;</b>努力留学网</dd>
						<dd><b>&nbsp;</b>腾讯网-读书</dd>
						<dd><b>&nbsp;</b>中国教育网</dd>
						<dd><b>&nbsp;</b>光明网-留学</dd>
						<dd><b>&nbsp;</b>网易-校园</dd>
						<dd><b>&nbsp;</b>凤凰网-教育</dd>
						<dd><b>&nbsp;</b>腾讯网-教育</dd>
						<dd><b>&nbsp;</b>中国婴幼儿教育网</dd>
						<dd><b>&nbsp;</b>网易-教育</dd>
						<dd><b>&nbsp;</b>教育联展网</dd>
						<dd><b>&nbsp;</b>腾讯网-大豫</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>女性时尚媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>女人街</dd>
						<dd><b>&nbsp;</b>第三时尚网</dd>
						<dd><b>&nbsp;</b>时尚伊人网</dd>
						<dd><b>&nbsp;</b>伊人时尚网</dd>
						<dd><b>&nbsp;</b>爱丽婚嫁网</dd>
						<dd><b>&nbsp;</b>中国品牌服装网</dd>
						<dd><b>&nbsp;</b>慧聪网-美容</dd>
						<dd><b>&nbsp;</b>爱秀网</dd>
						<dd><b>&nbsp;</b>风尚网</dd>
						<dd><b>&nbsp;</b>国际服饰网</dd>
						<dd><b>&nbsp;</b>中国化妆品网</dd>
						<dd><b>&nbsp;</b>世界服装鞋帽网</dd>
						<dd><b>&nbsp;</b>亲亲宝贝网</dd>
						<dd><b>&nbsp;</b>亲亲育儿网</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[时尚]</dd>
						<dd><b>&nbsp;</b>中国孕婴童</dd>
						<dd><b>&nbsp;</b>中国育儿在线</dd>
						<dd><b>&nbsp;</b>东北网-女人</dd>
						<dd><b>&nbsp;</b>大众网-女性</dd>
						<dd><b>&nbsp;</b>第一女人网</dd>
						<dd><b>&nbsp;</b>佳人女性网</dd>
						<dd><b>&nbsp;</b>维度女性网</dd>
						<dd><b>&nbsp;</b>昕薇网</dd>
						<dd><b>&nbsp;</b>中国服装品牌网</dd>
						<dd><b>&nbsp;</b>中国时尚品牌网</dd>
						<dd><b>&nbsp;</b>美悦时尚网</dd>
						<dd><b>&nbsp;</b>时尚中国网</dd>
						<dd><b>&nbsp;</b>妈咪爱婴网</dd>
						<dd><b>&nbsp;</b>摇篮网</dd>
						<dd><b>&nbsp;</b>父母网</dd>
						<dd><b>&nbsp;</b>品牌世家</dd>
						<dd><b>&nbsp;</b>妆品网</dd>
						<dd><b>&nbsp;</b>哈秀时尚网</dd>
						<dd><b>&nbsp;</b>中国亲子网</dd>
						<dd><b>&nbsp;</b>妈咪网</dd>
						<dd><b>&nbsp;</b>妈妈网</dd>
						<dd><b>&nbsp;</b>瑞丽网-亲子</dd>
						<dd><b>&nbsp;</b>太平洋亲子网</dd>
						<dd><b>&nbsp;</b>太平洋女性网</dd>
						<dd><b>&nbsp;</b>YOKA时尚网</dd>
						<dd><b>&nbsp;</b>KIMISS闺蜜网</dd>
						<dd><b>&nbsp;</b>华衣网</dd>
						<dd><b>&nbsp;</b>米娜时尚网</dd>
						<dd><b>&nbsp;</b>瑞丽网-时尚</dd>
						<dd><b>&nbsp;</b>中国品牌网</dd>
						<dd><b>&nbsp;</b>妆点网</dd>
						<dd><b>&nbsp;</b>Onlylady女人志</dd>
						<dd><b>&nbsp;</b>MSN中文网-时尚</dd>
						<dd><b>&nbsp;</b>中国早教网</dd>
						<dd><b>&nbsp;</b>嘉人网</dd>
						<dd><b>&nbsp;</b>中国婴童网</dd>
						<dd><b>&nbsp;</b>瑞丽网-亲子</dd>
						<dd><b>&nbsp;</b>瑞丽网-母婴</dd>
						<dd><b>&nbsp;</b>中华婴童网</dd>
						<dd><b>&nbsp;</b>爱美网</dd>
						<dd><b>&nbsp;</b>搜狐网-媒体[母婴]</dd>
						<dd><b>&nbsp;</b>光明网-女人</dd>
						<dd><b>&nbsp;</b>凤凰网-时尚</dd>
						<dd><b>&nbsp;</b>风尚中国网</dd>
						<dd><b>&nbsp;</b>环球网-时尚</dd>
						<dd><b>&nbsp;</b>搜狐网-时尚</dd>
						<dd><b>&nbsp;</b>腾讯网-育儿</dd>
						<dd><b>&nbsp;</b>新浪网-时尚</dd>
						<dd><b>&nbsp;</b>新华网-时尚</dd>
						<dd><b>&nbsp;</b>中国孕育网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>汽车媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>凤凰网-汽车[聊城]</dd>
						<dd><b>&nbsp;</b>网通社汽车</dd>
						<dd><b>&nbsp;</b>环球汽车网</dd>
						<dd><b>&nbsp;</b>车天下</dd>
						<dd><b>&nbsp;</b>我要汽车网</dd>
						<dd><b>&nbsp;</b>51汽车网</dd>
						<dd><b>&nbsp;</b>汽车之友</dd>
						<dd><b>&nbsp;</b>车迷之家</dd>
						<dd><b>&nbsp;</b>爱驾网</dd>
						<dd><b>&nbsp;</b>国车网</dd>
						<dd><b>&nbsp;</b>汽车江湖网</dd>
						<dd><b>&nbsp;</b>光明网-汽车</dd>
						<dd><b>&nbsp;</b>新浪网-沈阳汽车</dd>
						<dd><b>&nbsp;</b>上海热线-汽车</dd>
						<dd><b>&nbsp;</b>搜狐网-汽车[深圳]</dd>
						<dd><b>&nbsp;</b>车讯网</dd>
						<dd><b>&nbsp;</b>中国新闻网-汽车</dd>
						<dd><b>&nbsp;</b>卓众汽车网</dd>
						<dd><b>&nbsp;</b>第一车市</dd>
						<dd><b>&nbsp;</b>中国汽车网</dd>
						<dd><b>&nbsp;</b>易车网</dd>
						<dd><b>&nbsp;</b>网上车市</dd>
						<dd><b>&nbsp;</b>汽车中国网</dd>
						<dd><b>&nbsp;</b>汽车点评网</dd>
						<dd><b>&nbsp;</b>联合越野</dd>
						<dd><b>&nbsp;</b>爱意汽车网</dd>
						<dd><b>&nbsp;</b>中国汽车消费网</dd>
						<dd><b>&nbsp;</b>车神榜汽车网</dd>
						<dd><b>&nbsp;</b>汽车殿堂</dd>
						<dd><b>&nbsp;</b>中国汽车交易网</dd>
						<dd><b>&nbsp;</b>奥一网-汽车</dd>
						<dd><b>&nbsp;</b>南方网-汽车</dd>
						<dd><b>&nbsp;</b>万车网</dd>
						<dd><b>&nbsp;</b>亚讯车网</dd>
						<dd><b>&nbsp;</b>汽车殿堂网</dd>
						<dd><b>&nbsp;</b>浙江新闻网-汽车</dd>
						<dd><b>&nbsp;</b>盖世汽车网</dd>
						<dd><b>&nbsp;</b>凤凰网-广州[汽车]</dd>
						<dd><b>&nbsp;</b>车主之家-深圳</dd>
						<dd><b>&nbsp;</b>新浪网-汽车[上海]</dd>
						<dd><b>&nbsp;</b>腾讯网-汽车[浙江]</dd>
						<dd><b>&nbsp;</b>汽车口碑网</dd>
						<dd><b>&nbsp;</b>汽车探索网</dd>
						<dd><b>&nbsp;</b>中国青年网-汽车</dd>
						<dd><b>&nbsp;</b>GQ男士网-汽车</dd>
						<dd><b>&nbsp;</b>爱卡汽车网</dd>
						<dd><b>&nbsp;</b>太平洋汽车网</dd>
						<dd><b>&nbsp;</b>中国汽车质量网</dd>
						<dd><b>&nbsp;</b>慧聪网-汽车</dd>
						<dd><b>&nbsp;</b>中青在线-汽车</dd>
						<dd><b>&nbsp;</b>千龙网-汽车</dd>
						<dd><b>&nbsp;</b>中华网-汽车</dd>
						<dd><b>&nbsp;</b>汽车大世界</dd>
						<dd><b>&nbsp;</b>和讯网-汽车</dd>
						<dd><b>&nbsp;</b>中金在线-汽车</dd>
						<dd><b>&nbsp;</b>搜狐网-汽车</dd>
						<dd><b>&nbsp;</b>汽车之家</dd>
						<dd><b>&nbsp;</b>新浪网-汽车</dd>
						<dd><b>&nbsp;</b>人民网-汽车</dd>
						<dd><b>&nbsp;</b>车夫网</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>游戏媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>新手村</dd>
						<dd><b>&nbsp;</b>7yx游戏网</dd>
						<dd><b>&nbsp;</b>5617网游网</dd>
						<dd><b>&nbsp;</b>265G游戏网</dd>
						<dd><b>&nbsp;</b>86wan游戏网</dd>
						<dd><b>&nbsp;</b>52pk游戏网</dd>
						<dd><b>&nbsp;</b>766游戏网</dd>
						<dd><b>&nbsp;</b>上方网</dd>
						<dd><b>&nbsp;</b>21CN-游戏</dd>
						<dd><b>&nbsp;</b>凤凰网-游戏</dd>
						<dd><b>&nbsp;</b>太平洋游戏网</dd>
						<dd><b>&nbsp;</b>电玩巴士</dd>
						<dd><b>&nbsp;</b>游久网</dd>
						<dd><b>&nbsp;</b>光明网-游戏</dd>
						<dd><b>&nbsp;</b>游侠网</dd>
						<dd><b>&nbsp;</b>聚侠网</dd>
						<dd><b>&nbsp;</b>万宇在线</dd>
						<dd><b>&nbsp;</b>口袋巴士</dd>
						<dd><b>&nbsp;</b>新浪网-游戏</dd>
						<dd><b>&nbsp;</b>多玩游戏网</dd>
						<dd><b>&nbsp;</b>北青网-游戏</dd>
						<dd><b>&nbsp;</b>腾讯网-游戏</dd>
						<dd><b>&nbsp;</b>人民网-游戏</dd>
						<dd><b>&nbsp;</b>搜狐网-手游</dd>
						<dd><b>&nbsp;</b>新浪网-动漫</dd>
						<dd><b>&nbsp;</b>中华网-游戏</dd>
					</dl>
				</div>
			</li>
			<li>
				<div class="hd">
					<h2>娱乐媒体</h2>
				</div>
				<div class="bd clearfix">
					<dl>
						<dd><b>&nbsp;</b>中国城市文化网</dd>
						<dd><b>&nbsp;</b>东方艺术网</dd>
						<dd><b>&nbsp;</b>粉丝网</dd>
						<dd><b>&nbsp;</b>中国娱乐网</dd>
						<dd><b>&nbsp;</b>东方网-娱乐</dd>
						<dd><b>&nbsp;</b>大众网-娱乐</dd>
						<dd><b>&nbsp;</b>中国美术家网</dd>
						<dd><b>&nbsp;</b>国家艺术网</dd>
						<dd><b>&nbsp;</b>红网-娱乐</dd>
						<dd><b>&nbsp;</b>中华网-娱乐</dd>
						<dd><b>&nbsp;</b>卓克艺术网</dd>
						<dd><b>&nbsp;</b>艺文中国网</dd>
						<dd><b>&nbsp;</b>网易-娱乐</dd>
						<dd><b>&nbsp;</b>新华网-娱乐</dd>
						<dd><b>&nbsp;</b>腾讯网-娱乐</dd>
						<dd><b>&nbsp;</b>搜狐网-娱乐</dd>
						<dd><b>&nbsp;</b>光明网-文化</dd>
						<dd><b>&nbsp;</b>中国收藏网</dd>
						<dd><b>&nbsp;</b>华夏收藏网</dd>
						<dd><b>&nbsp;</b>博艺网</dd>
						<dd><b>&nbsp;</b>人民网-娱乐</dd>
						<dd><b>&nbsp;</b>雅昌艺术网</dd>
						<dd><b>&nbsp;</b>凤凰网-音乐</dd>
						<dd><b>&nbsp;</b>中国艺术网</dd>
						<dd><b>&nbsp;</b>凤凰网-文化</dd>
						<dd><b>&nbsp;</b>博宝艺术网</dd>
						<dd><b>&nbsp;</b>新浪网-收藏</dd>
						<dd><b>&nbsp;</b>光明网-娱乐</dd>
					</dl>
				</div>
			</li>
		</ul>
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
<!--<script src="huo15template/js/jquery1.42.min.js"></script>-->
<script src="huo15template/static/js/jquery-3.1.0.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="huo15template/static/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="huo15template/js/plugins.js"></script>
<script src="huo15template/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->



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

<!--index end-->
</body>
</html>
