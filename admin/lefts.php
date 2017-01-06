<?php
//include ("../include/config.php");
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
var number=1;

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
<a onclick="javascript:ShowFLT(1)" href="javascript:void(null)"><h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>数据管理</h3></a>
<ul id="LM1" style="DISPLAY: none">
<li id="_MP1" class="sub_menu"><a href="javascript:_MP(1,'save_data.php?action=export');" hidefocus="true" style="outline:none;">备份数据库</a></li>
<li id="_MP2" class="sub_menu"><a href="javascript:_MP(2,'save_data.php?action=import');" hidefocus="true" style="outline:none;">还原数据库</a></li>
</ul>
</BODY>
</HTML>
