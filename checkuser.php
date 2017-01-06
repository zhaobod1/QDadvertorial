<?php
//header("Content-Type: text/html; charset=utf-8");
if(@$_COOKIE["ckey"]=="")
{
echo "<script>alert('请先登陆!');location.href='index.php';</script>";
}
else
{
$AdminUser=$_COOKIE["AdminUser"];
}
ob_end_flush();
?>