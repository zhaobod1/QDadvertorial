<?php
include("../include/config.php");
include("../include/function.php");
$BigID=@$_REQUEST["BigID"];
if($BigID==""){
	$BigClass="最新资讯";
}
else{
	$sqls="select * from news_class where ID=".$BigID."";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	$BigClass=$rss["BigClass"];
}
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
	<title>资讯中心_<?php echo $webname;?></title>

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
	<!--news-->
	<link href="../images/ruanwen.css" rel="stylesheet" type="text/css">

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
    <div class="adct corner5px mb15 clearfix" id="adt"><img src="../images/banner.jpg" width="980" height="279"></div>
    <div class="wrapindex clearfix">
      <div class="homeleft corner5px mb15">
        <div class="position">当前位置：<a href="/">网站主页</a> &gt; <a href="../news/news.php">资讯中心</a></div>
        <div class="b2"></div>
        <div class="clearfix" id="content">
			<DIV id=main_left>
			<DIV class=l_top>分类导航</DIV>
				<DIV class=l_list>
				<UL>
					<?php
					$sql1="select * from news_class order by ID asc";
					$result1=mysql_db_query($dbname,$sql1);
						while($rs1=mysql_fetch_array($result1))
						{
						if($BigID==$rs1["ID"]){
					?>
					<li><a href="../news/news.php?BigID=<?php echo $rs1["ID"];?>" class=sideba><?php echo $rs1["BigClass"];?></a></li>
					<?php
						 }else{ ?>
					<li><a href="../news/news.php?BigID=<?php echo $rs1["ID"];?>"><?php echo $rs1["BigClass"];?></a></li>
					<?php
						 }
						}?>
				</UL>
				</DIV>
				<DIV class=l_bottom></DIV>
			</DIV>
			<DIV id=con_right>
			<DIV class=r_top>
			<DIV class=r_top1><?php echo $BigClass;?></DIV></DIV>
			<DIV class=newslist>
			<UL>
			<?php
			/*-----------------接收相关数据值---------------------*/
			$BigID=@$_REQUEST["BigID"];
			$Page=@$_REQUEST["Page"];
			/*-----------------设置每页显示数目-------------------*/
			$List_Num=10;
			/*-----------------计算共有记录数--------------------*/
			if($BigID=="")
			{
			$sqlN="select Count(*) from news_info";
			}
			else
			{
			$sqlN="select Count(*) from news_info where class_id=".$BigID."";
			}
			$resultN=mysql_db_query($dbname,$sqlN);
			$rsN=mysql_fetch_array($resultN);
			$Num=$rsN[0];

			/*------------------计算共有页数--------------------*/
			$CountPage=ceil($Num/$List_Num);
			/*-------------------设置当道页--------------------*/
			$Cpage=$Page+1;
			/*--------------------------------------------------*/

			if($BigID=="")
			{
			$sql="select * from news_info order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
			}
			else
			{
			$sql="select * from news_info where class_id=".$BigID." order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
			}
			$result=mysql_db_query($dbname,$sql);
					 if (mysql_num_rows($result)==NULL)
					 {
					 $fy="no";
							  echo "<br><table width=95% border=0 align=center cellpadding=0 cellspacing=0><tr>
							 <td align=center><span class=rd rd>还没有添加数据！</span></td></tr></table>";
					 }
					 else
					 {
					 $fy="yes";
					
						  while($rs=mysql_fetch_array($result))
						  {
			?>
			  <LI><SPAN><?php echo $rs["data"];?></SPAN><A 
			  href="../news/newsinfo.php?ID=<?php echo $rs["ID"];?>"><?php echo $newsOB->utfSubstr($rs["title"],0,100);?></A></LI>
			<?php
					}
				 }?>
			</UL>
			<DIV class=pagelist>
			<?php
				 if ($fy=="yes")
				 {
								  echo "当前为".$Cpage."/".$CountPage."页  共".$Num."条记录&nbsp;&nbsp;";
								  
								  if($Page!=0)
								  {
								  $Prv=$Page-1;
								  echo "<a href='../news/news.php"."'>首页</a>&nbsp;&nbsp;";
								  echo "<a href='../news/news.php?Page=".$Prv.""."'>上一页</a>&nbsp;&nbsp;";
								  }
								  else
								  {
								   echo "首页&nbsp;&nbsp;";
								   echo "上一页&nbsp;&nbsp;";
								  }
								  if($Page!=$CountPage-1)
								  {
								  $NtPage=$Page+1;
								  $EdPage=$CountPage-1;
								  echo "<a href='../news/news.php?Page=".$NtPage."'>下一页</a>&nbsp;&nbsp;";
								  echo "<a href='../news/news.php?Page=".$EdPage."'>尾页</a>&nbsp;&nbsp;";
								  }
								  else
								  {
								   echo "下一页&nbsp;&nbsp;";
								   echo "尾页&nbsp;&nbsp;";
								  }
				 }
				 ?>
			</DIV></DIV></DIV>
        </div>
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
