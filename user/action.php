<?php
include ("../include/config.php");
include ("../include/function.php");
if($_GET["u"]<>""){
	$VipUser=$_GET["u"];
	if($VipUser=="admin"){
		echo "2";
	}
	else{
		$sqlu="select * from user where VipUser='".$VipUser."'";
		$resultu=mysql_db_query($dbname,$sqlu);
		$rsu=mysql_fetch_array($resultu);
		if($rsu!=NULL)
		{
			echo "1";
		}
		else{
			echo "0";
		}
	}
}
else{
	echo "-1";
}
?>