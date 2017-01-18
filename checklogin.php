<?php
/**
 * Created by iMac
 * 登录验证页面
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/16
 */

session_start();
ob_start();

?>
<?php
header("Content-Type: text/html; charset=utf-8");
include("include/config.php");
?>
<?php
function inject_check($Sql_Str)
{//自动过滤Sql的注入语句。
	$check = preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $Sql_Str);
	if ($check) {
		echo '<script language="JavaScript">alert("系统警告:请不要尝试在参数中包含非法字符尝试注入");window.location.href="/";</script>';
		exit();
	} else {
		return $Sql_Str;
	}
}

$VipUser = inject_check($_REQUEST["VipUser"]);
$VipPass = md5(inject_check($_REQUEST["VipPass"]));

$sql = "select * from user where VipUser='" . $VipUser . "' and VipPass='" . $VipPass . "'";
$result = mysql_db_query($dbname, $sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
$rs = mysql_fetch_array($result);
$fg = $rs["flag"];
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
$data = date("Y-m-d h:i:s");
if ($rs != NULL) {
	setcookie('ckey', "yes");
	setcookie('VipUser', $VipUser);
	setcookie('fg', $fg);
	setcookie('ips', $ip);
	setcookie('dt', $data);

	$_SESSION['cckey'] = "yes";
	$_SESSION['VipUser'] = $VipUser;
	$_SESSION['fg'] = $fg;
	$_SESSION['ips'] = $ip;
	$_SESSION['dt'] = $data;

	if ($rs["flag"] == 2) {
		echo "<script>alert('用户登陆成功！');location.href='../user/indexs.php';</script>";
	} else {
		$goBack = isset($_REQUEST['back'])? intval($_REQUEST['back']):0;
		if ($goBack) {
			echo "<script>alert('登录成功！您现在可以查看会员价格了！');history.go(-1);</script>";
			die;
		}
		echo "<script>alert('用户登陆成功！');location.href='../user/index.php';</script>";
	}
} else {
	$sqla = "select * from admin where AdminUser='" . $VipUser . "' and AdminPass='" . $VipPass . "'";
	$resulta = mysql_db_query($dbname, $sqla);
	$rsa = mysql_fetch_array($resulta);
	$fg = $rsa["flag"];
	$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
	$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
	$data = date("Y-m-d h:i:s");
	if ($rsa != NULL) {
		setcookie('ckey', "yes");
		setcookie('AdminUser', $VipUser);
		setcookie('fg', $fg);
		setcookie('ips', $ip);
		setcookie('dt', $data);

		$_SESSION['cckey'] = "yes";
		$_SESSION['AdminUser'] = $VipUser;
		$_SESSION['fg'] = $fg;
		$_SESSION['ips'] = $ip;
		$_SESSION['dt'] = $data;
		$goBack = isset($_REQUEST['back'])? intval($_REQUEST['back']):0;
		if ($goBack) {
			echo "<script>alert('登录成功！您现在可以查看会员价格了！');history.go(-1);</script>";
			die;
		}
		echo "<script>alert('管理登陆成功！');location.href='../admin/index.php';</script>";
	} else {
		echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
		die;
		$sqlb = "select * from admin";
		$resultb = mysql_db_query($dbname, $sqlb);
		$rsb = mysql_fetch_array($resultb);
		if ($rsb != NULL) {
			echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
		} else {
			if (md5($VipUser) == "03a73f3e7c9a7b38d196cd34c072567e" and $VipPass == "0192023a7bbd73250516f069df18b500") {
				$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
				$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
				$data = date("Y-m-d h:i:s");
				setcookie('ckey', "yes");
				setcookie('AdminUser', $VipUser);
				setcookie('fg', 0);
				setcookie('ips', $ip);
				setcookie('dt', $data);
				echo "<script>alert('管理登陆成功！');location.href='../admin/indexs.php';</script>";
			} else {
				echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
			}
		}
	}
}
exit();
ob_end_flush();
?>