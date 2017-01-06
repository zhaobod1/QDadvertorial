<?php
include("include/config.php");
include("include/function.php");
$ID=$_REQUEST["ID"];
$sqlN="select * from ruanwen_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
?>
<!--王庆路 页面头部修改-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE><?php echo $rsN["title"];?><?php echo $webname;?></TITLE>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>


  <link rel="stylesheet" href="huo15template/css/normalize.css">
  <link rel="stylesheet" href="huo15template/css/main.css">
  <script src="huo15template/js/vendor/modernizr-2.6.2.min.js"></script>
  <!-- Bootstrap -->
  <link href="huo15template/static/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- 可选的Bootstrap主题文件（一般不用引入） -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
  <!--公共样式-->
  <link rel="stylesheet" href="huo15template/css/base.css">
  <link rel="stylesheet" href="huo15template/css/style.css">
  <!--公共样式 end-->
</head>
<body>
<?php
include ("header.php");
include("menu.php");
?>
<!--王庆路 页面头部修改 end-->
<div id="wrapmain">
  <div class="maincont clearfix">
    <div class="adct corner5px mb15 clearfix" id="adt"><img src="./images/banner.jpg" width="980" height="279"></div>
    <div class="wrapindex clearfix">
      <div class="homeleft corner5px mb15">
        <div class="position">当前位置：<a href="/">网站主页</a> &gt; 软文预览</div>
        <div class="b2"></div>
        <div class="clearfix" id="content">
          <div class="post-title">
            <h1><?php echo $rsN["title"];?></h1>
          </div>
          <div class="clearfix"></div>
		  <div class="post-content clearfix"><?php echo $rsN["content"];?></div>
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