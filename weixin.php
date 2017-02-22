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

<style>
	#service{
		height: auto;
		padding-top:10px;
	}
	.itembox04 {
		display: block;
		position: absolute;
		width: 330px;
		top: 80px;
		right: 100px;
	}
	 .itembox04>h1 {
		display: block;
		width: 220px;
		margin: 0 auto;
		margin-bottom: 15px;
		text-align: center;
		font-size: 36px;
		color: #f90;
	}
	.itembox04 p {
		font-size: 14px;
		color: #666;
		line-height: 18px;
		text-align: center;
		margin-bottom: 15px;
	}
	.itembox04 > a {
		display: block;
		width: 200px;
		height: 50px;
		background: #ffa812;
		color: #fff;
		font-size:15px;
		line-height:50px;
		margin:0 auto;
	}

	/*我们的优势*/
	.picbox02 {
		height: 540px;
		background: url(huo15template/newSkin/image/navpic02.jpg) no-repeat;
	}
	.itembox02 {
		width: 580px;
		margin:0 auto;
		padding-top:50px;
	}
	.itembox02 h1 {
		display: block;
		width: 220px;
		margin: 0 auto;
		margin-bottom: 15px;
		text-align: center;
		font-size: 36px;
		color: #f90;
	}
	.itembox02 p {
		font-size: 14px;
		color: #666;
		line-height: 18px;
		text-align: center;
		margin-bottom: 15px;
	}
	.itembox02 > a {
		display: block;
		width: 200px;
		height: 50px;
		background: #ffa812;
		color: #fff;
		font-size:15px;
		line-height:50px;
		margin:0 auto;
		text-align: center;
	}
	#service .picbox02  {
		width:1200px;
		margin:0 auto;

	}
	/*合作流程*/
	.navpic {
		width:1200px;
		margin:0 auto;

	}
	.line-box {
		border-bottom: 1px solid #DCDCDC;
		padding: 30px 0;
	}
	.line-box .tit {
		margin: 15px 0;
	}
	.line-box .tit span {
		padding: 0 8px;
		font-size: 20px;
		background: #4E96E1;
		color: #fff;
		margin-right: 10px;
	}
	.line-box .tit h3 {
		display: inline;
		font-size: 26px;
	}
	/*广告条*/

	.sbysf_tab {
		width: 1152px;
		padding-left: 68px;
		margin: 0 auto;
		height: 105px;
		background: url(huo15template/newSkin/image/sbyxf_tit.jpg) no-repeat 0px 0px;
		overflow: hidden;
	}
	.sbysf_tab a {
		display: block;
		width: 182px;
		height: 106px;
		float: left;
	}
	.sbysf_tab a.tab1 {
		margin-right: 105px;
	}
	.sbysf_tab a span {
		 width: 100%;
		 height: 101px;
		 display: block;
		 overflow: hidden;
		 text-indent: -999em;
	 }
	.sbysf_tab a.now span.borders1 {
		border-bottom: 5px solid #FF7006;
	}
	.sbysf_tab a.now span.borders2 {
		border-bottom: 5px solid #91b723;
	}
	.sbysf_tab a.now span.borders3 {
		border-bottom: 5px solid #36b880;
	}
	.sbysf_tab a.now span.borders4 {
		border-bottom: 5px solid #368cee;
	}

	.sbysf_tab a.tab2 {
		margin-right: 81px;
	}
	.sbysf_tab a.tab3 {
		margin-right: 99px;
	}

	/*覆盖大图*/
	.sbysf_con {
		height: 581px;
		min-width: 1200px;
		margin:0 auto;
		background: url(huo15template/newSkin/image/sbysf_bg.jpg) no-repeat center top;
	}
	.sb_list {
		width: 1100px;
		height: 582px;
		margin: 0 auto;
		overflow: hidden;
		position: relative;
	}
	.sb_list ul {
		width: 4400px;
		position: absolute;
		top: 0px;
		left: 0px;
	}
	.sb_list li {
		width: 1100px;
		height: 582px;
		overflow: hidden;
		float: left;
	}

</style>
<div id="service">
	<div class="warp" style="background: url('huo15template/newSkin/image/navpic04.jpg') no-repeat;position: relative;height: 422px;">
		<div class="itembox04">
			<h1>微信代运营</h1>
			<p>专业化的团队将全面帮助您解决微信的平台搭建、<br>运营管理、营销策划和电商管理，<br>将您的业务推到全新的高度。</p>
			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1105683199&amp;site=qq&amp;menu=yes" target="_blank"><div class="navlink">立即咨询 &gt;</div></a>
		</div>
	</div>
	<div class="picbox02">
		<div class="itembox02">
			<h1>我们的优势</h1>
			<p>拥有专业数字营销机构，联合海量具备影响力的微信自媒体发起的微信传播平台在覆盖用户群<br>用户体验、专业性、规范性等方面有着其他渠道所不可比拟的优势。</p>
			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1105683199&amp;site=qq&amp;menu=yes" target="_blank"><div class="navlink">立即咨询 &gt;</div></a>
		</div>
	</div>
	<div class="navpic">
		<div class="line-box">
			<div class="tit"><span>7</span><h3>微信营销合作流程</h3></div>
			<div>
				<img alt="微信营销合作流程" src="huo15template/newSkin/image/wx_lc.jpg" width="1200">
			</div>
		</div>
	</div>
	<div class="sbysf_tab">
		<a href="javascript:;" class="tab1 now"><span class="borders1">覆盖广</span></a>
		<a href="javascript:;" class="tab2"><span class="borders2">可信高</span></a>
		<a href="javascript:;" class="tab3"><span class="borders3">保障好</span></a>
		<a href="javascript:;" class="tab4"><span class="borders4">体验佳</span></a>
	</div>
	<div class="sbysf_con">
		<div class="sb_list">
			<ul>
				<li><a href="javascript:;"><img src="huo15template/newSkin/image/sbyxf1.png" width="1100" height="582" alt="覆盖广"></a></li>
				<li><a href="javascript:;"><img src="huo15template/newSkin/image/sbyxf2.png" width="1100" height="582" alt="可信高"></a></li>
				<li><a href="javascript:;"><img src="huo15template/newSkin/image/sbyxf3.png" width="1100" height="582" alt="保障好"></a></li>
				<li><a href="javascript:;"><img src="huo15template/newSkin/image/sbyxf4.png" width="1100" height="582" alt="体验佳"></a></li>
			</ul>
		</div>
	</div>
	<script>
		$(function () {
		  $(".sbysf_tab > a").each(function (index, element) {
		    $(element).hover(function (e) {
		      $(this).siblings().removeClass("now");
		      $(this).removeClass("now").addClass("now");
		      $(".sbysf_con .sb_list li").eq(index).show();
              $(".sbysf_con .sb_list li").eq(index).siblings().hide();

            })
          })
        });
	</script>

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
<!--index end-->
</body>
</html>
