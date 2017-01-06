<?php
header("Content-Type: text/html; charset=utf-8");
$VipUser=$_COOKIE["VipUser"];
$AdminUser=$_COOKIE["AdminUser"];
session_start();
setcookie('ckey',"");
setcookie('fg',"");
setcookie('ips',"");
setcookie('dt',"");
if($VipUser<>""){
	setcookie('VipUser',"");
}
else{
	setcookie('AdminUser',"");
}
 echo "<script>location.href='index.php';</script>";
?>