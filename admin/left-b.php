<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<HTML>
<HEAD>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<script language='javascript'>var curopenItem = '1';</script>
<script language="javascript" type="text/javascript" src="skin/js/frame/menu.js"></script>
</HEAD>
<BODY>
	<script language="JavaScript" type="text/javascript" id="clientEventHandlersJS">
<!--
var number=10;

function LMYC() {
var lbmc;
//var treePic;
    for (i=1;i<=number;i++) {
        lbmc = eval('LM' + i);
        //treePic = eval('treePic'+i);
        //treePic.src = 'images/file.gif';
        lbmc.style.display = 'none';
    }
}
 
function ShowFLT(i) {
    lbmc = eval('LM' + i);
    //treePic = eval('treePic' + i)
    if (lbmc.style.display == 'none') {
        LMYC();
        //treePic.src = 'images/nofile.gif';
        lbmc.style.display = '';
    }
    else {
        //treePic.src = 'images/file.gif';
        lbmc.style.display = 'none';
    }
}
//-->
    </script>
<a onclick="javascript:ShowFLT(1)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>会员管理</h3></a>
<ul id="LM1">
<li id="_MP1" class="sub_menu"><a href="javascript:_MP(1,'chongzhi.php');" hidefocus="true" style="outline:none;">我要充值</a></li>
<li id="_MP2" class="sub_menu"><a href="javascript:_MP(2,'tixianlist.php');" hidefocus="true" style="outline:none;">提现记录</a></li>
<li id="_MP3" class="sub_menu"><a href="javascript:_MP(3,'caiwu.php');" hidefocus="true" style="outline:none;">财务报表</a></li>
<li id="_MP4" class="sub_menu"><a href="javascript:_MP(4,'editpass.php');" hidefocus="true" style="outline:none;">修改密码</a></li>
<li id="_MP5" class="sub_menu"><a href="javascript:_MP(5,'viplist.php');" hidefocus="true" style="outline:none;">会员列表</a></li>
</ul>
<a onclick="javascript:ShowFLT(2)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>软文管理</h3></a>
<ul id="LM2" style="DISPLAY: none">
<li id="_MP6" class="sub_menu"><a href="javascript:_MP(6,'ruanwen_add.php');" hidefocus="true" style="outline:none;">软文发布</a></li>
<li id="_MP7" class="sub_menu"><a href="javascript:_MP(7,'ruanwen.php');" hidefocus="true" style="outline:none;">软文列表</a></li>
</ul>
<a onclick="javascript:ShowFLT(3)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>代写管理</h3></a>
<ul id="LM3" style="DISPLAY: none">
<li id="_MP8" class="sub_menu"><a href="javascript:_MP(8,'daixie_add.php');" hidefocus="true" style="outline:none;">代写发布</a></li>
<li id="_MP9" class="sub_menu"><a href="javascript:_MP(9,'daixie.php');" hidefocus="true" style="outline:none;">代写列表</a></li>
</ul>
<a onclick="javascript:ShowFLT(4)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>资讯管理</h3></a>
<ul id="LM4" style="DISPLAY: none">
<li id="_MP10" class="sub_menu"><a href="javascript:_MP(10,'managebigclass.php?titleID=news');" hidefocus="true" style="outline:none;">资讯类型管理</a></li>
<li id="_MP11" class="sub_menu"><a href="javascript:_MP(11,'addbigclass.php?titleID=news');" hidefocus="true" style="outline:none;">添加资讯信息</a></li>
<li id="_MP12" class="sub_menu"><a href="javascript:_MP(12,'managebiginfo.php?titleID=news');" hidefocus="true" style="outline:none;">管理资讯信息</a></li>
</ul>
<a onclick="javascript:ShowFLT(5)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>反馈管理</h3></a>
<ul id="LM5" style="DISPLAY: none">
<li id="_MP13" class="sub_menu"><a href="javascript:_MP(13,'work_list.php?titleID=ask');" hidefocus="true" style="outline:none;">问题反馈列表</a></li>
</ul>
<a onclick="javascript:ShowFLT(6)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>媒体管理</h3></a>
<ul id="LM6" style="DISPLAY: none">
<li id="_MP14" class="sub_menu"><a href="javascript:_MP(14,'managenavbigclass.php?titleID=nav');" hidefocus="true" style="outline:none;">媒体大类管理</a></li>
<li id="_MP15" class="sub_menu"><a href="javascript:_MP(15,'managemtsmallclass.php?titleID=media');" hidefocus="true" style="outline:none;">媒体小类管理</a></li>
<li id="_MP31" class="sub_menu"><a href="javascript:_MP(31,'managemtclass.php?titleID=media');" hidefocus="true" style="outline:none;">特殊类别管理</a></li>
<li id="_MP16" class="sub_menu"><a href="javascript:_MP(16,'managedqbigclass.php?titleID=diqu');" hidefocus="true" style="outline:none;">媒体地区管理</a></li>
<li id="_MP17" class="sub_menu"><a href="javascript:_MP(17,'managemhbigclass.php?titleID=menhu');" hidefocus="true" style="outline:none;">门户媒体管理</a></li>
<li id="_MP18" class="sub_menu"><a href="javascript:_MP(18,'addmtbigclass.php?titleID=media');" hidefocus="true" style="outline:none;">添加媒体资源</a></li>
<li id="_MP19" class="sub_menu"><a href="javascript:_MP(19,'managemtbiginfo.php?titleID=media');" hidefocus="true" style="outline:none;">管理媒体资源</a></li>
<li id="_MP20" class="sub_menu"><a href="javascript:_MP(20,'managemtbiginfo1.php?titleID=media');" hidefocus="true" style="outline:none;">待审媒体资源</a></li>
<li id="_MP21" class="sub_menu"><a href="javascript:_MP(21,'editmtprice.php?titleID=media');" hidefocus="true" style="outline:none;">媒体批量改价</a></li>
</ul>
<a onclick="javascript:ShowFLT(7)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>网站管理</h3></a>
<ul id="LM7" style="DISPLAY: none">
<li id="_MP22" class="sub_menu"><a href="javascript:_MP(22,'setinfo.php');" hidefocus="true" style="outline:none;">网站信息设置</a></li>
<li id="_MP23" class="sub_menu"><a href="javascript:_MP(23,'manageadmin.php');" hidefocus="true" style="outline:none;">管理帐号设置</a></li>
<li id="_MP24" class="sub_menu"><a href="javascript:_MP(24,'managebank.php');" hidefocus="true" style="outline:none;">银行帐号设置</a></li>
<li id="_MP25" class="sub_menu"><a href="javascript:_MP(25,'alipay.php');" hidefocus="true" style="outline:none;">充值支付宝设置</a></li>
<!--li id="_MP25" class="sub_menu"><a href="javascript:_MP(25,'manageabout.php?titleID=about');" hidefocus="true" style="outline:none;">公司简介设置</a></li>
<li id="_MP26" class="sub_menu"><a href="javascript:_MP(26,'manageabout.php?titleID=contact');" hidefocus="true" style="outline:none;">联系我们设置</a></li-->
</ul>
<a onclick="javascript:ShowFLT(8)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>栏目设置</h3></a>
<ul id="LM8" style="DISPLAY: none">
<li id="_MP27" class="sub_menu"><a href="javascript:_MP(27,'manageclass.php?titleID=page_seo');" hidefocus="true" style="outline:none;">栏目添加维护</a></li>
</ul>
<a onclick="javascript:ShowFLT(9)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>链接管理</h3></a>
<ul id="LM9" style="DISPLAY: none">
<li id="_MP28" class="sub_menu"><a href="javascript:_MP(28,'managelinkbigclass.php');" hidefocus="true" style="outline:none;">友情链接管理</a></li>
</ul>
<a onclick="javascript:ShowFLT(10)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>数据管理</h3></a>
<ul id="LM10" style="DISPLAY: none">
<li id="_MP29" class="sub_menu"><a href="javascript:_MP(29,'save_data.php?action=export');" hidefocus="true" style="outline:none;">备份数据库</a></li>
<li id="_MP30" class="sub_menu"><a href="javascript:_MP(30,'save_data.php?action=import');" hidefocus="true" style="outline:none;">还原数据库</a></li>
</ul>
</BODY>
</HTML>
