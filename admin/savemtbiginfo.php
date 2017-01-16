<?php
/**
 * Created by iMac
 * 添加媒体 保持页面
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/16
 */

header("Content-Type: text/html; charset=utf-8");
include("../include/config.php");
include_once "../include/function.php";
include("checkuser.php");
?>

<?php
if ($_COOKIE["fg"] > 2) {
	echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
} else {
	$action = @$_REQUEST["action"];
	$titleID = trim(@$_REQUEST["titleID"]);
	$nav_id = @$_REQUEST["nav_id"];
	$class_id = @$_REQUEST["sc_id"];
	$small_id = @$_REQUEST["small_id"];
	$medianame = @$_REQUEST["medianame"];
	$diqu = @$_REQUEST["diqu"];
	$weburl = @$_REQUEST["weburl"];
	$anliurl = @$_REQUEST["anliurl"];
	$linkurl = @$_REQUEST["linkurl"];
	$xinwenyuan = @$_REQUEST["xinwenyuan"];
	$zhmh = @$_REQUEST["zhmh"]; //综合门户
	$fans = @$_REQUEST["fans"]; //粉丝数量
	if ($fans == "") {
		$fans = 0;
	}
	$price = @$_REQUEST["price"];//成本价格
	$dlprice1 = @$_REQUEST["dlprice1"];
	$dlprice2 = @$_REQUEST["dlprice2"];
	$dlprice3 = @$_REQUEST["dlprice3"];
	$scprice = @$_REQUEST["scprice"];//零售价格
	$jjprice = @$_REQUEST["jjprice"];
	$content = @$_REQUEST["content"];
	$neirong = @$_REQUEST["neirong"];
	$rkjibie = @$_REQUEST["rkjibie"];
	$tj = @$_REQUEST["tj"]; //推荐

	//echo "<script>alert('".$nav_id."');</script>";

	$data = date("Y-m-d");

	$ID = @$_REQUEST["ID"];

	switch ($action) {
		case "add":
			//调试变量
			$aDefinedVars = get_defined_vars();
			$aKeys = array_keys($aDefinedVars);
			//dd($_REQUEST);
			$VipUser = $_COOKIE["AdminUser"];    //获取媒体添加者：当前用户（即媒介编辑）
			$sh = 1;                            //0为未审核通过，需要超管审核

			$sql = "insert into " . trim($titleID) . "_info (class_id,small_id,medianame,nav_id,sh,diqu,weburl,anliurl,linkurl,xinwenyuan,zhmh,fans,price,dlprice1,dlprice2,dlprice3,scprice,content,neirong,tj,data,rkjibie) values (" . $class_id . "," . $small_id . ",'" . $medianame . "'," . $nav_id . "," . $sh . ",'" . $diqu . "','" . $weburl . "','" . $anliurl . "','" . $linkurl . "','" . $xinwenyuan . "','" . $zhmh . "'," . $fans . "," . $price . "," . $dlprice1 . ",". $dlprice2 . ",". $dlprice3 . "," . $scprice . ",'" . $content . "','" . $neirong . "','" . $tj . "','" . $data . "','".$rkjibie."')";
			$res = mysql_db_query($dbname, $sql);
			if ($res) {
				echo "<script>alert('添加媒体资源成功！');location.href='addmtbigclass.php?titleID=" . $titleID . "';</script>";

			} else {
				echo "<script>alert('添加媒体资源失败！请认真填写媒体字段，错误指导：".mysql_error()."');history.go(-1);</script>";

			}
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
			echo "<script>alert('添加媒体资源成功！');location.href='addmtbigclass.php?titleID=" . $titleID . "';</script>";
			break;

		case "edit":

			$sql = "update " . $titleID . "_info set nav_id=" . $nav_id . ",class_id=" . $class_id . ",small_id=" . $small_id . ",medianame='" . $medianame . "',diqu='" . $diqu . "',weburl='" . $weburl . "',anliurl='" . $anliurl . "',linkurl='" . $linkurl . "',xinwenyuan='" . $xinwenyuan . "',zhmh='" . $zhmh . "',fans=" . $fans . ",price=" . $price . ",dlprice1=" . $dlprice1. ",dlprice2=" . $dlprice2. ",dlprice3=" . $dlprice3 . ",scprice=" . $scprice . ",content='" . $content . "',neirong='" . $neirong . "',tj='" . $tj . "',data='" . $data . "', rkjibie='".$rkjibie."' where ID=" . $ID . "";
			mysql_db_query($dbname, $sql);
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
			echo "<script>alert('修改媒体资源成功！');location.href='managemtbiginfo.php?titleID=" . $titleID . "';</script>";
			break;

		case "shmt":    //审核媒介编辑录入的媒体资源

			$sh = @$_REQUEST["sh"];

			$sql = "update " . $titleID . "_info set nav_id=" . $nav_id . ",class_id=" . $class_id . ",small_id=" . $small_id . ",medianame='" . $medianame . "',diqu='" . $diqu . "',weburl='" . $weburl . "',anliurl='" . $anliurl . "',linkurl='" . $linkurl . "',xinwenyuan='" . $xinwenyuan . "',zhmh='" . $zhmh . "',fans=" . $fans . ",price=" . $price . ",dlprice=" . $dlprice . ",scprice=" . $scprice . ",content='" . $content . "',neirong='" . $neirong . "',tj='" . $tj . "',sh=" . $sh . " where ID=" . $ID . "";
			mysql_db_query($dbname, $sql);
			echo "<script>alert('审核媒体资源成功！');location.href='managemtbiginfo1.php?titleID=" . $titleID . "';</script>";
			break;

		case "price":    //改价

			if ($jjprice == 1) {
				$sql = "update " . $titleID . "_info set price=price+" . $price . ",dlprice=dlprice+" . $dlprice . ",scprice=scprice+" . $scprice . "";
			} else {
				$sql = "update " . $titleID . "_info set price=price-" . $price . ",dlprice=dlprice-" . $dlprice . ",scprice=scprice-" . $scprice . "";
			}
			mysql_db_query($dbname, $sql);
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
			echo "<script>alert('批量修改媒体价格成功！');location.href='managemtbiginfo.php?titleID=" . $titleID . "';</script>";
			break;

		case "del":
			foreach (@$_REQUEST["ID"] as $it) {
				$sql2 = "delete from " . $titleID . "_info where ID=" . $it . "";
				mysql_db_query($dbname, $sql2);
				//mysql_select_db($dbname);
				//$result2=mysql_query($sql2);
			}
			echo "<script>alert('删除媒体资源成功！');location.href='managemtbiginfo.php?titleID=" . $titleID . "';</script>";
			break;
	}
}
?>