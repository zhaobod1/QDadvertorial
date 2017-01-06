<?php ob_start(); ?>
<?php
header("Content-Type: text/html; charset=utf-8");
 include ("../include/config.php");
?>
<?php

function inject_check($Sql_Str) {//自动过滤Sql的注入语句。
    $check=preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i',$Sql_Str);
    if ($check) {
        echo '<script language="JavaScript">alert("系统警告：\n\n请不要尝试在参数中包含非法字符尝试注入！");window.location.href="/";</script>';
        exit();
    }else{
        return $Sql_Str;
    }
}

$AdminUser=inject_check($_REQUEST["AdminUser"]);
$AdminPass=md5(inject_check($_REQUEST["AdminPass"]));

$sql="select * from admin where AdminUser='".$AdminUser."' and AdminPass='".$AdminPass."'";
$result=mysql_db_query($dbname,$sql);
//mysql_select_db($dbname);
//$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
$fg=$rs["flag"];
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
$data = date("Y-m-d H:i:s");
if($rs!=NULL)
{
 setcookie('ckey',"yes");
 setcookie('AdminUser',$AdminUser);
 setcookie('fg',$fg);
 setcookie('ips',$ip);
 setcookie('dt',$data);
 echo "<script>alert('登陆成功！');location.href='index.php';</script>";
 //$sql="update admin set ip='".$ip."',data='".$data."' where AdminUser='".$AdminUser."'";
 //mysql_db_query($dbname,$sql);
}
else
{
 echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
}

exit();
ob_end_flush();
?>