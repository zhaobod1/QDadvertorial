<?php
/**
 * Created by iMac
 * 软文发布 会员系统
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/16
 */

include("checkuser.php");
include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];
$sql = "select * from user where VipUser='" . $VipUser . "'";
$result = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($result);
if ($rs != NULL) {
	$yue = $rs["yue"];
}
$ID = @$_REQUEST["ID"];
$action = @$_REQUEST["action"];
switch ($action) {
	case "rwadd":
		$sqlN = "select * from ruanwen_info where ID=" . $ID;
		$resultN = mysql_db_query($dbname, $sqlN);
		$rsN = mysql_fetch_array($resultN);
		$biaoti = $rsN["title"];
		$neirong = "";
		$is_url = substr($rsN["content"], 0, 5);
		$is_also_url = substr($rsN["content"], 0, 6);
		if ($is_url == "http:" || $is_also_url == "https:") {
			$neirong = "";
		} else {
			$neirong = htmlspecialchars($rsN["content"]);
		}
		break;

	case "dxadd":
		$sqlN = "select * from daixie_info where ID=" . $ID;
		$resultN = mysql_db_query($dbname, $sqlN);
		$rsN = mysql_fetch_array($resultN);
		$biaoti = $rsN["title"];
		$neirong = htmlspecialchars($rsN["encontent"]);
		break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
	<title>后台管理中心</title>
	<link href="../images/reset.css" rel="stylesheet" type="text/css"/>
	<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css"/>


	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

	<?php include("../ueditor.php") ?>
	<!--王庆路 用ueditor替换kindeditor end-->
	<style type="text/css">
		html {
			_overflow-y: scroll
		}

		.background {
			display: block;
			width: 100%;
			height: 100%;
			opacity: 0.4;
			filter: alpha(opacity=40);
			background: white;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 2000;
		}

		.progressBar {
			border: solid 2px #86A5AD;
			background: white url(progressBar_m.gif) no-repeat 10px 10px;
		}

		.progressBar {
			display: block;
			width: 208px;
			height: 48px;
			position: fixed;
			top: 50%;
			left: 50%;
			margin-left: -74px;
			margin-top: -14px;
			padding: 10px 10px 10px 50px;
			text-align: left;
			line-height: 27px;
			font-weight: bold;
			position: absolute;
			z-index: 2001;
		}

		.nextpage {
			background: #3E5F9B;
			color: #fff;
			bottom: 0;
			margin: 0px;
			left: 0px;
			position: fixed;
			line-height: 25px;
			width: 100%;
			z-index: 999;
			padding-left: 10px;
			_bottom: auto;
			_width: 100%;
			_position: absolute;
			font-size: 14;
			padding-left: 0px;
			_top: expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));
		}
	</style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<link rel="stylesheet" href="../huo15template/css/vip_index1.css">
<link rel="stylesheet" href="../huo15template/css/style.css">
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
	<script language="JavaScript" type="text/JavaScript">
		$(function () {
			$("#conurl").hide();
			$("#uploadComponent").hide();
			$("#upload").hide();
			$("#uploadLabel").hide();
			$("#file_upload").hide();
			$("#art_url_input").hide();
			$("#file_upload-button").hide();
			<!--王庆路 内容-->
			$("#judge").val(1);
			document.form1.fbmode[0].checked = true;
			<!--王庆路 内容 end-->
		});
		function docheck() {
			if (document.form1.fbmode[0].checked) {
				$("#tid").text("内    容")
				$("#conurl").hide();
				$("#uploadComponent").hide();
				$("#file_upload").hide();
				$("#art_url_input").hide();
				$("#file_upload-button").hide();
				$("#uploadLabel").hide();
				$("#nr").removeClass("on");
				<!--王庆路 内容-->
				$("#judge").val(1);
				<!--王庆路 内容 end-->
			}
			else if (document.form1.fbmode[1].checked) {
				$("#tid").text("来源网址")
				$("#conurl").show();
				$("#file_upload").hide();
				$("#uploadComponent").hide();
				$("#art_url_input").hide();
				$("#file_upload-button").hide();
				$("#uploadLabel").show();
				$("#nr").addClass("on");
				<!--王庆路 转载来源网址-->
				$("#judge").val(2);
				<!--王庆路 转载来源网址 end-->
			}
			else if (document.form1.fbmode[2].checked) {
				$("#tid").text("上传网址")
				$("#file_upload").show();
				$("#file_upload-button").show();
				$("#uploadComponent").show();
				$("#art_url_input").show();
				$("#uploadLabel").show();
				$("#conurl").hide();
				$("#nr").addClass("on");
				<!--王庆路 word文件上传-->
				$("#judge").val(3);
				<!--王庆路 word文件上传 end-->
			}
			else {
			}
		}
	</script>
	<style>
		.on {
			display: none;
		}
	</style>
	<div class="col-2  col-auto">
		<h6>软文发布
			<!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>-->
		</h6>
		<div class="content">

			<form id="form1" name="form1" method="post" action="saveruanwen.php?action=add" onsubmit="return check()"
			      style="display:">

				<table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2' style="font-size:12px">
					<!--王庆路 根据judge判断三种方式的哪一种-->
					<input name="judge" id="judge" type="hidden">
					<!--王庆路 根据judge判断三种方式的哪一种 end-->
					<tr>
						<td width="12%" height="30" bgcolor="#FFFFFF">
							<div align="center">选择方式</div>
						</td>
						<td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;">
							<p>
								<label><input type="radio" name="fbmode" value="0" checked="checked" id="fbmode0"
								              onclick="docheck()">
									在线录入稿件</label>
								<label><input type="radio" name="fbmode" value="1" id="fbmode1" onclick="docheck()">
									转载来源网址</label>
								<label><input type="radio" name="fbmode" value="2" id="fbmode2" onclick="docheck()">
									上传word稿件</label>
							</p></td>
					</tr>
					<tr>
						<td width="12%" height="30" bgcolor="#FFFFFF">
							<div align="center">标 题</div>
						</td>
						<td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;"><input name="biaoti"
						                                                                            type="text"
						                                                                            class="txt form-control"
						                                                                            id="biaoti"
						                                                                            lang='require'
						                                                                            size="100"
						                                                                            xml:lang="require"
						                                                                            value="<?php if ($ID <> "") {
							                                                                            echo $biaoti;
						                                                                            } ?>"/>
							<input type="hidden" name="dingdan" id="dingdan" value=""/>
							（标题字数尽量控制在18个汉字内！）
						</td>
					</tr>
					<tr>
						<td height="30" bgcolor="#FFFFFF">
							<div id="tid" align="center">内 容</div>
						</td>
						<td align="left" bgcolor="#FFFFFF" style="padding:10px;">
							<div id="nr">
								<!--王庆路 初始去掉visibility:hidden-->
								<textarea name="neirong"
								          style="width:100%;height:330px;"><?php if ($ID <> "") {
										echo $neirong;
									} ?></textarea>
								<!--王庆路 初始去掉visibility:hidden end-->
								<input type="submit" name="button" id="buttonsave" value=" 提 交 "
								       style="width:60px; height:25px;display:none"/>
							</div>
							<!--王庆路 name更改-->
							<input class="form-control" name="neturl" id="conurl" type="text" size="100/" style="display: inline-block;">
							<!--王庆路 name更改 end-->
							<label id="uploadLabel" class="uploadifyQueue" style="display: none;"></label>
							<!--上传组件-->
							<div id="uploadComponent">
								<input id="art_url_input" name="art_url_input" class="form-control" type="text" size="100"/>
								<input id="file_upload" name="file_upload" type="file" multiple="true">
								<script src="../huo15template/uploadify/jquery.uploadify.min.js"
								        type="text/javascript"></script>
								<link rel="stylesheet" type="text/css"
								      href="../huo15template/uploadify/uploadify/uploadify.css">
								<script type="text/javascript">
									<?php $timestamp = time();?>
									$(function () {
										$('#file_upload').uploadify({
											'buttonText': '文件上传',
											'formData': {
												'timestamp': '<?php echo $timestamp;?>',
												'_token': "{{csrf_token()}}"
											},
											'swf': "../huo15template/uploadify/uploadify.swf",
											'uploader': "upload.php",
											'onUploadSuccess': function (file, data, response) {
												//$('input[name=user_avatar]').val(data);
												$('#art_url_input').val(data);
												var strOrg = $('#art_url_input').val();
												$('#art_url_input').val(strOrg.slice(31));
												//$('#art_url_input').attr('src','/'+data);
//
											}
										});
									});
								</script>
								<style>
									.uploadify {
										display: inline-block;
									}

									.uploadify-button {
										border: none;
										border-radius: 5px;
										margin-top: 8px;
										background: #0B96D9;
										color: #fff;
										text-align: center
									}

									table.add_tab tr td span.uploadify-button-text {
										color: #FFF;
										margin: 0;
									}
								</style>
							</div>
							<!--上传组件 end-->

						</td>
					</tr>
					<tr>
						<td height="30" bgcolor="#FFFFFF">
							<div align="center">金 额</div>
						</td>
						<td align="left" bgcolor="#FFFFFF" style="padding-left:10px;"><input name="totalmoney"
						                                                                     type="hidden"
						                                                                     id="totalmoney"
						                                                                     style="border:0px;"
						                                                                     value="0"
						                                                                     readonly="readonly"/>(余额：<font
								color="#FF0000"><b><?php echo $yue; ?></b></font>元 )
							<font color="blue">第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。</font>
						</td>
					</tr>
				</table>
				<div align="center">
					<!--input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/-->
					<input type="hidden" id='yixuanhidden' name='yixuanhidden'/><input class="btn btn-primary" type="button" value="下一步 选择媒体"
					                                                                   onclick="nextpage()"
					                                                                   style="width:130px; height:30px;text-align:center;  margin-top:10px; "/>
					<!--input type="button" value="上一步 选择媒体" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/><input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/-->
				</div>
			</form>
			<br/>
			<div id="flselect" style="display:none">
				<div class="search-condition">
					<ul>

						<script>
							$(function () {

								//huo15
								//显示媒体小类。
								//初始化小类

								$.post(
									"../vip/generateClass.php",
									{
										"bigId" : 46
									},
									function (res) {
										//
										console.log("ruanwen_add.php-->res:",res);
										$("#mtxl #pdlx_load").empty();
										$("#mtxl #pdlx_load").append(res);
										var aCollectionsMtxl = $('#mtxl .text-block').find('a');
										aCollectionsMtxl.each(function (index, element) {
											$(element).click(function (e) {
												aCollectionsMtxl.removeClass('active');
												$(this).addClass('active');
											});
										});

										//初始化软文发布小类
										$(".unlimited").removeClass('active');
										$("#bigId_46").siblings().removeClass('active');
										$("#bigId_46").addClass('active');
										//抓取小类不限制的全部媒体资源
										mt_search3();
									},
									'json'

								);


								var aCollectionsMtdl = $('#mtdl .text-block').find('a');
								aCollectionsMtdl.each(function (index, element) {
									$(element).click(function (e) {
										//测试是否是开启了
										var id = $(element).attr('id');
										id = id.substring(6);
										if (id != 46 && id != 47) {

											alert("暂未上线，敬请期待！");
										} else {
											$.post(
												"../vip/generateClass.php",
												{
													"bigId" : id
												},
												function (res) {
													//
													console.log("ruanwen_add.php-->res:",res);
													$("#mtxl #pdlx_load").empty();
													$("#mtxl #pdlx_load").append(res);
													var aCollectionsMtxl = $('#mtxl .text-block').find('a');
													aCollectionsMtxl.each(function (index, element) {
														$(element).click(function (e) {
															aCollectionsMtxl.removeClass('active');
															$(this).addClass('active');
														});
													});
												},
												'json'

											);
											aCollectionsMtdl.removeClass('active');
											$(this).addClass('active');
										}

									});
								});


								var aCollectionsZhmh = $('#zhmh .list-right').find('a');
								aCollectionsZhmh.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsZhmh.removeClass('active');
										$(this).addClass('active');
									});
								});
								var aCollectionsJgfl = $('#jgfl .list-right').find('a');
								aCollectionsJgfl.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsJgfl.removeClass('active');
										$(this).addClass('active');
									});
								});
								var aCollectionsDqfl = $('#dqfl .list-right').find('a');
								aCollectionsDqfl.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsDqfl.removeClass('active');
										$(this).addClass('active');
									});
								});
								var aCollectionsXwy = $('#xwy .list-right').find('a');
								aCollectionsXwy.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsXwy.removeClass('active');
										$(this).addClass('active');
									});
								});
								var aCollectionsLj = $('#lj .list-right').find('a');
								aCollectionsLj.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsLj.removeClass('active');
										$(this).addClass('active');
									});
								});
								/*王庆路 入口级别*/
								var aCollectionsRk = $('#rk .list-right').find('a');
								aCollectionsRk.each(function (index, element) {
									$(element).click(function (e) {
										aCollectionsRk.removeClass('active');
										$(this).addClass('active');
									});
								});
								/*王庆路 入口级别 end*/



							});

						</script>
						<li class="clearfix" id="mtdl">
							<div class="text-block">
								<div class="list-left">媒体大类：</div>
								<div class="list-right">
									<div class="beginning">
										<a onclick="mt_search3()" href="javascript:;" class="unlimited active"><span
												style="color: #DDDDDD;float: none;margin: 0;">不限</span></a>
									</div>
									<div class="text-block">
										<p id="pdlx_load">
											<?php
											$sqls = "select * from nav_class  order by paixu ASC";
											$results = mysql_db_query($dbname, $sqls);
											while ($rss = mysql_fetch_array($results)) {
												?>

												<a id="bigId_<?php echo $rss['ID']; ?>" href="javascript:;"
												   ><?php echo $rss['BigClass']; ?></a>
												<?php
											} ?>

										</p>
									</div>

								</div>
							</div>
						</li>
						<li class="clearfix" id="mtxl">
							<div class="text-block">
								<div class="list-left">媒体小类：</div>
								<div class="list-right">
									<div class="beginning">
										<a onclick="mt_search3()" href="javascript:;" class="active">不限</a>
									</div>
									<div class="text-block">
										<p id="pdlx_load">


										</p>
									</div>

								</div>
							</div>
						</li>
						<li class="clearfix" id="zhmh">
							<div class="text-block">
								<div class="list-left">综合门户：</div>
								<div class="list-right">
									<div class="beginning">
										<a onclick="mt_search3()" href="javascript:;" class="active">不限</a>
									</div>
									<div class="text-block">
										<p id="pdlx_load">
											<?php
											$sqls = "select * from menhu_class order by paixu desc";
											$results = mysql_db_query($dbname, $sqls);
											while ($rss = mysql_fetch_array($results)) {
												?>
												<a onclick="mt_search7('<?php echo $rss["BigClass"]; ?>')"
												   href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
												<?php
											} ?>

										</p>
									</div>

								</div>
							</div>
						</li>
						<li class="clearfix" id="jgfl">
							<div class="list-left">优惠类别：</div>
							<div class="list-right">
								<div class="beginning">
									<a onclick=mt_search3() href="javascript:;" class="active">不限</a>
								</div>
								<div class="text-block">
									<p>

										<?php
										$sqls = "select * from media_small order by paixu desc";
										$results = mysql_db_query($dbname, $sqls);
										while ($rss = mysql_fetch_array($results)) {
											?>
											<a onclick="mt_search7('<?php echo $rss["BigClass"]; ?>')"
											   href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
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

										<a onclick="mt_search2(0)" href="javascript:;">0-40元</a>
										<a onclick="mt_search2(1)" href="javascript:;">40-70元</a>
										<a onclick="mt_search2(2)" href="javascript:;">70-120元</a>
										<a onclick="mt_search2(3)" href="javascript:;">120元以上</a>

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

										<?php
										$sqls = "select * from source_class order by paixu desc";
										$results = mysql_db_query($dbname, $sqls);
										while ($rss = mysql_fetch_array($results)) {
											?>
											<a onclick="mt_search7('<?php echo $rss["BigClass"]; ?>')"
											   href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
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
										<?php
										$sqls = "select * from lurl_class   order by id asc";
										$results = mysql_db_query($dbname, $sqls);
										while ($rss = mysql_fetch_array($results)) {
											?>
											<a onclick="mt_search5('<?php echo $rss["BigClass"]; ?>')"
											   href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
											<?php
										} ?>
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
										<?php
										$sqls = "select * from entrance_class   order by id asc";
										$results = mysql_db_query($dbname, $sqls);
										while ($rss = mysql_fetch_array($results)) {
											?>
											<a onclick="mt_search8('<?php echo $rss["BigClass"]; ?>')"
											   href="javascript:;"><?php echo $rss["BigClass"]; ?></a>
											<?php
										} ?>

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
												<?php
												$sqld = "select * from lurl_class";
												$resultd = mysql_db_query($dbname, $sqld);
												while ($rsd = mysql_fetch_array($resultd)) {
													?>
													<option
														value="<?php echo $rsd["BigClass"]; ?>"><?php echo $rsd["BigClass"]; ?></option>
													<?php
												}
												?>
											</select></td>
										<td><select name="xinwenyuan" size="1" id="xinwenyuan">
												<option value="">选择新闻源</option>
												<?php
												$sqld = "select * from source_class";
												$resultd = mysql_db_query($dbname, $sqld);
												while ($rsd = mysql_fetch_array($resultd)) {
													?>
													<option
														value="<?php echo $rsd["BigClass"]; ?>"><?php echo $rsd["BigClass"]; ?></option>
													<?php
												}
												?>
											</select></td>
										<td><select name="zhmh" size="1" id="zhmh">
												<option value="">选择门户</option>
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
				<div id='yixuan' class="nextpage">
					<div class="fl">
						&nbsp;已选媒体: <span id="yixuantr"></span>&nbsp;&nbsp;


					</div>


					<div class="fr">
						<div>
							总额：<b><span id='totalmoney2'>0</span></b>元
							（余额：<b><span id="yue"><?php echo $yue; ?></span></b>元）

						</div>
						<div>
							<input type="button" class="btn btn-info" value="上一步 编辑内容" onclick="perpage()"
							       style="width:130px;height:30px; text-align:center;margin-top:3px;"/-->
							<input type="button" class="btn btn-success" value=" 提 交 " onclick="$('#buttonsave').click()"
							       style="width:80px;height:30px; text-align:center;margin-top:3px;"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
			#yixuan {
				padding:5px;
				padding-bottom: 3px;
			}
			.fl {
				float: left;
			}
			.fr {
				float: right;
			}
			.attention .tipbox {
				background: #e5f3ff;
				border: 1px solid #c0dffa;
				border-radius: 6px;
				padding: 15px;
				line-height: 26px;
				font-size: 13px;
				margin: 20px 60px;
				margin-bottom: 0;
			}

			.tipbox .glyph {
				float: left;
				margin-right: 20px;
				color: #1F7ED0;
			}

			.glyph .fs1 {
				font-size: 2em;
			}

			[data-icon]:before {
				font-family: 'ElegantIcons';
				content: attr(data-icon);
				speak: none;
				font-weight: normal;
				font-variant: normal;
				text-transform: none;
				line-height: 1;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}

			.clearfix:after {
				content: "";
				display: block;
				clear: both;
			}
		</style>
		<div class="clearfix"></div>
		<div class="attention">
			<div class="tipbox clearfix">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon=""></div>
				</div>
				<h4 style="font-size:15px; margin-bottom:10px;"><strong>注 意 事 项</strong></h4>
				<p>1、文章内容必须属于合法内容，如有负面、涉政、敏感等一律不予发布并停止账号使用。</p>
				<p>2、文章提交发布后不可修改、取消或删除，请在提交之前确认好文章内容。</p>
				<p>3、一篇文章的发布时间为1-36小时以内，平均大约花费6小时。</p>
				<p>4、审稿时间为：周一至周五 09:00-18:00，下午16点后提交的文章在隔天发布。</p>
				<p>5、所选媒体可能会因为审稿不达标，导致个别所选媒体不能发布，届时会建议您更换媒体或退款。</p>
				<p>6、不能带网址的一律不能带电话、QQ、微信等信息，百度新闻源根据文章质量不保证100%收录。</p>
				<p>7、文章标题22字以内，内容500~2500字内，图片0~3张内，图片宽度500像素内，媒体可能会对文章进行适当的调整。</p>
				<p>8、文章中包含的网址、电话、图片过大、图片过多等，媒体会根据内容规范进行调整或者删减，属于正常情况。</p>
			</div>
		</div>
		<div class="bk20 hr"></div>
	</div>


	<div class="bk20 hr"></div>
</div>
<div id="background" class="background" style="display: none; "></div>
<div id="progressBar" class="progressBar" style="display: none; ">数据加载中，请稍等...</div>

<script type="text/javascript">
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

	function setprice(val) {
		$("#jiage").val(val * 15);
	}

	function mt_search() {
		$.get("search.php?a=mt_search", {
				"mc": $("#meiti_name").val(),
				"cid": $("#class_id").val(),
				"skey": $("#skey").val(),
				"mh": $("#zhmh").val(),
				"diqu": $("#diqu").val(),
				"lurl": $("#linkurl").val(),
				"xwy": $("#xinwenyuan").val()
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search1(id) {
		$.get("search.php?a=mt_search", {
				"fl": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search2(id) {
		$.get("search.php?a=mt_search", {
				"jg": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search3(id) {
		$.get("search.php?a=mt_searchall", {
				"jg": "all"
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search4(id) {
		$.get("search.php?a=mt_searchall", {
				"xw": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search5(id) {
		$.get("search.php?a=mt_searchall", {
				"lj": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search6(id) {
		$.get("search.php?a=mt_searchall", {
				"dq": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}

	function mt_search7(id) {
		$.get("search.php?a=mt_searchall", {
				"zhmh": id
			}
			, function (data) {
				$("#s_meti").html(data);
			});
	}
	function mt_search8(id) {
		$.get("search.php?a=mt_searchall", {"tejia": id}, function (data) {
			$("#s_meti").html(data);
		});
	}

	function meiturn() {
		$("#searchtrun").slideToggle();
	}

	function sel(id, tr, jg, yue) {
		var ye = yue;
		var s7 = jg;
		var s2 = $("#xz_mc_" + id).val();
		//alert(yue);
		//alert(s7);

		//如何取消选择，运行yixuansc，减掉选择金额
		if ($("#xz_" + id).attr("checked") == false) {
			yixuancl(id, s2, s7);
			return false;
		}

		if (Number(ye) >= Number(($("#totalmoney").val() * 1 + s7 * 1))) {
			var yx = $("#yixuanhidden").val();
			$("#yixuan").show();
			if (yx.indexOf(tr) == -1) {
				$("#yixuanhidden").val(id + ":" + s2 + "," + yx);
				$("#totalmoney").val($("#totalmoney").val() * 1 + s7 * 1)
				$("#totalmoney2").html($("#totalmoney2").html() * 1 + s7 * 1)
				$("#yixuantr").append("<span id='yixuantr2_" + id + "'>&nbsp;" + s2 + s7 + "元<a href='javascript:;'onclick=\"yixuancl('" + id + "','" + s2 + "'," + s7 + ")\" style='color:#FF0'>[X]</a></span>");
			}
		}
		else {
			$("#biaoti")[0].focus();
			alert('余额不足，请先充值');
			$("#xz_" + id).attr("checked", false);
			return false;
		}
	}

	function yixuancl(tr, mc, je) {
		var yx = $("#yixuanhidden").val();
		//yx=yx.replace("$"+tr+"$,","");
		//yx=yx.replace(tr+",","");

		yx = yx.replace(tr + ":" + mc + ",", "");
		$("#yixuanhidden").val(yx);
		$("#xz_" + tr).attr("checked", false);
		$("#yixuantr2_" + tr).remove();
		$("#totalmoney").val($("#totalmoney").val() * 1 - je * 1)
		$("#totalmoney2").html($("#totalmoney2").html() * 1 - je * 1)
	}

	function yixuan(s1, s2, s3, s4, s5, s6, tr, id) {
		var ye = 0.00;
		var s7 = s3;

		if ($("#xz_" + id).attr("checked") == false) {
			yixuansc(id, s7);
			return false;
		}
		if (ye >= ($("#totalmoney").val() * 1 + s7 * 1)) {
			var yx = $("#yixuanhidden").val();
			$("#yixuan").show();
			if (yx.indexOf(tr) == -1) {
				$("#yixuanhidden").val(tr + "," + yx);
				$("#totalmoney").val($("#totalmoney").val() * 1 + s7 * 1)
				$("#totalmoney2").html($("#totalmoney2").html() * 1 + s7 * 1)
				$("#yixuantr").append("<span id='yixuantr2_" + id + "'>" + s2 + s7 + "元<a href='javascript:;' onclick=\"yixuansc('" + id + "'," + s7 + ")\" style='color:#FF0'>[X]</a></span>&nbsp;&nbsp;");
			}
		}
		else {
			$("#biaoti")[0].focus();
			alert('余额不足，请先充值');
			$("#xz_" + id).attr("checked", false);
			return false;
		}
	}

	function yixuansc(tr, je) {
		var yx = $("#yixuanhidden").val();
		//yx=yx.replace("$"+tr+"$,","");
		yx = yx.replace(tr + ",", "");
		$("#yixuanhidden").val(yx);
		$("#xz_" + tr).attr("checked", false);
		$("#yixuantr2_" + tr).remove();
		$("#totalmoney").val($("#totalmoney").val() * 1 - je * 1)
		$("#totalmoney2").html($("#totalmoney2").html() * 1 - je * 1)
	}

	function check() {
		var flg = true;
		var flg1 = true;
		$("input[lang='require']").each(function () {
			$(this).css("border-color", "#ffffff");
			if ($(this).val() == "") {
				flg = false;
				$(this).css("border-color", "#FF0000");
			}
		})
		$("select[lang='require']").each(function () {
			$(this).css("background-color", "#ffffff");
			if ($(this).val() == "0") {
				flg1 = false;
				$(this).css("background-color", "#FF0000");
			}
		})
		if (flg == false || flg1 == false) {
			alert('红色提示为关键信息,请填写完整,不能空!');
			return false;
		}
		var reg = new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (!reg.test(document.form1.biaoti.value)) {
			alert("不能输入特殊字符！");
			document.form1.biaoti.focus();
			return false;
		}
		var s7 = $("#yixuanhidden").val();
		if (s7.replace("$", "").replace(",", "").replace(" ", "") == "") {
			alert('未选择任何频道');
			return false;
		}
		return true;
	}

	/*
	 function perpage(){
	 $("#flselect").show();
	 $("#form1").hide();
	 }

	 function nextpage(){
	 $("#flselect").hide();
	 $("#form1").show();
	 }
	 */

	function nextpage() {
		if ($("#biaoti").val() != "") {
			$("#flselect").show();
			$("#form1").hide();
		}
		else {
			alert('请先填写标题与内容!');
		}
	}

	function perpage() {
		$("#flselect").hide();
		$("#form1").show();
	}

	function clearall() {
		var checkboxs = $(":checkbox");
		for (var i = 0; i < checkboxs.length; i++) {
			if (checkboxs[i].name == "xz") {
				if (checkboxs[i].checked) {
					checkboxs[i].click();
					checkboxs[i].checked = false;
				}
			}
		}
		$("#yixuantr").html("");
	}

</script>

<script language="javascript">
	var rows = document.getElementsByTagName('tr');//获取所有表格行
	for (var i = 0; i < rows.length; i++) {//然后对其遍历
		rows[i].onmouseover = function () {
			this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
		}
		rows[i].onmouseout = function () {
			this.className = this.className.replace('highlight', '');//鼠标一走的时候，把样式也去掉
		}
	}

</script>
</body>
</html>