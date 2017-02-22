<?php
/**
 * Created by 火一五信息科技有限公司.
 * 套餐
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2016/11/1
 * Time: 上午8:07
 */
include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];
$AdminUser = $_COOKIE["AdminUser"];
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
	$jiaose = userIdentity($fg);


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
	$jiaose = adminIdentity($fg);

} else {
	$ufalg = 0;
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
  <title><?php echo $G_Title;?>_<?php echo $webname;?></title>
  <meta name="keywords" content="<?php echo $G_KeyWords;?>"/>
  <meta name="description" content="<?php echo $G_Descr;?>"/>
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

<!--banner-->
<div class="fullSlide">

	<!--王庆路 首页滚动图片更换-->
	<div class="bd">
		<ul>
			<li><a target="_blank" href="#"><img src="/huo15template/img/new_banner1.jpg"/></a></li>
			<li><a target="_blank" href="#"><img src="/huo15template/img/new_banner2.jpg"/></a></li>
		</ul>
	</div>
	<!--王庆路 首页滚动图片更换 end-->

  <div class="hd">
    <ul></ul>
  </div>

  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
	<?php include('../loginDialog.php'); ?>
</div>
<!--banner end-->
<!--main-->
<style>
	.tab-fd2 {
		background:#38B5E6;
	}
	.tab-fd2 .thumb {
		float:left;
		padding:15px;
	}
	.tab-fd2 .desc {
		background:#FFF;
		float:right;
		width:980px;
		padding:7px 26px;
		margin-top:5px;
		margin-right:5px;
		*display:inline;
		overflow:hidden;
	}
	.tab-fd2 .desc ul li {
		height:32px;
		line-height:32px;
		float:left;
		width:125px;
		border-bottom:1px dashed #38B5E6;
		margin-right:40px;
		margin-bottom:11px;
	}
	.tab-fd2 .desc ul li a {
		font-size:14px;
		background:url(http://www.ruanwen.la/new_images/img62.png) no-repeat left center;
		padding-left:23px;
	}
	.tab-fd2 .desc ul {
		width:1000px;
	}
</style>
<div class="package">
	<div class="wrapper">
        <!-- CSS goes in the document HEAD or added to your external stylesheet -->
        <style type="text/css">
            table.imagetable {
                font-family: verdana,arial,sans-serif;
                font-size:11px;
                color:#333333;
                border-width: 1px;
                border-color: #999999;
                border-collapse: collapse;
            }
            table.imagetable caption {
                text-align: center;
                font-size: 25px;
                line-height:50px;
                height:50px;
            }
            table.imagetable th {
                background:#b5cfd2 url('/huo15template/newSkin/image/cell-blue.jpg');
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #999999;
            }
            table.imagetable tr td {
                width:120px;
            }
            table.imagetable tr:nth-child(even) td {
                background:#b5cfd2 url('/huo15template/newSkin/image/cell-blue.jpg');
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #999999;
            }
            table.imagetable td {
                background:#dcddc0 url('/huo15template/newSkin/image/cell-grey.jpg');
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #999999;
            }
        </style></p>
        <p><!-- Table goes in the document BODY -->
        <table class="imagetable">
            <caption>500美丽中国套餐（至少出150家党政机关媒体）</caption>
            <tr>
                <td>
                    北方网

                </td>
                <td>
                    攀枝花新闻网

                </td>
                <td>
                    绍兴网
                </td>
                <td>
                    宜宾新闻网

                </td>
                <td>
                    襄阳汉江网

                </td>
                <td>
                    滨州传媒网

                </td>
                <td>
                    泰山网

                </td>
                <td>
                    安康新网

                </td>
                <td>
                    孝感网

                </td>
                <td>

                    水母网



                </td>



            </tr>
            <tr>
                <td>

                    安徽网



                </td>
                <td>

                    清远新闻网



                </td>
                <td>

                    广元新闻网


                </td>
                <td>

                    崇左新闻网



                </td>
                <td>

                    白银新闻网



                </td>
                <td>

                    千华网



                </td>
                <td>

                    百色新闻网



                </td>
                <td>

                    苏州视窗



                </td>
                <td>

                    龙虎网



                </td>
                <td>

                    大同新闻网



                </td>



            </tr>
            <tr>
                <td>

                    贺州新闻网


                </td>
                <td>

                    松花江网

                </td>
                <td>

                    恩施新闻网


                </td>
                <td>

                    环京津新闻网



                </td>
                <td>

                    毕节实验区网


                </td>
                <td>

                    达州日报网


                </td>
                <td>

                    南京网


                </td>
                <td>

                    亚心网



                </td>
                <td>

                    安庆新闻网



                </td>
                <td>


                    玉溪网





                </td>



            </tr>
            <tr>
                <td>
                    无锡新传媒网

                </td>
                <td>
                    三峡宜昌网

                </td>
                <td>
                    新余新闻网

                </td>
                <td>
                    广安新闻网

                </td>
                <td>
                    北纬网

                </td>
                <td>
                    菏泽信息港

                </td>
                <td>
                    中国西藏新闻网

                </td>
                <td>
                    锦州新闻网

                </td>
                <td>
                    绵阳新闻网

                </td>
                <td>
                    阳江新闻网


                </td>
            </tr>
            <tr>
                <td>
                    西楚网

                </td>
                <td>
                    平凉新闻网

                </td>
                <td>
                    四平新闻网

                </td>
                <td>
                    益阳电视新闻网

                </td>
                <td>
                    日照在线

                </td>
                <td>
                    青海新闻网

                </td>
                <td>
                    湛江新闻网

                </td>
                <td>
                    吴忠网

                </td>
                <td>
                    驻马店网

                </td>
                <td>
                    中国常州网
                </td>
            </tr>
            <tr>
                <td>
                    德州新闻网

                </td>
                <td>
                    鄂尔多斯新闻网

                </td>
                <td>
                    金州广播网

                </td>
                <td>
                    德州之窗

                </td>
                <td>
                    每日甘肃网

                </td>
                <td>
                    大华网

                </td>
                <td>
                    闽西新闻网

                </td>
                <td>
                    张家界新闻网

                </td>
                <td>
                    黄冈新闻网

                </td>
                <td>
                    枣庄新闻网

                </td>
            </tr>
            <tr>
                <td>
                    连网

                </td>
                <td>
                    中国吉安网

                </td>
                <td>
                    潍坊热线

                </td>
                <td>
                    呼和浩特新闻网

                </td>
                <td>
                    葫芦岛新闻网

                </td>
                <td>
                    宣城新闻网

                </td>
                <td>
                    湘西网

                </td>
                <td>
                    潜江网

                </td>
                <td>
                    日照新闻网

                </td>
                <td>
                    开封网

                </td>
            </tr>
            <tr>
                <td>
                    柳州新闻网

                </td>
                <td>
                    烟台网

                </td>
                <td>
                    中国兰州网

                </td>
                <td>
                    玉林新闻网

                </td>
                <td>
                    蚌埠网络电视

                </td>
                <td>
                    曲靖新闻网

                </td>
                <td>
                    大鹏新闻网

                </td>
                <td>
                    巴彦淖尔新闻网

                </td>
                <td>
                    衢州新闻网

                </td>
                <td>
                    柳州新闻网

                </td>
            </tr>
            <tr>
                <td>
                    中国济南网

                </td>
                <td>
                    大连新闻网

                </td>
                <td>
                    盘锦新闻网

                </td>
                <td>
                    漯河网

                </td>
                <td>
                    岳阳网

                </td>
                <td>
                    泰州新闻网

                </td>
                <td>
                    威海新闻网

                </td>
                <td>
                    嘉兴在线

                </td>
                <td>
                    鹰潭在线

                </td>
                <td>
                    济南在线

                </td>
            </tr>

            <tr>
                <td>
                    哈尔滨新闻网

                </td>
                <td>
                    资阳网

                </td>
                <td>
                    济源网

                </td>
                <td>
                    孔雀之乡网

                </td>
                <td>
                    长治新闻网

                </td>
                <td>
                    中国通辽网

                </td>
                <td>
                    楚北网

                </td>
                <td>
                    香格里拉网

                </td>
                <td>
                    青岛热线

                </td>
                <td>
                    西安新闻网

                </td>
            </tr>

            <tr>
                <td>
                    桂林生活网

                </td>
                <td>
                    黄山新闻网

                </td>
                <td>
                    株洲网

                </td>
                <td>
                    盐城新闻网

                </td>
                <td>
                    中国酒泉网

                </td>
                <td>
                    广佛都市网

                </td>
                <td>
                    中国仙桃网

                </td>
                <td>
                    泰州热线

                </td>
                <td>
                    长江网

                </td>
                <td>
                    今日惠州网

                </td>
            </tr>
            <tr>
                <td>
                    南充新闻网

                </td>
                <td>
                    吐鲁番网

                </td>
                <td>
                    中国萍乡网

                </td>
                <td>
                    琅邪网

                </td>
                <td>
                    中国菏泽网

                </td>
                <td>
                    山南网

                </td>
                <td>
                    淮安在线

                </td>
                <td>
                    东莞阳光网

                </td>
                <td>
                    中国铁岭

                </td>
                <td>
                    鹤壁网

                </td>
            </tr>
            <tr>
                <td>
                    运城新闻网

                </td>
                <td>
                    淄博新闻网

                </td>
                <td>
                    咸宁新闻网

                </td>
                <td>
                    邵阳新闻网

                </td>
                <td>
                    乐山新闻网

                </td>
                <td>
                    镇江之音

                </td>
                <td>
                    魅力舟山

                </td>
                <td>
                    扬州信息港

                </td>
                <td>
                    徐州热线

                </td>
                <td>
                    无锡信息网

                </td>
            </tr>
            <tr>
                <td>
                    合肥之窗

                </td>
                <td>
                    宁波在线

                </td>
                <td>
                    宁波在线

                </td>
                <td>
                    杭州网

                </td>
                <td>
                    温州视窗

                </td>
                <td>
                    盐城信息网

                </td>
                <td>
                    南通热线

                </td>
                <td>
                    常州视窗

                </td>
                <td>
                    芜湖视窗

                </td>
                <td>
                    义乌热线

                </td>
            </tr>
            <tr>
                <td>
                    嘉兴在线

                </td>
                <td>
                    宁波之窗

                </td>
                <td>
                    湖州信息网

                </td>
                <td>
                    广州之窗

                </td>
                <td>
                    中国深圳网

                </td>
                <td>
                    黄山信息港

                </td>
                <td>
                    亳州视窗

                </td>
                <td>
                    宣城在线

                </td>
                <td>
                    淮北视窗

                </td>
                <td>
                    宿州信息港

                </td>
            </tr>
        </table>


        <!-- 青岛火一五信息科技有限公司huo15.com phpExcel 导入新闻资源数据表格 日期：2017/2/20 -->
        <table class="imagetable">
            <caption>550元超值200家套餐</caption>
            <tbody>
            <tr>
                <td>南方都市</td>
                <td>四川热线</td>
                <td>吕梁热线</td>
                <td>大蒙古网</td>
                <td>台江网</td>
                <td>南通在线</td>
                <td>河南在线</td>
                <td>证券资讯</td>
                <td>今日财经网</td>
                <td>珠海都市</td>
            </tr>
            <tr>
                <td>西北热线</td>
                <td>每日资讯网</td>
                <td>北京资讯网</td>
                <td>黔网在线</td>
                <td>徽城在线</td>
                <td>中国家居新闻网</td>
                <td>陕西热线</td>
                <td>环球在线</td>
                <td>旅友联盟网</td>
                <td>重庆移动网</td>
            </tr>
            <tr>
                <td>北京在线</td>
                <td>江苏在线</td>
                <td>北京都市</td>
                <td>中国企讯网</td>
                <td>大南网</td>
                <td>中商网</td>
                <td>邯郸在线</td>
                <td>每日焦点网</td>
                <td>保健品网</td>
                <td>吉城在线</td>
            </tr>
            <tr>
                <td>河北在线</td>
                <td>安徽热线</td>
                <td>北京快讯</td>
                <td>常州热线</td>
                <td>中讯频道</td>
                <td>百姓新闻网</td>
                <td>河北之窗</td>
                <td>古玩鉴赏网</td>
                <td>汽车广播网</td>
                <td>安陆城市网</td>
            </tr>
            <tr>
                <td>宁夏在线</td>
                <td>山东热线</td>
                <td>魅力浙江</td>
                <td>大京网</td>
                <td>湖州视窗</td>
                <td>华中热线</td>
                <td>辽南网</td>
                <td>游戏手机网</td>
                <td>展会大全网</td>
                <td>哈尔滨之声</td>
            </tr>
            <tr>
                <td>辽宁信息港</td>
                <td>大天津网</td>
                <td>浙沪网</td>
                <td>汉中热线</td>
                <td>每日电讯网</td>
                <td>江苏城市</td>
                <td>市场视窗</td>
                <td>淘漏收藏网</td>
                <td>白金财经网</td>
                <td>浙城在线</td>
            </tr>
            <tr>
                <td>天津热线</td>
                <td>合肥热线</td>
                <td>浙江之音</td>
                <td>陕西之声</td>
                <td>湖北之声</td>
                <td>中国网讯</td>
                <td>每日信息网</td>
                <td>微商营销</td>
                <td>80后之窗</td>
                <td>广东讯息网</td>
            </tr>
            <tr>
                <td>广州都市</td>
                <td>上海之窗</td>
                <td>广州之声</td>
                <td>福建都市</td>
                <td>长春热线</td>
                <td>魅力东北</td>
                <td>每日讯闻网</td>
                <td>健康之窗</td>
                <td>华财视界</td>
                <td>苏城在线</td>
            </tr>
            <tr>
                <td>浙江信息港</td>
                <td>广沪网</td>
                <td>广州之音</td>
                <td>中国讯息网</td>
                <td>中国南门网</td>
                <td>神州在线</td>
                <td>企业发布网</td>
                <td>中国公关新闻网</td>
                <td>企媒在线</td>
                <td>江西城市网</td>
            </tr>
            <tr>
                <td>广东信息港</td>
                <td>上海生活网</td>
                <td>魅力广州</td>
                <td>大北网</td>
                <td>兴宁热线</td>
                <td>西宁资讯</td>
                <td>海口生活网</td>
                <td>潮流家装</td>
                <td>证券在线</td>
                <td>浙江资讯网</td>
            </tr>
            <tr>
                <td>科技之窗</td>
                <td>重庆之声</td>
                <td>云南热线</td>
                <td>魅力内江网</td>
                <td>视窗热线</td>
                <td>浙江网</td>
                <td>海南在线</td>
                <td>汽车在线</td>
                <td>城市在线</td>
                <td>吉林传媒网</td>
            </tr>
            <tr>
                <td>青年信息网</td>
                <td>魅力重庆</td>
                <td>魅力云南</td>
                <td>无锡在线</td>
                <td>金山信息网</td>
                <td>肃州在线</td>
                <td>南丰热线</td>
                <td>中国科技网</td>
                <td>海产网</td>
                <td>江苏传媒网</td>
            </tr>
            <tr>
                <td>江苏热线</td>
                <td>渝城在线</td>
                <td>魅力辽宁</td>
                <td>社会频道</td>
                <td>海宁信息网</td>
                <td>徽州热线</td>
                <td>正宁视窗</td>
                <td>商界热线</td>
                <td>书法字画网</td>
                <td>苏州都市</td>
            </tr>
            <tr>
                <td>广西在线</td>
                <td>天津视窗</td>
                <td>魅力吉林</td>
                <td>随州热线</td>
                <td>海南信息网</td>
                <td>名人资讯网</td>
                <td>枝江在线</td>
                <td>旅游热线</td>
                <td>家居名牌网</td>
                <td>北安城市网</td>
            </tr>
            <tr>
                <td>广东在线</td>
                <td>松花在线</td>
                <td>陕西都市</td>
                <td>大连热线</td>
                <td>上海都市</td>
                <td>南方热线</td>
                <td>湛江热线</td>
                <td>展会信息网</td>
                <td>云南讯息网</td>
                <td>晋城在线</td>
            </tr>
            <tr>
                <td>深圳热线</td>
                <td>钱塘之窗</td>
                <td>魅力山西</td>
                <td>成都之声</td>
                <td>承德大德网</td>
                <td>安徽视窗</td>
                <td>自贡热线</td>
                <td>中财在线</td>
                <td>辽宁资讯网</td>
                <td>黑城在线</td>
            </tr>
            <tr>
                <td>南京热线</td>
                <td>南昌热线</td>
                <td>山西信息港</td>
                <td>效能日报</td>
                <td>唐山聚讯网</td>
                <td>苏州之声</td>
                <td>华北视窗</td>
                <td>新北青网</td>
                <td>阳泉之声</td>
                <td>太湖资讯网</td>
            </tr>
            <tr>
                <td>广州信息港</td>
                <td>山西之窗</td>
                <td>山西都市</td>
                <td>中网报讯</td>
                <td>廊坊新网</td>
                <td>上海信息港</td>
                <td>广东之窗</td>
                <td>消费报讯网</td>
                <td>贵城在线</td>
                <td>东城生活网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 陕西在线 太原热线 山西在线 宿州热线 常州热线 天津之窗 中国建康网 中国10大品牌网
                    湘城在线 内蒙古传媒网
                </td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>500门户综合套餐(十大权威门户站）</caption>
            <tbody>
            <tr>
                <td>中国网</td>
                <td>中华网</td>
                <td>网易</td>
                <td>搜狐</td>
                <td>中国新闻网</td>
                <td>凤凰网</td>
                <td>京华网</td>
                <td>证券之星</td>
                <td>新浪网</td>
                <td>中国广播网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 金投网、今日头条、慧聪网、中华网、网易、中国网、凤凰网、新浪网、中国广播网其他频道</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>2000元60家综合套餐</caption>
            <tbody>
            <tr>
                <td>搜狐</td>
                <td>今晚网</td>
                <td>腾讯 快报</td>
                <td>中财网</td>
                <td>上海都市网</td>
                <td>企业家在线</td>
                <td>新快网</td>
                <td>大众网</td>
                <td>深圳热线</td>
                <td>新浪网</td>
            </tr>
            <tr>
                <td>泉州网</td>
                <td>白鹿网</td>
                <td>香港卫视网</td>
                <td>当代资讯网</td>
                <td>达州之声</td>
                <td>南方企业新闻网</td>
                <td>猎房网</td>
                <td>青年导报网</td>
                <td>星岛环球网</td>
                <td>百灵网</td>
            </tr>
            <tr>
                <td>天津在线</td>
                <td>长江网</td>
                <td>凤凰网</td>
                <td>慧聪网 商业</td>
                <td>中国时报网</td>
                <td>商广网</td>
                <td>财经在线</td>
                <td>北京之声</td>
                <td>中原网 资讯</td>
                <td>TOM 新闻</td>
            </tr>
            <tr>
                <td>东南网</td>
                <td>21CN 生活</td>
                <td>网易 客户端</td>
                <td>奥一网</td>
                <td>览潮网 财经</td>
                <td>中国网 视窗</td>
                <td>中华网</td>
                <td>日照网</td>
                <td>长株潭生活在线</td>
                <td>金投网</td>
            </tr>
            <tr>
                <td>苏州都市网</td>
                <td>凤凰网 客户端</td>
                <td>百度百家</td>
                <td>今日头条</td>
                <td>消费日报网</td>
                <td>浏阳之窗</td>
                <td>中国广播网 新疆</td>
                <td>全球纺织网</td>
                <td>中国新闻网</td>
                <td>中华铁道网</td>
            </tr>
            <tr>
                <td>阳光观前网</td>
                <td>中国商务新闻网</td>
                <td>东北新闻网</td>
                <td>新浪 看点</td>
                <td>今晚网</td>
                <td>京华网</td>
                <td>河北党网</td>
                <td>北方网 财经</td>
                <td>中国城市文化网</td>
                <td>羊城生活网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：赛迪网、飞象网、海峡都市报、中华网 、新浪网 、中国网</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>4000元120家综合套餐</caption>
            <tbody>
            <tr>
                <td>搜狐</td>
                <td>中华网 财经</td>
                <td>百灵网 新闻</td>
                <td>京华网 新闻</td>
                <td>网易3G客户端</td>
                <td>新浪网 黑龙江</td>
                <td>浏阳之窗</td>
                <td>新快网</td>
                <td>百度百家</td>
                <td>新蓝网</td>
            </tr>
            <tr>
                <td>腾讯 快报</td>
                <td>长株潭生活在线</td>
                <td>北京晚报网</td>
                <td>中国商务新闻网</td>
                <td>香港卫视网</td>
                <td>中国新闻网 江苏</td>
                <td>21CN 生活</td>
                <td>深圳热线</td>
                <td>消费日报网</td>
                <td>红商会</td>
            </tr>
            <tr>
                <td>北方网 财经</td>
                <td>星岛环球网</td>
                <td>今晚网</td>
                <td>日照网</td>
                <td>达州之声</td>
                <td>阳光观前网</td>
                <td>北京之声</td>
                <td>上海都市网</td>
                <td>中国时报网</td>
                <td>大众网 泰安</td>
            </tr>
            <tr>
                <td>荆楚荆门</td>
                <td>天津在线</td>
                <td>台海网</td>
                <td>楚北网</td>
                <td>扬子晚报</td>
                <td>湛江新闻网</td>
                <td>当代资讯网</td>
                <td>中华铁道网</td>
                <td>财经在线</td>
                <td>中财网</td>
            </tr>
            <tr>
                <td>金投网</td>
                <td>中华财会网</td>
                <td>中国产经新闻网</td>
                <td>中国崇阳网</td>
                <td>中国网 东海资讯</td>
                <td>时代资讯</td>
                <td>荆楚荆门</td>
                <td>西部网</td>
                <td>商洛之窗</td>
                <td>齐鲁晚报网</td>
            </tr>
            <tr>
                <td>传媒中国</td>
                <td>人民日报海外版</td>
                <td>今日头条</td>
                <td>东方网 生活</td>
                <td>半岛新闻网</td>
                <td>南京报业网</td>
                <td>闽南之窗</td>
                <td>铜陵新闻网</td>
                <td>今讯网</td>
                <td>山西经济日报</td>
            </tr>
            <tr>
                <td>南京在线</td>
                <td>深圳侨报</td>
                <td>柳州都市在线</td>
                <td>简阳之声</td>
                <td>三门峡生活网</td>
                <td>闽南网</td>
                <td>中国直销网</td>
                <td>中华企业新闻网</td>
                <td>创赢中国网</td>
                <td>绍兴都市网</td>
            </tr>
            <tr>
                <td>羊城百姓网</td>
                <td>诸城新闻网</td>
                <td>咸宁网</td>
                <td>中国清洁门户网</td>
                <td>惠州网</td>
                <td>中工网 河南</td>
                <td>无锡都市网</td>
                <td>凤凰网 辽宁</td>
                <td>铜陵都市在线</td>
                <td>中国财经时报网</td>
            </tr>
            <tr>
                <td>上海经济网</td>
                <td>东南之窗</td>
                <td>连江热线</td>
                <td>泰州生活资讯</td>
                <td>共识网</td>
                <td>深圳新闻网</td>
                <td>印象赤峰网</td>
                <td>青年导报网</td>
                <td>海西网</td>
                <td>辽一网 商业</td>
            </tr>
            <tr>
                <td>TOM 新闻</td>
                <td>中原网 资讯</td>
                <td>黄冈新视窗</td>
                <td>山西商人网</td>
                <td>慧聪网 商业</td>
                <td>廊坊财经网</td>
                <td>证券之星 要闻</td>
                <td>中国网 视窗</td>
                <td>览潮网 财经</td>
                <td>企业家在线</td>
            </tr>
            <tr>
                <td>邯郸之窗</td>
                <td>鲁西网</td>
                <td>南方企业新闻网</td>
                <td>中国网 视窗</td>
                <td>凤凰网 客户端</td>
                <td>苏州都市网</td>
                <td>白鹿网</td>
                <td>华新财经网</td>
                <td>水母网 财经</td>
                <td>中国创富品牌网</td>
            </tr>
            <tr>
                <td>广州热线3</td>
                <td>全球纺织网</td>
                <td>新浪 看点</td>
                <td>营口热线</td>
                <td>市场导报网</td>
                <td>汇能资讯</td>
                <td>羊城生活网</td>
                <td>舜网 财经</td>
                <td>中国商报网</td>
                <td>大余新城网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：合家网、赛迪网、飞象网、海峡都市报、中华网 山西、新浪网 青岛、东方今报网</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>140家综合健康医疗美容可发套餐：2888元</caption>
            <tbody>
            <tr>
                <td>医通无忧网</td>
                <td>健康新闻网</td>
                <td>互动百科</td>
                <td>中国医药网</td>
                <td>健康播报网</td>
                <td>医药之窗</td>
                <td>中国健康网</td>
                <td>知音</td>
                <td>太原新闻网</td>
                <td>百姓资讯网</td>
            </tr>
            <tr>
                <td>安徽在线</td>
                <td>中国企讯网</td>
                <td>中国信息网</td>
                <td>中国亳州网</td>
                <td>青年信息网</td>
                <td>淮安新闻网</td>
                <td>湖北网</td>
                <td>广州热线</td>
                <td>亿财网</td>
                <td>淮海网</td>
            </tr>
            <tr>
                <td>福建信息港</td>
                <td>南方之窗</td>
                <td>石家庄新闻网</td>
                <td>中国报讯网</td>
                <td>潮州电视台</td>
                <td>重庆晚报</td>
                <td>中国名牌网</td>
                <td>龙腾网</td>
                <td>杭州网</td>
                <td>湘潭在线</td>
            </tr>
            <tr>
                <td>杭州热线</td>
                <td>北京信息港</td>
                <td>中国工业信息网</td>
                <td>高密新闻网</td>
                <td>安徽热线</td>
                <td>湖北在线</td>
                <td>楼兰网</td>
                <td>柳州新闻网</td>
                <td>魅力华东</td>
                <td>南方都市</td>
            </tr>
            <tr>
                <td>珠海新闻网</td>
                <td>广佛都市网</td>
                <td>江苏之窗</td>
                <td>开封在线</td>
                <td>乐活中原</td>
                <td>浙江都市</td>
                <td>第一经济</td>
                <td>商业财经</td>
                <td>漳州新闻网</td>
                <td>临汾新闻网</td>
            </tr>
            <tr>
                <td>广州在线</td>
                <td>河北在线</td>
                <td>淄博新闻网</td>
                <td>常州网</td>
                <td>北方都市</td>
                <td>长江新闻网</td>
                <td>湖南都市</td>
                <td>生活新报网</td>
                <td>广东在线</td>
                <td>四川热线</td>
            </tr>
            <tr>
                <td>山东热线</td>
                <td>中原资讯网</td>
                <td>每日甘肃</td>
                <td>安徽都市</td>
                <td>宁化新闻网</td>
                <td>甘肃热线</td>
                <td>豫青网</td>
                <td>北方热线</td>
                <td>重庆之窗</td>
                <td>四川之窗</td>
            </tr>
            <tr>
                <td>华北都市</td>
                <td>广州都市</td>
                <td>广东信息港</td>
                <td>咸宁新闻网</td>
                <td>信息之窗</td>
                <td>刊布新闻网</td>
                <td>内蒙古热线</td>
                <td>北京热线</td>
                <td>南充新闻网</td>
                <td>达州日报网</td>
            </tr>
            <tr>
                <td>今闻网</td>
                <td>宜春新闻网</td>
                <td>运城新闻网</td>
                <td>中南报业</td>
                <td>西南视窗</td>
                <td>中国贵州网</td>
                <td>华南在线</td>
                <td>每日福建</td>
                <td>深圳在线</td>
                <td>江苏热线</td>
            </tr>
            <tr>
                <td>湛江新闻网</td>
                <td>孝感新闻网</td>
                <td>每日资讯网</td>
                <td>深圳热线</td>
                <td>中国西南网</td>
                <td>玉林电视网</td>
                <td>泰州新闻网</td>
                <td>潍坊新闻网</td>
                <td>九财网</td>
                <td>信息在线</td>
            </tr>
            <tr>
                <td>广西在线</td>
                <td>北京在线</td>
                <td>湖北之窗</td>
                <td>天津信息港</td>
                <td>123查网</td>
                <td>南京热线</td>
                <td>漯河新闻网</td>
                <td>广东热线</td>
                <td>天津热线</td>
                <td>辽宁信息港</td>
            </tr>
            <tr>
                <td>南方新闻网</td>
                <td>五财网</td>
                <td>河北都市</td>
                <td>广州新闻网</td>
                <td>伊犁新闻网</td>
                <td>西北视窗</td>
                <td>上海热线</td>
                <td>讯息在线</td>
                <td>每日江西</td>
                <td>海南之窗</td>
            </tr>
            <tr>
                <td>安阳新闻网</td>
                <td>西北热线</td>
                <td>黑龙江在线</td>
                <td>经济资讯</td>
                <td>上海在线</td>
                <td>三峡传媒</td>
                <td>嘉鱼新闻网</td>
                <td>池州新闻网</td>
                <td>前沿焦点</td>
                <td>来财网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 南方在线 兰州新闻网 财经网 科技之窗 陕西热线 宁夏在线 江苏在线 湘潭新闻网 广东都市
                    吉林热线
                </td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>108家汽车大套餐：2888元</caption>
            <tbody>
            <tr>
                <td>中国汽车网</td>
                <td>魅力汽车网</td>
                <td>中南汽车网</td>
                <td>百姓资讯网</td>
                <td>刊布新闻网</td>
                <td>湖北网</td>
                <td>南方新闻网</td>
                <td>青海新闻网</td>
                <td>山东车市网</td>
                <td>吉林汽车网</td>
            </tr>
            <tr>
                <td>IT产业网</td>
                <td>中国贵州网</td>
                <td>杭州热线</td>
                <td>南方在线</td>
                <td>南充新闻网</td>
                <td>浙江汽车网</td>
                <td>辽宁汽车网</td>
                <td>经济资讯</td>
                <td>广西在线</td>
                <td>北京信息港</td>
            </tr>
            <tr>
                <td>南京热线</td>
                <td>爵车汽车网</td>
                <td>江西汽车网</td>
                <td>福建汽车网</td>
                <td>安徽在线</td>
                <td>广州都市</td>
                <td>广州热线</td>
                <td>内蒙古热线</td>
                <td>马鞍山声屏网</td>
                <td>汽车安徽网</td>
            </tr>
            <tr>
                <td>浙江汽车网</td>
                <td>安徽都市</td>
                <td>广州在线</td>
                <td>吉林热线</td>
                <td>宁夏在线</td>
                <td>莆田新闻网</td>
                <td>广州汽车网</td>
                <td>湖南汽车网</td>
                <td>北方都市</td>
                <td>新闻采编网</td>
            </tr>
            <tr>
                <td>江苏热线</td>
                <td>上海热线</td>
                <td>四川全搜索网</td>
                <td>黑龙江车市</td>
                <td>黔讯网汽车</td>
                <td>北方热线</td>
                <td>河北在线</td>
                <td>江苏在线</td>
                <td>华南在线</td>
                <td>华南汽车网</td>
            </tr>
            <tr>
                <td>每日汽车网</td>
                <td>新疆新丝路</td>
                <td>北京在线</td>
                <td>安徽热线</td>
                <td>江苏之窗</td>
                <td>青海在线</td>
                <td>青海汽车网</td>
                <td>商业汽车网</td>
                <td>科技之窗</td>
                <td>北京热线</td>
            </tr>
            <tr>
                <td>湖北在线</td>
                <td>江苏资讯网</td>
                <td>四川热线</td>
                <td>甘肃汽车网</td>
                <td>西南汽车网</td>
                <td>第一经济</td>
                <td>每日福建</td>
                <td>湖北之窗</td>
                <td>每日江西</td>
                <td>四川之窗</td>
            </tr>
            <tr>
                <td>安徽汽车网</td>
                <td>黑龙江汽车网</td>
                <td>商业财经</td>
                <td>福建信息港</td>
                <td>河北都市</td>
                <td>前沿焦点</td>
                <td>山东热线</td>
                <td>南方汽车网</td>
                <td>华北汽车网</td>
                <td>中国名牌网</td>
            </tr>
            <tr>
                <td>南方之窗</td>
                <td>黑龙江在线</td>
                <td>开封在线</td>
                <td>西北热线</td>
                <td>百姓汽车网</td>
                <td>西北汽车网</td>
                <td>中国报讯网</td>
                <td>广东信息港</td>
                <td>黑龙江热线</td>
                <td>中国辽宁网</td>
            </tr>
            <tr>
                <td>广东汽车网</td>
                <td>广东汽车网</td>
                <td>中国信息网</td>
                <td>广东在线</td>
                <td>湖南热线</td>
                <td>辽宁信息港</td>
                <td>天津车市网</td>
                <td>宁夏汽车网</td>
                <td>天下财经</td>
                <td>甘肃热线</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 湖南都市 魅力华东 江苏汽车网 河北汽车网 青年信息网 每日资讯网 海南之窗 南方都市</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>108家科技数码大套餐：2888元</caption>
            <tbody>
            <tr>
                <td>科技之窗</td>
                <td>北方热线</td>
                <td>刊布新闻网</td>
                <td>海南之窗</td>
                <td>中国辽宁网</td>
                <td>四川之窗</td>
                <td>今闻网</td>
                <td>贼游游戏网</td>
                <td>甘肃都市</td>
                <td>中国贵州网</td>
            </tr>
            <tr>
                <td>湖北网</td>
                <td>辽宁信息港</td>
                <td>山东热线</td>
                <td>第一经济</td>
                <td>IT产业网</td>
                <td>广东热线</td>
                <td>广西在线</td>
                <td>杭州热线</td>
                <td>魅力华东</td>
                <td>西北热线</td>
            </tr>
            <tr>
                <td>商业财经</td>
                <td>经济资讯</td>
                <td>北京在线</td>
                <td>广州都市</td>
                <td>北京信息港</td>
                <td>南方都市</td>
                <td>上海在线</td>
                <td>北京IT网</td>
                <td>中国名牌网</td>
                <td>信息在线</td>
            </tr>
            <tr>
                <td>广州在线</td>
                <td>讯息在线</td>
                <td>武汉热线</td>
                <td>陕西热线</td>
                <td>上海科技网</td>
                <td>中国报讯网</td>
                <td>财经网</td>
                <td>新闻采编网</td>
                <td>来财网</td>
                <td>南方新闻网</td>
            </tr>
            <tr>
                <td>山西热线</td>
                <td>天津数码网</td>
                <td>中国信息网</td>
                <td>广东在线</td>
                <td>河北在线</td>
                <td>广州热线</td>
                <td>南方在线</td>
                <td>深圳热线</td>
                <td>深圳IT网</td>
                <td>天下财经</td>
            </tr>
            <tr>
                <td>中国企讯网</td>
                <td>安徽热线</td>
                <td>吉林热线</td>
                <td>南京热线</td>
                <td>深圳在线</td>
                <td>广东数码网</td>
                <td>青年信息网</td>
                <td>亿财网</td>
                <td>湖北在线</td>
                <td>江苏热线</td>
            </tr>
            <tr>
                <td>内蒙古热线</td>
                <td>天津热线</td>
                <td>浙江IT网</td>
                <td>中南报业</td>
                <td>北京热线</td>
                <td>湖北之窗</td>
                <td>江苏在线</td>
                <td>宁夏在线</td>
                <td>天津信息港</td>
                <td>浙江科技网</td>
            </tr>
            <tr>
                <td>中国推讯网</td>
                <td>每日福建</td>
                <td>河北都市</td>
                <td>西北视窗</td>
                <td>信息之窗</td>
                <td>西南视窗</td>
                <td>江苏it网</td>
                <td>九财网</td>
                <td>福建信息港</td>
                <td>广东都市</td>
            </tr>
            <tr>
                <td>江苏之窗</td>
                <td>五财网</td>
                <td>中国西南网</td>
                <td>安徽科技网</td>
                <td>百姓资讯网</td>
                <td>南方之窗</td>
                <td>黑龙江在线</td>
                <td>江苏资讯网</td>
                <td>上海热线</td>
                <td>浙江都市</td>
            </tr>
            <tr>
                <td>安徽在线</td>
                <td>广东信息港</td>
                <td>黑龙江热线</td>
                <td>每日江西</td>
                <td>华南在线</td>
                <td>浙江信息港</td>
                <td>安徽都市</td>
                <td>甘肃热线</td>
                <td>湖南热线</td>
                <td>前沿焦点</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 青海在线 中南之窗 北方都市 每日资讯网 湖南都市 开封在线 四川热线 华北都市</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>688元100家小站套餐</caption>
            <tbody>
            <tr>
                <td>合肥网</td>
                <td>沽俯在线</td>
                <td>珠海热线</td>
                <td>九江热线</td>
                <td>东莞热线</td>
                <td>江浙资讯</td>
                <td>大河北网</td>
                <td>大京网</td>
                <td>东北之声</td>
                <td>大庆视窗</td>
            </tr>
            <tr>
                <td>厦门信息</td>
                <td>青岛在线</td>
                <td>温州信息</td>
                <td>上海资讯</td>
                <td>郑州在线</td>
                <td>汉中热线</td>
                <td>北方企业网</td>
                <td>魅力兰州</td>
                <td>黄河资讯网</td>
                <td>大津网</td>
            </tr>
            <tr>
                <td>粤城之音</td>
                <td>天府报讯</td>
                <td>朝阳网</td>
                <td>魅力陕西</td>
                <td>黄山都市</td>
                <td>江苏之窗</td>
                <td>山西信息网</td>
                <td>中国西宁</td>
                <td>中原之窗</td>
                <td>科技在线</td>
            </tr>
            <tr>
                <td>海南都市</td>
                <td>福建都市</td>
                <td>无锡热线</td>
                <td>中国辽源网</td>
                <td>陕西信息港</td>
                <td>黔南信息网</td>
                <td>赣城之声</td>
                <td>海岛网</td>
                <td>色彩山东</td>
                <td>中国企讯息网</td>
            </tr>
            <tr>
                <td>陇南热线</td>
                <td>佛山之声</td>
                <td>安徽在线</td>
                <td>贵州之窗</td>
                <td>云南信息</td>
                <td>东北在线</td>
                <td>西南在线</td>
                <td>大北网</td>
                <td>长春网</td>
                <td>中国嘉峪关网</td>
            </tr>
            <tr>
                <td>今日企讯网</td>
                <td>北京生活网</td>
                <td>牡丹江在线</td>
                <td>广州网</td>
                <td>大蒙古网</td>
                <td>魅力内江网</td>
                <td>承德网</td>
                <td>大连在线</td>
                <td>广州信息</td>
                <td>早闻天下</td>
            </tr>
            <tr>
                <td>泉州之窗</td>
                <td>大同之声</td>
                <td>黔网在线</td>
                <td>无锡在线</td>
                <td>四川资讯</td>
                <td>贵州都市</td>
                <td>中国固原网</td>
                <td>企业讯闻网</td>
                <td>长沙之窗</td>
                <td>河北视窗</td>
            </tr>
            <tr>
                <td>中国企讯网</td>
                <td>社会频道</td>
                <td>天津报讯网</td>
                <td>贵阳都市</td>
                <td>芜湖之窗</td>
                <td>企业快讯网</td>
                <td>北京信息网</td>
                <td>神州网</td>
                <td>常州热线</td>
                <td>随州热线</td>
            </tr>
            <tr>
                <td>视窗热线</td>
                <td>大连热线</td>
                <td>湖北信息网</td>
                <td>湖州视窗</td>
                <td>大南网</td>
                <td>台江网</td>
                <td>宿州热线</td>
                <td>中国南门网</td>
                <td>金山信息网</td>
                <td>成都之声</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 长春热线 每日电讯网 中讯频道 徽城在线 冀城频道 兴宁热线 海宁信息网 效能日报 海南信息网
                    中网报讯
                </td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>800财经套餐(十大财经类网站）</caption>
            <tbody>
            <tr>
                <td>中华网 财经</td>
                <td>金融界 财富</td>
                <td>第一金融网</td>
                <td>华商网</td>
                <td>中国网 投资</td>
                <td>北方网 财经</td>
                <td>国际在线 企业</td>
                <td>金投网</td>
                <td>证券之星 要闻</td>
                <td>市场导报网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：中国商报网、TOM、新快网、国际财经时报、南方财富网、中国财经网等</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>100元超值外链套餐</caption>
            <tbody>
            <tr>
                <td>宜春网</td>
                <td>羊城生活网</td>
                <td>简阳之声</td>
                <td>徐州在线</td>
                <td>泰州生活资讯</td>
                <td>上海经济网</td>
                <td>连江热线</td>
                <td>广州热线</td>
                <td>浙江企业网</td>
                <td>海西网</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 天津之声 北京之声 南通都市网 柳州都市在线 东莞之窗 达州之声 宜春网</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>600元科技套餐（十大科技类网站）</caption>
            <tbody>
            <tr>
                <td>IT168</td>
                <td>泡泡网</td>
                <td>赛迪网</td>
                <td>飞象网</td>
                <td>乐购科技</td>
                <td>比特网</td>
                <td>计世网</td>
                <td>中关村商情</td>
                <td>硅谷网</td>
                <td>驱动中国</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：IT世界、北方网 IT、科易网、IT专家、南方网 科技</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>700元家居套餐（十大房产家居网站）</caption>
            <tbody>
            <tr>
                <td>南方网 家居</td>
                <td>合家网</td>
                <td>家天下</td>
                <td>腾讯家居</td>
                <td>中国网 地产中国</td>
                <td>猎房网</td>
                <td>太平洋家居网</td>
                <td>搜狐 家居</td>
                <td>新浪网 家居</td>
                <td>MSN家居</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：慧聪网 房产、房讯网、爱房网、网易 家居、河源优房网</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>900元汽车套餐（十大汽车类网站）</caption>
            <tbody>
            <tr>
                <td>车神榜</td>
                <td>国际在线 汽车</td>
                <td>车天下</td>
                <td>第一车网</td>
                <td>汽车大世界</td>
                <td>亚讯车网</td>
                <td>太平洋汽车网</td>
                <td>易车网</td>
                <td>长城网 汽车</td>
                <td>汽车点评</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：车迷之家、网上车市、爱卡汽车 天津、东方网 汽车</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>900元时尚套餐（十大时尚类媒体）</caption>
            <tbody>
            <tr>
                <td>搜狐 时尚</td>
                <td>芭莎时尚网</td>
                <td>第三时尚网</td>
                <td>海报时尚网</td>
                <td>星爪时尚网</td>
                <td>齐美丽人网</td>
                <td>太平洋时尚网</td>
                <td>米娜时尚网</td>
                <td>昕薇网</td>
                <td>YOKA品牌</td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 备选：太平洋女性网、南方网 时尚、伊人时尚网、嘉人网、爱美网、361女性网</td>
            </tr>
            </tbody>
        </table>
        <table class="imagetable">
            <caption>800元健康套餐（十大医疗健康网站）</caption>
            <tbody>
            <tr>

                <td>163健康网</td>
                <td>39健康网</td>
                <td>中国好医生</td>
                <td>北青网 健康</td>
                <td>百家健康网</td>
                <td>大河网 健康</td>
                <td>100医药网</td>
                <td>医通无忧网</td>
                <td>中华网 健康</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="10"><span style="color:#e46b25">更多 </span> 120健康网 备选：大众健康网、中国健康门户网、南方健康网、大众健康网</td>
            </tr>
            </tbody>
        </table>        <!-- 青岛火一五信息科技有限公司huo15.com phpExcel 导入新闻资源数据表格 日期：2017/2/20 end -->







        <!-- 青岛火一五信息科技有限公司huo15.com phpExcel 导入新闻资源数据表格 日期：2017/2/20 -->
        <?php

        error_reporting(E_ALL);
        set_time_limit(0);

        ini_set('memory_limit','500M');
        //   /Volumes/18554898815/WORK/mackBook/tinaWWW/php/QDadvertorial/
        require_once ROOT_PATH . "huo15template/org/phpexcel/PHPExcel/IOFactory.php";
        require_once "../huo15template/org/phpexcel/filter/ColumFilter.php";
        $filename = ROOT_PATH . "huo15template/excel/ExcelPackage/January.xlsx";

        /*//第二个worksheet
        $worksheetName = "550元超值200家套餐";

        generate_table($filename, $worksheetName);

        //3个worksheet

        $worksheetName = "500元门户套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "综合套餐60家2000";
        generate_table($filename, $worksheetName);

        $worksheetName = "综合套餐120家4000";
        generate_table($filename, $worksheetName);

        $worksheetName = "2888健康医疗美容套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "2888汽车大套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "2888元科技数码大套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "650元100家小站套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "800元财经套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "100元超值外链套餐";
        generate_table($filename, $worksheetName);

        $worksheetName = "600元科技套餐";
        generate_table($filename, $worksheetName);
        $worksheetName = "700元家居套餐";
        generate_table($filename, $worksheetName);
        $worksheetName = "900元汽车套餐";
        generate_table($filename, $worksheetName);
        $worksheetName = "900元时尚套餐";
        generate_table($filename, $worksheetName);
        $worksheetName = "800元健康套餐";
        generate_table($filename, $worksheetName);*/







        function generate_table($filename, $worksheetName) {
	        $filetype = PHPExcel_IOFactory::identify($filename);// for example: Excel2007
	        /** @var PHPExcel_Reader_IReader $objReader */
	        $objReader = PHPExcel_IOFactory::createReader($filetype);
	        $objReader->setReadDataOnly(true);
	        $objReader->setReadFilter( new ColumFilter($worksheetName) );
	        $objReader->setLoadSheetsOnly( array($worksheetName) );
	        /** @var PHPExcel  $objPHPExcel */
	        $objPHPExcel = $objReader->load($filename);
	        $sheetCount = $objPHPExcel->getSheetCount();

	        if (!$sheetCount) {
		        die("Excel error!");
	        }
	        /** @var PHPExcel_Worksheet $sheet */
	        $sheet = $objPHPExcel->getActiveSheet();


	        //$sheetCount = $objPHPExcel->getSheetCount();

	        //$sheetData = $objPHPExcel->getSheet(0)->toArray();
	        //var_dump($sheetData);die;

	        echo '<table class="imagetable">';
	        echo '<caption>',$sheet->getCell("A1")->getValue(),'</caption>';


	        $tmpArray = array();
	        foreach ($objPHPExcel->getWorksheetIterator() as $sheet) { //循环取sheet
		        foreach ($sheet->getRowIterator() as $row) { //逐行处理
			        if ($row->getRowIndex() < 2) {
				        continue;
			        }
			        if ($row->getRowIndex() > 30) {
			            break;
                    }


			        foreach ($row->getCellIterator() as $cell) {//逐列处理

				        $sheetData = $cell->getValue(); //获取单元格数据
				        if ($sheetData) {
				           array_push($tmpArray, $sheetData);
                        }



			        }

		        }
	        }



            $chunkArray = array_chunk($tmpArray,10);

	        foreach ($chunkArray as $key=>$value) {
	            if ($key == count($chunkArray) - 1 ) {
		            echo '<tr><td colspan="10"><span style="color:#e46b25">更多 </span>   ';
		            foreach ($value as $val) {

			            echo  $val . " ";

		            }
		            echo '</td></tr>';
                } else {
		            echo '<tr>';
		            foreach ($value as $val) {
			            echo '<td>';
			            echo $val;
			            echo '</td>';
		            }
		            echo '</tr>';
                }

            }




	        echo '</table>';
        }



        ?>
        <!-- 青岛火一五信息科技有限公司huo15.com phpExcel 导入新闻资源数据表格 日期：2017/2/20 end -->


        <dl style="display: none;">
			<dd>
				<img src="../huo15template/img/taocan/60.png" alt="60家综合套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/120.png" alt="120家综合套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/100.png" alt="688元100家小站套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/108.png" alt="2888科技数码套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/108car.png" alt="2888汽车套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/140.png" alt="2888医疗健康套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/10.png" alt="财经套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/200.png" alt="超值550元200家套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/700house.png" alt="家居套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/800healthy.png" alt="健康套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/800healthy.png" alt="科技套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/beautifulChina.png" alt="美丽中国套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/500portal.png" alt="门户套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/900car.png" alt="汽车套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/fashion.png" alt="时尚套餐">
			</dd>
			<dd>
				<img src="../huo15template/img/taocan/100url.png" alt="外链套餐">
			</dd>

		</dl>

	</div>
</div>
<!--main end-->
<?php
include("../footer.php");
?>
<!--王庆路 主页qq联系栏-->
<script charset="utf-8" src="/huo15template/js/ServiceQQ.js"></script>
<!--王庆路 主页qq联系栏 end-->
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
<!--轮播器-->
<script type="text/javascript">
  var jq310 = jQuery.noConflict(true);
  console.log($().jquery);//往下就是1.4.2
</script>
<script src="../huo15template/js/jquery.SuperSlide.2.1.2.source.js"></script>

<script>
  $(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "leftLoop",
    vis: "auto",
    autoPlay: true,
    autoPage: true,
    trigger: "click"
  });
</script>
<style>
  * {
    zoom: 1
  }

  .fullSlide {
    position: relative;
    background: #000;
    margin: 0 auto;
  }

  .fullSlide .bd {
    position: relative;
    z-index: 0;
  }

  .fullSlide .bd li img {
    width: 100%;
    vertical-align: top;
  }

  .fullSlide .hd {
    position: relative;
    z-index: 1;
    margin-top: -30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    background: #000;
    filter: alpha(opacity=60);
    opacity: 0.6
  }

  .fullSlide .hd ul {
    text-align: center;
    padding-top: 5px;
  }

  .fullSlide .hd ul li {
    cursor: pointer;
    display: inline-block;
    *display: inline;
    zoom: 1;
    width: 8px;
    height: 8px;
    margin: 5px;
    background: url(../huo15template/img/tg_flash_p.png) -18px 0;
    overflow: hidden;
    font-size: 0;
  }

  .fullSlide .hd ul .on {
    background-position: 0 0;
  }

  .fullSlide .prev, .fullSlide .next {
    z-index: 1;
    display: block;
    width: 55px;
    height: 55px;
    position: relative;
    margin: -15% 0 0 3%;
    float: left;
    background: url(../huo15template/img/arrow.png) 0 0 no-repeat;
    filter: alpha(opacity=40);
    opacity: 0.4
  }

  .fullSlide .next {
    background-position: right 0;
    float: right;
    margin-right: 3%
  }

  .fullSlide .prev:hover, .fullSlide .next:hover {
    filter: alpha(opacity=80);
    opacity: 0.8
  }
</style>
<!--轮播器 end-->


</body>
</html>
