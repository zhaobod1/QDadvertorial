<?php
if(@$_COOKIE["ckey"]=="")
{
echo "<script>alert('请先登陆!');location.href='../index.php';</script>";
}
else
{
$VipUser=$_COOKIE["VipUser"];
}
ob_end_flush();
?>