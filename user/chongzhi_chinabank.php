<?php
//设置工程相对路径
$root_path="../";
if(file_exists("$root_path/pay/payconfig.php")){	  
	require_once("$root_path/pay/payconfig.php");
}
	if($bpayok==1){
		echo "<script>location.href='../user/chongzhib.php';</script>";
	}else{
		echo "<script>location.href='../user/chongzhi_dc.php';</script>";
	}
?>
