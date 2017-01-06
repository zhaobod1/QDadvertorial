<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<html>
<head>
<title>menu</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<link rel="stylesheet" href="skin/css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language='javascript'>var curopenItem = '1';</script>
<script language="javascript" type="text/javascript" src="skin/js/frame/menu.js"></script>
<base target="main" /></head>
<body target="main">
<table width='99%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td height="16"><div align="center"></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="images/leftlist_bg.jpg">
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
        <table width="150" border="0" cellpadding="0" cellspacing="2" class="md" bgcolor="#FFFFFF">
          <tr>
            <td height="26" background="images/menubg.gif"><div align="center"><a onclick="javascript:ShowFLT(1)" href="javascript:void(null)">网站设置</a></div></td>
          </tr>
          <tr id="LM1">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
                <tr>
                  <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                  <td width="71%" height="20" class="p1"> <div align="left"><a href="setinfo.php" target="main">网站信息设置</a></div></td>
                </tr>
				<tr>
                  <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
				  <td height="20" class="p1"><div align="left"><a href="manageadmin.php" target="main">后台用户管理</a></div></td>
			  </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(2)" href="javascript:void(null)">栏目设置</a></div></td>
          </tr>
          <tr id="LM2" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="manageclass.php?titleID=page_seo" target="main">栏目添加维护</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(3)" href="javascript:void(null)">新闻中心管理</a></div></td>
          </tr>
          <tr id="LM3" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="managebigclass.php?titleID=news" target="main">新闻类型管理</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="addbigclass.php?titleID=news" target="main">添加新闻信息</a></div></td>
              </tr>
			  <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="managebiginfo.php?titleID=news" target="main">管理新闻信息</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(4)" href="javascript:void(null)">行业知识管理</a></div></td>
          </tr>
          <tr id="LM4" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="managebigclass.php?titleID=zxnews" target="main">行业类型管理</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="addbigclass.php?titleID=zxnews" target="main">添加行业知识</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="managebiginfo.php?titleID=zxnews" target="main">管理行业知识</a></div></td>
              </tr>
            </table></td>
          </tr>
		  <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(5)" href="javascript:void(null)">产品中心管理</a></div></td>
          </tr>
          <tr id="LM5" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="managecpbigclass.php?titleID=cpnews" target="main">产品类型管理</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="addcpbigclass.php?titleID=cpnews" target="main">添加产品信息</a></div></td>
              </tr>
              
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="70%" height="20" class="p1"><div align="left"><a href="managecpbiginfo.php?titleID=cpnews" target="main">管理产品信息</a></div></td>
              </tr>
            </table></td>
          </tr>
		  <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(6)" href="javascript:void(null)">网站单页管理</a> </div></td>
          </tr>
          <tr id="LM6" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="manageabout.php?titleID=about" target="main">公司简介</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="manageabout.php?titleID=contact" target="main">联系我们</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(7)" href="javascript:void(null)">首页动画设置</a> </div></td>
          </tr>
          <tr id="LM7" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="managepiclinkbigclass.php" target="main">滚动图片设置</a></div></td>
              </tr>
            </table></td>
          </tr>
		  <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(8)" href="javascript:void(null)">友情链接管理</a> </div></td>
          </tr>
          <tr id="LM8" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="managelinkbigclass.php" target="main">链接管理</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(9)" href="javascript:void(null)">文件管理器</a> </div></td>
          </tr>
          <tr id="LM9" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="loaddir.php" target="main">文件管理</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="images/menubg.gif" height="26"><div align="center"><a onclick="javascript:ShowFLT(10)" href="javascript:void(null)">数据库管理</a> </div></td>
          </tr>
          <tr id="LM10" style="DISPLAY: none">
            <td bgcolor="#FFFFFF"><table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="29%" height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td width="71%" height="20" class="p1"><div align="left"><a href="save_data.php?action=export" target="main">备份数据库</a></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><img src="images/bullet.gif" width="15" height="15" border="0" /></div></td>
                <td height="20" class="p1"><div align="left"><a href="save_data.php?action=import" target="main">还原数据库</a></div></td>
              </tr>
            </table></td>
          </tr>
      </table></td>
  </tr>
</table>
</body>
</html>