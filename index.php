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


<div id="service">
	<div class="warp">
		<p class="p1">服务项目</p>
		<p class="p2">SERVICE TYPE</p>
		<ul class="ul1">
			<li class="li1">
				<span>新闻源发布</span>
				<p class="img1"></p>
				<p>新闻源是指符合百度、谷歌等搜索引擎种子新闻站的标准，站内信息第一时间被搜索引擎优先收录，且被网络媒体转载成为网络海量新闻的源头媒体。</p>
			</li>
			<li class="li2">
				<span>软文发布</span>
				<p class="img2"></p>
				<p>企业在论坛发布的产品和服务的信息，从而让目标客户更加深刻地了解企业的产品和服务。最终达到企业宣传企业的品牌、加深市场认知度的网络营销活动，就是论坛推广。</p>
			</li>
			<li class="li3">
				<span>微信推广</span>
				<p class="img3"></p>
				<p>利用公众账户的大量精准粉丝进行推广，企业根据不同的行业广告选择适合的公众号，提供用户需要的信息，推广自己的产品，从而实现点对点的营销。</p>
			</li>
			<li class="li4">
				<span>全案策划</span>
				<p class="img4"></p>
				<p>不知道如何选？各行业软文套餐一键发布，全行业媒体资源覆盖，一手直接渠道，优惠活动折上折，享受冰点价格!软文套餐效果好!点我查看软文套餐！</p>
			</li>
		</ul>
	</div>
</div>
<div id="process">
	<div class="warp">
		<p class="p1">服务流程</p>
		<p class="p2">SERVICE  PROCESS</p>
		<ul>
			<li>
				<span class="iconfont icon-account"></span>
				<p>登录注册</p>
			</li>
			<li>
				<span class="iconfont icon-survey"></span>
				<p>填写邮件</p>
			</li>
			<li>
				<span class="iconfont icon-selected"></span>
				<p>选择媒体</p>
			</li>
			<li>
				<span class="iconfont icon-cart"></span>
				<p>确认支付</p>
			</li>
			<li class="lastli">
				<span class="iconfont icon-form"></span>
				<p>媒体出稿</p>
			</li>
		</ul>
	</div>
</div>
<div id="meal">
	<div class="warp">
		<p class="p1">特价套餐</p>
		<p class="p2">SPECIAL  OFFER</p>
		<ul class="ull1">
			<li>门户网综合套餐</li>
			<li>IT科技类套餐</li>
			<li class="lii1">财经商业套餐</li>
		</ul>
		<ul class="ull2">
			<li>
				<div class="bor">
					<p><a href="#">新浪网-辽宁/内蒙古</a></p>
					<p><a href="#">网易-太原/山东/山西</a></p>
					<p><a href="#">搜狐网-媒体新闻/滚动</a></p>
					<p><a href="#">凤凰网-手机端</a></p>
					<p><a href="#">慧聪网-商业</a></p>
					<p><a href="#">腾讯网-新闻[手机版]</a></p>
					<p><a href="#">中国网-投资/优讯</a></p>
					<p><a href="#">中华网-财经凤凰网-宁波/海南</a></p>
				</div>
				<p class="lastp"><a href="#">抢购价 ￥500元</a></p>
			</li>
			<li class="oli1">
				<div class="bor" style="padding-left:142px; width:360px;">
					<p><a href="#">IT世界网</a></p>
					<p><a href="#">IT168</a></p>
					<p><a href="#">电脑之家</a></p>
					<p><a href="#">比特网</a></p>
					<p><a href="#">赛迪网</a></p>
					<p><a href="#">IT专家网</a></p>
					<p><a href="#">小熊在线</a></p>
					<p><a href="#">硅谷网</a></p>
				</div>
				<p class="lastp"><a href="#">抢购价 ￥600元</a></p>
			</li>
			<li class="lii1">
				<div class="bor" style="padding-left:123px; width:360px;">
					<p><a href="#">国际在线-企业</a></p>
					<p><a href="#">中华网-财经</a></p>
					<p><a href="#">中国网-投资</a></p>
					<p><a href="#">证券之星</a></p>
					<p><a href="#">慧聪网-商业</a></p>
					<p><a href="#">中国企业网</a></p>
					<p><a href="#">金融界网</a></p>
					<p><a href="#">中国经营网</a></p>
				</div>
				<p class="lastp"><a href="#">抢购价 ￥800元</a></p>
			</li>
		</ul>
		<ul class="ull1" id="oull1">
			<li>家居房产套餐</li>
			<li>千城联播140+媒体</li>
			<li class="lii1">会员充值</li>
		</ul>
		<ul class="ull2">
			<li id="ooli1">
				<div class="bor">
					<p><a href="#">搜狐网-家居</a></p>
					<p><a href="#">新浪网-家居</a></p>
					<p><a href="#">网易-家居</a></p>
					<p><a href="#">太平洋-家居网</a></p>
					<p><a href="#">中国网-地产家天下</a></p>
					<p><a href="#">腾讯-亚太家居</a></p>
					<p><a href="#">凤凰网-居悦</a></p>
					<p><a href="#">搜房网-家居</a></p>
				</div>
				<p class="lastp"><a href="#">抢购价 ￥800元</a></p>
			</li>
			<li class="oli1" id="ooli2">
				<div class="bor" style="padding-left:142px; width:360px;">
					<p><a href="#">新浪网</a></p>
					<p><a href="#">光明网</a></p>
					<p><a href="#">凤凰网</a></p>
					<p><a href="#">搜狐网</a> </p>
					<p><a href="#">金融界</a></p>
					<p><a href="#">证券之星</a></p>
					<p><a href="#">扬子晚报</a> </p>
					<p><a href="#">南方网</a></p>
				</div>
				<p class="lastp"><a href="#">抢购价 ￥500元</a></p>
			</li>
			<li class="lii1" id="ooli3">
				<div class="bor" style="padding-left:123px; width:360px">
					<p><a href="#">预存款项</a></p>
					<p><a href="#">自助发稿</a></p>
					<p><a href="#">一次充值</a></p>
					<p><a href="#">终身会员</a></p>
					<p><a href="#">享受历史最低价！</a></p>
				</div>
				<p class="lastp"><a href="#">查看详情&gt;&gt;</a></p>
			</li>
		</ul>
	</div>
</div>
<div id="advantage">
	<p class="p1">我们的优势</p>
	<p class="p2">OUR  ADVANTAGE</p>
	<div class="warp">
		<ul>
			<li style="width:172px;">
				<span class="iconfont icon-zhuanji"></span>
				<p>8000+媒体资源</p>
				<i style=" font-style:normal">媒体资源覆盖国内各大门户及行业垂直网站</i>
			</li>
			<li style="width:172px;">
				<span class="iconfont icon-appreciatefill"></span>
				<p>5000合作客户</p>
				<i style=" font-style:normal">上市集团、企业客户、政府机构、公关公司战略合作</i>
			</li>
			<li style="width:172px; margin-right:0;">
				<span class="iconfont icon-ziyouanpai"></span>
				<p>300专业写手</p>
				<i style=" font-style:normal">覆盖各大行业</i>
			</li>
		</ul>
		<ul>
			<li style="width:172px;">
				<span class="iconfont icon-discoverfill"></span>
				<p>方便快捷</p>
				<i style=" font-style:normal">免费注册，24小时自助新闻发布平台</i>
			</li>
			<li style="width:172px;">
				<span class="iconfont icon-form"></span>
				<p>优势发稿</p>
				<i style=" font-style:normal">当天出稿，高效率，百度收录快，效果好</i>
			</li>
			<li style="width:172px; margin-right:0;">
				<span class="iconfont icon-repairfill"></span>
				<p>企业保障</p>
				<i style=" font-style:normal">正规企业，合同、发票走正规流程</i>
			</li>
		</ul>
	</div>
</div>
<div id="news">
	<div class="wrap">
		<p class="p1">行业新闻</p>
		<p class="p2">INDUSTRY NEWS</p>
		<div class="newsbt">
			<div class="newsleft"><img src="huo15template/newSkin/image/t.jpg" title="软文发布"></div>
			<div class="newsright">
				<p class="p1">
					<a href="#">什么是新闻营销的核心竞争力?新闻营销的核心是要有是一篇好的软文，好的软文需要有说服力和感染力，说服力是.....</a>
				</p>
				<p class="p2">
					<a href="#">什么是新闻营销的核心竞争力?新闻营销的核心是要有是一篇好的软文，好的软文需要有说服力和感染力，说服力是.....</a>
				</p>
				<p class="p3">
					<a href="#">什么是新闻营销的核心竞争力?新闻营销的核心是要有是一篇好的软文，好的软文需要有说服力和感染力，说服力是.....</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div id="cooperation">
	<div class="warp">
		<p class="p1">合作伙伴</p>
		<p class="p2">COOPERATIVE PARTNER</p>
		<ul>
			<li></li>
			<li class="Li2"></li>
			<li class="Li3"></li>
			<li class="Li4"></li>
			<li class="rightli Li5"></li>
			<li class="Li6"></li>
			<li class="Li7"></li>
			<li class="Li8"></li>
			<li class="Li9"></li>
			<li class="rightli Li10"></li>
		</ul>
	</div>
</div>
<div class="main" style="display: none;">
	<div class="bk50"></div>





	<div class="row_01">
		<!--王庆路 内容替换-->
		<div class="wrapper">
			<div class="head">
				<h2>我们能做什么？</h2>
				<h3>为企业提供全方位互联网品牌推广营销服务！</h3>
				<p>本平台秉承诚信、专业、高效、便捷的理念，致力于打造"互联网新闻营销一站式智能服务平台"，以"多、快、好、省"的良好口碑，赢得市场和企业的一致认可。</p>
			</div>
			<div class="bk40"></div>
			<div class="body">
				<ul>
					<li class="i1">
						<div class="thumb"><a href="/ruanwen.html"></a></div>
						<div class="desc">
							<h3>新闻源推广</h3>
							<p style="display:inline-block;height: 135px;">
								新闻源是指符合百度、谷歌等搜索引擎种子新闻站的标准，站内信息第一时间被搜索引擎优先收录，且被网络媒体转载成为网络海量新闻的源头媒体。
							</p>
							<p>
								<a style="background: #40d0f9" class="btn btn-info btn-modify" href="/vip/index.php">新闻源推广</a>
							</p>
						</div>
					</li>
					<li class="i4">
						<div class="thumb"><a href="http://www.ruanwen.la/news/24.html"></a></div>
						<div class="desc">
							<h3>软文发布</h3>
							<p style="display:inline-block;height: 135px;">
								企业在论坛发布的产品和服务的信息，从而让目标客户更加深刻地了解企业的产品和服务。最终达到企业宣传企业的品牌、加深市场认知度的网络营销活动，就是论坛推广。
							</p>
							<p>
								<a class="btn btn-info btn-modify" style="background:#40d0f9"
								   href="/vip/index.php">软文发布</a>
							</p>
						</div>
					</li>
					<li class="i3">
						<div class="thumb"><a href="/weixin.html"></a></div>
						<div class="desc">
							<h3>微信推广</h3>
							<p style="display:inline-block;height: 135px;">
								利用公众账户的大量精准粉丝进行推广，企业根据不同的行业广告选择适合的公众号，提供用户需要的信息，推广自己的产品，从而实现点对点的营销。</p>
							<p>
								<a class="btn btn-info btn-modify" style="background:#40d0f9"
								   href="/vip/index.php">微信推广</a>
							</p>
						</div>
					</li>
					<li class="i2">
						<div class="thumb"><a href="/vip.html"></a></div>
						<div class="desc">
							<h3>全案策划</h3>
							<p style="display:inline-block;height: 135px;">
								不知道如何选？各行业软文套餐一键发布，全行业媒体资源覆盖，一手直接渠道，优惠活动折上折，享受冰点价格!软文套餐效果好!点我查看软文套餐！</p>
							<p>
								<a class="btn btn-info btn-modify" style="background:#40d0f9" href="/system/taocan.php">全案策划</a>
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="bk50"></div>
		</div>
		<!--wrapper end-->
		<!--王庆路 内容替换 end-->
	</div>
	<div class="clearfix"></div>
	<!--王庆路 内容修改-->
	<div class="row_02 com_bg">
		<div class="bk30"></div>
		<div class="wrapper">
			<div class="icon"></div>
			<div class="head">
				<h2>软文直通车会员充值钜惠等您来！</h2>
			</div>
			<div class="body">
				<p><em>超值套餐</em><a rel="nofollow" target="_blank"
				                   href="http://www.ruanwen.la/taocan.php#10">门户套餐500元</a>，<a
						rel="nofollow" target="_blank" href="http://www.ruanwen.la/taocan.php#11">财经商业套餐800元</a>，<a
						rel="nofollow" target="_blank" href="http://www.ruanwen.la/taocan.php#12">综合套餐60家2000元！</a>
				</p>
				<p><em>会员充值</em>预存款项，自助发稿，一次充值，终身会员，享受历史最低价！<a rel="nofollow" href="/vip/index.php"
				                                               target="_blank"><span style="color: rgb(255, 0, 0);"><b>查看详情...</b></span></a>
				</p>
			</div>
			<div class="foot">
				<table>
					<tbody>
					<tr class="first">
						<td width="105"><b>会员等级</b></td>
						<td width="100"><b>单次充值</b></td>
						<td width="100"><b>享受折扣</b></td>
						<td width="360"><b>备注</b></td>
					</tr>
					<tr>
						<td>普通会员</td>
						<td>0元</td>
						<td>零售价*<b>6折</b></td>
						<td>单次充值500以上1000以下随机赠送媒体（6个以内）</td>
					</tr>
					<tr>
						<td>普通代理</td>
						<td>2000元</td>
						<td>零售价*<b>5折</b></td>
						<td>随机赠送媒体10个可带外链媒体</td>
					</tr>
					<tr>
						<td>中级代理</td>
						<td>5000元</td>
						<td>零售价*<b>4.5折</b></td>
						<td>送北京热线广告位/月+外链套餐一次+反馈报告</td>
					</tr>
					<tr>
						<td>高级代理</td>
						<td>10000元</td>
						<td>零售价*<b>3.9折</b></td>
						<td>送北京热线及中国报讯网广告位/季度+外链套餐两次+反馈报告</td>
					</tr>
					<tr>
						<td>核心代理</td>
						<td>包年服务</td>
						<td>待定详谈</td>
						<td>详情见资讯包年服务</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="bk30"></div>
		</div>
		<!--wrapper end-->
	</div>
	<!--王庆路 内容修改 end-->
	<!--王庆路 添加发稿流程-->
	<div class="row_09 com_bg" style="background: #fff;border: 1px dotted #CCCCCC;">
		<div class="head">
			<h3>发稿流程</h3>
		</div>
		<div class="wrapper">

			<div class="body">
				<div class="box2">
					<!--王庆路 内容替换-->

					<ul class="ul_rw">
						<li class="rw_li1 rw_li"><span>1</span>
							<p>咨询客服</p></li>
						<li><img src="huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="咨询客服"></li>
						<li class="rw_li2 rw_li"><span>2</span>
							<p>注册登录</p></li>
						<li><img src="huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="注册登录"></li>
						<li class="rw_li3 rw_li"><span>3</span>
							<p>选择媒体资源</p></li>
						<li><img src="huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="选择媒体资源"></li>
						<li class="rw_li4 rw_li"><span>4</span>
							<p>付款</p></li>
						<li><img src="huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="付款"></li>
						<li class="rw_li1 rw_li"><span>5</span>
							<p>提交文案</p></li>
						<li><img src="huo15template/img/popularize/rw_tb.jpg" width="37" height="37" alt="提交文案"></li>
						<li class="rw_li2 rw_li"><span>6</span>
							<p>发布成功</p></li>
					</ul>
					<!--王庆路 内容替换 end-->

				</div>
			</div>
		</div>
	</div>
	<!--王庆路 添加发稿流程 end-->
	<!--王庆路 内容更改-->
	<div class="row_03">
		<div class="wrapper">
			<div class="head">
				<h2>新闻营销六大保障</h2>
			</div>
			<div class="bk30"></div>
			<div class="body">
				<ul class="left">
					<li class="i1">
						<h3>8000+媒体资源</h3>
						<p>媒体资源覆盖国内各大门户及行业垂直网站</p>
					</li>
					<li class="i2">
						<h3>5000合作客户</h3>
						<p>上市集团、企业客户、政府机构、公关公司战略合作</p>
					</li>
					<li class="i3">
						<h3>300专业写手</h3>
						<p>覆盖各大行业</p>
					</li>
					<li class="i4">
						<h3>方便快捷</h3>
						<p>免费注册，24小时自助新闻发布平台</p>
					</li>
					<li class="i5">
						<h3>优势发稿</h3>
						<p>当天出稿，高效率，百度收录快，效果好</p>
					</li>
					<li class="i6">
						<h3>企业保障</h3>
						<p>正规企业，合同、发票走正规流程</p>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<div class="row_03" style="background: #f8f8f8; border-bottom: 1px dotted #000;">
		<div class="wrapper">
			<div class="head">
				<h2>为什么要选择我们</h2>
			</div>
			<div class="bk30"></div>
			<div class="body">
				<p style="font-size: large; font-family: '微软雅黑', '宋体'; text-indent:2em;">
					软文直通车是专业的软文新闻稿发布平台，服务内容类涵盖软文发布、软文代写、微信营销、微博营销、报纸广告、百度问答、论坛加精置顶等多种互联网广告行业，目前已经和国内3000多家门户媒体合作，同时媒体资源还在不断更新增加中，是您选择软文推广的最佳服务商。专业的软文发布，软文写作公司，低价格、大影响、高效率、一键通发全网络！
				</p>
				<p style="font-size: large; font-family: '微软雅黑', '宋体'; text-indent:2em;">
					软文直通车服务企业客户上千家，公司拥有专业写手上百名，各行业资深编辑，可为您的企业提供一流的网络软文撰写服务！完善的网络交易流程，优秀的网络服务，提供企业定制化方案，所有服务均可签订正式合同，开具正式机打发票和增值税发票。我们的宗旨是：为客户提供优质优惠的资源达到效果最大化，让广告主采购广告资源更省事、省心、省钱。在本平台充值成功后就可以开始提交文案，系统后台可以看到详细的财务报表明细，包括每一笔发稿的费用和代写的费用，无最低充值限制。
				</p>
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<!--王庆路 内容更改 end-->
	<div class="row_04 com_bg">
		<div class="wrapper">
			<div class="head">
				<h2>特价套餐</h2>
			</div>
			<div class="bk30"></div>
			<div class="body">
				<div class="picScroll">
					<div class="bd">
						<div class="scrollWrap">
							<ul class="picList">
								<li>
									<div class="thumb"><img src="http://www.ruanwen.la/new_images/taocan_2.jpg"
									                        alt="门户网综合套餐"></div>
									<div class="desc">
										<h4>门户网综合套餐</h4>
										<p>抢购价<em>¥500</em><a rel="nofollow" target="_blank"
										                      href="/system/taocan.php#2"><img
													src="http://www.ruanwen.la/new_images/buy.gif" alt="购买"></a></p>
									</div>
									<div class="icon"></div>
								</li>
								<li>
									<div class="thumb"><img src="http://www.ruanwen.la/new_images/taocan_3.jpg"
									                        alt="IT科技类套餐"></div>
									<div class="desc">
										<h4>IT科技类套餐</h4>
										<p>抢购价<em>¥600</em><a rel="nofollow" target="_blank"
										                      href="/system/taocan.php#3"><img
													src="http://www.ruanwen.la/new_images/buy.gif" alt="购买"></a></p>
									</div>
									<div class="icon"></div>
								</li>
								<li>
									<div class="thumb"><img src="http://www.ruanwen.la/new_images/taocan_4.jpg"
									                        alt="财经商业套餐"></div>
									<div class="desc">
										<h4>财经商业套餐</h4>
										<p>抢购价<em>¥800</em><a rel="nofollow" target="_blank"
										                      href="/system/taocan.php#4"><img
													src="http://www.ruanwen.la/new_images/buy.gif" alt="购买"></a></p>
									</div>
									<div class="icon"></div>
								</li>
								<li>
									<div class="thumb"><img src="http://www.ruanwen.la/new_images/taocan_5.jpg" alt="">
									</div>
									<div class="desc">
										<h4>家居房产套餐</h4>
										<p>抢购价<em>¥800</em><a rel="nofollow" target="_blank"
										                      href="/system/taocan.php#5"><img
													src="http://www.ruanwen.la/new_images/buy.gif" alt="购买"></a></p>
									</div>
									<div class="icon"></div>
								</li>
								<li>
									<div class="thumb"><img src="http://www.ruanwen.la/new_images/img_055.jpg" alt="">
									</div>
									<div class="desc">
										<h4>千城联播140+媒体</h4>
										<p>抢购价<em>¥500</em><a rel="nofollow" target="_blank"
										                      href="/system/taocan.php"><img
													src="http://www.ruanwen.la/new_images/buy.gif" alt="购买"></a></p>
									</div>
									<div class="icon"></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--wrapper end-->
	</div>
	<!--王庆路 删除"用户点评""成功案例"并替换为图片-->
	<div class="row_06">
		<div class="wrapper">
			<div class="bk30"></div>
			<div class="head">

			</div>
			<div class="body">
				<img src="huo15template/img/news_img.jpg" style="width: 100%">
			</div>
		</div>
	</div>
	<!--王庆路 删除"用户点评""成功案例"并替换为图片 end-->
	<div class="row_07">
		<div class="wrapper">
			<div class="bk70"></div>
			<div class="head">
				<div class="box left">
					<div class="hd">
						<a href="../news/news.php?BigID=28" target="_blank">
							<span><img src="huo15template/img/icon_16.png" alt=""></span>
						</a>
						<h3>最新资讯</h3>
					</div>
					<div class="bd">
						<ul id="news1">
							<?php
							$sqls = "select * from news_info where class_id=28 order by data desc limit 0,5";
							//$results=mysql_db_query($dbname,$sqls);
							mysql_select_db($dbname);
							$results = mysql_query($sqls);
							while ($rss = mysql_fetch_array($results)) {
								?>

								<li><a href="../news/newsinfo.php?ID=<?php echo $rss["ID"]; ?>"
								       target="_blank"><?php echo $newsOB->utfSubstr($rss["title"], 0, 22); ?></a></li>


							<?php } ?>

							<!--<em style='float:right;padding-right:5px;'>".date("m-d",strtotime($r['news_time']))."</em>-->
						</ul>
					</div>
				</div>
				<div class="box center">
					<div class="hd">
						<a href="../news/news.php?BigID=31" target="_blank">
							<span><img src="huo15template/img/icon_16.png" alt=""></span>
						</a>
						<h3>客户案例</h3>
					</div>
					<div class="bd">
						<ul id="news2">
							<?php
							$sqls = "select * from news_info where class_id=31 order by data desc limit 0,5";
							//$results=mysql_db_query($dbname,$sqls);
							mysql_select_db($dbname);
							$results = mysql_query($sqls);
							while ($rss = mysql_fetch_array($results)) {
								?>
								<li><a href="../news/newsinfo.php?ID=<?php echo $rss["ID"]; ?>"
								       target="_blank"><?php echo $newsOB->utfSubstr($rss["title"], 0, 22); ?></a></li>


							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="box right">
					<div class="hd">
						<a href="../news/news.php?BigID=30" target="_blank">
							<span><img src="huo15template/img/icon_16.png" alt=""></span>
						</a>
						<h3>行业新闻</h3>
					</div>
					<div class="bd">
						<ul id="news3">
							<?php
							$sqls = "select * from news_info where class_id=30 order by data desc limit 0,5";
							//$results=mysql_db_query($dbname,$sqls);
							mysql_select_db($dbname);
							$results = mysql_query($sqls);
							while ($rss = mysql_fetch_array($results)) {
								?>
								<li><a href="../news/newsinfo.php?ID=<?php echo $rss["ID"]; ?>"
								       target="_blank"><?php echo $newsOB->utfSubstr($rss["title"], 0, 22); ?></a></li>


							<?php } ?>
							<!--<em style='float:right;padding-right:5px;'>".date("m-d",strtotime($r['news_time']))."</em>-->
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="bk70"></div>
			<div class="links">
				<div class="links_top"><span>战略合作伙伴</span></div>
				<ul class="ul_links">
					<li><img src="huo15template/img/links_img1.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img2.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img3.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img4.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img5.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img6.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img7.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img8.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img9.jpg" alt="客户案例" width="158" height="77"></li>
					<li><img src="huo15template/img/links_img10.jpg" alt="客户案例" width="158" height="77"></li>
				</ul>
			</div>
			<div class="bk70"></div>
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
