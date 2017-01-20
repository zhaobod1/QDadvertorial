<?php
/**
 * Created by iMac
 * 软文列表
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/19
 */

include("checkuser.php");
include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];

$sqlu = "select * from user where VipUser='" . $VipUser . "'";
$resultu = mysql_db_query($dbname, $sqlu);
$rsu = mysql_fetch_array($resultu);

/*-----------------接收相关数据值---------------------*/
//$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num = 30;
/*-----------------计算共有记录数--------------------*/
$sqlN = "select Count(*) from ruanwen_info where VipUser='" . $VipUser . "'";
//$sqlN="select Count(*) from ruanwen_info";
$resultN = mysql_db_query($dbname, $sqlN);
$rsN = mysql_fetch_array($resultN);
$Num = $rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage = ceil($Num / $List_Num);
/*-------------------设置当前页--------------------*/
if (empty($_REQUEST["Page"])) {
	$Page = 1;
} else {
	$Page = $_REQUEST["Page"];
	if ($Page < 1) {
		$Page = 1;
	}
	if ($Page > $CountPage) {
		$Page = $CountPage;
	}
}
$Cpage = $Page + 1;
/*--------------------------------------------------*/

$sql = "select * from ruanwen_info where VipUser='" . $VipUser . "' order by ID desc limit " . ($List_Num * ($Page - 1)) . "," . $List_Num . "";
$result = mysql_db_query($dbname, $sql);
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
	<TITLE>后台管理中心</TITLE>
	<link href="../images/reset.css" rel="stylesheet" type="text/css"/>
	<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css"/>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../huo15template/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css">
	<script src="../huo15template/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="../huo15template/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
</head>
<body>
<style>
	.alink {
		line-height: 32px;
	}

	.alink a {
		border: #999999 1px solid;
		padding-left: 6px;
		padding-right: 6px;
		padding-bottom: 2px;
		padding-top: 2px;
		margin-lef: 2px;
		margin-right: 2px;
		color: #999999
		color: #3399FF
	}

	.alink a:hover {
		background: #FFFFCC;
		border: #999999 1px solid;
		text-decoration: none;
		color: #3399FF
	}

	.ok {
		border: #999999 1px solid;
		padding-left: 6px;
		padding-right: 6px;
		padding-bottom: 2px;
		padding-top: 2px;
		margin-lef: 2px;
		margin-right: 2px;
		color: #3399FF;
		font-weight: bold;
	}

	.pager {
		background: #ffffff;
		line-height: 32px;
		padding-left: 6px;
	}

	.pager a {
		border: #999999 1px solid;
		padding-left: 6px;
		padding-right: 6px;
		padding-bottom: 2px;
		padding-top: 2px;
		margin-lef: 2px;
		margin-right: 2px;
		color: #999999
		color: #3399FF
	}

	.pager a:hover {
		background: #FFFFCC;
		border: #999999 1px solid;
		text-decoration: none;
		color: #3399FF
	}
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
	<div class="col-2  col-auto">
		<h6>软文发布列表</h6>
		<div class="content">
			<table class="table table-striped table-bordered ">
				<script>
					$(function () {

						$.fn.datetimepicker.defaults = {
							language: "zh-CN",
							format: "yyyy-mm-dd",
							autoclose: true,
							minView: 2
						};
						$('.datetimepicker').datetimepicker();

						$('#exportExcel').click(function (e) {
							e.preventDefault();
							var start = $("#start_picker").val() ? $("#start_picker").val(): getNowFormatDate();
							var end = $("#end_picker").val()? $("#end_picker").val(): getNowFormatDate();
							console.log(start,end);
							var url = "../huo15template/org/phpexcel/api/ajaxExcel.php?action=generateExcel&s="+ start + "&e=" + end;

							$.get(url,function (res) {
								$("#exportExcel").attr("disabled", "disabled");
								setTimeout(enableBtnExportExcel, 2000);
								$("#downloadExcel").attr('href', "/" + res).removeClass("hide");
							},"json");


						});


						$("#downloadExcel").click(function () {
							$(this).addClass("hide");
						});

					});




					function enableBtnExportExcel() {
						$("#exportExcel").removeAttr("disabled");
					}

					function getNowFormatDate() {
						var date = new Date();
						var seperator1 = "-";
						var year = date.getFullYear();
						var month = date.getMonth() + 1;
						var strDate = date.getDate();
						if (month >= 1 && month <= 9) {
							month = "0" + month;
						}
						if (strDate >= 0 && strDate <= 9) {
							strDate = "0" + strDate;
						}
						var currentdate = year + seperator1 + month + seperator1 + strDate;
						return currentdate;
					}
				</script>
				<tr>
					<td colspan="2">
						根据日期导出表格：
					</td>
					<td colspan="2">
						<input class="form-control datetimepicker" type="text" placeholder="起始日期：" value="" id="start_picker" data-date-format="yyyy-mm-dd">
					</td>
					<td colspan="3">
						<input class="form-control datetimepicker" type="text" placeholder="结束日期：" value="" id="end_picker" data-date-format="yyyy-mm-dd">
					</td>
					<td colspan="2">
						<a href="" id="exportExcel" class="btn btn-primary">导出表格</a>
						<a href="" target="_blank" id="downloadExcel" class="btn btn-info hide">下载表格</a>
					</td>
				</tr>
				<?php
				if (mysql_num_rows($result) == NULL) {
					echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>您还没有软文数据！</span></td></tr></table>";
				} else {
					?>
					<tr>
						<td height="30" bgcolor="#FFFFFF" align="center">订单ID</td>
						<td bgcolor="#FFFFFF" align="center">文章标题</td>
						<td bgcolor="#FFFFFF" align="center">网址</td>
						<td bgcolor="#FFFFFF" align="center">发布网站</td>
						<td bgcolor="#FFFFFF" align="center">费用(元)</td>
						<td bgcolor="#FFFFFF" align="center">发布状态</td>
						<?php if ($rsu['flag'] == 2) { ?>
							<td bgcolor="#FFFFFF" align="center">编辑处理进程</td>
						<?php } ?>
						<td bgcolor="#FFFFFF" align="center">提交时间</td>
						<td bgcolor="#FFFFFF" align="center">发布时间</td>
						<td bgcolor="#FFFFFF" align="center" width="210">管理操作</td>
					</tr>
					<?php
					$i = 1;
					while ($rs = mysql_fetch_array($result)) {
						?>
						<TR>
							<TD bgColor=#ffffff height=30>
								<DIV align=center><?php echo $rs["order_id"]; ?></DIV>
							</TD>
							<TD bgColor=#ffffff>
								<DIV align=left style="padding-left:5px"><a
										href="../rwinfo.php?ID=<?php echo $rs["ID"]; ?>"
										target="_blank"><?php echo $rs["title"]; ?></a></DIV>
							</TD>
							<TD bgColor=#ffffff>
								<DIV align=center><?php
									if ($rs['flag'] == 2) {
										?>
										<a href="<?php echo $rs["weburl"]; ?>" target="_blank"
										   style="color: rgb(255, 0, 0);">查看发布链接</a>
										<?php
									} elseif ($rs['flag'] == 3) {
										?>
										<?php echo $rs["reason"]; ?>
									<?php } ?></DIV>
							</TD>
							<TD bgColor=#ffffff>
								<DIV align=center><?php echo $rs["medianame"]; ?></DIV>
							</TD>
							<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px"
							    bgColor=#ffffff>
								<DIV align=center><?php echo $rs["price"]; ?></DIV>
							</TD>
							<TD bgColor=#ffffff>
								<DIV align=center><?php
									if ($rsu['flag'] == 2) {
										if ($rs['flag'] == 2 and $rs['yn'] == 1) {
											echo "<b style='color:#0000FF'>已确认发布</b>";
										} elseif ($rs['flag'] == 3 and $rs['yn'] == 1) {
											echo "<b style='color:#0000FF'>已确认拒稿</b>";
										} else {
											if ($rs['dyn'] == 1) {
												echo "<b style='color:#000000'>已删单</b>";
											} else {
												if ($rs['flag'] == 0) {
													echo "<b style='color:#2a8104'>未处理</b>";
												} elseif ($rs['flag'] == 1) {
													echo "<b style='color:#FF0000'>处理中</b>";
												} elseif ($rs['flag'] == 2 and $rs['yn'] != 1) {
													echo "<b style='color:#0000FF'>未确认发布</b>";
												} elseif ($rs['flag'] == 3 and $rs['yn'] != 1) {
													echo "<b style='color:#000000'>未确认拒稿</b>";
												}
											}
										}
									} else {
										if ($rs['flag'] == 2 and $rs['yn'] == 1) {
											echo "<b style='color:#0000FF'>已发布</b>";
										} elseif ($rs['flag'] == 3 and $rs['yn'] == 1) {
											echo "<b style='color:#0000FF'>已拒稿</b>";
										} else {
											if ($rs['dyn'] == 1) {
												echo "<b style='color:#000000'>已删单（已退款）</b>";
											} else {
												if ($rs['flag'] == 0) {
													echo "<b style='color:#2a8104'>未处理</b>";
												} elseif ($rs['flag'] == 1) {
													echo "<b style='color:#FF0000'>处理中</b>";
												} elseif ($rs['flag'] == 2 and $rs['yn'] != 1) {
													echo "<b style='color:#FF0000'>处理中</b>";
												} elseif ($rs['flag'] == 3 and $rs['yn'] != 1) {
													echo "<b style='color:#000000'>未确认拒稿</b>";
												}
											}
										}
									}
									?></DIV>
							</TD>
							<?php if ($rsu['flag'] == 2) { ?>
								<TD bgColor=#ffffff>
									<DIV align=center><?php
										if ($rs['VipUser'] <> "") {
											if ($rs['flag'] == 0) {
												echo "<b style='color:#2a8104'>未处理</b>";
											} elseif ($rs['flag'] == 1) {
												echo "<b style='color:#FF0000'>处理中</b>";
											} elseif ($rs['flag'] == 2) {
												echo "<b style='color:#0000FF'>已发布</b>";
											} elseif ($rs['flag'] == 3) {
												echo "<b style='color:#0000FF'>已拒稿</b>";
											} else {
												echo "<b style='color:#0000FF'>处理完毕</b>";
											}
										} else {
											echo "<b style='color:#2a8104'>官方资源</b>";
										}
										?></DIV>
								</TD>
							<?php } ?>
							<TD bgColor=#ffffff>
								<DIV align=center><?php echo $rs["data"]; ?></DIV>
							</TD>
							<TD bgColor=#ffffff>
								<DIV align=center><?php
									if ($rs['yn'] == 1) {
										echo $rs["fbtime"];
									}


									?></DIV>
							</TD>
							<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 0px"
							    bgColor=#ffffff>
								<DIV class="alink" align=center><?php
									if ($rs['flag'] == 0 and $rs['dyn'] != 1) {
										?>
										<A href="saveruanwen.php?ID=<?php echo $rs["ID"]; ?>&action=isdel"
										   onclick="if(confirm('确实要删除此条记录吗？')) return true;else return false; ">删除</A>
										<A href="../rwinfo.php?ID=<?php echo $rs["ID"]; ?>" target="_blank">预览</A> <A
											href="editruanwen.php?ID=<?php echo $rs["ID"]; ?>">编辑</A> <A
											href="ruanwen_add.php?ID=<?php echo $rs["ID"]; ?>&action=rwadd">再发布</A>
										<?php
									} elseif (($rs['flag'] == 2 or $rs['flag'] == 3) and $rs['yn'] == 1) {
										?>
										<A href="../rwinfo.php?ID=<?php echo $rs["ID"]; ?>" target="_blank">预览</A> <A
											href="ruanwen_add.php?ID=<?php echo $rs["ID"]; ?>&action=rwadd">再发布</A>
										<?php
									} elseif ($rs['flag'] == 0 and $rs['dyn'] == 1) {
										?>
										<A href="../rwinfo.php?ID=<?php echo $rs["ID"]; ?>" target="_blank">预览</A> <A
											href="ruanwen_add.php?ID=<?php echo $rs["ID"]; ?>&action=rwadd">再发布</A>
										<?php
									} else {
										?>
										<A href="../rwinfo.php?ID=<?php echo $rs["ID"]; ?>" target="_blank">预览</A> <A
											href="ruanwen_add.php?ID=<?php echo $rs["ID"]; ?>&action=rwadd">再发布</A>
										<?php
									}
									?>
								</DIV>
							</TD>
						</TR>
						<?php
						$i = $i + 1;
					}
				} ?>
			</table>
			<br/>
			<table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:12px">
				<tr>
					<td width="87%" height="35" align="center">
						<DIV class=pager><?php
							if ($Num > 0) {
								if ($Page != 1) {
									$Prv = $Page - 1;
									echo "<a href='ruanwen.php'>首页&nbsp;&nbsp;</a>";
									echo "<a href=ruanwen.php?Page=" . $Prv . ">上一页</a>&nbsp;&nbsp;";
								} else {
									echo "首页&nbsp;&nbsp;";
									echo "上一页&nbsp;&nbsp;";
								}

								if ($Page + 3 < $CountPage + 1) {
									$ep = $Page + 3;
								} else {
									$ep = $CountPage;
								}
								if ($Page - 3 > 0) {
									$sp = $Page - 3;
								} else {
									$sp = 1;
								}
								if ($Page >= $CountPage - 3) {
									$sp = $CountPage - 5;
								}
								if ($Page > 4) {
									for ($i = $sp; $i <= $ep; $i++) {
										if ($Page == $i) {
											$str .= "<span class=\"ok\">" . $i . "</span>&nbsp;&nbsp;";
										} else {
											$str .= "<a href=\"?Page=" . $i . "&skey=" . $skey . "&key=" . $key . "&nav_id=" . $nav_id . "\">" . $i . "</a>&nbsp;&nbsp;";
										}
									}
								} else {
									for ($j = 1; $j <= $ep; $j++) {
										if ($Page == $j) {
											$str .= "<span class=\"ok\">" . $j . "</span>&nbsp;&nbsp;";
										} else {
											$str .= "<a href=\"?Page=" . $j . "&skey=" . $skey . "&key=" . $key . "&nav_id=" . $nav_id . "\">" . $j . "</a>&nbsp;&nbsp;";
										}
									}
								}
								echo $str;

								if ($Page != $CountPage) {
									$NtPage = $Page + 1;
									$EdPage = $CountPage;
									echo "<a href=ruanwen.php?Page=" . $NtPage . ">下一页</a>&nbsp;&nbsp;";
									echo "<a href=ruanwen.php?Page=" . $EdPage . ">尾页</a>&nbsp;&nbsp;";
								} else {
									echo "下一页&nbsp;&nbsp;";
									echo "尾页&nbsp;&nbsp;";
								}
								echo "当前为" . $Page . "/" . $CountPage . "页 每页显示" . $List_Num . "条记录 共有记录数" . $Num . "条记录";
							} ?></DIV>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="bk20 hr"></div>
</div>
<div id='closed' class="closed">
	<div id="model" class="model"></div>
	<a href="#" onclick="$('#closed').slideUp()" style="float:right;padding:20px;">[关闭]</a></div>
<iframe name="main" width="0" height="0" id="main" frameborder="0"></iframe>
<script language="javascript">
	function letDivCenter(divName, str) {
		var top = ($(window).height() - $("#closed").height()) / 2;
		var left = ($(window).width() - $("#closed").width()) / 2;
		var scrollTop = $(document).scrollTop();
		var scrollLeft = $(document).scrollLeft();
		$(divName).html(str);
		$("#closed").css({position: 'absolute', 'top': top + scrollTop, left: left + scrollLeft}).slideDown(100);
	}

	function delID(ID, url, mes) {
		var mymes;
		mymes = confirm(mes);
		if (mymes == true) {
			window.location = url + ID;
		}
	}
</script>
</body>
</html>