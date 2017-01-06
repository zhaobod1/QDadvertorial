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
					<li><a href="anli3.php" id="on_al">电子商务</a></li>
					<li><a href="anli4.php">投资理财</a></li>
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
				<li id="n01" class="on4"><a onmouseover="LoadClick4(&quot;n01&quot;, &quot;divn01&quot;)"><img src="../huo15template/img/anli31.jpg" width="132" height="134"><span>俏十岁</span></a></li>
				<li id="n02" class=""><a onmouseover="LoadClick4(&quot;n02&quot;, &quot;divn02&quot;)"><img src="../huo15template/img/anli32.jpg" width="132" height="134"><span>天天果园</span></a></li>
				<li id="n03" class=""><a onmouseover="LoadClick4(&quot;n03&quot;, &quot;divn03&quot;)"><img src="../huo15template/img/anli33.jpg" width="132" height="134"><span>黛莱美</span></a></li>
				<li id="n04" class=""><a onmouseover="LoadClick4(&quot;n04&quot;, &quot;divn04&quot;)"><img src="../huo15template/img/anli34.jpg" width="132" height="134"><span>春水堂</span></a></li>
				<li id="n05" class=""><a onmouseover="LoadClick4(&quot;n05&quot;, &quot;divn05&quot;)"><img src="../huo15template/img/anli35.jpg" width="132" height="134"><span>钻石小鸟</span></a></li>
			</ul>
			<div class="clear"></div>
			<div class="anli_nr" id="divn01">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 俏十岁</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p>俏十岁CHOISKYCN是以科技面膜为核心产品的顶级抗衰科技护肤品牌。1999年，青年发明家武斌先生带领国内外资深科研人员，历经13年的努力，亿万资产的投入，不计成本的搜寻近千种植物精华，不断汲取来自生物学、医药学、化学、皮肤学和营养学等多重领域的前沿科技，并联合国内外顶级科研机构出品自然、科技、功能性抗衰护肤品。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 俏十岁产品类别主要有外用养护：科技面膜及系列护肤品；内服调理：食用菌饮品。作为一个民族品牌，俏十岁在“中国梦”的感召下，在中国面膜领域开辟出一块“科技”新土。俏十岁科技面膜创始人13年的研发心血创造了凝结中华五千年草本精粹的面膜——俏十岁科技面膜，中国第一款拥有自主知识产权并获国家发明专利的中医药科技面膜，也是唯一被国家中医药管理局中国中医药科技开发交流中心列入全国科技成果推广项目的面膜。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>新浪网：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.sina.com.cn/o/2016-02-06/doc-ifxpfhzk9038392.shtml">http://news.sina.com.cn/o/2016-02-06/doc-ifxpfhzk9038392.shtml</a></p>
							<p>网易财经：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://money.163.com/16/0206/16/BF5G98PB00254TI5.html">http://money.163.com/16/0206/16/BF5G98PB00254TI5.html</a></p>
							<p>凤凰网新闻：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20160206/47382764_0.shtml">http://news.ifeng.com/a/20160206/47382764_0.shtml</a></p>
							<p>网易新闻：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.163.com/16/0206/16/BF5G984Q00014JB6.html">http://news.163.com/16/0206/16/BF5G984Q00014JB6.html</a></p>
							<p>21CN新闻：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.21cn.com/caiji/roll1/a/2016/0206/16/30594160.shtml">http://news.21cn.com/caiji/roll1/a/2016/0206/16/30594160.shtml</a></p>
							<p>和讯网：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.hexun.com/2016-02-06/182215533.html">http://news.hexun.com/2016-02-06/182215533.html</a></p>
							<p>中国新闻网：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://finance.chinanews.com/life/2016/02-06/7751717.shtml">http://finance.chinanews.com/life/2016/02-06/7751717.shtml</a></p>
							<p>中国日报网：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://www.chinadaily.com.cn/hqgj/jryw/2016-02-06/content_14538288.html">http://www.chinadaily.com.cn/hqgj/jryw/2016-02-06/content_14538288.html</a></p>
							<p>东方网：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://news.eastday.com/eastday/13news/auto/news/china/20160206/u7ai5272603.html">http://news.eastday.com/eastday/13news/auto/news/china/20160206/u7ai5272603.html</a></p>
							<p>中青在线：俏十岁将登陆纽约时代广场 展示中国高端面膜品牌魅力 <a rel="nofollow" target="_blank" href="http://life.cyol.com/content/2016-02/06/content_12164684.htm">http://life.cyol.com/content/2016-02/06/content_12164684.htm</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn02" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 天天果园</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 天天果园官方网站提供水果生鲜、果篮券卡订制、干果零食等优质食品网购服务,2014年车厘子销量全网第一,佳沛奇异果、新奇士橙、进口牛油果等亦深受果友喜爱。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 天天果园，是一家基于互联网技术的现代鲜果服务供应商，提供高品质鲜果产品和个性化鲜果服务。天天果园Fruitday，成立于2009年4月1日，前身为传统水果商，有30年食品行业经验。精选全球鲜果美食，搭建从产地到消费者之间的直供平台，自建冷库，冷链物流。便利宅送，全年无休。主营中高端水果产品，包括进口鲜果和国内优质鲜果。天天果园拥有网站订购，电话订购，电视购物（东方CJ）、企业直供（大客户定制）和实体服务点等多元供应渠道。团体大客户，可享受量身定制产品的服务。天天果园的愿望是，让客户享受到真正健康、美味的世界鲜果和管家式体贴放心的服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>网易财经：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://money.163.com/16/0127/01/BEA2RNL100253B0H.html">http://money.163.com/16/0127/01/BEA2RNL100253B0H.html</a></p>
							<p>搜狐网：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://business.sohu.com/20160126/n435818076.shtml">http://business.sohu.com/20160126/n435818076.shtml</a></p>
							<p>新浪网新闻：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://news.sina.com.cn/o/2016-01-26/doc-ifxnuwfc9497517.shtml">http://news.sina.com.cn/o/2016-01-26/doc-ifxnuwfc9497517.shtml</a></p>
							<p>新华网：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://news.xinhuanet.com/politics/2016-01/26/c_128667759.htm">http://news.xinhuanet.com/politics/2016-01/26/c_128667759.htm</a></p>
							<p>凤凰网新闻：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20160126/47230098_0.shtml">http://news.ifeng.com/a/20160126/47230098_0.shtml</a></p>
							<p>新浪网科技：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://tech.sina.com.cn/i/2016-01-26/doc-ifxnurxn9978158.shtml">http://tech.sina.com.cn/i/2016-01-26/doc-ifxnurxn9978158.shtml</a></p>
							<p>光明网：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://tech.gmw.cn/newspaper/2016-01/28/content_110909631.htm">http://tech.gmw.cn/newspaper/2016-01/28/content_110909631.htm</a></p>
							<p>中国网新闻：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://news.china.com.cn/live/2016-01/28/content_35109780.htm">http://news.china.com.cn/live/2016-01/28/content_35109780.htm</a></p>
							<p>财经网：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://politics.caijing.com.cn/20160127/4061506.shtml">http://politics.caijing.com.cn/20160127/4061506.shtml</a></p>
							<p>海外网：天天果园：让生鲜行业回归理性本质 <a rel="nofollow" target="_blank" href="http://news.haiwainet.cn/n/2016/0126/c3541839-29585316.html">http://news.haiwainet.cn/n/2016/0126/c3541839-29585316.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn03" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 黛莱美</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 黛莱美是思埠集团旗下品牌之一，中国民族化妆品品牌，以其卓越的产品质量和强大的功效享誉业界，同时也赢得了爱美人士的青睐。黛莱美品牌系列的产品有黛莱美多重修护面膜、黛莱美紧致提升眼唇精华液、黛莱美焕彩净润洁面乳、黛莱美焕彩水润无瑕BB霜！</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 黛莱美——是广州思埠生物科技有限公司旗下化妆品品牌，品牌创建于2014年6月，该产品专为面部营养流失的早衰女性设计，具有多重修护功能；令肌肤柔滑、有光泽，熠熠生辉。全新黛莱美，全心带来美！ 广州思埠生物科技有限公司（思埠）是一家高科技生物公司，成立于被称为"微信营销元年"的2013年末，经过艰辛的创业与发展，跻身成全国著名的面膜生产销售企业，坚持独创的运营模式和创新科技，走向国际。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>中国广播网："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://hn.cnr.cn/zyjjq/jjqzsyz/20160120/t20160120_521177802.shtml">http://hn.cnr.cn/zyjjq/jjqzsyz/20160120/t20160120_521177802.shtml</a></p>
							<p>今晚报："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://www.jwb.com.cn/cj/tz/201601/t20160118_4595249.html">http://www.jwb.com.cn/cj/tz/201601/t20160118_4595249.html</a></p>
							<p>网易手机："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://help.3g.163.com/0414/16/0118/15/BDKEQM7R041401AJ.html">http://help.3g.163.com/0414/16/0118/15/BDKEQM7R041401AJ.html</a></p>
							<p>凤凰网："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://js.ifeng.com/business/landmark/detail_2016_01/18/4746709_0.shtml">http://js.ifeng.com/business/landmark/detail_2016_01/18/4746709_0.shtml</a></p>
							<p>红商网："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://www.redsh.com/a/20160118/145841.shtml">http://www.redsh.com/a/20160118/145841.shtml</a></p>
							<p>中华网："
								创新主旋律 把握新机遇暨微量贩移动平台与黛莱美内衣联合新闻发布" <a rel="nofollow" target="_blank" href="http://money.china.com/fin/qy/201601/18/6177427.html">http://money.china.com/fin/qy/201601/18/6177427.html</a></p>
							<p>齐鲁晚报：拉近眼球:魔王总团带你分析黛莱美系列商机 <a rel="nofollow" target="_blank" href="http://caijing.qlwb.com.cn/2015/0928/467429.shtml">http://caijing.qlwb.com.cn/2015/0928/467429.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn04" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 春水堂</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p>春水堂创立于2003年1月，取义于南唐大词人冯延巳传诵千年的浪漫古词“风乍起，吹皱一池春水。闲引鸳鸯香径里，手挼红杏蕊……”
								春水堂已经成为中国情趣文化的倡导者，其创始人蔺德刚的著作《成人之美-我开情趣店的那些日子》，被出版界誉为夫妻情趣生活的教科书。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p>“春水堂”全名为春水堂商业连锁有限公司， 创始人蔺德刚毕业于南开大学物理系，现任中国性学会常务理事，中国性教育专业委员会委员。春水堂创建于2003年。当下的“春水堂”是由“春水堂B2C网络商城”、“2家北京直营店”、“50余家全国加盟连锁店”共同组成，是中国目前最具品牌影响力的情趣用品零售企业。
								历时8年的创业发展，“春水堂”已经拥有了优秀的运营管理团队、现代化管理制度、行业优秀品牌影响力，“春水堂运营模式”被众多风险投资专家称为：“最可能实现爆发式增长的情趣用品商城运营模式。”
								·经营理念：“情趣百变，真爱永恒。”
								·产品采购核心原则：“绿色材质，人性设计。”
								·人才引进理念：“以人为本，尊重原创。”
								·远景目标：
								①“时尚、前卫、健康生活”的代名词。
								② 中国情趣文化的领导者。
								③ 纳斯达克的上市企业，即第一家上市的中国情趣用品行业。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>TechWeb：情趣+医疗春水堂独辟蹊径的“大健康”构想 <a rel="nofollow" target="_blank" href="http://www.techweb.com.cn/news/2016-02-18/2279684.shtml">http://www.techweb.com.cn/news/2016-02-18/2279684.shtml</a></p>
							<p>环球网：情趣+医疗春水堂独辟蹊径的“大健康”构想 <a rel="nofollow" target="_blank" href="http://tech.huanqiu.com/soft/2016-02/8560475.html">http://tech.huanqiu.com/soft/2016-02/8560475.html</a></p>
							<p>Donews：情趣+医疗春水堂独辟蹊径的“大健康”构想 <a rel="nofollow" target="_blank" href="http://www.donews.com/company/201602/2917580.shtm">http://www.donews.com/company/201602/2917580.shtm</a></p>
							<p>It168：比淘宝还要早半年 春水堂13年见证情趣电商发展 <a rel="nofollow" target="_blank" href="http://elec.it168.com/a2016/0215/2475/000002475248.shtml">http://elec.it168.com/a2016/0215/2475/000002475248.shtml</a></p>
							<p>网易手机：比淘宝还要早半年 春水堂14年见证情趣电商发展 <a rel="nofollow" target="_blank" href="http://mobile.163.com/16/0121/09/BDRI7G28001168BQ.html">http://mobile.163.com/16/0121/09/BDRI7G28001168BQ.html</a></p>
							<p>泡泡网：比淘宝还要早半年 春水堂15年见证情趣电商发展 <a rel="nofollow" target="_blank" href="http://www.pcpop.com/doc/1/1478/1478584.shtml">http://www.pcpop.com/doc/1/1478/1478584.shtml</a></p>
							<p>搜狐网：春水堂瞄准“亲密关系的私人管家” <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20160123/n435625759.shtml">http://mt.sohu.com/20160123/n435625759.shtml</a></p>
							<p>新浪网时尚：不只是情趣电商 看春水堂如何多元化布局 <a rel="nofollow" target="_blank" href="http://fashion.sina.com.cn/d/br/2016-01-20/1114/doc-ifxnqrkc6710140.shtml">http://fashion.sina.com.cn/d/br/2016-01-20/1114/doc-ifxnqrkc6710140.shtml</a></p>
							<p>威易网：不只是情趣电商 看春水堂如何多元化布局 <a rel="nofollow" target="_blank" href="http://www.weste.net/2016/01-20/108343.html">http://www.weste.net/2016/01-20/108343.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn05" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 钻石小鸟</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 钻石小鸟十三年钻石珠宝品牌,婚戒定制首选品牌;现在登陆钻石小鸟官网,查询当日钻石价格,为您专业定制独一无二的钻戒,对戒等首饰;15天退换,品质全国联保。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 钻石小鸟始创于2002年，率先把“鼠标+水泥”的模式引入网络奢侈品销售，是国内最早的网络钻石品牌之一。其始终倡导钻石文化的传播，坚持以安特卫普经典切割，一钻双证，为消费者带来贴心的购钻体验和无与伦比的DIY乐趣。钻石小鸟已为无数对情侣缔造了那颗爱情见证，收获了近百万会员[1] 的口口相传，倾情演绎着钻石与网络的恒久传奇。
								作为比利时钻石高阶议会（HRD）[2] 和国际铂金协会（Pt）[3] 在中国的唯一网络战略合作伙伴，钻石小鸟历年来联袂境内外知名设计师设计推出的钻石首饰，都深受消费者的喜爱，基于模式的灵活性可在同一时间向顾客提供2万多颗不同品级的钻石以供挑选，极具特色的DIY个性定制服务满足了年轻群体的钻饰款式个性化的需求，赢得了近百万会员[1] 的赞誉，为全国32座重点城市，超过2万名的顾客成功提供单价百万级以上的克拉钻投资理财服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>太平洋女性网：钻石小鸟探秘《谈婚论嫁》背后的甜蜜花絮 <a rel="nofollow" target="_blank" href="http://dress.pclady.com.cn/144/1441100.html">http://dress.pclady.com.cn/144/1441100.html</a></p>
							<p>市场导报网：钻石小鸟探秘《谈婚论嫁》背后的甜蜜花絮 <a rel="nofollow" target="_blank" href="http://www.zjscdb.com/detail.php?newsid=147352&amp;jdfwkey=rmwww1">http://www.zjscdb.com/detail.php?newsid=147352&amp;jdfwkey=rmwww1</a></p>
							<p>中国青年网：钻石小鸟探秘《谈婚论嫁》背后的甜蜜花絮 <a rel="nofollow" target="_blank" href="http://sd.youth.cn/2016/0204/3823987.shtml">http://sd.youth.cn/2016/0204/3823987.shtml</a></p>
							<p>海外网：钻石小鸟为新春欢聚时刻臻选 满是幸福的味道 <a rel="nofollow" target="_blank" href="http://huaren.haiwainet.cn/n/2016/0205/c3541859-29624076.html">http://huaren.haiwainet.cn/n/2016/0205/c3541859-29624076.html</a></p>
							<p>金投网：钻石小鸟为新春欢聚时刻臻选 满是幸福的味道 <a rel="nofollow" target="_blank" href="http://zhubao.cngold.org/c/2016-02-05/c3892505.html">http://zhubao.cngold.org/c/2016-02-05/c3892505.html</a></p>
							<p>凤凰网新闻：钻石小鸟重庆体验中心升级 千万级钻石婚戒亮相助阵 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20160128/47266056_0.shtml">http://news.ifeng.com/a/20160128/47266056_0.shtml</a></p>
							<p>网易新闻：钻石小鸟重庆体验中心升级 千万级钻石婚戒亮相助阵 <a rel="nofollow" target="_blank" href="http://news.163.com/16/0128/06/BED8JIRK00014AED.html">http://news.163.com/16/0128/06/BED8JIRK00014AED.html</a></p>
							<p>中华网：钻石小鸟重庆体验中心升级 千万级钻石婚戒亮相助阵 <a rel="nofollow" target="_blank" href="http://finance.china.com.cn/roll/20160128/3566180.shtml">http://finance.china.com.cn/roll/20160128/3566180.shtml</a></p>
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
