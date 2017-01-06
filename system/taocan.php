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
include("../include/config.php");
include("../include/function.php");
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
  <title><?php echo $G_Title;?>_<?php echo $webname;?></title>
  <meta name="keywords" content="<?php echo $G_KeyWords;?>"/>
  <meta name="description" content="<?php echo $G_Descr;?>"/>
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
	<?php include('../loginDialog.php'); ?>
</div>
<!--banner end-->
<!--main-->
<style>
	.tab-fd2 {
		background:#38B5E6;
	}
	.tab-fd2 .thumb {
		float:left;
		padding:15px;
	}
	.tab-fd2 .desc {
		background:#FFF;
		float:right;
		width:980px;
		padding:7px 26px;
		margin-top:5px;
		margin-right:5px;
		*display:inline;
		overflow:hidden;
	}
	.tab-fd2 .desc ul li {
		height:32px;
		line-height:32px;
		float:left;
		width:125px;
		border-bottom:1px dashed #38B5E6;
		margin-right:40px;
		margin-bottom:11px;
	}
	.tab-fd2 .desc ul li a {
		font-size:14px;
		background:url(http://www.ruanwen.la/new_images/img62.png) no-repeat left center;
		padding-left:23px;
	}
	.tab-fd2 .desc ul {
		width:1000px;
	}
</style>
<div class="package">
	<div class="wrapper">
		<dl>
			<dd>
				<div class="hd"> <a name="10"></a>
					<h3>综合套餐60家媒体<span>仅需2000元</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包含十大门户媒体</h3>
				</div>
				<div class="tab-fd2 clearfix">
					<div class="desc">
						<ul class="desc_1">
							<li> <a target="_blank" rel="nofollow" href="http://cj.sina.com.cn/article/detail/5840003930/52052?column=tech&amp;ch=5">新浪网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://info.service.hc360.com/2016/08/291110469250.shtml">慧聪网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://invest.china.com.cn/quyu/2016/zixun_0829/78582.html">中国网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://economy.china.com/jykx/news/11179727/20160829/23410860.html">中华网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://dy.163.com/wemedia/article/detail/BVL2IRE305118BMJ.html">网易订阅</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.ah.chinanews.com/news/2016/0829/13246.shtml">中新网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://hainan.ifeng.com/a/20160829/4918026_0.shtml">凤凰网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://sc.china.com/jingji/11171522/20160829/23410428.html">中华网四川</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://zonghe.xfrb.com.cn/zixun/2016-08-29/131191.html">消费日报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://toutiao.com/i6324129655280370178/">今日头条</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://3g.163.com/ntes/special/0034073A/wechat_article.html? docid=BVL2IRE305118BMJ">网易新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://i.ifeng.com/vampire/zmtnews?aid=zmt_3194968">凤凰新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://kuaibao.qq.com/s/20160829A03SQY00">腾讯网快报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://hn.jrj.com.cn/2016/08/29113321383176.shtml">金融界</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://pinpai.szonline.net/ppnews/20160829/622821.html">深圳热线</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://view.inews.qq.com/a/20160829A03SQY00">腾讯新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://3g.k.sohu.com/t/n155977237">搜狐新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.yidianzixun.com/home?page=article&amp;id=0EITI5qc">一点资讯</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://kaiyanshidian.baijia.baidu.com/article/603813">百度百家</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://mt.sohu.com/20160829/n466553499.shtml">搜狐网媒体</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.zibenlun.cn/caijing/2016/0829/46297.html">资本论</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://info.qiye.gov.cn/a/qiye/20160829/21700.html">中国企业网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.zznews.cn/fuwuzhongxin/system/2016/08/29/011017109.shtml">漳州新闻网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://finance.workercn.cn/561/201608/29/160829112243899.shtml">中工网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.he-nan.com/new/show-21798.html">河南网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://edu.shangdu.com/zxxw/312152.html">商都网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://qndb.net/lyxw/743906.html">青年导报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://zx.zynews.com/sx/1026802.html">中原网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.yiernews.com/html/20160829/141392.html">亿欧网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.gdutol.com/life/283752.html">工大在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.eedsnews.com/2016/0829/12600.html">鄂尔多斯新闻</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.mjqds.com/xxd/2016/0829/3449.html">无锡在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://life.zjrxz.com/html/20160829/522146.shtml">浙江热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dfrx.net/html/20160829/44599.html">东方热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hz.onhot.cn/zx/20160829/190859.html">杭州热线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubdushi.cn/bcw/201608/2996089.html">湖北都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sh.onhot.cn/shzx/20160829/190861.html">上海视窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shmsg.cn/t/20160829/321862.html">上海信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjdushi.cn/2016/0829/48928.html">天津都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjwsc.com/bbs/2016082991879.html">浙江视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.caidaocn.com/2016/0829/22806.html">财道中国网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dahenews.cn/dhnews/2016082948930.html">大河新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gdssc.net/ssq/2016082991881.html">广东视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ihbnews.com/html/2016/zh_0829/1105.html">河北在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hebeizc.net/2016/0829/48929.html">河北之窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.henacenn.com/hennews/2016/0829/91880.html">河南企业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubsc.com/cfy/2016082991882.html">湖北视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubeizx.com.cn/new/201608/2975457.html">湖北在线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sxisc.cn/xwnw/2016082991884.html">山西视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhexunw.com/2016/0829/13585.html">浙讯网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zgsyzx.com.cn/2016/08/29/44600.html">中国商讯通</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gzdushi.net/html/20160829/75459.html">广州都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunands.cn/llo/201608/2996090.html">湖南都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunansc.net/hnd/2016082991883.html">湖南视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.saninfo.cn/xw/20160829/321863.html">三峡信息在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjjdxw.com/xw/20160829/321864.html">天津焦点网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tj.onhot.cn/tjzx/20160829/190860.html">天津视窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjxinxi.cn/xww/201608/7545829.html">天津信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.72177.com/html/201608/29/4154991.htm">天津在线 </a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://edu.nen.com.cn/system/2016/08/29/019324307.shtml">东北新闻网</a> </li>
						</ul>
					</div>
				</div>
			</dd>
			<a class="more" id="desc_1_more" href="javascript:void(0);" onclick="more('.desc_1','desc_1_more');" style="display: none;">查看全部媒体</a>
			<dd>
				<div class="hd"> <a name="11"></a>
					<h3>综合套餐120家媒体<span>仅需4000元</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包含十大门户、财经媒体</h3>
				</div>
				<div class="tab-fd2 clearfix">
					<div class="desc">
						<ul class="desc_2">
							<li> <a target="_blank" rel="nofollow" href="http://cj.sina.com.cn/article/detail/5840003930/52052?column=tech&amp;ch=5">新浪网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://difang.gmw.cn/newspaper/2016-08/30/content_115710063.htm">光明网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://news.ifeng.com/a/20160830/49859242_0.shtml">凤凰网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://roll.sohu.com/20160829/n466516059.shtml">搜狐网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://finance.jrj.com.cn/biz/2016/08/29104821382772.shtml">金融界</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://bank.stockstar.com/IG2016082900000961.shtml">证券之星</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.yangtse.com/caijing/cyy/jzjj/20160829/1472446357944.html">扬子晚报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://finance.southcn.com/qyxw/content/2016-08/29/content_154766253.htm">南方网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://mini.eastday.com/a/160830012950147.html">东方网头条</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://economy.china.com/jykx/news/11179727/20160829/23409111.html">中华网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://zonghe.xfrb.com.cn/caijing/2016-08-29/130820.html">消费日报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://e.tech.163.com/docs/5/2016082913/BVL2BCLS05118BMJ.html">网易科技</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.ceh.com.cn/jjzx/2016/08/976164.shtml">中国导报网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://invest.china.com.cn/quyu/2016/zixun_0829/78537.html">中国网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.ccidnet.com/2016/0829/10175798.shtml">赛迪网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://info.service.hc360.com/2016/08/291015469215.shtml">慧聪网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://toutiao.com/i6324129655280370178/">今日头条</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://ln.sina.com.cn/fs/economy/2016-08-29/103261718.html">新浪网地方</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://sd.news.163.com/16/0825/16/BVB2R48M039318IG.html">网易地方</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://dy.163.com/wemedia/article/detail/BVL2BCLS05118BMJ.html">网易订阅</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://3g.163.com/ntes/special/0034073A/wechat_article.html?docid=BVL2BCLS05118BMJ">网易新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://i.ifeng.com/vampire/zmtnews?aid=zmt_3194930">凤凰新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://kuaibao.qq.com/s/20160829A03RF500">腾讯网快报</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://view.inews.qq.com/a/20160829A03RF500">腾讯新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://3g.k.sohu.com/t/n155944488">搜狐新闻APP</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://mt.sohu.com/20160829/n466492853.shtml">搜狐网媒体</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://news.chinabyte.com/271/13876771.shtml">比特网</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://www.ah.chinanews.com/news/2016/0829/13234.shtml">中新网安徽</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://hainan.ifeng.com/a/20160829/4917007_0.shtml">凤凰网海南</a> </li>
							<li> <a target="_blank" rel="nofollow" href="http://sc.china.com/jingji/11171522/20160829/23410406.html">中华网四川</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://rich.online.sh.cn/rich/gb/content/2016-08/29/content_8004318.htm">上海热线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://finance.eastday.com/eastday/finance1/Business/node3/u1ai2244.html">东方网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.xkb.com.cn/cyy/2016/0829/1242.html">新快网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ah.chinanews.com/news/2016/0829/13234.shtml">中新网安徽</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://hainan.ifeng.com/a/20160829/4917007_0.shtml">凤凰网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://mt.sohu.com/20160829/n466500397.shtml">搜狐网新闻</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.cngold.org/c/2016-08-29/c4366284.html">金投网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://info.qiye.gov.cn/a/qiye/20160829/21688.html">中国企业网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.chinabyte.com/271/13876771.shtml">比特网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://build.workercn.cn/26891/201608/29/160829101854696.shtml">中工网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://edu.shangdu.com/zxxw/312145.html">商都网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zznews.cn/fuwuzhongxin/system/2016/08/29/011017080.shtml">漳州新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://qndb.net/lyxw/743777.html">青年导报</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://zx.zynews.com/sx/1026695.html">中原网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.72177.com/html/201608/29/4154878.htm">天津在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zibenlun.cn/meeting/20160829/46293.html">资本论</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.kaixian.tv/gd/2016/0830/722328.html">汉丰网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.xue163.com/2971/1/29716341.html">中国学网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://pinpai.szonline.net/ppnews/20160829/622792.html">深圳热线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sz-qb.com/jr/2016/08_29/10846.html">深圳侨报</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.xfzk315.com/html/2016/xiaofei_0829/26017.html">消费周刊</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.cce.cn/artide-70742-1.html">商务频道</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.nenn.com.cn/zs/2016/08/29/96810.html">北方企业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.28.com/wl/wlfw/n-960979.html">28商机网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shangjie.biz/shangxun/2016/0829/411083.shtml">商界在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ceccen.com/qiyexinwenfabuhui/1472458518.html">中国企业报道</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.chinadevelopment.com.cn/jjzx/2016/08/1075141.shtml">中国发展网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ceoim.com/article-68478-1.html">企业家在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ntdaily.com.cn/2016/shehui_0829/48797.html">苏南新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://roll.hxfzzx.com/2016/0829/29139.html">海峡在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.mxrb.cn/zixun/2016/0829/4712.html">闽西日报</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sxhkstv.com/minsheng/2016-08-29/70877.html">香港卫视</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://df.cneo.com.cn/qgjj/20160829/3527.html">企业观察报</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.yiernews.com/html/20160829/141391.html">亿欧网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.he-nan.com/new/show-21792.html">河南网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gdutol.com/life/283751.html">工大在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.eedsnews.com/2016/0829/12601.html">鄂尔多斯新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://life.zjrxz.com/html/20160829/522147.shtml">浙江热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjqiye.net/2016/0829/221149.shtml">浙江企业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjszc.cn/dd/2016082991886.html">浙江之窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjwsc.com/bbs/2016082991887.html">浙江视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.fzxmy.com/ss/2016/08/29/3451.html">西北信息港</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zguowang.cn/whnews/2016/2911025808.html">文化中国网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjdushi.cn/2016/0829/48931.html">天津都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sgrxw.cn/html/20160829/44601.html">深港新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shmsg.cn/t/20160829/321861.html">上海信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sh.onhot.cn/shzx/20160829/190857.html">上海视窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shcjw.cn/shnews/2016/2911025908.html">上海财经网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubdushi.cn/bcw/201608/2996088.html">湖北都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hz.onhot.cn/zx/20160829/190858.html">杭州热线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dfrx.net/html/20160829/44597.html">东方热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hrlft.com/ccd/2016/0829/3448.html">东北信息港</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.bjdds.cn/bjnews/201608/22640029.html">北京都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zgsyzx.com.cn/2016/08/29/44598.html">中国商讯通</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhexunw.com/2016/0829/13586.html">浙讯网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sxisc.cn/xwnw/2016082991897.html">山西视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.scssd.cn/xwqt/2016082991902.html">山东视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.nxqxl.com/xxw/20160829/3454.html">江苏信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hnolw.cn/hnnew/201608/22640129.html">湖南在线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubeizx.com.cn/new/201608/2975469.html">湖北在线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.henacenn.com/hennews/2016/0829/91898.html">河南企业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hebeizc.net/2016/0829/48935.html">河北之窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ihbnews.com/html/2016/zh_0829/1106.html">河北在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hebdaily.com/xw/201608/29156794.html">河北热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gdssc.net/ssq/2016082991899.html">广东视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dahenews.cn/dhnews/2016082948936.html">大河新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.caidaocn.com/2016/0829/22807.html">财道中国网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.jrdgj.com/y/20160829/3452.html">安徽在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.mjqds.com/xxd/2016/0829/3453.html">无锡在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjxinxi.cn/xww/201608/7546829.html">天津信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tj.onhot.cn/tjzx/20160829/190872.html">天津视窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjjdxw.com/xw/20160829/321890.html">天津焦点网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.saninfo.cn/xw/20160829/321891.html">三峡信息在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunansc.net/hnd/2016082991901.html">湖南视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunands.cn/llo/201608/2996094.html">湖南都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gzdushi.net/html/20160829/75467.html">广州都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hnsbbs.com/ydys/20160829/1176536.html">闽南之窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.aidn.com.cn/2016/0829/17427.html">东南之窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.klxcb.com/jxxw/20160829/312285.html">大余新城网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.0754news.com/guonei/20160829/72081.html">潮汕在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.020cf.com/gnxw/20160829/330419.html">广州热线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.chinacw.com.cn/2016/0829/5599.html">中财网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.0591dsw.com/gnxw/20160829/139988.html">福州都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hxtcpp.com/2016/0829/116046.html">海西网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjqiye.net/2016/0829/221225.shtml">浙江企业网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.v0791.cn/2016/0829/57150.html">江西生活</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.021dsw.com/xwdt/20160829/119507.html">上海都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.city96.com/xwdt/20160829/324546.html">天津之声</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zyxedu.net/shrd/20160829/324066.html">正阳生活网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.beelink.com/html/201608/content_204675.htm">百灵网</a> </li>
						</ul>

					</div>
				</div>
			</dd>
			<a class="more" id="desc_2_more" href="javascript:void(0);" onclick="more('.desc_2','desc_2_more');" style="display: none;">查看全部媒体</a>
			<dd>
				<div class="hd"> <a name="12"></a>
					<h3>P2P财经套餐120家媒体<span>仅需6000元</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包含全国30大财经，20大门户媒体</h3>
				</div>
				<div class="tab-fd2 clearfix">
					<div class="desc">
						<ul class="desc_3">
							<li> <a target="_blank" rel="nofollow" href="http://www.qianzhan.com/indynews/detail/257/140925-159be556.html">前瞻网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://m.people.cn/n/2015/0316/c120-2420374.html">人民网-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://economy.gmw.cn/2014-09/30/content_13426166.htm">光明网-经济</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://stock.jrj.com.cn/2015/03/11092718946743.shtml">金融界网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://hk.stock.hexun.com/2014-06-25/166026128.html">和讯网-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://finance.huanqiu.com/data/2014-07/5063357.html">环球网-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://news.chinaventure.com.cn/64/7/14280379748.shtml">投资中国网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://info.cb.com.cn/yule/2014_0424/1056200.html">中国经营网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://hy.stock.cnfol.com/jinrongbaoxian/20150309/20270421.shtml">中金在线</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://hn.people.com.cn/n/2015/0325/c356343-24277349.html">人民网-湖南</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://stock.chinadaily.com.cn/zixun/2015/0402/8004.shtml">中国日报-证券</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://finance.stockstar.com/SS2015040200002124.shtml">证券之星</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://info.finance.hc360.com/2014/12/101051304436.shtml">慧聪网-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.chinavalue.net/Story/2015-3-10/727540.html">价值中国网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://gb.cri.cn/44571/2014/08/28/7851s4670964.htm">国际在线-企业</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.southmoney.com/caijing/gongsixinwen/201504/305919.html">南方财富网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.financeun.com/News/20141014/2013cfn/1315745700.shtml">中国金融网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://imall.cntv.cn/2015/03/03/ARTI1425349783333807.shtml">央视网-新闻</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://ad.163.com/14/0217/16/9LA25MRF0001125P.html">网易-商讯</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.afinance.cn/gold/jsdt/201504/837240.html">第一金融网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://mba.zj.com/chanj/2014-10-24/305458.html">浙江都市网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.wdlm.cn/article/18393">网贷联盟网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://rich.online.sh.cn/rich/gb/content/2015-03/31/content_7343647.htm">上海热线-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.fechina.com.cn/category/news/201503/3153398/1.html">财经中国网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://money.news18a.com/news/150401/2/story_271742.html">网通社-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://news.dayoo.com/finance/201501/12/54403_39732562.htm">大洋网-财经</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://news.tom.com/2014-12-11/OLH8/33289697.html">TOM-新闻</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.gs.xinhuanet.com/news/2015-04/03/c_1114860024.htm">新华网-甘肃</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://www.bjd.com.cn/10cj/financing/201503/27/t20150327_9011398.html">京报网</a>
							</li><li> <a target="_blank" rel="nofollow" href="http://yueyu.cntv.cn/2014/02/13/ARTI1392280171583838.shtml">央视网-广东</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://i.ifeng.com/news/guoji/sharenews.f?&amp;fromType=vampire&amp;aid=326231">凤凰网-手机端</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://toutiao.com/a3905814533/">今日头条-新闻</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.chinahightech.com/html/692/2015/0211/16183454.html">中国创新网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.takefoto.cn/viewnews-351857.html">北京晚报网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://biz.jschina.com.cn/qiye/2015/04/17/250.html">中国江苏网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://renwu.youth.cn/qnsh/201504/t20150403_6561702.htm">中国青年-人物</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.hongzhoukan.com/14/0610/rjh091322.html">证券市场周刊</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://finance.cngold.org/c/2014-10-29/c2848129.html">金投网-财经</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://mt.sohu.com/20141105/n405810003.shtml">搜狐网-媒体</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zgswcn.com/2015/0420/612933.shtml">中国商报网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.3news.cn/2014/k_1224/21323.html">中国财经时报网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.sdinfo.net/cjxw/mq/2166343.shtml">齐鲁热线</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.yangtse.com/tzlc/2014-07-31/156.html">扬子晚报网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.xkb.com.cn/life/xiuxian/15483.html">新快网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://nb.ifeng.com/qtwz/detail_2013_06/20/914002_0.shtml">凤凰网-宁波</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://ndfinance.oeeee.com/qiye/jiaodian/201503/16/827.html">南都网-企业</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.cctime.com/html/2015-4-3/20154380585521.htm">飞象网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://tech.ccidnet.com/art/302/20150403/5806957_1.html">赛迪网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://net.chinabyte.com/277/12863777.shtml">比特网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://finance.china.com/fin/kj/201403/03/7536219.html">中华网-财经</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.cbmag.cn/news/54696.html">中国商业期刊网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ceoim.com/article-35584-1.html">企业家在线</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://xiaofei.china.com.cn/news/info-11-9-101948.html">中国网-消费</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.js.chinanews.com/news/2014/0806/87633.html">中国新闻-江苏</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://zl.ynet.com/news/201503/28793.html">北青网-质量</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://business.chinadaily.com.cn/syzx/2014-09-02/2617.html">中国日报-商业</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.bnncn.com/a/qiyezixun/2015/0331/24361.html">中国商业报道网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://hebei.news.163.com/14/0227/17/9M3UDRDF027907RA.html">网易-河北</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.021news.cn/show-13940-1.html">上海新闻网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://cj.xfrb.com.cn/newsf/2015/04/20/142952398486.htm">消费日报-财经</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhejrx.com/html/2015/03/16/9432.html">浙江热线网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://info.service.hc360.com/2015/04/021311431683.shtml">慧聪网-商业</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.chinacw.com.cn/2014/0304/119696.html">中财网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zibenlun.cn/caijing/sdbd/2014/0120/14790.html">资本论财经网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://zx.zynews.com/ls/127388.html">中原资讯网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.nenn.com.cn/qyyw/2015/04/02/55205.html">北方企业新闻网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://ny.chinacenn.com/info/nid_141141.html">中国企业新闻网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.duohaode.com/fashion/201503/45304.html">西部网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.bjdsw.cn/html/2015/society_0108/45924.html">北京都市网</a>
							</li><li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zguowang.cn/whnews/2015/304017704.html">文化中国网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dfrx.net/qw/20150430/9907.html">东方热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubdushi.cn/bcw/201505/0515737.html">湖北都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjdushi.cn/2015/0429/14042.html">天津都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sgxww.net/china/201505/25999.html">深港新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shmsg.cn/t/20150506/78648.html">上海信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhejiangsc.cn/Article/new/201505/2806.html">浙江视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.bjdsw.cn/html/2015/society_0108/45924.html">北京都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.shcjw.cn/shnews/2015/054033005.html">上海财经网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zjszc.cn/dd/2015043023854.html">浙江之窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sxisc.cn/xwnw/2015043023847.html">山西视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ahcity.cn/article/201527766.html">安徽在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.dahenews.cn/dhnews/2015042914061.html">大河新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.ihbnews.com/html/2015/zh_0428/455.html">河北在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gdssc.net/ssq/2015050524142.html">广东视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubsc.com/cfy/2015050524164.html">湖北视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hebeizc.net/2015/0504/14187.html">河北之窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hubeizx.com.cn/new/201505/0430080.html">湖北在线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.henacenn.com/hennews/2015/0504/23964.html">河南企业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.comxt.cn/news/mama/201504/2615.html">中国商讯通</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhexunw.com/2015/0506/8693.html">浙讯网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.caidaocn.com/2014/1126/18413.html">财道中国网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.scssd.cn/xwqt/2015050524066.html">山东视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hebdaily.com/xw/201505/0486391.html">河北热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.jsnewsw.com/201505/0526569.html">江苏信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hnolw.cn/hnnew/201505/5661705.html">湖南在线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://news.beelink.com/html/201406/content_278945.htm">百灵网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.mnwww.com/finance/money/20150420/404199.html">闽南之窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.zhizunnews.com/tech/mobile/20150315/13815.html">至尊网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tianxia360.com/finance/stock/20150414/354260.html">天下新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.cylsz.com/tech/news/20150420/123202.html">产业新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://city.zynews.com/plus/view.php?aid=20671">中原网-城市</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.gzdsnet.com/Article/new/201504/2639.html">广州都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://tianjinsc.cn/Article/new/201504/5086.html">天津视窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.sdnewsw.com/201504/3025547.html">山东新闻网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjjdxw.com/xw/20150430/77856.html">天津焦点网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunands.cn/llo/201505/0515699.html">湖南都市网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.tjxinxi.cn/xww/201504/2919828.html">天津信息网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.wuxzx.com/Article/new/201505/2590.html">无锡在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.saninfo.cn/xw/20150505/78442.html">三峡信息在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunansc.net/hnd/2015043023806.html">湖南视窗网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hunan.mpnews.cn/201504/3019793.htm">湖南品牌网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.anhui.mpnews.cn/2015/050520979.shtml">安徽品牌网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hxtcpp.com/2014/0513/39144.html">中国海西网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.0754news.com/shehui/20140611/19769.html">潮汕在线</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.fzrxw.com/2015/0430/243581.html">福州热线网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.aidn.com.cn/2015/0512/253237.html">东南之窗</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.v0791.cn/2015/0423/25734.html">江西生活网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hxqixun.com/2015/0507/48233.html">华夏企讯网</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.hbdushi.cn/health/news/2015040970743.html">河北大都市</a> </li>
							<li style="display: list-item;"> <a target="_blank" rel="nofollow" href="http://www.i0851.cn/article-70412-1.html">贵阳之窗</a> </li>
						</ul>

					</div>
				</div>
			</dd>
			<a class="more" id="desc_3_more" href="javascript:void(0);" onclick="more('.desc_3','desc_3_more');" style="display: none;">查看全部媒体</a>
			<dd>
				<div class="hd"> <a name="1"></a>
					<h3>地方新闻网-外链套餐<span>仅需100元（十二家地方新闻网）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/img66.gif"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a target="_blank" rel="nofollow" href="http://www.hbdushi.cn/health/news/2015030367091.html">河北都市网</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.i0851.cn/article-96620-1.html">贵阳之窗</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.shaoxing.com.cn/jkzj/jkzx/20150303/152807.html">绍兴新闻网</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.hxqixun.com/2015/0303/13389.html">华夏企讯网</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.v0791.cn/2015/0303/17127.html">江西生活</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.aidn.com.cn/2015/0303/220652.html">东南之窗</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.fzrxw.com/2015/0303/224732.html">福州热线</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.hnrxw.com/finance/sh/035677203.html">湖南热线</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.shdushi.cn/health/news/2015030348225.html">上海都市网 </a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.taixing.cn/show.php?contentid-330439.html">泰兴网</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.citygf.com/bj/2015/0122/3524635.html">广佛都市网</a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.zgshhdj.com/gnxw/20160325/279413.html">北京之声</a></li>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="2"></a>
					<h3>门户网综合套餐<span>仅需500元（十大门户网站，出稿速度快）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_2.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://ln.sina.com.cn/news/economy/2014-03-25/13242965.html" target="_blank">新浪网-辽宁/内蒙古</a></li>
							<li><a rel="nofollow" href="http://hebei.news.163.com/14/0227/17/9M3UDRDF027907RA.html" target="_blank">网易-太原/山东/山西</a></li>
							<li><a rel="nofollow" href="http://mt.sohu.com/20141105/n405810003.shtml" target="_blank">搜狐网-媒体新闻/滚动</a></li>
							<li><a rel="nofollow" href="http://info.service.hc360.com/2014/02/261210411305.shtml" target="_blank">慧聪网-商业</a></li>
							<li><a rel="nofollow" href="http://henan.hexun.com/2015-03-17/174130209.html" target="_blank">凤凰网-手机端</a></li>
							<li><a rel="nofollow" href="http://lohas.china.com.cn/2014-02/14/content_6669399.htm" target="_blank">中国网-投资/优讯</a></li>
							<li><a rel="nofollow" href="http://view.inews.qq.com/a/20160729A02D9700" target="_blank">腾讯网-新闻[手机版]</a></li>
							<li><a rel="nofollow" href="http://finance.china.com/fin/kj/201403/03/7536219.html" target="_blank">中华网-财经</a></li>
							<li><a rel="nofollow" href="http://nb.ifeng.com/qtwz/detail_2013_06/20/914002_0.shtml" target="_blank">凤凰网-宁波/海南</a></li>
							<li><a rel="nofollow" href="http://www.js.chinanews.com/news/2014/0806/87633.html" target="_blank">中国新闻网-江苏/安徽</a></li>
						</ul>
						<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://www.ruanwen.la/ruanwen/201507281122047945.html" target="_blank">今日头条</a>、<a rel="nofollow" href="http://hb.youth.cn/2015/0604/1266411.shtml" target="_blank">中国青年网-山东</a>、<a rel="nofollow" href="http://3g.163.com/ntes/special/0034073A/wechat_article.html?docid=B69JK40205148B9C" target="_blank">网易-资讯[APP]</a>、<a rel="nofollow" href="http://www.xfrb.com.cn" target="_blank">消费日报网</a></span> </div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="3"></a>
					<h3>IT科技类套餐<span>仅需600元（十大IT科技网站）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_3.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://www.it.com.cn" target="_blank">IT世界网</a></li>
							<li><a rel="nofollow" href="http://www.it168.com" target="_blank">IT168</a></li>
							<li><a rel="nofollow" href="http://www.pchome.net" target="_blank">电脑之家</a></li>
							<li><a rel="nofollow" href="http://www.chinabyte.com" target="_blank">比特网</a></li>
							<li><a rel="nofollow" href="http://www.ccidnet.com" target="_blank">赛迪网</a></li>
							<li><a rel="nofollow" href="http:/www.pcpop.com" target="_blank">泡泡网</a></li>
							<li><a rel="nofollow" href="http://www.beareyes.com.cn" target="_blank">小熊在线</a></li>
							<li><a rel="nofollow" href="http://www.guigu.org/" target="_blank">硅谷网</a></li>
							<li><a rel="nofollow" href="http://www.cctime.com" target="_blank">飞象网</a></li>
							<li><a rel="nofollow" href="http://www.ctocio.com.cn" target="_blank">IT专家网</a></li>
						</ul>
						<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://www.thethirdmedia.com/Article/201503/show352151c77p1.html" target="_blank">第三媒体</a>、<a rel="nofollow" href="http://www.ccw.com.cn/article/view/70751" target="_blank">计世网</a>、<a rel="nofollow" href="http://www.czn.com.cn/article-928102-1.html" target="_blank">中关村商情网</a>、<a rel="nofollow" href="http://www.kejixun.com/article/201605/172111.html" target="_blank">科技讯</a></span> </div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="4"></a>
					<h3>财经商业套餐<span>仅需800元（十大财经类媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_4.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://gb.cri.cn" target="_blank">国际在线-企业</a></li>
							<li><a rel="nofollow" href="http://www.china.com" target="_blank">中华网-财经</a></li>
							<li><a rel="nofollow" href="http://invest.china.com.cn" target="_blank">中国网-投资</a></li>
							<li><a rel="nofollow" href="http://www.stockstar.com" target="_blank">证券之星</a></li>
							<li><a rel="nofollow" href="http://www.hc360.com" target="_blank">慧聪网-商业</a></li>
							<li><a rel="nofollow" href="http://www.cngold.org" target="_blank">金投网</a></li>
							<li><a rel="nofollow" href="http://www.jrj.com.cn" target="_blank">金融界网</a></li>
							<li><a rel="nofollow" href="http://www.cb.com.cn" target="_blank">中国经营网</a></li>
							<li><a rel="nofollow" href="http://www.qiye.gov.cn" target="_blank">中国企业网</a></li>
							<li><a rel="nofollow" href="http://www.zibenlun.cn" target="_blank">资本论财经网</a></li>
						</ul>
						<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://finance.haiwainet.cn/" target="_blank">海外网-财经</a>、<a rel="nofollow" href="http://www.southmoney.com/" target="_blank">南方财富网</a>、<a rel="nofollow" href="http://www.p5w.net/news/biz/201607/t20160721_1525541.htm" target="_blank">全景网</a>、<a rel="nofollow" href="http://www.xfrb.com.cn/area/minsheng/zonghexinwen/2016-04-13/59588.html" target="_blank">消费日报网</a></span></div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="5"></a>
					<h3>家居房产套餐<span>仅需800元（十大房产家居媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_5.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://jj.hc360.com" target="_blank">慧聪网-家居</a></li>
							<li><a rel="nofollow" href="http://home.focus.cn" target="_blank">搜狐网-家居</a></li>
							<li><a rel="nofollow" href="http://jiaju.sina.com.cn" target="_blank">新浪网-家居</a></li>
							<li><a rel="nofollow" href="http://home.163.com" target="_blank">网易-家居</a></li>
							<li><a rel="nofollow" href="http://www.pchouse.com.cn" target="_blank">太平洋家居网</a></li>
							<li><a rel="nofollow" href="http://www.asia-home.com.cn" target="_blank">腾讯-亚太家居</a></li>
							<li><a rel="nofollow" href="http://www.joyhouse.com.cn" target="_blank">凤凰网-居悦</a></li>
							<li><a rel="nofollow" href="http://home.soufun.com" target="_blank">搜房网-家居</a></li>
							<li><a rel="nofollow" href="http://house.china.com.cn/zaozhuang/view/828970.htm" target="_blank">中国网-地产</a></li>
							<li><a rel="nofollow" href="http://www.jiatx.com" target="_blank">家天下</a></li>
						</ul>
						<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://house.qq.com/a/20160504/061419.htm" target="_blank">腾讯网-房产</a>、<a rel="nofollow" href="http://news.dichan.sina.com.cn/2014/01/14/1014981.html" target="_blank">新浪网-地产</a>、<a rel="nofollow" href="http://news.msn.fang.com/2016-03-02/19896345.htm" target="_blank">MSN-房产</a>、<a rel="nofollow" href="http://news.letfind.com.cn/news/2015-3/371722.html" target="_blank">猎房网</a></span> </div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="6"></a>
					<h3>汽车套餐<span>仅需900元（十大汽车类媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_6.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://www.bitauto.com" target="_blank">易车网</a></li>
							<li><a rel="nofollow" href="http://www.chinacar.com.cn" target="_blank">中国汽车网</a></li>
							<li><a rel="nofollow" href="http://www.pcauto.com.cn" target="_blank">太平洋汽车网</a></li>
							<li><a rel="nofollow" href="http://www.mycar168.com" target="_blank">汽车大世界</a></li>
							<li><a rel="nofollow" href="http://www.315che.com" target="_blank">中国汽车消费网</a></li>
							<li><a rel="nofollow" href="http://www.feelcars.com" target="_blank">汽车探索网</a></li>
							<li><a rel="nofollow" href="http://www.0755car.com" target="_blank">车神榜汽车网</a></li>
							<li><a rel="nofollow" href="http://www.xcar.com.cn" target="_blank">爱卡汽车</a></li>
							<li><a rel="nofollow" href="http://guangzhou.auto.sohu.com" target="_blank">搜狐网-汽车</a></li>
							<li><a rel="nofollow" href="http://news.16888.com/a/2014/1130/676969.html" target="_blank">车主之家</a></li>
						</ul>
						<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://www.yicheshi.com/people/20130807/491706c.html" target="_blank">第一车市</a>、<a rel="nofollow" href="http://news.cheshi.com/20140227/1268353.shtml" target="_blank">网上车市</a>、<a rel="nofollow" href="http://www.qc188.com/cwcs/201504/291257.html" target="_blank">汽车江湖网</a>、<a rel="nofollow" href="http://news.58che.com/news/1379328.html" target="_blank">58车网</a></span> </div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="7"></a>
					<h3>女性时尚套餐<span>仅需900元（十大女性时尚媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_7.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://www.mina.com.cn" target="_blank">米娜时尚网</a></li>
							<li><a rel="nofollow" href="http://www.chinasspp.com" target="_blank">中国时尚品牌网</a></li>
							<li><a rel="nofollow" href="http://www.miss-no1.com" target="_blank">第一女人网</a></li>
							<li><a rel="nofollow" href="http://life.ixinwei.com/" target="_blank">昕薇网</a></li>
							<li><a rel="nofollow" href="http://www.jrlady.com" target="_blank">佳人女性网</a></li>
							<li><a rel="nofollow" href="http://beauty.hc360.com" target="_blank">慧聪网美容</a></li>
							<li><a rel="nofollow" href="http://www.rayli.com.cn" target="_blank">瑞丽网</a></li>
							<li><a rel="nofollow" href="http://www.vdolady.com" target="_blank">维度女性网</a></li>
							<li><a rel="nofollow" href="http://www.chinapp.com" target="_blank">中国品牌网</a></li>
							<li><a rel="nofollow" href="http://www.zdface.com" target="_blank">妆点网</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://wed.27.cn/731/1616595.html" target="_blank">爱丽婚嫁网</a>、<a rel="nofollow" href="http://beauty.pclady.com.cn/116/1164364.html" target="_blank">太平洋女性网</a>、<a rel="nofollow" href="http://www.bashalady.com/hotnews/201605104849.html" target="_blank">芭莎时尚网</a>、<a rel="nofollow" href="http://news.lady8844.com/info/2015-03-05/1425539096d1547813.html" target="_blank">爱美网</a></span>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="8"></a>
					<h3>健康套餐<span>仅需900元（十大健康医疗媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_8.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://health.china.com" target="_blank">中华网-健康</a></li>
							<li><a rel="nofollow" href="http://www.yywsb.com" target="_blank">医药卫生网</a></li>
							<li><a rel="nofollow" href="http://news.39.net" target="_blank">39健康网</a></li>
							<li><a rel="nofollow" href="http://health.henan.163.com" target="_blank">网易-健康[河南]</a></li>
							<li><a rel="nofollow" href="http://www.jkb.com.cn" target="_blank">健康报网</a></li>
							<li><a rel="nofollow" href="http://news.pharmnet.com.cn" target="_blank">医药网</a></li>
							<li><a rel="nofollow" href="http://news.91.cn/" target="_blank">就医网</a></li>
							<li><a rel="nofollow" href="http://www.69jk.cn" target="_blank">中国健康网</a></li>
							<li><a rel="nofollow" href="http://www.jianzhijia.com" target="_blank">健康之家网</a></li>
							<li><a rel="nofollow" href="http://www.kanglu.com" target="_blank">康路网</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://news.51etong.com/s/20160308_61408.shtml" target="_blank">医通无忧网</a>、<a rel="nofollow" href="http://news.yongyao.net/" target="_blank">用药安全网</a>、<a rel="nofollow" href="http://www.dzjkw.net/jk/13702.html" target="_blank">大众健康网</a>、<a rel="nofollow" href="http://www.fm120.com/content/2016-3/2/101153.html" target="_blank">南方健康网</a></span>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="9"></a>
					<h3>旅游套餐<span>仅需900元（十大旅游类媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_9.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://www.cntour2.com" target="_blank">中国旅游新闻网</a></li>
							<li><a rel="nofollow" href="http://travel.news.cn/" target="_blank">新华网-旅游</a></li>
							<li><a rel="nofollow" href="http://www.lotour.com" target="_blank">乐途旅游网</a></li>
							<li><a rel="nofollow" href="http://www.51766.com" target="_blank">51766旅游网</a></li>
							<li><a rel="nofollow" href="http://www.cthy.com" target="_blank">中国旅游信息网</a></li>
							<li><a rel="nofollow" href="http://www.huway.com" target="_blank">中华户外网</a></li>
							<li><a rel="nofollow" href="http://www.lvmama.com" target="_blank">驴妈妈旅游网</a></li>
							<li><a rel="nofollow" href="http://mt.sohu.com/" target="_blank">搜狐网-媒体[旅游]</a></li>
							<li><a rel="nofollow" href="http://www.cnair.com" target="_blank">中国航空旅游网</a></li>
							<li><a rel="nofollow" href="http://www.lvye.cn" target="_blank">绿野户外网</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://eco.cri.cn/492/2014/06/19/243s20071.htm" target="_blank">国际在线-生态</a>、<a rel="nofollow" href="http://www.cssn.com.cn/www/news/guonazixun/04031160412015.html" target="_blank">中国景点网</a>、<a rel="nofollow" href="http://www.ilvy.com.cn/gnnews/2951.html" target="_blank">爱旅游</a>、<a rel="nofollow" href="http://www.aoyou.com/news/n8319/" target="_blank">中青遨游网</a></span>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="14"></a>
					<h3>游戏套餐<span>仅需1000元（十大游戏类媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_10.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://www.pcgames.com.cn" target="_blank">太平洋游戏网</a></li>
							<li><a rel="nofollow" href="http://game.people.com.cn" target="_blank">人民网-游戏</a></li>
							<li><a rel="nofollow" href="http://games.qq.com" target="_blank">腾讯网-游戏</a></li>
							<li><a rel="nofollow" href="http://www.duowan.com" target="_blank">多玩网</a></li>
							<li><a rel="nofollow" href="http://www.duouoo.com" target="_blank">多游网</a></li>
							<li><a rel="nofollow" href="http://www.178.com" target="_blank">178游戏网</a></li>
							<li><a rel="nofollow" href="http://games.sina.com.cn" target="_blank">新浪网-游戏</a></li>
							<li><a rel="nofollow" href="http://www.52pk.com" target="_blank">52pk游戏网</a></li>
							<li><a rel="nofollow" href="http://www.tgbus.com" target="_blank">电玩巴士</a></li>
							<li><a rel="nofollow" href="http://games.ifeng.com" target="_blank">凤凰网-游戏</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://game.21cn.com/online/c/a/2015/0302/17/29130101.shtml" target="_blank">21CN-游戏</a>、<a rel="nofollow" href="http://www.265g.com/news/gamenews/652156.html" target="_blank">265G游戏网</a>、<a rel="nofollow" href="http://news.shouyou.com/news/01082016/154305958.shtml" target="_blank">手游网</a>、<a rel="nofollow" href="http://news.4399.com/gonglue/hangye/zhanhui/cj/dt/m/538325.html" target="_blank">4399游戏网</a></span>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="15"></a>
					<h3>教育套餐<span>仅需1200元（十大教育类媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_11.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://abroad.edu.ifeng.com" target="_blank">凤凰网-出国</a></li>
							<li><a rel="nofollow" href="http://www.533.com" target="_blank">上海热线-教育</a></li>
							<li><a rel="nofollow" href="http://edu.hc360.com" target="_blank">慧聪网-教育</a></li>
							<li><a rel="nofollow" href="http://edu.ynet.com" target="_blank">北青网-教育</a></li>
							<li><a rel="nofollow" href="http://edu.21cn.com" target="_blank">21CN-教育</a></li>
							<li><a rel="nofollow" href="http://liuxue.gmw.cn" target="_blank">光明网-留学</a></li>
							<li><a rel="nofollow" href="http://kaoshi.china.com" target="_blank">中华网-考试</a></li>
							<li><a rel="nofollow" href="http://book.qq.com/news/content/id/657.html" target="_blank">腾讯网-文学</a></li>
							<li><a rel="nofollow" href="http://learning.sohu.com" target="_blank">搜狐网-媒体教育</a></li>
							<li><a rel="nofollow" href="http://edu.sina.com.cn" target="_blank">网易-教育</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://edu.shangdu.com/Article/jylx/201404/374215.html" target="_blank">商都网</a>、<a rel="nofollow" href="http://edu.enorth.com.cn/system/2014/02/13/011674142.shtml" target="_blank">北方网</a>、<a rel="nofollow" href="http://www.eol.cn/hubei/jybt/201605/t20160503_1393681.shtml" target="_blank">中国教育在线</a>、<a rel="nofollow" href="http://book.163.com/14/0619/15/9V46GP8E00923P3U.html" target="_blank">网易读书</a></span>
						</ul>
					</div>
				</div>
			</dd>
			<dd>
				<div class="hd"> <a name="16"></a>
					<h3>百科套餐<span>仅需800元（百度百科成功率推荐媒体）</span></h3>
				</div>
				<div class="tab-fd clearfix">
					<div class="thumb">
						<div class="img02"><img src="../huo15template/img/taocan_12.jpg"></div>
					</div>
					<div class="desc">
						<ul>
							<li><a rel="nofollow" href="http://info.qiye.gov.cn/a/qiye/20160229/12192.html" target="_blank">中国企业网</a></li>
							<li><a rel="nofollow" href="http://lvliang.news.163.com/16/0217/11/BG192R1T03971D30.html" target="_blank">网易-吕梁</a></li>
							<li><a rel="nofollow" href="http://shanxi.china.com/sxjj/jinrong/11162452/20160226/21613867.html" target="_blank">中华网-山西</a></li>
							<li><a rel="nofollow" href="http://www.js.chinanews.com/news/2014/0806/87633.html" target="_blank">中新网-江苏</a></li>
							<li><a rel="nofollow" href="http://lohas.china.com.cn/2016-03/15/content_8637954.htm" target="_blank">中国网-乐活</a></li>
							<li><a rel="nofollow" href="http://news.xhby.net/system/2014/10/16/022189711.shtml" target="_blank">新华报业网</a></li>
							<li><a rel="nofollow" href="http://finance.xfrb.com.cn/zixun/2015-12-21/11535.html" target="_blank">消费日报网</a></li>
							<li><a rel="nofollow" href="http://caijing.qlwb.com.cn/2015/0213/320170.shtml" target="_blank">齐鲁晚报</a></li>
							<li><a rel="nofollow" href="http://qndj.qianlong.com/show/18/14475-0.html" target="_blank">千龙网-关注</a></li>
							<li><a rel="nofollow" href="http://science.china.com.cn/2016-08/17/content_8967234.htm" target="_blank">中华网</a></li>
							<span class="span_bxmt"><b>备选媒体：</b><a rel="nofollow" href="http://nb.ifeng.com/qtwz/detail_2013_06/20/914002_0.shtml" target="_blank">凤凰网-宁波</a></span>
						</ul>
					</div>
				</div>
			</dd>
		</dl>
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
<script src="../huo15template/js/jquery1.42.min.js"></script>
<script src="../huo15template/static/js/jquery-3.1.0.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../huo15template/static/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="../huo15template/js/plugins.js"></script>
<script src="../huo15template/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. end-->
<!--轮播器-->
<script type="text/javascript">
  var jq310 = jQuery.noConflict(true);
  console.log($().jquery);//往下就是1.4.2
</script>
<script src="../huo15template/js/jquery.SuperSlide.2.1.2.source.js"></script>

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
    background: url(../huo15template/img/tg_flash_p.png) -18px 0;
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
    background: url(../huo15template/img/arrow.png) 0 0 no-repeat;
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
<!--轮播器 end-->


</body>
</html>
