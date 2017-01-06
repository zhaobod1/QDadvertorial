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
					<li><a href="anli2.php" id="on_al">健康医疗</a></li>
					<li><a href="anli3.php">电子商务</a></li>
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
				<li id="n01" class="on4"><a onmouseover="LoadClick4(&quot;n01&quot;, &quot;divn01&quot;)"><img src="../huo15template/img/anli21.jpg" width="132" height="134"><span>艺星整形</span></a></li>
				<li id="n02" class=""><a onmouseover="LoadClick4(&quot;n02&quot;, &quot;divn02&quot;)"><img src="../huo15template/img/anli22.jpg" width="132" height="134"><span>上海华美</span></a></li>
				<li id="n03" class=""><a onmouseover="LoadClick4(&quot;n03&quot;, &quot;divn03&quot;)"><img src="../huo15template/img/anli23.jpg" width="132" height="134"><span>美莱医疗</span></a></li>
				<li id="n04" class=""><a onmouseover="LoadClick4(&quot;n04&quot;, &quot;divn04&quot;)"><img src="../huo15template/img/anli24.jpg" width="132" height="134"><span>博爱医院</span></a></li>
				<li id="n05" class=""><a onmouseover="LoadClick4(&quot;n05&quot;, &quot;divn05&quot;)"><img src="../huo15template/img/anli25.jpg" width="132" height="134"><span>上海天伦医院</span></a></li>
			</ul>
			<div class="clear"></div>
			<div class="anli_nr" id="divn01">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 艺星整形</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> Yestar坚信，只要活的精彩，每个人都是明星！Yestar艺星秉承“你就是明星”的品牌主张，以“做世界一流的医学美容连锁机构”为目标，以“帮助每一位爱美的朋友达成美丽心愿”为使命Yestar坚信，只要活的精彩，每个人都是明星！Yestar艺星秉承“你就是明星”的品牌主张，以“做世界一流的医学美容连锁机构”为目标，以“帮助每一位爱美的朋友达成美丽心愿”为使命</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 艺星国际医疗美容集团是国际医学美容连锁品牌，旗下拥有数十家医学美容连锁分支机构。
								作为亚太地区提供高端医学美容服务的顶级品牌，Yestar艺星引领韩国整形风潮，秉承韩国整形之精髓，兼收并蓄各国审美理念，专注探索医学美容科技新知，
								并致力于将高新科技应用于抗衰老、非手术美容、整形
								美容、皮肤美容、口腔美容、生活美容等领域，努力创造分享的哲学，始终为顾客提供最为领先、时尚、安全、可靠的医学美容服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>腾讯网：艺星整形汇爱慈善金钟国首献大连 <a rel="nofollow" target="_blank" href="http://ln.qq.com/a/20160126/041567_all.htm">http://ln.qq.com/a/20160126/041567_all.htm</a></p>
							<p>光明网女人：艺星整形汇爱慈善金钟国首献大连 <a rel="nofollow" target="_blank" href="http://lady.gmw.cn/newspaper/2016-02/02/content_110982467.htm">http://lady.gmw.cn/newspaper/2016-02/02/content_110982467.htm</a></p>
							<p>和讯网：Yestar艺星整形与云南女子击剑达成战略合作 <a rel="nofollow" target="_blank" href="http://news.hexun.com/2016-01-21/181927488.html">http://news.hexun.com/2016-01-21/181927488.html</a></p>
							<p>新浪网：重庆艺星整形怎么样？祛斑正规吗 <a rel="nofollow" target="_blank" href="http://news.dichan.sina.com.cn/2015/12/30/1156294.html">http://news.dichan.sina.com.cn/2015/12/30/1156294.html</a></p>
							<p>新浪网青岛：西安艺星整形 整形界的“黄金搭档” <a rel="nofollow" target="_blank" href="http://qd.sina.com.cn/news/1/2015-12-07/detail-ifxmihae9168342.shtml?from=qd_ydph">http://qd.sina.com.cn/news/1/2015-12-07/detail-ifxmihae9168342.shtml?from=qd_ydph</a></p>
							<p>凤凰网新闻：Yestar艺星整形启幕 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20150923/44713512_0.shtml">http://news.ifeng.com/a/20150923/44713512_0.shtml</a></p>
							<p>搜狐网：Yestar艺星整形应邀出席日中美容整形交流会 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20151130/n428823105.shtml">http://mt.sohu.com/20151130/n428823105.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn02" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 上海华美</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 上海华美医疗美容医院坐落于上海浦东小陆家嘴商圈，紧邻浦东大道，交通便利，停车方便。院内环境优雅，装修温馨雅致，是一家力求将美融入到精致生活中的纯韩式特色美容医院。医院设有整形外科、皮肤美容、注射美容、毛发种植、口腔美容等核心科室。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 眉如翠羽，肌如白雪，腰如束素，齿如含贝。嫣然一笑，惑阳城，迷下蔡”这是古老的东方对于美的诠释。
								受千年东方美文化的熏陶与启迪，中国第一家具有完整意义的高端医学美容品牌—华美于1994年闪耀诞生于中国浦江之畔—上海。坐拥中国经济和时尚中心，华美率先开创了中国医学美容民族(本土化)品牌的新纪元。其后，华美陆续登陆广州、福州、成都、南京、重庆等城市。
								时至今日，华美整形品牌连锁机构的规模已扩张至36家，遍布全国三十多个省市和自治区，为数百万的爱美女性塑造了美丽的容貌、缔造了华美的生活。数十载扬帆破浪，创华美理念于寰宇，见华美技术于海内，无愧于中国医疗美容行业的领袖军之名！</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>腾讯网：上海华美明星微整形基地迎来韩国偶像组合Notice <a rel="nofollow" target="_blank" href="http://sh.qq.com/a/20160106/038186.htm">http://sh.qq.com/a/20160106/038186.htm</a></p>
							<p>泡泡网：上海华美刘惠珍，用纹绣表达时尚素颜 <a rel="nofollow" target="_blank" href="http://www.pcpop.com/doc/1/1510/1510299.shtml">http://www.pcpop.com/doc/1/1510/1510299.shtml</a></p>
							<p>新浪网上海：上海华美用爱心帮助云南腾冲渐冻人 <a rel="nofollow" target="_blank" href="http://sh.sina.com.cn/news/k/2015-10-17/detail-ifxivscc0127150.shtml">http://sh.sina.com.cn/news/k/2015-10-17/detail-ifxivscc0127150.shtml</a></p>
							<p>大洋网：上海华美医疗美容医院用专业创造美丽 <a rel="nofollow" target="_blank" href="http://news.dayoo.com/world/57402/201504/21/57402_111561510.htm">http://news.dayoo.com/world/57402/201504/21/57402_111561510.htm</a></p>
							<p>和讯网：上海华美投资有限公司—价值投资的技巧 <a rel="nofollow" target="_blank" href="http://sichuan.hexun.com/2015-04-10/174855599.html">http://sichuan.hexun.com/2015-04-10/174855599.html</a></p>
							<p>搜狐网：上海华美医院袁玉坤教授2015年植发新成果 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20150321/n410113333.shtml">http://mt.sohu.com/20150321/n410113333.shtml</a></p>
							<p>中国新闻网：华美微整形韩胜教授参加时尚芭莎慈善晚宴 <a rel="nofollow" target="_blank" href="http://www.ah.chinanews.com.cn/article-40874-1.html">http://www.ah.chinanews.com.cn/article-40874-1.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn03" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 美莱医疗</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 美莱医学美容集团，具有17年品牌沉淀历史，中国26城连锁医院，300多位国内外医美权威专家，100多个专利技术，300多万例个性美丽案例，是目前亚洲规模最大，国内实力最雄厚的专业医学美容医院连锁集团，更是诸多明星医美首选地。美莱的事业横跨医疗、保健、科研等领域，致力于以整形、皮肤、无创、口腔、中医等专业的应用与发展。美莱，运用全球前沿技术，个性化、人性化服务，提供卓越品质医美体验，同时帮助广大求美者不仅获得外表的惊艳，更拥有勇敢、独立、自信的内心，蝶变成就自己精彩的人生！</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 北京美莱医疗美容医院，拥有国内外知名医疗美容专家组成的医疗科研团队、舒适的诊疗环境、先进的医疗美容器械设备，2012年在首都CBD核心区强势开业。

								作为民族品牌的骄傲，美莱自诞生之日起，一直引领着国内整形美容行业快速发展，在专家技术实力、设备水平、院内管理等各方面与国际接轨。今后，北京美莱将继续纵深发展完善技术服务体系，时刻准备着面对消费者最苛刻的考验。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>腾讯网：亚洲连锁医疗美容领导品牌——上海美莱医疗美容医院 <a rel="nofollow" target="_blank" href="http://sh.qq.com/a/20160115/058277.htm">http://sh.qq.com/a/20160115/058277.htm</a></p>
							<p>爱丽网：男士整容那些事儿 专访广州美莱医疗美容整形科罗延平主任 <a rel="nofollow" target="_blank" href="http://men.aili.com/1812/2685341.html">http://men.aili.com/1812/2685341.html</a></p>
							<p>深圳新闻网：美莱17周年25城联庆 一起为美丽加冕吧 <a rel="nofollow" target="_blank" href="http://www.sznews.com/news/content/2015-11/10/content_12461804.htm">http://www.sznews.com/news/content/2015-11/10/content_12461804.htm</a></p>
							<p>凤凰网财经：长沙美莱导入JCI国际医疗认证评审培训 <a rel="nofollow" target="_blank" href="http://finance.ifeng.com/a/20150921/13985024_0.shtml">http://finance.ifeng.com/a/20150921/13985024_0.shtml</a></p>
							<p>中国日报网：美莱17周年圣诞名媛夜耀世起航 <a rel="nofollow" target="_blank" href="http://www.chinadaily.com.cn/qiye/2015-12/23/content_22784891.htm">http://www.chinadaily.com.cn/qiye/2015-12/23/content_22784891.htm</a></p>
							<p>奥一网：漂亮的女人活得更精彩 美莱17周年庆典为美拼一把 <a rel="nofollow" target="_blank" href="http://life.oeeee.com/ad/201511/12/317656.html">http://life.oeeee.com/ad/201511/12/317656.html</a></p>
							<p>搜狐网：真优美APP助力美莱打造人造织女浓情开幕 <a rel="nofollow" target="_blank" href="http://fashion.sohu.com/20150819/n419260652.shtml">http://fashion.sohu.com/20150819/n419260652.shtml</a></p>
							<p>女人志：广州美莱打造变性刘婷获联合国妇女署“女性榜样奖” 并发布自传助慈善 <a rel="nofollow" target="_blank" href="http://www.onlylady.com/brand/2016/0122/3788314.shtml">http://www.onlylady.com/brand/2016/0122/3788314.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn04" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 博爱医院</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 深圳博爱医院是一所集临床、教学、科研、预防、保健、康复为一体的现代化综合性医院。医院努力与国际先进医疗机构的标准管理模式接轨，以发展高科技医疗项目而享誉国内外。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 医院运用现代化的经营管理体制，广纳管理人才和医学人才，并强调“事业留人、感情留人、待遇留人”的人才观， 从 而使医院拥有了一直思想新、业务精、医德高、团结好的高素质的员工队伍。医院严格执行国家省市各种卫生管理规章制度，注重抓日常医疗质量管理和流程化优质 的服务。以满足病人多元化、多层次的服务需求，融医学前沿性、医学经验性、医学人文性为一体，努力创立良好的医疗信誉。

								“一切以病人为中心”是博爱的服务宗旨，“德术并举，质量至上”是博爱的立院之本，“诚信进取，爱岗敬业”是博爱的优良院风。新的目标，新的发展，新的里程是博爱人永无止境的追求。我们正加大步伐，明志致远，为建设全国名牌医院而不懈奋斗。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>寻医问药：北京博爱医院护理部举办康复护理知识竞赛决赛 <a rel="nofollow" target="_blank" href="http://news.xywy.com/news/yiyuan/738494.html">http://news.xywy.com/news/yiyuan/738494.html</a></p>
							<p>新民网：凤冈：康达眼镜送“光明” 博爱医院送“健康” <a rel="nofollow" target="_blank" href="http://news.xinmin.cn/shehui/2016/01/26/29399751.html">http://news.xinmin.cn/shehui/2016/01/26/29399751.html</a></p>
							<p>赛迪网：深圳博爱医院”互联网+体检”为体检者提供个性化服务定制 <a rel="nofollow" target="_blank" href="http://www.ccidnet.com/2016/0115/10083821.shtml">http://www.ccidnet.com/2016/0115/10083821.shtml</a></p>
							<p>搜狐网：深圳博爱医院”互联网+体检”为体检者提供个性化服务定制 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20160119/n435041490.shtml">http://mt.sohu.com/20160119/n435041490.shtml</a></p>
							<p>比特网：深圳博爱医院”互联网+体检”为体检者提供个性化服务定制 <a rel="nofollow" target="_blank" href="http://do.chinabyte.com/76/13673076.shtml">http://do.chinabyte.com/76/13673076.shtml</a></p>
							<p>网易新闻：市博爱医院开通微信和诊间支付 <a rel="nofollow" target="_blank" href="http://news.163.com/15/1222/05/BBDT3CBV00014AED.html">http://news.163.com/15/1222/05/BBDT3CBV00014AED.html</a></p>
							<p>凤凰网科技：市博爱医院开通微信和诊间支付 <a rel="nofollow" target="_blank" href="http://tech.ifeng.com/a/20151222/41527468_0.shtml">http://tech.ifeng.com/a/20151222/41527468_0.shtml</a></p>
							<p>新浪网新闻：市博爱医院开通微信和诊间支付 <a rel="nofollow" target="_blank" href="http://news.sina.com.cn/o/2015-12-22/doc-ifxmszek7559262.shtml">http://news.sina.com.cn/o/2015-12-22/doc-ifxmszek7559262.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn05" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 上海天伦医院</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 上海天伦医院是按照全科医院标准创建，集医疗、预防、保健为一体的现代化综合性医院，是上海仁济医疗集团合作医院，是市医保定点医院，我市首批三星级医疗机构，上海市慈善基金会“世代”专项基金定点医疗机构。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p>为提高整体医疗水平，我院斥资引进了德国STORZ宫腔镜、腹腔镜、美国GE彩超、日本奥林巴斯电子胃肠镜、德国数码电子阴道镜、意大利FLAT SE乳腺高频钼靶X射线诊断机、智源肽前列腺治疗系统等一大批先进设备，并配备了标准层流净化手术室、手术导向系统、智能化多功能麻醉监护系统，同时，与上海复旦临床病理诊断中心建立长期合作，使软、硬件建设同步发展。
								“做最具责任感的医疗机构，人才立院，科技兴院，服务病人，奉献社会。”这是我院办院之初便立下的宗旨。作为仁济医疗集团成员单位，我院引入仁济先进的管理模式和医疗业务资源，凭借“实打实”的专家资源，务实的诊疗作风，雄厚的技术力量，低廉的惠民收费，连续数年获得政府部门及权威机构颁发的各项荣誉。全体医务人员秉持“德艺双馨，医疗惠民”的信念，致力于提供安全、优质、周到的医疗服务，让百姓“健康生活，共享天伦”！</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>贵阳晚报：太原天伦医院精细化服务项目成效卓越 <a rel="nofollow" target="_blank" href="http://www.gywb.cn/content/2016-02/17/content_4621663.htm">http://www.gywb.cn/content/2016-02/17/content_4621663.htm</a></p>
							<p>搜狐网：南京天伦医院优生优育公益讲座走进仁河社区 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20160203/n436755801.shtml">http://mt.sohu.com/20160203/n436755801.shtml</a></p>
							<p>凤凰网新闻：王雪梅：天伦医院，打动我的是这里的整个团队 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20151216/46690646_0.shtml">http://news.ifeng.com/a/20151216/46690646_0.shtml</a></p>
							<p>人民网：王雪梅：天伦医院，打动我的是这里的整个团队 <a rel="nofollow" target="_blank" href="http://henan.people.com.cn/n/2015/1223/c351638-27386140.html">http://henan.people.com.cn/n/2015/1223/c351638-27386140.html</a></p>
							<p>网易河南：王雪梅：天伦医院，打动我的是这里的整个团队 <a rel="nofollow" target="_blank" href="http://henan.163.com/15/1219/11/BB6PAPP90227025P.html">http://henan.163.com/15/1219/11/BB6PAPP90227025P.html</a></p>
							<p>中国新闻网：南京天伦医院，不得不说的那些事儿 <a rel="nofollow" target="_blank" href="http://www.ah.xinhuanet.com/2016-01/06/c_1117685791.htm">http://www.ah.xinhuanet.com/2016-01/06/c_1117685791.htm</a></p>
							<p>新浪网：南京天伦医院，免费送早餐 <a rel="nofollow" target="_blank" href="http://news.dichan.sina.com.cn/2015/12/14/1149950.html">http://news.dichan.sina.com.cn/2015/12/14/1149950.html</a></p>
							<p>新浪网安徽：南京天伦医院，免费送早餐 <a rel="nofollow" target="_blank" href="http://ah.sina.com.cn/health/xljy/2016-01-06/091937159.html">http://ah.sina.com.cn/health/xljy/2016-01-06/091937159.html</a></p>
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
