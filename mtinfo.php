<?php
include("include/config.php");
include("include/function.php");
$ID=$_REQUEST["ID"];
$sqlN="select * from media_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE><?php echo $rsN["medianame"];?>_<?php echo $webname;?></TITLE>
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
        <div class="position">当前位置：<a href="/">网站主页</a> &gt; 媒体资源介绍</div>
        <div class="b2"></div>
        <div class="clearfix" id="content">
          <div class="post-title">
            <h1><?php echo $rsN["title"];?></h1>
          </div>
          <div class="clearfix"></div>
		  <div class="post-content clearfix"><?php echo $rsN["neirong"];?></div>
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