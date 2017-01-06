<?php ob_start(); ?>
<?php
header("Content-Type: text/html; charset=utf-8");
 include ("../include/config.php");
?>
<?php
$VipUser=$_REQUEST["VipUser"];
$VipPass=md5($_REQUEST["VipPass"]);

$sql="select * from user where VipUser='".$VipUser."' and VipPass='".$VipPass."'";
$result=mysql_db_query($dbname,$sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$fg=$rs["flag"];
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
$data = date("Y-m-d h:i:s");
if($rs!=NULL)
{
 setcookie('ckey',"yes");
 setcookie('VipUser',$VipUser);
 setcookie('fg',$fg);
 setcookie('ips',$ip);
 setcookie('dt',$data);
 echo "<script>alert('登陆成功！');location.href='index.php';</script>";
 //$sql="update user set ip='".$ip."',data='".$data."' where VipUser='".$VipUser."'";
 //mysql_db_query($dbname,$sql);
}
else
{
 echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
}

exit();
ob_end_flush();
?>