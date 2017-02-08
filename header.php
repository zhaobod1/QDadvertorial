
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
<script src="/huo15template/js/jquery1.42.min.js"></script>
<link rel="stylesheet" type="text/css" href="/huo15template/font_m5n5v8k9t0dlsor/iconfont.css">

<!--王庆路 添加浏览器标签栏图标-->
<script>
		var head = document.getElementsByTagName("head")[0];
		var links = document.createElement("link");
		links.rel = 'icon';
		links.href = '/huo15template/img/logo_ico.ico';
		head.appendChild(links);
</script>
<!--王庆路 添加浏览器标签栏图标 end-->
<!--header-->
<div class="header">
	<div class="wrapper">
		<div class="logo">
			<a href="#">
				<img src="../huo15template/img/logo_01.png" alt="logo">
			</a>
		</div>
		<div class="navBtn-wrapper">
			<ul>
				<li><a class="<?php echo $navName=='/index.php'?'cur':''; ?>" href="/">网站首页</a></li>
				<li><a href="">微信价格</a></li>
				<li><a class="<?php echo $navName=='/popularize.php'? 'cur':''; ?>" href="../popularize.php">软文推广</a></li>
				<li><a class="<?php echo $navName=='/vip/index.php?back=1'?'cur':''; ?>" href="../vip/index.php?back=1">软文价格</a></li>
				<li><a class="<?php echo $navName=='/system/daixie.php'?'cur':''; ?>" href="../system/daixie.php">软文代写</a></li>
				<li><a class="<?php echo $navName=='/system/taocan.php'?'cur':''; ?>" href="../system/taocan.php">优惠套餐</a></li>
				<li><a class="<?php echo $navName=='/system/contact.php'?'cur':''; ?>" href="../system/contact.php">媒体资源</a></li>
				<li><a href="#">联系我们</a></li>
			</ul>
		</div>
	</div>
</div>
<script>
	$(function () {

		//初始化当前状态
		function currNav() {
			$(".navBtn-wrapper li").each(function (index, element) {
				if ($(element).find("a").attr('class') == 'cur') {
					$(element).css({
						background:"#00a4e3"
					}).find("a").css({
						backgroundImage: "url(/huo15template/newSkin/image/z" + (index + 1) + ".png)",
						backgroundPosition: "25px 15px",
						color: "white"
					});

				}
			});
		}
		currNav();
		//划入画出
		$(".navBtn-wrapper li").each(function (index, element) {
			$(element).find("a").css({
				backgroundImage:"url(/huo15template/newSkin/image/z" + (index+1) + ".jpg)",
				backgroundPosition:"25px 15px"
			})
				.hover(function () {
					$(element).css({
						background:"#00a4e3"
					}).find("a").css({
						backgroundImage:"url(/huo15template/newSkin/image/z" + (index+1) + ".png)",
						backgroundPosition:"25px 15px",
						color:"white"
					});
					currNav();
				},function () {
					$(element).css({
						background:"#ffffff"
					}).find("a").css({
						backgroundImage:"url(/huo15template/newSkin/image/z" + (index+1) + ".jpg)",
						backgroundPosition:"25px 15px",
						color:"#333"
					});
					currNav();
				});
		});
	});
</script>

<style>
	/*轮播图*/
	.fullSlide {
		margin-top:-20px!important;
	}
</style>
<!--header end-->