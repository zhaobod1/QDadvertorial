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
require_once("rand.inc.php");
include("include/config.php");
include("include/function.php");
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
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="<?php echo $keyword; ?>"/>
	<meta name="description" content="<?php echo $descr; ?>"/>
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

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
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->




<?php
include("header.php");
include("menu.php");
?>
<DIV class=clear></DIV>
<style>
	.enroll {
		border: 1px solid #ddd;
		border-top: 8px solid #07B2EB;
		padding: 23px;
		margin-bottom: 30px;
	}

	.enroll .en01 {
		background: #FFF6E2;
		border-radius: 5px;
		border: 1px solid #ECDEBF;
		padding: 20px;
	}

	.enroll .en01 .head {
		margin-bottom: 10px;
		color: #424242;
		font-size: 14px;
		background: url(http://www.ruanwen.la/new_images/img70.gif) repeat-x center bottom;
		padding-bottom: 10px;
	}

	.enroll .en01 .head .sub {
		margin: -3px 15px 0 15px;
		background: url(http://www.ruanwen.la/new_images/img68.png) no-repeat center center;
		width: 76px;
		height: 24px;
		border: none;
		text-indent: -99999em;
	}

	.enroll .en01 .head .sub01 {
		margin-left: 15px;
		margin-top: -3px;
		background: url(http://www.ruanwen.la/new_images/img69.png) no-repeat center center;
		width: 103px;
		height: 24px;
		border: none;
		text-indent: -99999em;
	}

	.enroll .en01 p {
		margin-top: 10px;
		line-height: 24px;
	}
	.enroll .en02 {
		padding: 20px 0;
		margin-bottom: 30px;
	}
	.enroll .en02 .hd {
		background: #F5F5F5;
		padding: 3px 10px;
		text-align: left;
		color: #FF6600;
		font-size: 16px;
		font-weight: bold;
	}
	.enroll .en02 dl {
		padding: 20px 0;
		margin-left: 140px;
	}
	.enroll .en02 dl dd {
		height: 28px;
		margin-bottom: 15px;
	}
	.enroll .en02 label {
		display: block;
		float: left;
		margin-top: 3px;
		width: 80px;
	}
	.enroll .en02 .text {
		float: left;
		height: 26px;
		line-height: 26px;
		border: 1px solid #ddd;
		width: 250px;
	}
	.enroll .en02 em {
		margin-left: 10px;
		line-height: 28px;
	}
	.Validform_wrong {
		color: red;
		white-space: nowrap;
		background: url(huo15template/img/error.png) no-repeat left center;
	}
</style>
<DIV class="enroll" style="PADDING-BOTTOM: 20px; MARGIN: 0px auto; PADDING-LEFT: 50px; WIDTH: 1040px; PADDING-RIGHT: 50px; PADDING-TOP: 10px">
	<DIV class="en01">
		<SPAN class=head>&gt;&gt;&nbsp;已经是会员？请点：
			<input name="" type="submit" class="sub" onclick="location.href='/'">

			！ &nbsp;忘记了密码？请点：
			<input name="" type="submit" class="sub01" onclick="location.href='../system/contact.php'">
			<A class=susua href="../system/contact.php">联系客服找回</A>
			！
		</SPAN>
		<br>
		<p>&gt;&gt; 注册温馨提示：</p>
		<SPAN class=f_gray>&gt;&gt;&nbsp;请认真、仔细地填写以下信息，<SPAN class=f_red>*</SPAN>为必填项
</SPAN>
	</DIV>
	<BR>
	<FORM name="form1" id="form1" onsubmit="return postform();" method="post" action="savevip.php?action=add">
		<div class="en02">
			<ul>
				<li>
					<div class="hd">账户信息</div>
					<dl>
						<dd>
							<label>会员类型：</label>
							<INPUT id=g_1 value=3 CHECKED type="radio" name="flag">企业用户　
							<INPUT id=g_2 value=2 type="radio" name="flag">加盟合作用户						</dd>
						<dd>
							<label>会员名：</label>
							<INPUT onblur=checknew() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="user" class="reg_inp" type="text" name="user">
						</dd>
						<dd>
							<label>登录密码：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass1" class="reg_inp" type="password" name="pass1"> 密码不能小于6个字符
						</dd>
						<dd>
							<label>确认密码：</label>
							<INPUT onblur=twopass() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass2" class="reg_inp" size=30 type="password" name="pass2">
							<SPAN id=un1 class=f_red></SPAN>
							<SPAN style="COLOR: #ccc">两次密码请输入一致</SPAN>						</dd>

					</dl>
				</li>
				<li>
					<div class="hd">联系方式</div>
					<dl>
						<dd>
							<label>电子邮箱：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="email" class="reg_inp" type="text" name="email">
							<DIV style="DISPLAY: none" id=temail class=tips></DIV>
							<SPAN id=demail class=f_red></SPAN>&nbsp;
						</dd>

						<dd>
							<label>QQ号码：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="qq" class="reg_inp" type="text" name="qq">
							<SPAN id=dqq class=f_red></SPAN>
						</dd>
						<dd>
							<label>手机号码：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="tel" class="reg_inp" type="text" name="tel">
						</dd>
						<dd>
							<label>网站地址：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="tel" class="reg_inp" type="text" name="tel">
						</dd>
						<dd>
							<label>验&nbsp;证&nbsp;码：</label>
							<INPUT style="LINE-HEIGHT: 22px; WIDTH: 130px; HEIGHT: 22px" id=ver maxLength=5 type=text name=code>
							<div class="yzm"><?php echo $_SESSION['authnum']; ?></div>
							<SPAN id=dcaptcha class=f_red></SPAN>
						</dd>
					</dl>
				</li>
			</ul>

			<input id="formSub" name="submit" style="width: 500px;margin-left: 140px;" type="submit" value="注册" class="btn btn-lg btn-primary">
		</div>
	</FORM>
	<BR>




	<SCRIPT type=text/javascript>


		function postform() {
			var code_hidden = '<?php echo $_SESSION['authnum'];?>';
			var username = $("#user").val();
			var pass1 = $("#pass1").val();
			var pass2 = $("#pass2").val();
			var email = $("#email").val();
			var tel = $("#tel").val();
			var qq = $("#qq").val();
			var code = $("#ver").val();
			if (username == '') {
				alert("用户名不能为空！");
				return false;
			}
			if (pass1 == '') {
				alert("密码不能为空！");
				return false;
			}
			if (pass2 == '') {
				alert("确认密码不能为空！");
				return false;
			}


			if (pass1 != pass2) {
				alert('两次输入的密码不一致');
				return false;
			}

			if (email == '') {
				alert("Email不能为空！");
				return false;
			}
			if (qq == '') {
				alert("qq不能为空！");
				return false;
			}
			if (code == '') {
				alert("验证码不能为空！");
				return false;
			}

			var emailPat = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
			var matchArray = email.match(emailPat);
			if (matchArray == null) {
				alert("电子邮件格式不正确");
				return false;
			}

			var telPat = /(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}/;
			var matchArray = tel.match(telPat);
			if (matchArray == null) {
				alert("手机号码格式不正确！");
				return false;
			}
			var qqmatch = /^[\d]{5,12}$/;
			var matchqqArray = qq.match(qqmatch);

			if (matchqqArray == null) {
				alert("qq格式不对");
				return false;
			}
			if (code_hidden != code) {
				document.form1.code.focus();
				alert('验证码输入错误!');
				return false;
			}
		}

		function checknew() {
			if ($("#user").val() != "") {
				$.get("user/action.php?a=checknew", {"u": $("#user").val()}, function (data) {
					if (data == 1) {
						$("#un").html("<BR>用户名已注册，请更换!");
						$("#user")[0].focus();
					}
					else if (data == 2) {
						$("#un").html("<BR>admin用户名不能注册，请更换!");
						$("#user")[0].focus();
					}
					else if (data == 0) {
						$("#un").html("<BR>可以注册!");
					}
					else {
						$("#un").html("<BR>新用户名检测失败!");
					}
				});
			}
		}


		function twopass() {
			if ($("#pass1").val() != $("#pass2").val()) {
				$("#un1").html("<BR>两次密码不一致");
				return false;
			}
			else
				$("#un1").html(" ");
		}
	</SCRIPT>
</DIV>
<?php
include("footer.php");
?>
<script src="huo15template/js/jquery1.42.min.js"></script>

<script>
	$('#formsub').click(function (e) {
		e.preventDefault();
		postform();
		$('#form1').submit();
	});
</script>
</BODY>
</HTML>
