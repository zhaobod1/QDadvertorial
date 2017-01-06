<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2016/11/1
 * Time: 上午8:07
 */
include("../include/config.php");
include("../include/function.php");
$ID=$_REQUEST["ID"];
$sqlN="select * from news_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $rsN["title"];?>_<?php echo $webname;?></title>

	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="../huo15template/css/normalize.css">
	<link rel="stylesheet" href="../huo15template/css/main.css">
	<script src="../huo15template/js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- Bootstrap -->
	<link href="../huo15template/static/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<!--公共样式-->
	<link rel="stylesheet" href="../huo15template/css/base.css">
	<link rel="stylesheet" href="../huo15template/css/style.css">
	<!--公共样式 end-->
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->




<?php
include("../header.php");
include("../menu.php");
?>

<div id="wrapmain">
  <div class="maincont clearfix">
    <div class="adct corner5px mb15 clearfix" id="adt"><img src="./images/banner.jpg" width="980" height="279"></div>
    <div class="wrapindex clearfix">
      <div class="homeleft corner5px mb15">
        <div class="position">当前位置：<a href="../">网站主页</a> &gt; <a href="../news/news.php">资讯中心</a></div>
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
		$previous_post="<strong>上一篇：</strong><a title='".$title1."' href='../news/newsinfo.php?ID=".$PID1."'>".$title1."</a>";
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
		$next_post="<strong>下一篇：</strong><a title='".$title2."' href='../news/newsinfo.php?ID=".$PID2."'>".$title2."</a>";
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
include("../footer.php");
?>

<!-- Add your site or application content here  end-->


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="../huo15template/js/jquery1.42.min.js"></script>
<script src="../huo15template/static/js/jquery-3.1.0.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../huo15template/static/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="../huo15template/js/plugins.js"></script>
<script src="../huo15template/js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. end-->



</body>
</html>
