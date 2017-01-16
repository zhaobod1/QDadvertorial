<?php
/**
 * 前台会员没有注册的时候 搜索价格报表
 * Created by iMac
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/6
 */

include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];
$sqlu = "select * from user where VipUser='" . $VipUser . "'";
$resultu = mysql_query($sqlu);
$rsu = mysql_fetch_array($resultu);
if ($rsu != NULL) {
	$yue = $rsu["yue"];
	$flag = $rsu["flag"];
}
$bigId = isset($_REQUEST['bigId']) ? $_REQUEST['bigId'] : 46;
?>

<?php
if ($_GET["fl"] <> "") {
	$id = $_GET["fl"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and class_id=" . $id . " order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and class_id=" . $id . " order by ID asc";
	}
} elseif ($_GET["fls"] <> "") {
	$id = $_GET["fls"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and small_id=" . $id . " order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and small_id=" . $id . " order by ID asc";
	}
} elseif ($_GET["lj"] <> "") {
	$id = $_GET["lj"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and linkurl='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and linkurl='" . $id . "' order by ID asc";
	}
} elseif ($_GET["xw"] <> "") {
	$id = $_GET["xw"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and xinwenyuan='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and xinwenyuan='" . $id . "' order by ID asc";
	}
} elseif ($_GET["jg"] <> "" and $_GET["jg"] <> "all") {
	$id = $_GET["jg"];
	if ($flag == 1) {
		switch ($_GET["jg"]) {
			case "0":
				$sql = "select * from media_info where (dlprice between 0 and 40) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "1":
				$sql = "select * from media_info where (dlprice between 41 and 70) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "2":
				$sql = "select * from media_info where (dlprice between 71 and 120) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "3":
				$sql = "select * from media_info where (dlprice >120) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			default:
				$sql = "select * from media_info where sh=1 and nav_id=$bigId order by ID asc";
		}
	} elseif ($flag == 2) {
		switch ($_GET["jg"]) {
			case "0":
				$sql = "select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' order by ID asc";
				break;
			case "1":
				$sql = "select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' order by ID asc";
				break;
			case "2":
				$sql = "select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' order by ID asc";
				break;
			case "3":
				$sql = "select * from media_info where (scprice >120) and sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' order by ID asc";
				break;
			default:
				$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' order by ID asc";
		}
	} else {
		switch ($_GET["jg"]) {
			case "0":
				$sql = "select * from media_info where (price between 0 and 40) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "1":
				$sql = "select * from media_info where (price between 41 and 70) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "2":
				$sql = "select * from media_info where (price between 71 and 120) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			case "3":
				$sql = "select * from media_info where (price >120) and sh=1 and nav_id=$bigId order by ID asc";
				break;
			default:
				$sql = "select * from media_info where sh=1 and nav_id=$bigId order by ID asc";
		}
	}
} elseif ($_GET["dq"] <> "") {
	$id = $_GET["dq"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and diqu='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and diqu='" . $id . "' order by ID asc";
	}
} elseif ($_GET["zhmh"] <> "") {
	$id = $_GET["zhmh"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and zhmh='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and zhmh='" . $id . "' order by ID asc";
	}
} elseif ($_GET["tejia"] <> "") {
	$id = $_GET["tejia"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and small_id='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and small_id='" . $id . "' order by ID asc";
	}
} elseif ($_GET["rk"] <> "") {
	$id = $_GET["tejia"];
	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' and small_id='" . $id . "' order by ID asc";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and small_id='" . $id . "' order by ID asc";
	}
} else {
	$mc = $_GET["mc"];
	$cid = $_GET["cid"];
	$skey = $_GET["skey"];
	$mh = $_GET["mh"];
	$diqu = $_GET["diqu"];
	$lurl = $_GET["lurl"];
	$xwy = $_GET["xwy"];
	switch ($skey) {
		case "1":
			if ($flag == 1) {
				$ssql = "order by dlprice asc";
			} elseif ($flag == 2) {
				$ssql = "order by scprice asc";
			} else {
				$ssql = "order by price asc";
			}
			break;
		case "2":
			if ($flag == 1) {
				$ssql = "order by dlprice desc";
			} elseif ($flag == 2) {
				$ssql = "order by scprice desc";
			} else {
				$ssql = "order by price desc";
			}
			break;
		case "3":
			$ssql = "order by fans asc";
			break;
		case "4":
			$ssql = "order by fans desc";
			break;
		default:
			$ssql = "order by ID desc";
	}

	if ($mc == "") {
		$msql = "";
	} else {
		$msql = "and medianame like '%" . $mc . "%'";
	}
	if ($cid == "") {
		$csql = "";
	} else {
		$csql = "and class_id=" . $cid . "";
	}
	if ($mh == "") {
		$hsql = "";
	} else {
		$hsql = "and zhmh='" . $mh . "'";
	}
	if ($diqu == "") {
		$dsql = "";
	} else {
		$dsql = "and diqu='" . $diqu . "'";
	}
	if ($lurl == "") {
		$lsql = "";
	} else {
		$lsql = "and linkurl='" . $lurl . "'";
	}
	if ($xwy == "") {
		$xsql = "";
	} else {
		$xsql = "and xinwenyuan='" . $xwy . "'";
	}

	if ($flag == 2) {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId and VipUser='" . $VipUser . "' " . $csql . " " . $hsql . " " . $dsql . " " . $lsql . " " . $xsql . " " . $msql . " " . $ssql . "";
	} else {
		$sql = "select * from media_info where sh=1 and nav_id=$bigId " . $csql . " " . $hsql . " " . $dsql . " " . $lsql . " " . $xsql . " " . $msql . " " . $ssql . "";
	}
}
$result = mysql_db_query($dbname, $sql);
//echo "<script>alert('".$id."');</script>";
?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" id="searchtr" style="font-size:13px">
	<tr>
		<th height="30" width="100" bgcolor="#CDD3EB">
			<div align="center"><strong>媒体分类</strong></div>
		</th>
		<th width="130" bgcolor="#CDD3EB">
			<div align="center"><strong>媒体名称</strong></div>
		</th>
		<th width="80" bgcolor="#CDD3EB">
			<div align="center"><strong>推荐指数</strong></div>
		</th>
		<?php if ($flag == 1) { ?>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>成本价格</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>高级代理</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>中级代理</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>普通会员</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>零售价</strong></div>
			</th>

		<?php } elseif ($flag > 2 && $flag <= 5) { ?>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>高级代理</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>中级代理</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>普通会员</strong></div>
			</th>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>零售价</strong></div>
			</th>
		<?php } else { ?>
			<th width="100" bgcolor="#CDD3EB">
				<div align="center"><strong>零售价</strong></div>
			</th>
		<?php } ?>
		<th width="100" bgcolor="#CDD3EB">
			<div align="center"><strong>百度权重</strong></div>
		</th>
		<th width="120" bgcolor="#CDD3EB">
			<div align="center"><strong>带网址情况</strong></div>
		</th>

		<th width="100" bgcolor="#CDD3EB">
			<div align="center"><strong>新闻源</strong></div>
		</th>

		<th width="250" bgcolor="#CDD3EB">
			<div align="center"><strong>备注</strong></div>
		</th>

	</tr>
	<?php
	if (mysql_num_rows($result) == NULL) {
		echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>没有相关媒体数据！</span></td></tr></table>";
	} else {
		?>
		<?php
		$i = 1;
		while ($rs = mysql_fetch_array($result)) {
			$class_id = $rs["class_id"];
			$sqlb = "select * from media_class where ID=" . $class_id . "";
			$resultb = mysql_db_query($dbname, $sqlb);
			$rsb = mysql_fetch_array($resultb);
			$weburl = $rs["weburl"];
			$bool = preg_match('/^((http:\/\/)|(https:\/\/))(.*)/', $weburl);
			if (!$bool) {
				$rs["weburl"] = "http://" . $rs["weburl"];
			}
			?>
			<tr id='yixuna<?php echo $rs["ID"]; ?>'>

				<td height="25" width="100" align="center"><?php echo $rsb["SmallClass"]; ?></td>

				<td width="130">
					<div align="center"><a href='<?php echo $rs["weburl"]; ?>'
					                       target="_blank"><?php echo $rs["medianame"]; ?></a><span style="float:right"><a
								href='<?php echo $rs["anliurl"]; ?>' target="_blank"><img alt=""
					                                                                      src="<?php if ($rs["VipUser"] <> "") {
						                                                                      echo '../images/qiuqiu1.png';
					                                                                      } else {
						                                                                      echo '../images/qiuqiu2.png';
					                                                                      } ?>" name="qiu" height="12"/></a></span>
					</div>
				</td>

				<td width="80">
					<div align="center"><img src="<?php echo $rs["tj"]; ?>" border="0" width="64" height="12"
					                         alt="推荐指数"></div>
				</td>

				<?php if ($flag == 1) { ?>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["scprice"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice3"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice2"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice1"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"]; ?></b></div>
					</td>

				<?php } elseif ($flag == 2) { ?>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"]; ?></b></div>
					</td>
				<?php } elseif ($flag > 2 && $flag <= 5) { ?>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice3"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice2"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice1"]; ?></b></div>
					</td>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"]; ?></b></div>
					</td>
				<?php } else { ?>
					<td width="100">
						<div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"]; ?></b></div>
					</td>
				<?php } ?>
				<td width="100">
					<div align="center" style="color: rgb(255, 0, 0);">
						<img src="http://cdn.chinaz.com/tools/images/public/baiduapp/<?php echo $rs["baiduWeight"]; ?>.gif" alt="">

					</div>
				</td>
				<td width="100">
					<div align="center"><?php echo $rs["linkurl"]; ?></div>
				</td>

				<td width="100">
					<div align="center"><?php echo $rs["xinwenyuan"]; ?></div>
				</td>

				<td width="250">
					<div align="center"><?php echo $rs["content"]; ?><!--<a  href='../zyinfo.php?ID=<?php /*echo $rs["ID"]; */?>'>---详情</a>--></div>
				</td>

			</tr>
			<?php
			$i = $i + 1;
		}
	}
	?>
</table>
