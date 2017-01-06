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
	<title><?php echo $F_Title; ?>_<?php echo $webname; ?></title>
	<meta name="keywords" content="<?php echo $F_KeyWords; ?>"/>
	<meta name="description" content="<?php echo $F_Descr; ?>"/>
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
	<!--王庆路 表格背景颜色更改-->
	<style>
		#s_meti table tr td{
			background-color: #e8ffe8;
			border:1px solid #CCCCCC;
		}
	</style>
	<!--王庆路 表格背景颜色更改 end-->
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
<div class="main">
	<div class="price clearfix">
		<div class="bk30"></div>
		<div class="publicinfo-box">
			<div class="large-search-box">

				<div class="large-search-condiation">
					<table class="table">
						<tr>
							<td>
								<select name="class_id" size="1" id="class_id">
									<option value=''>全部分类</option>
									<?php
									$sqlc = "select * from media_class where BigID=46";
									$resultc = mysql_db_query($dbname, $sqlc);
									while ($rsc = mysql_fetch_array($resultc)) {
										?>
										<option
											value="<?php echo $rsc["ID"]; ?>"><?php echo $rsc["SmallClass"]; ?></option>
										<?php
									}
									?>
								</select>
							</td>
							<td>
								<select name="diqu" size="1" id="diqu">
									<option value="">选择地区</option>
									<?php
									$sqld = "select * from diqu_class";
									$resultd = mysql_db_query($dbname, $sqld);
									while ($rsd = mysql_fetch_array($resultd)) {
										?>
										<option
											value="<?php echo $rsd["BigClass"]; ?>"><?php echo $rsd["BigClass"]; ?></option>
										<?php
									}
									?>
								</select>
							</td>
							<td>
								<select name="linkurl" size="1" id="linkurl">
									<option value="">选择链接情况</option>
									<option value="可超链接">可超链接</option>
									<option value="文本链接">文本链接</option>
									<option value="可带网址">可带网址</option>
									<option value="不能带连接">不能带连接</option>
									<option value="不能带网址">不能带网址</option>
								</select>
							</td>
							<td>
								<select name="xinwenyuan" size="1" id="xinwenyuan">
									<option value="">选择新闻源</option>
									<option value="非新闻源">非新闻源</option>
									<option value="网页收录">网页收录</option>
									<option value="百度新闻源">百度新闻源</option>
									<option value="谷歌新闻源">谷歌新闻源</option>
									<option value="搜狗新闻源">搜狗新闻源</option>
									<option value="360新闻源">360新闻源</option>
									<option value="搜搜新闻源">搜搜新闻源</option>
								</select>
							</td>
							<td>
								<select name="zhmh" size="1" id="zhmh">
									<option value="">选择门户</option>
									<option value=" ">非门户</option>
									<?php
									$sql2 = "select * from menhu_class";
									$result2 = mysql_db_query($dbname, $sql2);
									while ($rs2 = mysql_fetch_array($result2)) {
										?>
										<option
											value="<?php echo $rs2["BigClass"]; ?>"><?php echo $rs2["BigClass"]; ?></option>
										<?php
									}
									?>
								</select>
							</td>
							<td>
								<select name='skey' id="skey">
									<option value=''>默认排序</option>
									<option value="1">价格=>升序</option>
									<option value="2">价格=>降序</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class="large-search-con">
					<input name="meiti_name" type="text" onkeydown="if(event.keyCode == 13)event.returnValue = false;" id="meiti_name" class="input-large-search" placeholder="请输入关键字" value="">
					<input type="button" name="button" id="searchbutton" value="搜 索" class="btn-large-search" onclick="mt_search();">
					<div class="clear"></div>
				</div>
			</div>
			<div class="search-condition">
				<ul>


					<li class="clearfix" id="mtdl">
						<div class="text-block">
							<div class="list-left">媒体大类：</div>
							<div class="list-right">
								<div class="beginning">
									<a onclick="mt_search3()" href="javascript:;" class="active">不限</a>
								</div>
								<div class="text-block">
									<p id="pdlx_load">
										<?php
										$sqls="select * from media_class where BigID=46 order by paixu desc";
										$results=mysql_db_query($dbname,$sqls);
										while($rss=mysql_fetch_array($results))
										{
										?>

										<a href="javascript:;" onclick="mt_search1(<?php echo $rss["ID"];?>)"><?php echo $rss['SmallClass'];?></a>
											<?php
										}?>

									</p>
								</div>

							</div>
						</div>
					</li>
					<li class="clearfix" id="mtxl">
						<div class="text-block">
							<div class="list-left">媒体小类：</div>
							<div class="list-right">
								<div class="beginning"><a href="javascript:;" class="active" onclick=mt_search3()>不限</a></div>
								<div class="text-block">
									<p>
										<?php
										$sqls="select * from media_small order by paixu desc";
										$results=mysql_db_query($dbname,$sqls);
										while($rss=mysql_fetch_array($results))
										{
										?>
										<a  onclick="mt_searchs1(<?php echo $rss["ID"];?>)" href="javascript:;"><?php echo $rss["BigClass"];?></a>

										<?php }?>
									</p>
								</div>

							</div>
						</div>
					</li>
					<li class="clearfix" id="zhmh">
						<div class="list-left">综合门户：</div>
						<div class="list-right">
							<div class="beginning">
								<a onclick=mt_search3() href="javascript:;" class="active">不限</a>
							</div>
							<div class="text-block">
								<p>
									<?php
									$sqls = "select * from menhu_class order by paixu desc";
									$results = mysql_db_query($dbname, $sqls);
									while ($rss = mysql_fetch_array($results)) {
									?>
									<a onclick="mt_search7('<?php echo $rss["BigClass"]; ?>')"  href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
										<?php
									} ?>
								</p>
							</div>

						</div>
					</li>

					<li class="clearfix" id="jgfl">
						<div class="list-left">价格分类：</div>
						<div class="list-right">
							<div class="beginning">
								<a onclick=mt_search3() href="javascript:;" class="active">不限</a>
							</div>
							<div class="text-block">
								<p>

										<a onclick="mt_search2(0)"  href="javascript:;">0-40元</a>
										<a onclick="mt_search2(1)"  href="javascript:;">40-70元</a>
										<a onclick="mt_search2(2)"  href="javascript:;">70-120元</a>
										<a onclick="mt_search2(3)"  href="javascript:;">120元以上</a>

								</p>
							</div>

						</div>
					</li>
					<li class="clearfix" id="xwy">
						<div class="list-left">新闻源：</div>
						<div class="list-right">
							<div class="beginning">
								<a onclick=mt_search3() href="javascript:;" class="active">不限</a>
							</div>
							<div class="text-block">
								<p>

									<a onclick="mt_search4('百度新闻源')"  href="javascript:;">百度新闻源</a>
									<a onclick="mt_search4('谷歌新闻源')"  href="javascript:;">谷歌新闻源</a>
									<a onclick="mt_search4('搜狗新闻源')"  href="javascript:;">搜狗新闻源</a>
									<a onclick="mt_search4('360新闻源')"  href="javascript:;">360新闻源</a>
									<a onclick="mt_search4('搜搜新闻源')"  href="javascript:;">搜搜新闻源</a>
									<a onclick="mt_search4('非新闻源')"  href="javascript:;">无</a>

								</p>
							</div>

						</div>
					</li>
					<li class="clearfix" id="lj">
						<!--王庆路 联系方式分类-->
						<div class="list-left">联系方式：</div>
						<div class="list-right">
							<div class="beginning">
								<a href="javascript:;" onclick=mt_search3() class="active">全部</a>

							</div>
							<div class="text-block">
								<p>
									<a href="javascript:;" onclick=mt_search3()>不限</a>
									<a onclick="mt_search5('不允许')"  href="javascript:;">不允许</a>
									<a onclick="mt_search5('网址')"  href="javascript:;">网址</a>
									<a onclick="mt_search5('链接')"  href="javascript:;">超链接</a>
									<a onclick="mt_search5('二维码')"  href="javascript:;">二维码</a>
								</p>
							</div>
						</div>
						<!--王庆路 联系方式分类 end-->
					</li>
					<!--王庆路 入口级别分类-->
					<li class="clearfix" id="rk">

						<div class="list-left">入口级别：</div>
						<div class="list-right">
							<div class="beginning">
								<a href="javascript:;" onclick=mt_search3() class="active">全部</a>

							</div>
							<div class="text-block">
								<p>
									<a onclick="mt_search8('媒体首页')"  href="javascript:;">媒体首页</a>
									<a onclick="mt_search8('栏目页面')"  href="javascript:;">栏目页面</a>
									<a onclick="mt_search8('没有入口')"  href="javascript:;">没有入口</a>
								</p>
							</div>
						</div>

					</li>
					<!--王庆路 入口级别分类 end-->
				</ul>

			</div>
		</div>
		<div class="publicinfo-box">
			<div class="sequence">

				<div class="clear"></div>
			</div>
			<!--paixu end-->
			<div class="tablebox" id="result"><span id="totalnum2" style="display:none;">1113</span>
				<div id="s_meti"></div>

			</div>
			<!--tablebox end-->
			<div class="clear"></div>
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

<script type="text/javascript">
	var jq310 = jQuery.noConflict(true);
	console.log($().jquery);//往下就是1.4.2
</script>
<script src="../huo15template/js/jquery.SuperSlide.2.1.2.source.js"></script>

<SCRIPT type=text/javascript>

	$(document).ready(function(){

		var ajaxbg = $("#background,#progressBar");
		ajaxbg.hide();
		$(document).ajaxStart(function () {
			ajaxbg.show();
		}).ajaxStop(function () {
			ajaxbg.hide();
		});
		mt_search();
	})


	function mt_search()
	{
		$.get("search.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()},function(data){

			$("#s_meti").html(data);
		});
	}

	function mt_search1(id)
	{
		$.get("search.php?a=mt_search",{"fl":id},function(data){

			$("#s_meti").html(data);
		});
	}

	function mt_searchs1(id)
	{
		$.get("search.php?a=mt_search",{"fls":id},function(data){

			$("#s_meti").html(data);
		});
	}

	function mt_search2(id)
	{
		$.get("search.php?a=mt_search",{"jg":id},function(data){

			$("#s_meti").html(data);
		});
	}

	function mt_search3(id)
	{
		$.get("search.php?a=mt_searchall",{"jg":"all"},function(data){

			$("#s_meti").html(data);
		});
	}


	function mt_search4(id)
	{
		$.get("search.php?a=mt_searchall",{"xw":id},function(data){

			$("#s_meti").html(data);
		});
	}

	function mt_search5(id)
	{
		$.get("search.php?a=mt_searchall",{"lj":id},function(data){

			$("#s_meti").html(data);
		});
	}
	function mt_search6(id)
	{
		$.get("search.php?a=mt_searchall",{"dq":id},function(data){

			$("#s_meti").html(data);
		});
	}
	function mt_search7(id)
	{
		$.get("search.php?a=mt_searchall",{"zhmh":id},function(data){

			$("#s_meti").html(data);
		});
	}
	/*王庆路 入口级别分类*/
	function mt_search8(id)
	{
		$.get("search.php?a=mt_searchall",{"rk":id},function(data){
			$("#s_meti").html(data);
		});
	}
	/*王庆路 入口级别分类 end*/
	function meiturn()
	{
		$("#searchtrun").slideToggle();
	}

</SCRIPT>

<SCRIPT language=javascript>
	var rows = document.getElementsByTagName('tr');//获取所有表格行
	for (var i=0;i<rows.length;i++){//然后对其遍历
		rows[i].onmouseover = function(){
			this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
		}
		rows[i].onmouseout = function(){
			this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
		}
	}
</SCRIPT>

<script>
	$(function () {
		var aCollectionsMtdl = $('#mtdl .text-block').find('a');
		aCollectionsMtdl.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsMtdl.removeClass('active');
				$(this).addClass('active');
			});
		});

		var aCollectionsMtxl = $('#mtxl .text-block').find('a');
		aCollectionsMtxl.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsMtxl.removeClass('active');
				$(this).addClass('active');
			});
		});
		var aCollectionsZhmh = $('#zhmh .list-right').find('a');
		aCollectionsZhmh.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsZhmh.removeClass('active');
				$(this).addClass('active');
			});
		});
		var aCollectionsJgfl = $('#jgfl .list-right').find('a');
		aCollectionsJgfl.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsJgfl.removeClass('active');
				$(this).addClass('active');
			});
		});
		var aCollectionsDqfl = $('#dqfl .list-right').find('a');
		aCollectionsDqfl.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsDqfl.removeClass('active');
				$(this).addClass('active');
			});
		});
		var aCollectionsXwy = $('#xwy .list-right').find('a');
		aCollectionsXwy.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsXwy.removeClass('active');
				$(this).addClass('active');
			});
		});
		var aCollectionsLj = $('#lj .list-right').find('a');
		aCollectionsLj.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsLj.removeClass('active');
				$(this).addClass('active');
			});
		});
		/*王庆路 入口级别*/
		var aCollectionsRk = $('#rk .list-right').find('a');
		aCollectionsRk.each(function(index, element) {
			$(element).click(function (e) {
				aCollectionsRk.removeClass('active');
				$(this).addClass('active');
			});
		});
		/*王庆路 入口级别 end*/
	})
</script>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>

<!--软文价格自己的样式-->
<style>
	.background {
		Z-INDEX: 2000;
		POSITION: absolute;
		FILTER: alpha(opacity=40);
		WIDTH: 100%;
		DISPLAY: block;
		HEIGHT: 100%;
		TOP: 0px;
		LEFT: 0px;
		opacity: 0.4
	}

	.progressBar {
		BORDER-BOTTOM: #86a5ad 2px solid;
		BORDER-LEFT: #86a5ad 2px solid;
		BACKGROUND: url(progressBar_m.gif) white no-repeat 10px 10px;
		BORDER-TOP: #86a5ad 2px solid;
		BORDER-RIGHT: #86a5ad 2px solid
	}

	.progressBar {
		Z-INDEX: 2001;
		POSITION: absolute;
		TEXT-ALIGN: left;
		PADDING-BOTTOM: 10px;
		LINE-HEIGHT: 27px;
		MARGIN-TOP: -14px;
		PADDING-LEFT: 50px;
		WIDTH: 148px;
		PADDING-RIGHT: 10px;
		DISPLAY: block;
		HEIGHT: 28px;
		MARGIN-LEFT: -74px;
		TOP: 50%;
		FONT-WEIGHT: bold;
		PADDING-TOP: 10px;
		LEFT: 50%
	}
</style>
</body>
</html>
