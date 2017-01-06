<?php
include("../include/config.php");
include("../include/function.php");
?>
<HTML>
<HEAD>
<TITLE>软文价格中心 - 好推手</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
</HEAD>
<BODY>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>价格查询系统</H6>
<DIV class=content>
<DIV id=flselect>
<TABLE style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 5px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%">
  <TBODY>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
	  <UL class=meitilist>
	    <LI style="CURSOR: pointer" onclick=mt_search3()>媒体类型-》</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
	  <UL class=meitilist>
	  <?php
		$sql1="select * from media_class order by paixu desc";
		$result1=mysql_db_query($dbname,$sql1);
		while($rs1=mysql_fetch_array($result1))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick=mt_search1(<?php echo $rs1["ID"];?>)><?php echo $rs1["BigClass"];?></LI>
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
		$sql7="select * from menhu_class order by paixu desc";
		$result7=mysql_db_query($dbname,$sql7);
		while($rs7=mysql_fetch_array($result7))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick="mt_search7('<?php echo $rs7["BigClass"];?>')"><?php echo $rs7["BigClass"];?></LI>
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
		$sql6="select * from diqu_class order by paixu asc";
		$result6=mysql_db_query($dbname,$sql6);
		while($rs6=mysql_fetch_array($result6))
		{
	  ?>
	    <LI style="CURSOR: pointer" onclick="mt_search6('<?php echo $rs6["BigClass"];?>')"><?php echo $rs6["BigClass"];?></LI>
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
<FORM id=searchtrun name=form2><BR>
<TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#e2e2e2>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=23 colSpan=2>
      <DIV id=s_meti></DIV></TD></TR></TBODY></TABLE></FORM></DIV></DIV></DIV>
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
	$.get("search-1.php?a=mt_search",{"mc":$("#meiti_name").val(),"fl":$("#select").val(),"lj":$("#select2").val(),"xw":$("#select3").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search_1(id)
{
	$.get("search-1.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("search-1.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("search-1.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("search-1.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("search-1.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("search-1.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("search-1.php?a=mt_searchall",{"zhmh":id},function(data){

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
</BODY>
</HTML>
