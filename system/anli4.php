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
	<title><?php echo $D_Title;?>_<?php echo $webname;?></title>
	<meta name="keywords" content="<?php echo $D_KeyWords;?>"/>
	<meta name="description" content="<?php echo $D_Descr;?>"/>
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
<div class="case clearfix">
	<div class="wrapper" style="margin-top:20px;">
		<div class="anli_left">
			<div class="cgal">
				<div class="cgal_top"><span>客户成功案例</span></div>
				<ul class="ul_cgal">
					<li><a href="anli.php">P2P互联网金融</a></li>
					<li><a href="anli1.php" >移民留学</a></li>
					<li><a href="anli2.php" >健康医疗</a></li>
					<li><a href="anli3.php" >电子商务</a></li>
					<li><a href="anli4.php" id="on_al">投资理财</a></li>
					<!--<li><a href="/anli5.html">旅游房产</a></li>
					<li><a href="/anli6.html">互联网科技</a></li>
					<li><a href="/anli7.html">艺术收藏</a></li>
					<li><a href="/anli8.html">工业汽车</a></li>-->
				</ul>
			</div>
			<img src="../huo15template/img/anli_left.gif" width="215" height="215" style="display:block; margin:15px auto 0;"> </div>
		<div class="anli_right">
			<script language="javascript">
				function LoadClick4(clickControl, divShow)
				{
					document.getElementById("n01").className = '';
					document.getElementById("n02").className = '';
					document.getElementById("n03").className = '';
					document.getElementById("n04").className = '';
					document.getElementById("n05").className = '';
					document.getElementById("divn01").style.display = 'none';
					document.getElementById("divn02").style.display = 'none';
					document.getElementById("divn03").style.display = 'none';
					document.getElementById("divn04").style.display = 'none';
					document.getElementById("divn05").style.display = 'none';
					document.getElementById(clickControl).className = 'on4';
					document.getElementById(divShow).style.display = '';
				}
			</script>
			<ul class="ul_anli_right">
				<li id="n01" class="on4"><a onmouseover="LoadClick4(&quot;n01&quot;, &quot;divn01&quot;)"><img src="../huo15template/img/anli41.jpg" width="132" height="134"><span>领峰贵金属</span></a></li>
				<li id="n02" class=""><a onmouseover="LoadClick4(&quot;n02&quot;, &quot;divn02&quot;)"><img src="../huo15template/img/anli42.jpg" width="132" height="134"><span>AETOS外汇</span></a></li>
				<li id="n03" class=""><a onmouseover="LoadClick4(&quot;n03&quot;, &quot;divn03&quot;)"><img src="../huo15template/img/anli43.jpg" width="132" height="134"><span>上海证券</span></a></li>
				<li id="n04" class=""><a onmouseover="LoadClick4(&quot;n04&quot;, &quot;divn04&quot;)"><img src="../huo15template/img/anli44.jpg" width="132" height="134"><span>金道贵金属</span></a></li>
				<li id="n05" class=""><a onmouseover="LoadClick4(&quot;n05&quot;, &quot;divn05&quot;)"><img src="../huo15template/img/anli45.jpg" width="132" height="134"><span>挖财</span></a></li>
			</ul>
			<div class="clear"></div>
			<div class="anli_nr" id="divn01">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 领峰贵金属</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 领峰贵金属有限公司是香港金银业贸易场145号AA类行员，可交易电子伦敦金银，香港99金和人民币公斤条等产品。领峰贵金属所有交易均受贸易场的认可和监管，并受香港法律的管制。领峰贵金属提供24小时网上现货金银交易和客户服务，至今屡获奖项，包括本年蝉联贸易场颁发「最活跃伦敦金/银交易商大奖」及资本杂志颁发「杰出贵金属交易平台」。领峰贵金属以「服务领先，走在最走」为企业宗旨，继续为广大的客户提供优质的金银投资服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 领峰集团总部位于香港，领峰贵金属是集团旗下贵金属网上交易的专业运营商，专营伦敦金及伦敦银的电子交易。领峰集团雄厚的实力为客户的交易提供了全面的保障，在此基础上，公司对各项运营细节全面完善，客户除了交易操作外，获得的是放心无忧的交易体验。目前世界上最主要的贵金属市场在伦敦、苏黎世、纽约和香港。香港作为国际金融中心，政治稳定，法治基础深厚，金融体系健全。加上香港黄金市场在时差上刚好填补了纽约、芝加哥收市和伦敦开市前的空挡，把亚、欧、美的黄金交易市场整合成连贯的全球市场，因而香港在全球四大黄金交易中心中具有举足轻重的作用</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>新浪网财经：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://finance.sina.com.cn/money/forex/datafx/2016-02-17/doc-ifxpmpqr4503169.shtml">http://finance.sina.com.cn/money/forex/datafx/2016-02-17/doc-ifxpmpqr4503169.shtml</a></p>
							<p>中国银河证券：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://www.chinastock.com.cn/yhwz_about.do?methodCall=getDetailInfo&amp;docId=5247928">http://www.chinastock.com.cn/yhwz_about.do?methodCall=getDetailInfo&amp;docId=5247928</a></p>
							<p>金投网：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://gold.cnfol.com/jigoulunjin/20160217/22262997.shtml">http://gold.cnfol.com/jigoulunjin/20160217/22262997.shtml</a></p>
							<p>汇通网：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://www.fx678.com/C/20150304/201503041800461167.html">http://www.fx678.com/C/20150304/201503041800461167.html</a></p>
							<p>汇金网：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://news.gold678.com/C/20160217/201602170941031164.shtml">http://news.gold678.com/C/20160217/201602170941031164.shtml</a></p>
							<p>东方财富网：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://gold.eastmoney.com/news/1570,20160217595102998.html">http://gold.eastmoney.com/news/1570,20160217595102998.html</a></p>
							<p>贵金属：领峰贵金属：反弹未能持续 市场低位持稳 <a rel="nofollow" target="_blank" href="http://www.guijinshu.com/huangjin/jglj/201503/00469964.html">http://www.guijinshu.com/huangjin/jglj/201503/00469964.html</a></p>
							<p>中国财经信息网：领峰贵金属：欧盘低位持稳 晚上弱势承 <a rel="nofollow" target="_blank" href="http://www.cfi.net.cn/p20160217000748.html">http://www.cfi.net.cn/p20160217000748.html</a></p>
							<p>南方财富网：领峰贵金属：欧盘低位持稳 晚上弱势承 <a rel="nofollow" target="_blank" href="http://zmt.southmoney.com/kandian/2016/02/280696.html">http://zmt.southmoney.com/kandian/2016/02/280696.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn02" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; AETOS外汇</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> AETOS于2007年获得澳大利亚证券投资委员会注册许可证，一直致力于开展金融衍生品交易业务，为广大投资者提供包含外汇、贵金属、能源、CFDs、AETOS期权等多种交易产品。AETOS旨在打造世界一流的金融服务平台并提供先进的技术、值得信赖的客户服务给全球投资者。AETOS将在资本市场中秉承“公平高效”的宗旨为全球投资者提供优质服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> AETOS获得澳大利亚证券投资委员会(ASIC)金融服务牌照并受其监管，严格恪守ASIC的监管条例，为投资者提供专业的金融服务。ASIC是澳大利亚金融服务和市场的法定监管机构，负责监督与管理澳大利亚金融服务公司、金融市场秩序、金融服务组织，同时也负责投资、养老金、保险、银行存款和贷款等业务的监管。AETOS严格执行客户资金分隔制度，即客户资金与公司经营资金隔离。未经客户许可，任何人不得动用客户账户资金，以严格确保客户资金安全。AETOS会为客户办理专业责任强制保险(PI Insurance)，进一步保障客户资金的安全，避免其他非监管因素导致客户资金损失。此外，AETOS 每天向客户发送交易报告， 执行实时入金出金交易确认，并按需求向ASIC提交交易备案。客户资金存款汇入ASIC所规定的隔离账户存放，并严格拒绝接受任何形式的第三方汇款及取款。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>腾讯网财经：AETOS艾拓思:会议纪要显鸽派,美加息预期放缓 <a rel="nofollow" target="_blank" href="http://finance.qq.com/a/20160218/030860.htm">http://finance.qq.com/a/20160218/030860.htm</a></p>
							<p>和讯网：AETOS艾拓思:会议纪要显鸽派,美加息预期放缓 <a rel="nofollow" target="_blank" href="http://forex.hexun.com/2016-02-18/182317100.html">http://forex.hexun.com/2016-02-18/182317100.html</a></p>
							<p>中金在线：AETOS艾拓思:会议纪要显鸽派,美加息预期放缓 <a rel="nofollow" target="_blank" href="http://gold.cnfol.com/waihuishichang/20160218/22271135.shtml">http://gold.cnfol.com/waihuishichang/20160218/22271135.shtml</a></p>
							<p>同花顺：AETOS艾拓思:会议纪要显鸽派,美加息预期放缓 <a rel="nofollow" target="_blank" href="http://news.10jqka.com.cn/20160218/c587911857.shtml">http://news.10jqka.com.cn/20160218/c587911857.shtml</a></p>
							<p>东方财富网：AETOS艾拓思:金银隔夜止跌小幅回调 <a rel="nofollow" target="_blank" href="http://gold.eastmoney.com/news/1570,20160218595656828.html">http://gold.eastmoney.com/news/1570,20160218595656828.html</a></p>
							<p>好买网：AETOS艾拓思：非美空头回落持续 <a rel="nofollow" target="_blank" href="http://www.howbuy.com/news/2016-02-17/4059326.html">http://www.howbuy.com/news/2016-02-17/4059326.html</a></p>
							<p>腾讯网证券：AETOS艾拓思:非美空头回落持续 <a rel="nofollow" target="_blank" href="http://stock.qq.com/a/20160217/049540.htm">http://stock.qq.com/a/20160217/049540.htm</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn03" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 上海证券</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 上海证券有限责任公司成立于2001年5月，是由原上海财政证券公司和上海国际信托有限公司证券总部新设合并成立的全中国性综合类证券公司。公司注册资本金15亿元人民币，股东单位为上海国际集团有限公司和上海国际信托有限公司。2005年12月，公司成为中国创新试点证券公司之一。同时，公司也是上海国际集团核心成员企业之一。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 公司拥有各类专业人员1000余人，营业网点52家，已形成以上海为中心，北京、深圳、重庆、温州、南京、杭州 等发达城市为主体的经营网络，是国内业务资格最齐备的证券公司之一。公司投资设立了海际大和证券有限责任公司，收购了上海实友期货经纪有限公司并更名为海证期货有限公司。公司于2007年正式受让中富证券有限责任公司的证券类资产，实现了经纪业务的快速扩张，进一步推动了公司的战略发展。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>上海热线：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://rich.online.sh.cn/rich/gb/content/2014-12/24/content_7231797.htm">http://rich.online.sh.cn/rich/gb/content/2014-12/24/content_7231797.htm</a></p>
							<p>和讯网：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://tech.hexun.com/2014-12-24/171735695.html">http://tech.hexun.com/2014-12-24/171735695.html</a></p>
							<p>国际在线：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://gb.cri.cn/44571/2014/12/24/3925s4816301.htm">http://gb.cri.cn/44571/2014/12/24/3925s4816301.htm</a></p>
							<p>金融界：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://stock.jrj.com.cn/2014/12/24103118594172.shtml">http://stock.jrj.com.cn/2014/12/24103118594172.shtml</a></p>
							<p>金投网：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://finance.cngold.org/c/2014-12-24/c2955541.html">http://finance.cngold.org/c/2014-12-24/c2955541.html</a></p>
							<p>中国经营网：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://info.cb.com.cn/jinrong/2014_1224/1103612.html">http://info.cb.com.cn/jinrong/2014_1224/1103612.html</a></p>
							<p>同花顺：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://research.10jqka.com.cn/20141224/c569180089.shtml">http://research.10jqka.com.cn/20141224/c569180089.shtml</a></p>
							<p>海外网：上海证券推出券商首款Level 2行情APP“闪电通” <a rel="nofollow" target="_blank" href="http://invest.haiwainet.cn/n/2014/1224/c456433-21586818.html">http://invest.haiwainet.cn/n/2014/1224/c456433-21586818.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn04" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 金道贵金属</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 金道贵金属有限公司为金道投资控股有限公司（金道集团）之成员，于2009年在香港注册成立，持有AA类别市场交易有效营业牌照，可经营99金、港元公斤条、伦敦金/银及人民币公斤条业务。是少数拥有特许铸金权的金商，实力媲美银行。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 香港金道贵金属有限公司，是金银业贸易场之认可电子交易行员（行员编号74号），持有AA类别市场交易有效营业牌照，可经营99金、港元公斤条、伦敦金/银及人民币公斤条业务。同时，金道贵金属亦为标准金集团成员，能铸造金道品牌的千足金条，是少数拥有特许铸金权的金商。金道贵金属为香港金道贵金属成立以来不断向前，每月在金银业贸易场的交易量于业内，均名列前茅，更荣获多个海内外企业奖项，彰显本公司的骄人成绩以及超卓信誉。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>腾讯网财经：金道贵金属再次获颁“杰出贵金属交易平台”企业大奖 <a rel="nofollow" target="_blank" href="http://finance.qq.com/a/20160217/024220.htm">http://finance.qq.com/a/20160217/024220.htm</a></p>
							<p>凤凰网商业：金道贵金属再次获颁“杰出贵金属交易平台”企业大奖 <a rel="nofollow" target="_blank" href="http://biz.ifeng.com/huanan/detail_2016_02/17/4766973_0.shtml">http://biz.ifeng.com/huanan/detail_2016_02/17/4766973_0.shtml</a></p>
							<p>中金在线：金道贵金属再次获颁“杰出贵金属交易平台”企业大奖 <a rel="nofollow" target="_blank" href="http://gold.cnfol.com/hangyezixun/20160216/22258184.shtml">http://gold.cnfol.com/hangyezixun/20160216/22258184.shtml</a></p>
							<p>中华网：金道贵金属再次获颁“杰出贵金属交易平台”企业大奖 <a rel="nofollow" target="_blank" href="http://money.china.com/fin/lc/201602/16/8178804.html">http://money.china.com/fin/lc/201602/16/8178804.html</a></p>
							<p>中国财经信息网：金道贵金属：欧央行或加大宽松 黄金加速回落 <a rel="nofollow" target="_blank" href="http://www.cfi.net.cn/p20160216000675.html">http://www.cfi.net.cn/p20160216000675.html</a></p>
							<p>新浪网财经：金道贵金属：欧央行或加大宽松 黄金加速回落 <a rel="nofollow" target="_blank" href="http://finance.sina.com.cn/money/forex/datafx/2016-02-16/doc-ifxpmpqr4452944.shtml">http://finance.sina.com.cn/money/forex/datafx/2016-02-16/doc-ifxpmpqr4452944.shtml</a></p>
							<p>汇金网：金道贵金属：欧央行或加大宽松 黄金加速回落 <a rel="nofollow" target="_blank" href="http://www.fx168.com/gold/opinion/1602/1796730.shtml">http://www.fx168.com/gold/opinion/1602/1796730.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn05" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 挖财</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 挖财诞生于2009年6月的“挖财”是国内最早的个人记账理财平台，专注于帮用户实现个人资产管理的便利化、个人记账理财的移动化、个人财务数据管理的云端化。现有服务包括手机端和Web端，主要产品有“挖财记账理财”、“挖财信用卡管家”、“挖财钱管家”等APP，以及国内最活跃的个人理财社区“挖财社区”。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 挖财由在线记账理财平台+客户端记账理财平台+挖财钱管家+挖财论坛四块组成。其中，核心为客户端（APP）记账理财平台+在线记账理财平台+挖财钱管家，详细为：
								智能手机记账（APP）：AndroidPhone、iPhone、WindowsPhone、Symbian、BlackBerry、Java
								平板电脑记账（APP）：iPad、AndroidPad
								电脑在线记账（WEB）：PCWeb
								手机网页记账（HTML5）：WebApp</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>北方网科技：挖财大数据:春节账单大比拼 60后人情消费最高 <a rel="nofollow" target="_blank" href="http://it.enorth.com.cn/system/2016/02/18/030813423.shtml">http://it.enorth.com.cn/system/2016/02/18/030813423.shtml</a></p>
							<p>浙商网：挖财大数据:春节账单大比拼 60后人情消费最高 <a rel="nofollow" target="_blank" href="http://biz.zjol.com.cn/system/2016/02/17/021025141.shtml">http://biz.zjol.com.cn/system/2016/02/17/021025141.shtml</a></p>
							<p>金融界：挖财王艺红：去库存任重道远 今年房价涨跌要看二线城市 <a rel="nofollow" target="_blank" href="http://finance.jrj.com.cn/biz/2016/02/17152620568836.shtml">http://finance.jrj.com.cn/biz/2016/02/17152620568836.shtml</a></p>
							<p>国际在线：挖财王艺红：去库存任重道远 今年房价涨跌要看二线城市 <a rel="nofollow" target="_blank" href="http://money.cri.cn/303/2016/02/17/221s21984.htm">http://money.cri.cn/303/2016/02/17/221s21984.htm</a></p>
							<p>中华网：挖财王艺红：去库存任重道远 今年房价涨跌要看二线城市 <a rel="nofollow" target="_blank" href="http://money.china.com/fin/lc/201602/17/8944338.html">http://money.china.com/fin/lc/201602/17/8944338.html</a></p>
							<p>速途网：农行信用卡与挖财达成合作 <a rel="nofollow" target="_blank" href="http://www.sootoo.com/content/661008.shtml">http://www.sootoo.com/content/661008.shtml</a></p>
							<p>金融界：农行信用卡与挖财达成合作 <a rel="nofollow" target="_blank" href="http://finance.jrj.com.cn/2016/02/16201220563741.shtml">http://finance.jrj.com.cn/2016/02/16201220563741.shtml</a></p>
							<p>搜狐网：农行信用卡与挖财达成合作 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20160216/n437551058.shtml">http://mt.sohu.com/20160216/n437551058.shtml</a></p>
							<p>环球网：农行信用卡与挖财达成合作 <a rel="nofollow" target="_blank" href="http://tech.huanqiu.com/internet/2016-02/8548581.html">http://tech.huanqiu.com/internet/2016-02/8548581.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!--main end-->
<?php
include("../footer.php");
?>

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



</body>
</html>
