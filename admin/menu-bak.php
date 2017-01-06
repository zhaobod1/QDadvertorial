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
    <td style='padding-left:3px;padding-top:8px' valign="top">
      <dl class='bitem'>
        <dt onClick='showHide("items1_1")'><b>网站设置</b></dt>
      </dl>
      <dl class='bitem'>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='setinfo.php' target='main'>网站信息设置</a></li>
            <li><a href="manageadmin.php">后台用户管理</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>栏目优化</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
			<li><a href="manage_seo.php?ID=1" target="main">新闻中心栏目</a></li>
            <li><a href="manage_seo.php?ID=2" target="main">行业知识栏目</a></li>
			<li><a href="manage_seo.php?ID=3" target="main">产品中心栏目</a></li>
			<li><a href="manage_seo.php?ID=4" target="main">公司简介栏目</a></li>
			<li><a href="manage_seo.php?ID=5" target="main">联系我们栏目</a></li>
			<li><a href="manage_seo.php?ID=6" target="main">烟道机栏目</a></li>
          </ul>
        </dd>
      </dl>
 
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>新闻中心管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='managebigclass.php?titleID=news' target='main'>新闻类型管理</a></li>
            <li><a href='addbigclass.php?titleID=news' target='main'>添加新闻信息</a></li>
            <li><a href='managebiginfo.php?titleID=news' target='main'>新闻信息管理</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>行业知识管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='managebigclass.php?titleID=zxnews' target='main'>行业类型管理</a></li>
            <li><a href='addbigclass.php?titleID=zxnews' target='main'>添加行业知识</a></li>
            <li><a href='managebiginfo.php?titleID=zxnews' target='main'>行业知识管理</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>产品中心管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='managecpbigclass.php?titleID=cpnews' target='main'>产品类型管理</a></li>
            <li><a href='addcpbigclass.php?titleID=cpnews' target='main'>添加产品信息</a></li>
            <li><a href='managecpbiginfo.php?titleID=cpnews' target='main'>管理产品信息</a></li>
          </ul>
        </dd>
      </dl>
	  
<!--dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>产品中心管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='managelvprobigclass.php' target='main'>产品类型管理</a></li>
            <li><a href='addlvprosmallinfo.php' target='main'>添加产品信息</a></li>
            <li><a href='managelvproinfo.php' target='main'>管理产品信息</a></li>
          </ul>
        </dd>
      </dl-->
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><strong>网站单页管理</strong></dt>
        <dd style='display:block' class='sitem' id='items2_1'><ul class='sitemu'>
          <li><a href="manageabout.php?titleID=about" target="main">公司简介</a></li>
		  <li><a href="manageabout.php?titleID=contact" target="main">联系我们</a></li>
		  <li><a href="manageabout.php?titleID=aboutydj" target="main">烟道机</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>首页滚动图片管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='managepiclinkbigclass.php' target='main'>滚动图片管理</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>友情链接管理</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
			<li><a href='managelinkbigclass.php' target='main'>链接管理</a></li>
          </ul>
        </dd>
      </dl>
	  
<dl class='bitem'>
        <dt onClick='showHide("items2_1")'><strong>数据库管理</strong></dt>
        <dd style='display:block' class='sitem' id='items2_1'><ul class='sitemu'>
          <li><a href="save_data.php?action=export" target="main">备份数据库</a></li>
		  <li><a href="save_data.php?action=import" target="main">还原数据库</a></li>
          </ul>
        </dd>
      </dl> 	  
 	  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25"></td>
  </tr>
</table>

    </td>
  </tr>
</table>
</body>
</html>