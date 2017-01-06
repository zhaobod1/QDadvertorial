<?php
include("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<title><?php echo $F_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $F_KeyWords;?>" />
<meta name="description" content="<?php echo $F_Descr;?>" />
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<META name=description content=好推手是国内最大的软文发稿平台，是您选择软文推广的最佳服务商。好推手：老品牌、大影响、高效率、发遍全网络！>
<META name=keywords content=好推手,软文推广>
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>

<STYLE type=text/css>HTML BODY {
	FONT-FAMILY: "微软雅黑"; FONT-SIZE: 14px
}
A {
	COLOR: #000000; CURSOR: pointer; TEXT-DECORATION: none
}
A:hover {
	COLOR: #39c; TEXT-DECORATION: underline
}
.clear {
	HEIGHT: 0px; CLEAR: both; FONT-SIZE: 0px; OVERFLOW: hidden
}
.clearfix:after {
	DISPLAY: block; HEIGHT: 0px; VISIBILITY: hidden; CLEAR: both; CONTENT: "."
}
.clearfix {
	
}
.btlogin {
	WIDTH: 120px; BACKGROUND: url(../images/denglu.gif) no-repeat; HEIGHT: 44px
}
.main {
	MARGIN: 0px auto; WIDTH: 100%; ZOOM: 1; OVERFLOW: hidden
}
.top {
	BORDER-BOTTOM: #808080 1px solid; WIDTH: 100%; BACKGROUND: url(../images/head_bg.gif) repeat-x; HEIGHT: 75px
}
.head {
	MARGIN: 0px auto; WIDTH: 980px; HEIGHT: 75px
}
.head H1 {
	TEXT-INDENT: 500px; WIDTH: 316px; DISPLAY: block; WHITE-SPACE: nowrap; BACKGROUND: url(../images/logo.png) no-repeat; FLOAT: left; HEIGHT: 75px; OVERFLOW: hidden
}
.daohang {
	LINE-HEIGHT: 38px; FLOAT: right; HEIGHT: 50px; PADDING-TOP: 25px
}
.daohang LI {
	MARGIN: 0px 10px; FLOAT: left
}
.ban {
	POSITION: relative; WIDTH: 100%; BACKGROUND: url(../images/banner_bg.gif) repeat-x; HEIGHT: 340px; _margin-top: -25px
}
.banner {
	MARGIN: 0px auto; WIDTH: 980px; BACKGROUND: url(../images/ban_bg1.png); HEIGHT: 340px
}
.main {
	MARGIN: 0px auto; WIDTH: 980px
}
.main_l {
	PADDING-LEFT: 18px; WIDTH: 580px; PADDING-RIGHT: 37px; FLOAT: left; _padding-right: 27px
}
.foot {
	TEXT-ALIGN: center; LINE-HEIGHT: 30px; WIDTH: 100%; BACKGROUND: url(../images/footBgNew.png) repeat-x; HEIGHT: 100px; FONT-SIZE: 14px; PADDING-TOP: 30px
}
.background {
	Z-INDEX: 2000; POSITION: absolute; FILTER: alpha(opacity=40); WIDTH: 100%; DISPLAY: block; HEIGHT: 100%; TOP: 0px; LEFT: 0px; opacity: 0.4
}
.progressBar {
	BORDER-BOTTOM: #86a5ad 2px solid; BORDER-LEFT: #86a5ad 2px solid; BACKGROUND: url(progressBar_m.gif) white no-repeat 10px 10px; BORDER-TOP: #86a5ad 2px solid; BORDER-RIGHT: #86a5ad 2px solid
}
.progressBar {
	Z-INDEX: 2001; POSITION: absolute; TEXT-ALIGN: left; PADDING-BOTTOM: 10px; LINE-HEIGHT: 27px; MARGIN-TOP: -14px; PADDING-LEFT: 50px; WIDTH: 148px; PADDING-RIGHT: 10px; DISPLAY: block; HEIGHT: 28px; MARGIN-LEFT: -74px; TOP: 50%; FONT-WEIGHT: bold; PADDING-TOP: 10px; LEFT: 50%
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav .nav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .nav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav .nav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav .nav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav .nav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav .nav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav .nav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav .nav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<DIV class=top>
<DIV class=head>
<H1><A href="/"></A></H1><IMG src="../images/chongzhi.png"> </DIV></DIV>
<?php
include("menu.php");
?>
<DIV class=clear></DIV>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>价格查询系统</H6>
<DIV class=content>
<DIV id=flselect>
<TABLE style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 5px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%">
  <TBODY>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>媒体大类-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	  <?php
		$sqls="select * from media_class where BigID=46 order by paixu desc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick=mt_search1(<?php echo $rss["ID"];?>)><?php echo $rss["SmallClass"];?></LI>
	  <?php
		}?>
	  </UL>
	</TD>
  </TR>
  
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>媒体小类-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	  <?php
		$sqls="select * from media_small order by paixu desc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick=mt_searchs1(<?php echo $rss["ID"];?>)><?php echo $rss["BigClass"];?></LI>
	  <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>综合门户媒体-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	  <?php
		$sqls="select * from menhu_class order by paixu desc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick="mt_search7('<?php echo $rss["BigClass"];?>')"><?php echo $rss["BigClass"];?></LI>
      <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>价格分类媒体-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search2(0)>0-40元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(1)>40-70元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(2)>70-120元</LI>
        <LI style="CURSOR: pointer" onclick=mt_search2(3)>120元以上</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>地区分类媒体-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	  <?php
		$sqls="select * from diqu_class order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick="mt_search6('<?php echo $rss["BigClass"];?>')"><?php echo $rss["BigClass"];?></LI>
      <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>新闻源-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick="mt_search4('百度新闻源')">百度新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('谷歌新闻源')">谷歌新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('搜狗新闻源')">搜狗新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('360新闻源')">360新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('搜搜新闻源')">搜搜新闻源</LI>
        <LI style="CURSOR: pointer" onclick="mt_search4('非新闻源')">无</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>链接-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick="mt_search5('可带网址')">可带网址</LI>
        <LI style="CURSOR: pointer" onclick="mt_search5('可超链接')">可超链接</LI>
        <LI style="CURSOR: pointer" onclick="mt_search5('不能带网址')">不能带网址</LI>
	  </UL>
	</TD>
  </TR>
  </TBODY></TABLE>
  <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
              <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
                    <td><div align="center">自定义搜索：媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				   <td><select name="class_id" size="1" id="class_id">
			  <option value=''>选择分类...</option>
			  <?php
				$sqlc="select * from media_class where BigID=46";
				$resultc=mysql_db_query($dbname,$sqlc);
				while($rsc=mysql_fetch_array($resultc))
				{
				?>
			  <option value="<?php echo $rsc["ID"];?>"><?php echo $rsc["SmallClass"];?></option>
			  <?php
				}
			  ?>
			</select></td>
				   <td><select name='skey' id="skey" style='width:130'>
                <option value=''>选择排序...</option>
                <option value="1">价格=>升序</option>
				<option value="2">价格=>降序</option>
              </select></td>
                    <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
            </tr>
          </table>
        </form></DIV></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
<SCRIPT type=text/javascript>

$(document).ready(function(){
	
	var ajaxbg = $("#background,#progressBar"); 
	ajaxbg.hide(); 
	$(document).ajaxStart(function () { 
	ajaxbg.show(); 
	}).ajaxStop(function () { 
	ajaxbg.hide(); 
	});  
	 mt_search();
})
 

function mt_search()
{
	$.get("searchb.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("searchb.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_searchs1(id)
{
	$.get("searchb.php?a=mt_search",{"fls":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("searchb.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("searchb.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("searchb.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("searchb.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("searchb.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("searchb.php?a=mt_searchall",{"zhmh":id},function(data){

		$("#s_meti").html(data);
	});
}

function meiturn()
{ 
	$("#searchtrun").slideToggle();
} 
 
</SCRIPT>

<SCRIPT language=javascript> 
var rows = document.getElementsByTagName('tr');//获取所有表格行
for (var i=0;i<rows.length;i++){//然后对其遍历
    rows[i].onmouseover = function(){      
        this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
    }
    rows[i].onmouseout = function(){       
        this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
    }
}
</SCRIPT>
<?php
include("footer.php");
?>
</BODY>
</HTML>
