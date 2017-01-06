<?php
include("../include/config.php");
include("../include/function.php");
$ID=$_REQUEST["ID"];
$sqlN="select * from news_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE><?php echo $rsN["title"];?>_<?php echo $webname;?></TITLE>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="../images/index.css">
<LINK rel=stylesheet type=text/css href="../images/css.css">
<link href="../images/ruanwenjie.css" rel="stylesheet" media="screen" type="text/css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</head>
<body class="articleview">
<div class="header clearfix">
  <div class="top">
    <div class="head">
      <h1><a href="/"></a></h1>
    </div>
  </div>
<?php
include("menu.php");
?>
</div>
<div id="wrapmain">
  <div class="maincont clearfix">
    <div class="adct corner5px mb15 clearfix" id="adt"><img src="./images/banner.jpg" width="980" height="279"></div>
    <div class="wrapindex clearfix">
      <div class="homeleft corner5px mb15">
        <div class="position">当前位置：<a href="/">网站主页</a> &gt; <a href="../news/">新闻中心</a></div>
        <div class="b2"></div>
        <div class="clearfix" id="content">
          <div class="post-title">
            <h1><?php echo $rsN["title"];?></h1>
          </div>
          <div class="clearfix"></div>
		  <div class="post-content clearfix"><?php echo $rsN["content"];?></div>
		  <HR color=#e5e5e5 SIZE=1 width="100%">
<?php
$sql1="select * from news_info where ID>".$ID." order by ID asc limit 0,1";
$result1=mysql_db_query($dbname,$sql1);
	if(mysql_num_rows($result1))
	{
		$rs1 = mysql_fetch_array($result1);
		$PID1=$rs1["ID"];
		//$class_id1=$rs1["class_id"];
		$title1=$rs1["title"];
		$previous_post="<strong>上一篇：</strong><a title='".$title1."' href='../news/".$PID1.".html'>".$title1."</a>";
	}
	else
	{
		$previous_post="<strong>上一篇：</strong>没有了";
	}

$sql2="select * from news_info where ID<".$ID." order by ID desc limit 0,1";
$result2=mysql_db_query($dbname,$sql2);
	if(mysql_num_rows($result2))
	{
		$rs2 = mysql_fetch_array($result2);
		$PID2=$rs2["ID"];
		//$class_id2=$rs2["class_id"];
		$title2=$rs2["title"];
		$next_post="<strong>下一篇：</strong><a title='".$title2."' href='../news/".$PID2.".html'>".$title2."</a>";
	}
	else
	{
		$next_post="<strong>下一篇：</strong>没有了";
	}
?>
<DIV><?php echo $previous_post;?><BR><?php echo $next_post;?></DIV>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>
</body>
</html>