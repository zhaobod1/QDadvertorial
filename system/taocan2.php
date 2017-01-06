<?php
include("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<title><?php echo $G_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $G_KeyWords;?>" />
<meta name="description" content="<?php echo $G_Descr;?>" />
<LINK rel=icon type=image/x-icon href="../images/favicon.ico">
<link href="../images/index.css" rel="stylesheet" type="text/css">
<link href="../images/reset.css" rel="stylesheet" type="text/css">
<link href="../images/ruanwen.css" rel="stylesheet" type="text/css">
<STYLE type=text/css>
IMG {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
* {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
.clear {
	CLEAR: both
}
#content .content {
	MARGIN: 18px auto; WIDTH: 1000px; BACKGROUND: #ffffff;background-image: url(../images/bga.jpg)
}
#content .content_main {
	PADDING-BOTTOM: 10px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 10px;background-image: url(../images/bga.jpg);
}
.blk1 {
	CLEAR: both; OVERFLOW: hidden
}
.blk2 {
	CLEAR: both; OVERFLOW: hidden
}
.blk3 {
	CLEAR: both; OVERFLOW: hidden
}
.blk4 {
	CLEAR: both; OVERFLOW: hidden
}
.blk {
	CLEAR: both; OVERFLOW: hidden
}
.blk1 {
	HEIGHT: 5px
}
.blk2 {
	HEIGHT: 10px
}
.blk3 {
	HEIGHT: 15px
}
.blk4 {
	HEIGHT: 20px
}
.blk {
	HEIGHT: 65px
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
#yun .yun_fuwu {
	PADDING-LEFT: 20px; PADDING-RIGHT: 20px
}
#yun #yun_fuwu_1 {
	WIDTH: 310px; FLOAT: left; MARGIN-LEFT: 15px
}
#yun_fuwu_2 {
	WIDTH: 310px; FLOAT: left; MARGIN-LEFT: 15px
}
#yun_fuwu_3 {
	WIDTH: 310px; FLOAT: left; MARGIN-LEFT: 15px
}
.yun_fw {
	MARGIN-TOP: 20px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px
}
.yun_fw H2 {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; LINE-HEIGHT: 50px; WIDTH: 980px; BACKGROUND: url(../images/yun_buy.png) no-repeat 0px -855px; HEIGHT: 50px; COLOR: #ffffff; FONT-SIZE: 24px; BORDER-TOP: 0px; FONT-WEIGHT: normal; BORDER-RIGHT: 0px
}
.yun_fw H2 SPAN {
	MARGIN-LEFT: 15px
}
.yun_fw TABLE {
	TEXT-ALIGN: center; LINE-HEIGHT: 40px; MARGIN: 15px 0px; WIDTH: 926px; BORDER-COLLAPSE: collapse
}
.yun_fw TABLE TH {
	BORDER-BOTTOM: #96d9ec 1px solid; BORDER-LEFT: #96d9ec 1px solid; BACKGROUND: #caeefa; BORDER-TOP: #96d9ec 1px solid; BORDER-RIGHT: #96d9ec 1px solid
}
.yun_fw TABLE TD {
	BORDER-BOTTOM: #96d9ec 1px solid; BORDER-LEFT: #96d9ec 1px solid; BACKGROUND: #e5f4f9; BORDER-TOP: #96d9ec 1px solid; BORDER-RIGHT: #96d9ec 1px solid
}
.yun_fw .yun_fw_buy {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; WIDTH: 60px; BACKGROUND: url(../images/list_buy.gif) no-repeat; HEIGHT: 19px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
.yun_fw_sm {
	LINE-HEIGHT: 24px; MARGIN: 10px 15px
}
.yun_fw_smm {
	PADDING-BOTTOM: 10px; LINE-HEIGHT: 32px; MARGIN-TOP: 20px; TEXT-INDENT: 2em; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; COLOR: #3063a4; FONT-SIZE: 18px; FONT-WEIGHT: bold; PADDING-TOP: 10px
}
.yun_fw_smm UL {
	FONT-SIZE: 14px
}
.yun_fw_smm UL LI {
	BORDER-BOTTOM: #a3e2ff 1px solid; BORDER-LEFT: #a3e2ff 1px solid; PADDING-BOTTOM: 10px; LIST-STYLE-TYPE: none; MARGIN: 5px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; BACKGROUND: #e3f2f9; FONT-SIZE: 18px; BORDER-TOP: #a3e2ff 1px solid; CURSOR: pointer; FONT-WEIGHT: normal; BORDER-RIGHT: #a3e2ff 1px solid; PADDING-TOP: 10px
}
.yun_fw_smm UL LI:hover {
	BORDER-BOTTOM: #012b70 1px solid; BORDER-LEFT: #012b70 1px solid; BACKGROUND: #012b70; COLOR: #fff; BORDER-TOP: #012b70 1px solid; BORDER-RIGHT: #012b70 1px solid
}
.yun_sm {
	MARGIN-TOP: 30px
}
.yun_sm_right {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; WIDTH: 990px; BACKGROUND: url(../images/yun_buy.png) no-repeat 0px -194px; HEIGHT: 75px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
.yun_sm_right P {
	PADDING-BOTTOM: 12px; LINE-HEIGHT: 24px; TEXT-INDENT: 2em; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 12px
}
.yun_bz {
	TEXT-ALIGN: center; PADDING-BOTTOM: 20px; LINE-HEIGHT: 28px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; COLOR: #ff6600; FONT-SIZE: 22px; FONT-WEIGHT: bold; PADDING-TOP: 20px
}
.ruanwen_gg {
	MARGIN: 20px 10px
}
.fuwu {
	BORDER-BOTTOM: #cdcdcd 1px solid; BORDER-LEFT: #cdcdcd 1px solid; WIDTH: 340px; BORDER-TOP: #cdcdcd 1px solid; BORDER-RIGHT: #cdcdcd 1px solid
}
.list_table {
	WIDTH: 100%; BORDER-COLLAPSE: collapse
}
.list_table TH {
	BORDER-BOTTOM: #cdcdcd 1px solid; TEXT-ALIGN: left; PADDING-LEFT: 5px; BACKGROUND: url(../images/title_bj2.gif) repeat-x 0px 0px; HEIGHT: 30px; FONT-WEIGHT: normal
}
.list_table TD {
	TEXT-ALIGN: left; PADDING-LEFT: 5px; HEIGHT: 35px
}
.list_table TR {
	TEXT-ALIGN: center; LINE-HEIGHT: 28px
}
.list_table TR:hover {
	BACKGROUND-COLOR: #fffeed
}
.s_error {
	COLOR: red
}
.inputzc {
	LINE-HEIGHT: 32px; PADDING-LEFT: 5px; HEIGHT: 32px; FONT-SIZE: 14px
}
.fuwuMore {
	BORDER-BOTTOM: #cdcdcd 1px solid; BORDER-LEFT: #cdcdcd 1px solid; WIDTH: 405px; BORDER-TOP: #cdcdcd 1px solid; BORDER-RIGHT: #cdcdcd 1px solid
}

table {border-collapse: collapse; border:none;table-layout:fixed;}
#mtop {width:100%;}
/*#mtop td {height:63px;border:2px solid #EEE;border-left:none;border-right:none;}*/
#mmenut a {padding:16px 0px;;font-family:"微软雅黑","宋体";font-size:15px;}
#mmenut {margin:0px 0px 0px auto;}
#mmenut td {text-align:center;height:58px;width:95px;border:none;border-top:2px solid #FFF;}
#mmenut td:hover {border-top-color:#2AABE4;}
#mmenut td:hover a {color:#2AABE4;TEXT-DECORATION: none}
#mmenut td:hover a:hover{ width:63px; height:27px; background:url(../images/nav_bg.gif) no-repeat 0 14px; color:#fff; text-decoration:none; text-align:center; display:block;}
#mmenut td.dq {border-top-color:#2AABE4;}
#mmenut td.dq a {color:#2AABE4;}
#mmenut td.dq a:hover{ width:63px; height:27px; background:url(../images/nav_bg.gif) no-repeat 0 14px; color:#fff; text-decoration:none; text-align:center; display:block;}

.cate {
	TEXT-INDENT: 0em
}
.cate A {
	BORDER-BOTTOM: #ffc493 1px solid; TEXT-ALIGN: center; BORDER-LEFT: #ffc493 1px solid; TEXT-INDENT: 0em; WIDTH: 450px; BACKGROUND: #890D00; FLOAT: left; COLOR: #FFF; FONT-SIZE: 20px; BORDER-TOP: #ffc493 1px solid; FONT-WEIGHT: bold; MARGIN-RIGHT: 10px; BORDER-RIGHT: #ffc493 1px solid; TEXT-DECORATION: none
}
.cate A:hover {
	BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; BACKGROUND: #FF6600; COLOR: #FFF; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid
}
</STYLE>
</HEAD>
<BODY class=articleview>
<DIV class="header clearfix">
<DIV class=top>
<DIV class=head>
<H1><A href="/"></A></H1><IMG src="images/chongzhi.png"> </DIV></DIV>
<?php
include("menu.php");
?>
<div class="index" style="margin-top:18px">
<div style="clear:both"></div>
<div id="content1" align="center" style="margin-top:32px">
<div id="content2">
<div id="youhua_11"></div>
<div class="youhua_main">
<div style="height:auto; text-align:left; padding-left:20px; width:936px; padding-top:10px">
<TABLE border=0 cellSpacing=0 cellPadding=0 width=936>
<tbody>
<?php
$sqlc="select * from taocan_class";
$resultc=mysql_db_query($dbname,$sqlc);
$i=1;
while($rsc=mysql_fetch_array($resultc))
	{
	if($i<3){
?>

<?php if(is_odd($i)){?>
<TR><TD height="70" STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:LEFT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php } else {?>
<TD STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:RIGHT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php }?>

<?php } elseif($i<5){?>

<?php if(is_odd($i)){?>
</TR><TR><TD height="70" STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:LEFT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php } else {?>
<TD STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:RIGHT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php }?>

<?php } elseif($i<7){?>

<?php if(is_odd($i)){?>
</TR><TR><TD height="70" STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:LEFT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php } else {?>
<TD STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:RIGHT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php }?>

<?php } elseif($i<9){?>

<?php if(is_odd($i)){?>
</TR><TR><TD height="70" STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:LEFT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php } else {?>
<TD STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:RIGHT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php }?>

<?php } elseif($i<11){?>

<?php if(is_odd($i)){?>
</TR><TR><TD height="70" STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:LEFT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php } else {?>
<TD STYLE="line-height:2.5; padding:2px;"><SPAN class=cate STYLE="FLOAT:RIGHT;"><A href="../system/taocan.php#c<?php echo $i;?>"><?php echo $i;?>、<?php echo $rsc["BigClass"];?></A></SPAN></TD>
<?php }?>

<?php } else{}?>
<?php
	$i=$i+1;
	}
	?></TR>
<tbody>
</TABLE>
</div>
<DIV id=content>
<DIV class=content>
<DIV class=content_main>
<?php
$sql="select * from taocan_info where tj=1 order by ID asc";
$result=mysql_db_query($dbname,$sql);
$j=1;
while($rs=mysql_fetch_array($result))
	{
	?>
<DIV class=yun_fw id="c<?php echo $j;?>">
<H2><SPAN><?php echo $j;?>、<?php echo $rs["title"];?></SPAN><SPAN 
style="TEXT-ALIGN: right; COLOR: #d3e2f7; MARGIN-LEFT: 60px; FONT-SIZE: 18px"><?php echo $rs["encontent"];?></SPAN></H2>
<?php echo $rs["content"];?>
<DIV class=yun_fw_sm>
<P>其他可选网站：<?php echo $rs["medianame"];?></P></DIV></DIV>
<?php
	$j=$j+1;
	}
	?>
</DIV></DIV></DIV>
</div>
</div>
</div>
</DIV>
<?php
include("footer.php");
?>
</BODY>
</HTML>
