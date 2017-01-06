<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
setcookie('ckey', "");
setcookie('AdminUser', "");
setcookie('fg', "");
setcookie('ips', "");
setcookie('dt', "");
session_destroy();
echo "<script>location.href='login.php';</script>";
?>