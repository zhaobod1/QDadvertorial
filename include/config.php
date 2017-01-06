<?php
include ("db.php");
mysql_connect($dbhost,$dbuser,$dbpasswd);//建立连接
mysql_query("set names utf8");

$sql3="select * from page_seo where ID=1";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$A_Title=$rs3["Title"];
$A_enTitle=$rs3["enTitle"];
$A_KeyWords=$rs3["KeyWords"];
$A_enKeyWords=$rs3["enKeyWords"];
$A_Descr=$rs3["Descr"];
$A_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=2";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$B_Title=$rs3["Title"];
$B_enTitle=$rs3["enTitle"];
$B_KeyWords=$rs3["KeyWords"];
$B_enKeyWords=$rs3["enKeyWords"];
$B_Descr=$rs3["Descr"];
$B_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=3";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$C_Title=$rs3["Title"];
$C_enTitle=$rs3["enTitle"];
$C_KeyWords=$rs3["KeyWords"];
$C_enKeyWords=$rs3["enKeyWords"];
$C_Descr=$rs3["Descr"];
$C_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=4";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$D_Title=$rs3["Title"];
$D_enTitle=$rs3["enTitle"];
$D_KeyWords=$rs3["KeyWords"];
$D_enKeyWords=$rs3["enKeyWords"];
$D_Descr=$rs3["Descr"];
$D_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=5";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$E_Title=$rs3["Title"];
$E_enTitle=$rs3["enTitle"];
$E_KeyWords=$rs3["KeyWords"];
$E_enKeyWords=$rs3["enKeyWords"];
$E_Descr=$rs3["Descr"];
$E_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=6";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$F_Title=$rs3["Title"];
$F_enTitle=$rs3["enTitle"];
$F_KeyWords=$rs3["KeyWords"];
$F_enKeyWords=$rs3["enKeyWords"];
$F_Descr=$rs3["Descr"];
$F_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=7";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$G_Title=$rs3["Title"];
$G_enTitle=$rs3["enTitle"];
$G_KeyWords=$rs3["KeyWords"];
$G_enKeyWords=$rs3["enKeyWords"];
$G_Descr=$rs3["Descr"];
$G_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=8";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$H_Title=$rs3["Title"];
$H_enTitle=$rs3["enTitle"];
$H_KeyWords=$rs3["KeyWords"];
$H_enKeyWords=$rs3["enKeyWords"];
$H_Descr=$rs3["Descr"];
$H_enDescr=$rs3["enDescr"];

$sql3="select * from page_seo where ID=9";
$result3=mysql_db_query($dbname,$sql3);
$rs3=mysql_fetch_array($result3);
$I_Title=$rs3["Title"];
$I_enTitle=$rs3["enTitle"];
$I_KeyWords=$rs3["KeyWords"];
$I_enKeyWords=$rs3["enKeyWords"];
$I_Descr=$rs3["Descr"];
$I_enDescr=$rs3["enDescr"];

$sql2="select * from webinfo";
$result2=mysql_db_query($dbname,$sql2);
$rs2=mysql_fetch_array($result2);
$webname=$rs2["webname"];
$enwebname=$rs2["enwebname"];
$weburl=$rs2["weburl"];
$icp=$rs2["icp"];
$enicp=$rs2["enicp"];
$banquan=$rs2["banquan"];
$enbanquan=$rs2["enbanquan"];
$cname=$rs2["cname"];
$dianhua=$rs2["dianhua"];
$fax=$rs2["fax"];
$myemail=$rs2["myemail"];
$bgtel=$rs2["bgtel"];
$qq=$rs2["qq"];
/*王庆路 添加另外4个QQ*/
$qq2=$rs2["qq2"];
$qq3=$rs2["qq3"];
$qq4=$rs2["qq4"];
$qq5=$rs2["qq5"];
/*王庆路 添加另外4个QQ end*/
/*王庆路 添加客服昵称*/
$kefu2=$rs2["kefu_name2"];
$kefu3=$rs2["kefu_name3"];
$kefu4=$rs2["kefu_name4"];
$kefu5=$rs2["kefu_name5"];
/*王庆路 添加客服昵称 end*/
$qyqq=$rs2["qyqq"];
$msn=$rs2["msn"];
$mob=$rs2["mob"];
$address=$rs2["address"];
$enaddress=$rs2["enaddress"];
$gcadd=$rs2["gcadd"];
$engcadd=$rs2["engcadd"];
$title=$rs2["title"];
$entitle=$rs2["entitle"];
$keyword=$rs2["keyword"];
$enkeyword=$rs2["enkeyword"];
$descr=$rs2["descr"];
$endescr=$rs2["endescr"];
$about=$rs2["about"];
$enabout=$rs2["enabout"];
?>
