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

$navName = $_SERVER['PHP_SELF'];

?>
<!--navigation-->
<div class="naver">
	<ul class="wrapper">
		<li><a href="/" class="<?php echo $navName=='/index.php'?'cur':''; ?>">网站首页</a></li>
		<!--<li><a href="../reg.php">会员注册</a></li>-->
		<!--王庆路 添加微信价格模块-->
		<li class=""><a href="#">微信价格</a></li>
		<!--王庆路 添加微信价格模块 end-->
		<li class="<?php echo $navName=='/popularize.php'? 'cur':''; ?>"><a href="../popularize.php">软文推广</a></li>
		<li class="<?php echo $navName=='/vip/index.php'?'cur':''; ?>"><a href="../vip/index.php">软文价格</a></li>
		<li class="<?php echo $navName=='/system/daixie.php'?'cur':''; ?>"><a href="../system/daixie.php">软文代写</a></li>
		<li class="<?php echo $navName=='/system/taocan.php'?'cur':''; ?>"><a href="../system/taocan.php">优惠套餐</a></li>
		<li class="<?php echo $navName=='/system/media.php'?'cur':''; ?>"><a href="../system/media.php">媒体资源</a></li>
		<!--<li><a href="/weixin.html">微信推广</a></li>-->
		<!--<li class="--><?php //echo ($navName=='/system/anli.php' or $navName=='/system/anli1.php' or $navName=='/system/anli2.php' or $navName=='/system/anli3.php' or $navName=='/system/anli4.php')?'cur':''; ?><!--"><a href="../system/anli.php">行业方案</a></li>-->
		<li class="<?php echo $navName=='/system/contact.php'?'cur':''; ?>"><a href="../system/contact.php">联系我们</a></li>
	</ul>
</div>
<!--navigation end-->