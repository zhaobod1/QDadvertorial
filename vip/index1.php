<?php
/**
 * Created by iMac
 * 会员 价格查询系统 页面。
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/16
 */

include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];
//echo "<script>alert('".$VipUser."');</script>";
$sql = "select * from user where VipUser='" . $VipUser . "'";
$result = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($result);
if ($rs != NULL) {
	$yue = $rs["yue"];
}
?>
<HTML>
<HEAD>
	<TITLE>软文价格中心 - 软文直通车</TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
	<link href="../images/reset.css" rel="stylesheet" type="text/css"/>
	<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css"/>

	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</HEAD>
<BODY>
<link rel="stylesheet" href="../huo15template/css/vip_index1.css">
<link rel="stylesheet" href="../huo15template/css/style.css">
<DIV id=main_frameid class="container-fulid">
	<DIV class="row nom" id="main">
		<div class="head">
			<strong>价格查询系统</strong> / <small>Price Search</small>
		</div>
		<DIV class="body">

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
			<DIV id="flselect">

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
						<li class="clearfix" id="xwy">
							<div class="list-left">平台模式：</div>
							<div class="list-right">
								<div class="beginning">
									<a onclick=mt_search3() href="javascript:;" class="active">不限</a>
								</div>
								<div class="text-block">
									<p>
										<?php
										$sqls = "select * from lurl_class order by paixu asc";
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
						<li class="clearfix" id="lj">
							<!--王庆路 联系方式分类-->
							<div class="list-left">链接方式：</div>
							<div class="list-right">
								<div class="beginning">
									<a href="javascript:;" onclick=mt_search3() class="active">全部</a>

								</div>
								<div class="text-block">
									<p>
									<p>
										<?php
										$sqls = "select * from media_info where sh=1 and nav_id=46 and  order by id asc";
										$results = mysql_db_query($dbname, $sqls);
										while ($rss = mysql_fetch_array($results)) {
											?>
											<a onclick="mt_search7('<?php echo $rss["BigClass"]; ?>')"  href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
											<?php
										} ?>
									</p>



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



				<form name="form2" id='searchtrun' style="margin-bottom:20px;">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2">
						<tr>
							<td width="6%" height="28" bgcolor="#FFFFFF"
							    style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;">
								<div align="center">媒体查找</div>
							</td>
							<td width="94%" align="center" valign="middle" bgcolor="#FFFFFF">
								<table border="0" cellpadding="5" cellspacing="2">
									<tr>
										<td>
											<div align="center">媒体名称</div>
										</td>
										<td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13"
										           onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
										<td><select name="class_id" size="1" id="class_id">
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
											</select></td>
										<td><select name="diqu" size="1" id="diqu">
												<option value="">全部地区</option>
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
											</select></td>
										<td><select name="linkurl" size="1" id="linkurl">
												<option value="">选择链接情况</option>
												<option value="可超链接">可超链接</option>
												<option value="文本链接">文本链接</option>
												<option value="可带网址">可带网址</option>
												<option value="不能带连接">不能带连接</option>
												<option value="不能带网址">不能带网址</option>
											</select></td>
										<td><select name="xinwenyuan" size="1" id="xinwenyuan">
												<option value="">选择新闻源</option>
												<option value="非新闻源">非新闻源</option>
												<option value="网页收录">网页收录</option>
												<option value="百度新闻源">百度新闻源</option>
												<option value="谷歌新闻源">谷歌新闻源</option>
												<option value="搜狗新闻源">搜狗新闻源</option>
												<option value="360新闻源">360新闻源</option>
												<option value="搜搜新闻源">搜搜新闻源</option>
											</select></td>
										<td><select name="zhmh" size="1" id="zhmh">
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
											</select></td>
										<td><select name='skey' id="skey">
												<option value=''>默认排序</option>
												<option value="1">价格=>升序</option>
												<option value="2">价格=>降序</option>
											</select></td>
										<td><input type="button" name="button2" id="button2" value="查找"
										           onclick="mt_search();"
										           style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/>
										</td>
										<td></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="23" colspan="2" bgcolor="#FFFFFF">
								<div id="s_meti"></div>
							</td>
						</tr>
					</table>
				</form>
			</DIV>
		</DIV>
	</DIV>
	<DIV class="bk20 hr"></DIV>
</DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
<SCRIPT type=text/javascript>

	$(document).ready(function () {

		var ajaxbg = $("#background,#progressBar");
		ajaxbg.hide();
		$(document).ajaxStart(function () {
			ajaxbg.show();
		}).ajaxStop(function () {
			ajaxbg.hide();
		});
		mt_search();
	})


	function mt_search() {
		$.get("../user/search1.php?a=mt_search", {
			"mc": $("#meiti_name").val(),
			"cid": $("#class_id").val(),
			"skey": $("#skey").val(),
			"mh": $("#zhmh").val(),
			"diqu": $("#diqu").val(),
			"lurl": $("#linkurl").val(),
			"xwy": $("#xinwenyuan").val()
		}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function mt_search1(id) {
		$.get("../user/search1.php?a=mt_search", {"fl": id}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function mt_search2(id) {
		$.get("../user/search1.php?a=mt_search", {"jg": id}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function mt_search3(id) {
		$.get("../user/search1.php?a=mt_searchall", {"jg": "all"}, function (data) {

			$("#s_meti").html(data);
		});
	}


	function mt_search4(id) {
		$.get("../user/search1.php?a=mt_searchall", {"xw": id}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function mt_search5(id) {
		$.get("../user/search1.php?a=mt_searchall", {"lj": id}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function mt_search6(id) {
		$.get("../user/search1.php?a=mt_searchall", {"dq": id}, function (data) {

			$("#s_meti").html(data);
		});
	}
	function mt_search7(id) {
		$.get("../user/search1.php?a=mt_searchall", {"zhmh": id}, function (data) {

			$("#s_meti").html(data);
		});
	}

	function meiturn() {
		$("#searchtrun").slideToggle();
	}

</SCRIPT>

<SCRIPT language=javascript>
	var rows = document.getElementsByTagName('tr');//获取所有表格行
	for (var i = 0; i < rows.length; i++) {//然后对其遍历
		rows[i].onmouseover = function () {
			this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
		}
		rows[i].onmouseout = function () {
			this.className = this.className.replace('highlight', '');//鼠标一走的时候，把样式也去掉
		}
	}
</SCRIPT>
</BODY>
</HTML>
