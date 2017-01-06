<?php
include("../include/config.php");
include("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
//echo "<script>alert('".$VipUser."');</script>";
$sql="select * from user where VipUser='".$VipUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $yue=$rs["yue"];
}
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
<H6>水军资源价格查询系统</H6>
<DIV class="content">
<DIV id="flselect">
<table width="100%" border="0" cellpadding="0" style="border:1px solid #ccc;padding-bottom:5px;">
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			  <UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>水军类型-》</LI>
			  </UL>
			</TD>
		  </TR>
		  <TR>
			<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			  <UL class=meitilist>
			  <?php
				$sqls="select * from media_class where BigID=50 order by paixu desc";
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
        </table>
        <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
              <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
                    <td><div align="center">媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				   <td><select name="class_id" size="1" id="class_id">
			  <option value=''>全部分类</option>
			  <?php
				$sqlc="select * from media_class where BigID=50";
				$resultc=mysql_db_query($dbname,$sqlc);
				while($rsc=mysql_fetch_array($resultc))
				{
				?>
			  <option value="<?php echo $rsc["ID"];?>"><?php echo $rsc["SmallClass"];?></option>
			  <?php
				}
			  ?>
			</select></td>
				   <td><select name="diqu" size="1" id="diqu">
				   <option value="">全部地区</option>
			  <?php
				$sqld="select * from diqu_class";
				$resultd=mysql_db_query($dbname,$sqld);
				while($rsd=mysql_fetch_array($resultd))
				{
				?>
			  <option value="<?php echo $rsd["BigClass"];?>"><?php echo $rsd["BigClass"];?></option>
			  <?php
				}
			  ?>
			</select></td>
				   <td><select name="linkurl" size="1" id="linkurl">
			  <option value="">选择链接情况</option>
			  <option value="可超链接">可超链接</option>
			  <option value="文本链接">文本链接</option>
			  <option value="可带网址">可带网址</option>
			  <option value="不能带连接">不能带连接</option>
			  <option value="不能带网址">不能带网址</option>
		  </select></td>
				   <td><select name="xinwenyuan" size="1" id="xinwenyuan">
			  <option value="">选择新闻源</option>
			  <option value="非新闻源">非新闻源</option>
			  <option value="网页收录">网页收录</option>
			  <option value="百度新闻源">百度新闻源</option>
			  <option value="谷歌新闻源">谷歌新闻源</option>
			  <option value="搜狗新闻源">搜狗新闻源</option>
			  <option value="360新闻源">360新闻源</option>
			  <option value="搜搜新闻源">搜搜新闻源</option>
		  </select></td>
				   <td><select name="zhmh" size="1" id="zhmh">
			  <option value="">选择门户</option>
			  <option value=" ">非门户</option>
			  <?php
				$sql2="select * from menhu_class";
				$result2=mysql_db_query($dbname,$sql2);
				while($rs2=mysql_fetch_array($result2))
				{
				?>
			  <option value="<?php echo $rs2["BigClass"];?>"><?php echo $rs2["BigClass"];?></option>
			  <?php
				}
			  ?>
		  </select></td>
				   <td><select name='skey' id="skey">
                <option value=''>默认排序</option>
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
	$.get("../user/shuijun_search1.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("../user/shuijun_search1.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("../user/shuijun_search1.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("../user/shuijun_search1.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("../user/shuijun_search1.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("../user/shuijun_search1.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("../user/shuijun_search1.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("../user/shuijun_search1.php?a=mt_searchall",{"zhmh":id},function(data){

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
