<!--登录框-->
<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2016/11/9
 * Time: 下午5:44
 */
$VipUser = @$_COOKIE["VipUser"];
$AdminUser = @$_COOKIE["AdminUser"];
if ($VipUser <> "") {
	$sql = "select * from user where VipUser='" . $VipUser . "'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);
	if ($rs != NULL) {
		$yue = $rs["yue"];
		$ip = $rs["ip"];
		$data = $rs["data"];
	}
	$ufalg = 1;
	$username = $VipUser;
	$userpath = "../user/";
	$fg = $_COOKIE["fg"];
	switch ($_COOKIE["fg"]) {
		case "1":
			$jiaose = "核心代理";
			break;
		case "2":
			$jiaose = "合作加盟供应商";
			break;
		case "3":
			$jiaose = "企业用户";
			break;
	}
} elseif ($AdminUser <> "") {
	$sql = "select * from admin where AdminUser='" . $AdminUser . "'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result);
	if ($rs != NULL) {
		$yue = $rs["yue"];
		$ip = $rs["ip"];
		$data = $rs["data"];
	}
	$ufalg = 1;
	$username = $AdminUser;
	$userpath = "../admin/";
	$fg = $_COOKIE["fg"];
	switch ($_COOKIE["fg"]) {
		case "1":
			$jiaose = "站长";
			break;
		case "2":
			$jiaose = "副站长";
			break;
		case "3":
			$jiaose = "检查员";
			break;
	}
} else {
	$ufalg = 0;
}
?>
<style>
	#form1 {
		position: absolute;
		z-index: 100;
		right: 130px;
		top: 10px;

	}

	/*王庆路	登录框加高*/
	.denglu {
		background: #d4e4f1;
		padding: 20px;
		height: 300px;
	}

	/*王庆路	登录框加高 end*/
	#form1 .head {
		height: 41px;
		line-height: 41px;
		background: #fff;
		padding: 0px 18px;
		border-bottom: 1px solid #cddbe8;
	}

	#form1 .head h3 {
		font-size: 14px;
		color: #454545;
		font-weight: bold;
		line-height: 41px;

	}

	#form1 .InputContent1 {
		margin-bottom: 10px;
	}

	#form1 .InputContent3 {
		margin-bottom: 10px;
	}

	/*王庆路 图片轮播加高*/
	.tempWrap {
		height: 430px;
	}

	.tempWrap img {
		height: 430px;
	}

	/*王庆路 图片轮播加高 end*/
</style>
<form name="form1" id="form1" action="" class="form" method="post">
	<?php
	if ($ufalg <> 1) { ?>
		<div class="head">
			<h3>用户登录</h3>
		</div>
	<?php } ?>
	<DIV class=denglu>
		<?php
		if ($ufalg <> 1) { ?>
		<DIV class="InputContent1 form-group">
			<label for="exampleInputEmail1">用户名：</label>
			<INPUT  class="form-control" name="VipUser" type="text"
			       id="VipUser">
		</div>
		<DIV class="InputContent1 form-group">
			<label for="exampleInputEmail1">密 码：</label>
			<INPUT  class="form-control" name="VipPass" type="password" id="VipPass">
		</div>
		<DIV class="InputContent1 form-group captchaDiv">
			<label for="exampleInputEmail1">验证码：</label><br>
			<div class="captchaIn">
				<INPUT  class="form-control" maxLength=5 type=text name="checkcode" id="checkcode">
			</div>
			<div class="captchaNum"><?php echo @$_SESSION['authnum']; ?></div>
		</div>

		<DIV class="InputContent1 form-group">
			<INPUT onclick="javascript:check()" src="../images/denglu.png" type=image>
			<A title="注册" href="../reg.php"><IMG alt="注册" src="../images/zhuce1.png" width=120 height=44></A>

		</div>

		<div class="InputContent1 form-group bottomTxt">
			<div><a href="http://wpa.qq.com/msgrd?v=3&uin=2164599285&site=qq&menu=yes" target="_blank"><span>忘记密码？</span></a>注册会员享受<span style="color: red">超低价格</span>发稿</div>
		</div>
		<style>
			#form1 {
				position: absolute;
				z-index: 100;
				right: 130px;
				top: 10px;
				border-radius: 5px;
			}
			.denglu {
				background: #d4e4f1;
				padding: 20px;
				height: 330px;
			}
			.clearfix {
				clear: both;
			}
			.captchaDiv {
				overflow: hidden;
			}
			.InputContent1 .captchaIn {
				float: left;
				width:170px;
				margin-right:10px;
			}
			.InputContent1 .captchaNum {
				float: left;
			}
			.bottomTxt {
				background: #ebf7fb;
				width:100%;
				height:30px;
				line-height:30px;
				padding:0 10px;
			}
		</style>

	</div>
<?php } else { ?>
	<UL style="font-size:12px;overflow: hidden;">
		<div>
			<div width="120px" style="float:left;padding-top:3px;padding-bottom:5px;line-height:25px;"><img
					src="<?php echo $rs["headpic"]; ?>" border="0" width="110" height="120"><br><a
					href="<?php echo $userpath; ?>">返回后台</a> | <a href="logouts.php">注销登录</a></div>
			<div width="253px"
			     style="float:left;margin-left:10px;text-align:left;line-height:25px;"><?php echo $username; ?>
				，欢迎您！<BR>所属角色：<?php echo $jiaose; ?> <BR>账号余额：<b
					style='color:#FF0000'><?php echo $rs["yue"]; ?></b> 元<BR>
				<DIV class="bk20 hr">
					<HR>
				</DIV>
				上次登录时间：<?php echo substr($data, 0, 10); ?><BR>登录IP：<?php echo $ip; ?> <BR></div>
		</div>
	</UL>
<?php } ?>
	</DIV>
	<INPUT value=1 type="hidden" name="commit">
</FORM>
<script>
	var code_hidden = '<?php echo $_SESSION['authnum'];?>';
	function check() {
		if (document.getElementById('VipUser').value == "") {
			document.getElementById('VipUser').focus();
			alert("VIP帐号不能够为空!");
			return false;
		}
		if (document.getElementById('VipPass').value == "") {
			document.getElementById('VipPass').focus();
			alert("VIP密码不能够为空!");
			return false;
		}
		if (code_hidden != form1.checkcode.value) {
			document.form1.checkcode.focus();
			alert('验证码输入错误!');
			return false;
		}
		document.form1.action = "checklogin.php";
		document.form1.submit();
		return true;
	}
	function refreshimg() {
		document.all.checkcode.src = 'checkcode.php?authnum=<?php echo $_SESSION['authnum']?>';
	}
</script>
<!--登录框 end-->