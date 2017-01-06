<?php
	//session_start();//将随机数存入session中

    if(!isset($_SESSION)){
	session_start();
	}
    ob_start();

	unset($_SESSION['authnum']);

	srand((double)microtime()*1000000);//播下一个生成随机数字的种子，以方便下面随机数生成的使用

	while(($authnum=rand()%100000)<10000);

	//保存随机数致session以便页面与生成checkcode使用
	$_SESSION['authnum']=$authnum;
?>