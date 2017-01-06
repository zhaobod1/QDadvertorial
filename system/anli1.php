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
					<li><a href="anli1.php" id="on_al">移民留学</a></li>
					<li><a href="anli2.php">健康医疗</a></li>
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
				<li id="n01" class="on4"><a onmouseover="LoadClick4(&quot;n01&quot;, &quot;divn01&quot;)"><img src="../huo15template/img/anli11.jpg" width="132" height="134"><span>亨瑞出国</span></a></li>
				<li id="n02" class=""><a onmouseover="LoadClick4(&quot;n02&quot;, &quot;divn02&quot;)"><img src="../huo15template/img/anli12.jpg" width="132" height="134"><span>柳橙网</span></a></li>
				<li id="n03" class=""><a onmouseover="LoadClick4(&quot;n03&quot;, &quot;divn03&quot;)"><img src="../huo15template/img/anli13.jpg" width="132" height="134"><span>启德教育</span></a></li>
				<li id="n04" class=""><a onmouseover="LoadClick4(&quot;n04&quot;, &quot;divn04&quot;)"><img src="../huo15template/img/anli14.jpg" width="132" height="134"><span>金吉列留学</span></a></li>
				<li id="n05" class=""><a onmouseover="LoadClick4(&quot;n05&quot;, &quot;divn05&quot;)"><img src="../huo15template/img/anli15.jpg" width="132" height="134"><span>嘉德移民</span></a></li>
			</ul>
			<div class="clear"></div>
			<div class="anli_nr" id="divn01">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 亨瑞出国</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 亨瑞集团（Henry Group）成立于1992年，经过二十多年的深耕、探索和积累，目前在移民留学、北美地产开发、基金投资、北美置业等多个领域内发展成为具有丰富经验和竞争优势的多元化跨国集团。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 亨瑞集团具备境内外多重移民留学资质，是目前美、加、英、澳等境内外移民留学收案最多、成功率最高，在移民留学行业中享有盛誉的专业移民留学代理机构。自90年代初进驻中国以来，亨瑞集团以专业的技术水平和良好的信誉得到了美、加、英、澳等国使馆、移民顾问协会、律师协会及权威行业组织的高度认可。在服务境内外申请人的二十年间，亨瑞集团通过遍及全球50余个分支机构的服务网络，成功协助数以万计的申请者顺利移民，同时助力他们的子女赴美加留学，享受世界一流的教育资源。专业高效的业务处理、细致周到的VIP服务，不仅使亨瑞集团在数万名成功移民的申请人中建立了良好的口碑，也使其逐步成长为今日移民行业翘楚，稳居移民业领军地位。在未来的发展中，亨瑞集团将继续密切关注美国等移民局移民政策变化，进一步集中境内外各方面优势资源，结合自身多年办理经验，致力于保持移民申请最高获签率以及行业领先地位，为更多有意出国发展或海外定居的精英人士实现愿望！</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>凤凰网新闻：亨瑞集团携手云南房协搭建海外投融资服务平台 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20151204/46521998_0.shtml">http://news.ifeng.com/a/20151204/46521998_0.shtml</a></p>
							<p>中安在线：亨瑞集团携手云南房协搭建海外投融资服务平台 <a rel="nofollow" target="_blank" href="http://www.anhuinews.com/zhuyeguanli/system/2015/12/04/007113881.shtml">http://www.anhuinews.com/zhuyeguanli/system/2015/12/04/007113881.shtml</a></p>
							<p>网易手机：亨瑞集团携手云南房协搭建海外投融资服务平台 <a rel="nofollow" target="_blank" href="http://help.3g.163.com/0406/15/1203/14/B9TUJS200406002E.html">http://help.3g.163.com/0406/15/1203/14/B9TUJS200406002E.html</a></p>
							<p>中国网：亨瑞集团携手云南房协搭建海外投融资服务平台 <a rel="nofollow" target="_blank" href="http://house.china.com.cn/zaozhuang/view/811474.htm">http://house.china.com.cn/zaozhuang/view/811474.htm</a></p>
							<p>腾讯网教育：亨瑞集团副总裁王茜：移民合作伙伴遍布全球 <a rel="nofollow" target="_blank" href="http://edu.qq.com/a/20151201/047912.htm">http://edu.qq.com/a/20151201/047912.htm</a></p>
							<p>中国网教育：中国网2015中国好教育候选单位：亨瑞集团 <a rel="nofollow" target="_blank" href="http://edu.china.com.cn/2015-10/27/content_36902818.htm">http://edu.china.com.cn/2015-10/27/content_36902818.htm</a></p>
							<p>新浪网教育：EB-5委员会主席亲临亨瑞解读美国移民新趋势 <a rel="nofollow" target="_blank" href="http://edu.sina.com.cn/a/2015-08-20/1012262565.shtml">http://edu.sina.com.cn/a/2015-08-20/1012262565.shtml</a></p>
							<p>中国教育在线：EB-6委员会主席亲临亨瑞解读美国移民新趋势 <a rel="nofollow" target="_blank" href="http://gaokao.eol.cn/yxdt/201508/t20150817_1303763.shtml">http://gaokao.eol.cn/yxdt/201508/t20150817_1303763.shtml</a></p>
							<p>搜狐网：EB-7委员会主席亲临亨瑞解读美国移民新趋势 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20150814/n418892729.shtml">http://mt.sohu.com/20150814/n418892729.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn02" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 柳橙网</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 柳橙网是一个专注于出国留学领域的垂直服务平台。既不同于一般的留学中介机构，也不同于一般大型资讯门户网站下的留学频道——相比留学中介，她不做任何中介活动；相比一般的留学频道，她更倾向于专注。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 柳橙网，中国领先留学品牌,权威在线留学交易服务平台，下设著名子品牌柳橙留学商城，是中国首个专业整合全球教育服务资源、打造零距离留学体验的在线留学交易服务平台。作为全球10000+所院校的招生合作伙伴，柳橙网凝聚两大精英团队，他们分别是由来自英国、澳洲、美国留学专家以及新浪十佳留学顾问组成的资深顶尖留学专家团队，来自国内知名互联网企业的互联网精英团队，两大精英团队通力合作，共同打造出国内真正的互联网留学品牌。柳橙的愿景是让留学更便捷、更大众！。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>中国网：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://science.china.com.cn/2016-05/04/content_8747242.htm">http://science.china.com.cn/2016-05/04/content_8747242.htm</a></p>
							<p>搜狐网：百万留学月薪三千?柳橙网:留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20160503/n447505905.shtml">http://mt.sohu.com/20160503/n447505905.shtml</a></p>
							<p>北方网：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://edu.enorth.com.cn/system/2016/05/03/030950972.shtml">http://edu.enorth.com.cn/system/2016/05/03/030950972.shtml</a></p>
							<p>南方网：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://edu.southcn.com/jygd/content/2016-05/03/content_147052182.htm">http://edu.southcn.com/jygd/content/2016-05/03/content_147052182.htm</a></p>
							<p>新民网：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://news.xinmin.cn/world/2016/05/03/29951045.html">http://news.xinmin.cn/world/2016/05/03/29951045.html</a></p>
							<p>网易教育：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://edu.163.com/16/0503/17/BM5K3BP200294KHN.html">http://edu.163.com/16/0503/17/BM5K3BP200294KHN.html</a></p>
							<p>东北新闻网：百万留学月薪三千？柳橙网：留学成功不只看投入产出比 <a rel="nofollow" target="_blank" href="http://edu.nen.com.cn/system/2016/05/03/019071254.shtml">http://edu.nen.com.cn/system/2016/05/03/019071254.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn03" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 启德教育</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> EIC启德教育集团（Education International Cooperation Group）是国际教育领域的知名品牌，二十余年来致力于国际教育交流，是最专业的留学咨询机构之一。自二十世纪八十年代中期开始，EIC启德教育参与、见证了中国国际教育交流飞速发展的过程，深深了解中国学生走向世界的雄厚潜力和真正需求；并在中国主要城市建立办公室，为广大学生提供出国留学服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 启德教育，是国际教育领域的知名品牌，29年来致力于国际教育交流，是中国教育部官方认证的留学咨询与出国培训的旗舰机构，具有雄厚的国际教育资源优势。启德教育旗下拥有启德出囯留学教育、启德学府和启德游学三大子品牌。留学是超过20多个国家和地区上千所院校授权的官方招生代表；拥有全球鲜有的美国国际招生协会（AIRC）认证会员资格；是首批被澳大利亚移民局授权使用“电子签证”系统的机构，也是全国首家澳大利亚“八大”名校官方代理机构；作为英国院校官方授权的全国最大的招生代理机构，所服务的学生遍布牛津大学等英国的一流大学。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>新华网：启德教育数据解读2016美国留学申请新局面 <a rel="nofollow" target="_blank" href="http://news.xinhuanet.com/abroad/2016-01/04/c_128594012.htm">http://news.xinhuanet.com/abroad/2016-01/04/c_128594012.htm</a></p>
							<p>网易新闻：启德教育数据解读2016美国留学申请新局面 <a rel="nofollow" target="_blank" href="http://news.163.com/15/1231/17/BC6A3FNV00014AED.html">http://news.163.com/15/1231/17/BC6A3FNV00014AED.html</a></p>
							<p>搜狐网：启德教育数据解读2016美国留学申请新局面 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20151231/n433188440.shtml">http://mt.sohu.com/20151231/n433188440.shtml</a></p>
							<p>中国网：启德教育数据解读2016美国留学申请新局面 <a rel="nofollow" target="_blank" href="http://xiaofei.china.com.cn/news/info-11-9-166900.html">http://xiaofei.china.com.cn/news/info-11-9-166900.html</a></p>
							<p>网易教育：启德教育黄娴：去中介化是我们的特点 <a rel="nofollow" target="_blank" href="http://edu.163.com/15/1203/15/B9TVJ1AN00294ND7.html">http://edu.163.com/15/1203/15/B9TVJ1AN00294ND7.html</a></p>
							<p>腾讯网教育：启德教育集团张磊：教育机构要以学生体验为中心 <a rel="nofollow" target="_blank" href="http://edu.qq.com/a/20151201/048475.htm">http://edu.qq.com/a/20151201/048475.htm</a></p>
							<p>新浪网教育：2015新浪教育盛典候选机构：启德教育 <a rel="nofollow" target="_blank" href="http://edu.sina.com.cn/l/2015-11-10/doc-ifxknutf1668235.shtml">http://edu.sina.com.cn/l/2015-11-10/doc-ifxknutf1668235.shtml</a></p>
							<p>网易财经：启德教育：留学后移民为何首选加拿大 <a rel="nofollow" target="_blank" href="http://money.163.com/15/1224/16/BBK5T6D500253B0H.html">http://money.163.com/15/1224/16/BBK5T6D500253B0H.html</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn04" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 金吉列留学</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 金吉列出国留学咨询服务有限公司成立于1999年，隶属于北京金吉列企业集团。金吉列企业集团是中国500家最大私营企业之一；2000年1月15日获得了教育部、公安部和国家工商行政管理局的首批资格认证。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 国家资质：首批获得教育部、公安部和国家工商行政管理总局资质认证

								诚信服务：留学行业首家3.15标志服务品牌，全国唯一诚信企业奖牌获得者，全国用户满意服务明星单位，中国消费者协会《社会责任导则》全国教育行业首家签署单位

								专业咨询：拥有数十年留学管理经验的驻外十国使馆前大使、教育参赞作为金吉列首席咨询专家，千余名专业的咨询师，并拥有十数万海外留学成功案例。

								项目全面：每年向数万个家庭提供数十个国家（数千所海外院校）的免费留学咨询，度身设计留学方案

								科学管理：率先实施现代管理模式，首家获得ISO9001国际质量管理体系认证，独家研发CRM客户信息服务系统 </p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>网易教育：金吉列副总李康：低龄留学英联邦是首选 <a rel="nofollow" target="_blank" href="http://edu.163.com/15/1203/17/B9U7EPEL00294ND7.html">http://edu.163.com/15/1203/17/B9U7EPEL00294ND7.html</a></p>
							<p>新浪网教育：新浪2015教育盛典 金吉列留学摘取多项重磅奖项 <a rel="nofollow" target="_blank" href="http://edu.sina.com.cn/a/2015-12-02/doc-ifxmifze7526907.shtml">http://edu.sina.com.cn/a/2015-12-02/doc-ifxmifze7526907.shtml</a></p>
							<p>腾讯网教育：金吉列留学副总裁郑应文：为学生提供诚信服务 <a rel="nofollow" target="_blank" href="http://edu.qq.com/a/20151201/051360.htm">http://edu.qq.com/a/20151201/051360.htm</a></p>
							<p>新华网：金吉列留学助阵ACAA“澳中杰出校友奖”颁奖晚宴 <a rel="nofollow" target="_blank" href="http://news.xinhuanet.com/abroad/2015-11/26/c_128470970.htm">http://news.xinhuanet.com/abroad/2015-11/26/c_128470970.htm</a></p>
							<p>网易新闻：金吉列留学第47届海外院校全国巡回招生面试会正式开幕 <a rel="nofollow" target="_blank" href="http://news.163.com/15/1104/07/B7IG7GT300014AED.html">http://news.163.com/15/1104/07/B7IG7GT300014AED.html</a></p>
							<p>南方企业新闻网：金吉列留学荣获“朝阳区工商联守法诚信承诺示范单位” <a rel="nofollow" target="_blank" href="http://www.senn.com.cn/jy/2016/01/19/114218.html">http://www.senn.com.cn/jy/2016/01/19/114218.html</a></p>
							<p>凤凰网新闻：金吉列留学消费教育专栏 <a rel="nofollow" target="_blank" href="http://news.ifeng.com/a/20151109/46162818_0.shtml">http://news.ifeng.com/a/20151109/46162818_0.shtml</a></p>
							<p> </p>
						</div>
					</div>
				</div>
			</div>
			<div class="anli_nr" id="divn05" style="display:none;">
				<div class="page_right">
					<div class="path">
						<h3>当前位置：首页 &gt; 成功案例 &gt; 嘉德移民</h3>
					</div>
					<div class="clear"></div>
					<div class="pro_about">
						<div class="pro_about_top"><span>企业简介</span></div>
						<div class="pro_about_nr">
							<p> 嘉德联合（北京）国际商务咨询有限公司（简称“嘉德移民”）是经国家公安部、国家工商行政管理总局认证，并由北京市公安局批准的中国公民因私出入境专业咨询服务机构；嘉德移民隶属大型集团公司，集团业务立足“金融界”，旗下公司经营覆盖典当、移民、地产、科技、签证及翻译等多元化业务，为国内高净资产客户提供了一站式金融及咨询服务。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>品牌优势</span></div>
						<div class="pro_about_nr">
							<p> 专业的精英团队

								嘉德移民的服务团队是由精通移民法律法规的前移民局局长、持牌移民大律师、资深移民顾问、注册会计师、高级翻译等组成，平均从业年限在5年以上，为每一位投资移民申请者准备高质量、完备、清晰、有说服力的申请材料，赢得最有效的审理时间和最大可能的成功率。

								一流的的方案制定

								嘉德移民的移民专家凭借对移民政策、法律法规的深刻理解和正确把握以及丰富的办理经验，对每一个案件进行深入研究，针对申请者的具体要求和特点。

								安全的个人信息

								嘉德移民所有人员均签有保密协议，每一位客户提供的信息仅用于移民申请，未经客户同意，绝不擅自将客户的信息透露给任何第三方，避免给客户带来损失。

								贴心的安家服务

								嘉德移民对每一位成功客户提供行前指导、落地安家、法律咨询、海外投资等全方位安家服务，以保障每一位客户尽快适应新的海外生活。</p>
						</div>
					</div>
					<div class="pro_about">
						<div class="pro_about_top"><span>服务内容</span></div>
						<div class="pro_about_nr">
							<p>新闻稿发布部分案例：</p>
							<p>新华网：嘉德移民总经理陈浩然：借助海外优势推出不同产品 <a rel="nofollow" target="_blank" href="http://news.xinhuanet.com/abroad/2015-12/05/c_128501958.htm">http://news.xinhuanet.com/abroad/2015-12/05/c_128501958.htm</a></p>
							<p>搜狐网：嘉德移民总经理陈浩然：借助海外优势推出不同产品 <a rel="nofollow" target="_blank" href="http://mt.sohu.com/20151206/n429944562.shtml">http://mt.sohu.com/20151206/n429944562.shtml</a></p>
							<p>未来网：嘉德移民总经理陈浩然：借助海外优势推出不同产品 <a rel="nofollow" target="_blank" href="http://news.k618.cn/edus/201512/t20151205_6310255.html">http://news.k618.cn/edus/201512/t20151205_6310255.html</a></p>
							<p>中青在线：嘉德移民总经理陈浩然：借助海外优势推出不同产品 <a rel="nofollow" target="_blank" href="http://edu.cyol.com/content/2015-12/05/content_11902702.htm">http://edu.cyol.com/content/2015-12/05/content_11902702.htm</a></p>
							<p>国际在线：嘉德移民：美国投资移民会是下一张多米诺骨牌吗 <a rel="nofollow" target="_blank" href="http://gb.cri.cn/44571/2015/01/21/3925s4849459.htm">http://gb.cri.cn/44571/2015/01/21/3925s4849459.htm</a></p>
							<p>欧洲网：嘉德移民度假村别墅项目掀底葡萄牙房产热潮 <a rel="nofollow" target="_blank" href="http://www.eupeople.com.cn/jj/20141218_23320.html">http://www.eupeople.com.cn/jj/20141218_23320.html</a></p>
							<p>北青网："
								嘉德移民再度荣获最具公信力品牌出国服务机构等两项大奖" <a rel="nofollow" target="_blank" href="http://finance.ynet.com/3.1/1412/05/9647663.html">http://finance.ynet.com/3.1/1412/05/9647663.html</a></p>
							<p>北方网：嘉德移民诚邀您参加第二届北京海外置业投资移民展 <a rel="nofollow" target="_blank" href="http://house.enorth.com.cn/system/2014/11/14/012264750.shtml">http://house.enorth.com.cn/system/2014/11/14/012264750.shtml</a></p>
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
