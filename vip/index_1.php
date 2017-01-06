<?php
include("../include/config.php");
include("../include/function.php");
$AdminUser=$_COOKIE["AdminUser"];
//echo "<script>alert('".$AdminUser."');</script>";
$sql="select * from admin where AdminUser='".$AdminUser."'";
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
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<link href="DataTables-1.9.4/media/css/demo_page.css" rel="stylesheet" type="text/css" />
<link href="DataTables-1.9.4/media/css/demo_table.css" rel="stylesheet" type="text/css" />
<link href="DataTables-1.9.4/media/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<link href="DataTables-1.9.4/extras/TableTools/media/css/TableTools.css" rel="stylesheet" type="text/css" />
<link href="DataTables-1.9.4/extras/TableTools/media/css/TableTools_JUI.css" rel="stylesheet" type="text/css" />
<style>
    /*王庆路 表格背景颜色更改*/
    #s_meti table tr td{
        background-color: #e8ffe8;
    }
    /*王庆路 表格背景颜色更改 end*/
</style>
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
<script src="DataTables-1.9.4/media/js/jquery.js"></script>
<script src="DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
<script src="DataTables-1.9.4/extras/TableTools/media/js/TableTools.min.js"></script>
</HEAD>
<BODY>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>价格查询系统</H6>
<DIV class="content">
<DIV id="flselect">
    <!--王庆路 字体加粗-->
<TABLE style="font-weight: bold; BORDER-LEFT: #ccc 1px solid; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%">
    <!--王庆路 字体加粗 end-->
    <TBODY>

  <TR >
    <TD style="PADDING-LEFT: 5px">
	  <UL class="meitilist">
	    <LI class="meitilist-header" style="CURSOR: pointer;" onclick=mt_search3()>媒体类型:</LI>
	  </UL>
	</TD>
  </TR>
  <TR class="meitilist-content" >
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	  <?php
		$sql1="select * from media_class where BigID=46 order by paixu desc";
		$result1=mysql_db_query($dbname,$sql1);
		while($rs1=mysql_fetch_array($result1))
		{
	  ?>
	    <LI class="hover_li" style="CURSOR: pointer" onclick=mt_search1(<?php echo $rs1["ID"];?>)><?php echo $rs1["SmallClass"];?></LI>
	  <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px">
	  <UL class=meitilist>
	    <LI  class="meitilist-header" style="CURSOR: pointer" onclick=mt_search3()>综合门户媒体:</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	  <?php
		$sql7="select * from menhu_class order by paixu desc";
		$result7=mysql_db_query($dbname,$sql7);
		while($rs7=mysql_fetch_array($result7))
		{
	  ?>
	    <LI  class="hover_li" style="CURSOR: pointer" onclick="mt_search7('<?php echo $rs7["BigClass"];?>')"><?php echo $rs7["BigClass"];?></LI>
      <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;">
	  <UL class=meitilist>
	    <LI  class="meitilist-header" style="CURSOR: pointer" onclick=mt_search3()>价格分类媒体:</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	    <LI  class="hover_li"style="CURSOR: pointer" onclick=mt_search2(0)>0-40元</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick=mt_search2(1)>40-70元</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick=mt_search2(2)>70-120元</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick=mt_search2(3)>120元以上</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px">
	  <UL class=meitilist>
	    <LI  class="meitilist-header" style="CURSOR: pointer" onclick=mt_search3()>地区分类媒体:</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	  <?php
		$sql6="select * from diqu_class order by paixu asc";
		$result6=mysql_db_query($dbname,$sql6);
		while($rs6=mysql_fetch_array($result6))
		{
	  ?>
	    <LI  class="hover_li" style="CURSOR: pointer" onclick="mt_search6('<?php echo $rs6["BigClass"];?>')"><?php echo $rs6["BigClass"];?></LI>
      <?php
		}?>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px">
	  <UL class=meitilist>
	    <LI  class="meitilist-header" style="CURSOR: pointer" onclick=mt_search3()>新闻源:</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	    <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('百度新闻源')">百度新闻源</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('谷歌新闻源')">谷歌新闻源</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('搜狗新闻源')">搜狗新闻源</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('360新闻源')">360新闻源</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('搜搜新闻源')">搜搜新闻源</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search4('非新闻源')">无</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px">
	  <UL class=meitilist>
	    <LI  class="meitilist-header" style="CURSOR: pointer" onclick=mt_search3()>链接:</LI>
	  </UL>
	</TD>
  </TR>
  <TR>
    <TD style="PADDING-LEFT: 5px;border-bottom:1px solid #d2d2d2;">
	  <UL class=meitilist>
	    <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search5('可带网址')">可带网址</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search5('可超链接')">可超链接</LI>
        <LI  class="hover_li"style="CURSOR: pointer" onclick="mt_search5('不能带网址')">不能带网址</LI>
	  </UL>
	</TD>
  </TR>
  

  </TBODY>
  </TABLE>

  <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
              <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF">
			  <table border="0" cellpadding="5" cellspacing="2">
                  <tr>
                    <td><div align="center">媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				   <td><select name="class_id" size="1" id="class_id">
			  <option value=''>全部分类</option>
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
                    <td>
						<span style="float:right;background:#3caf36;padding:3px 5px;"><a style="color:#fff;" href="javascript:void(0);" onclick="method5('tableExcel')" class="exel">谷歌导出EXCEL</a></span>
					</td>
					<td>
						<span style="float:right;background:#3caf36;padding:3px 5px;"><a style="color:#fff;" href="javascript:void(0);" onclick="getXlsFromTbl('tableExcel',null);" class="exel">IE360导出EXCEL</a></span>
					</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="23" colspan="2" bgcolor="#FFFFFF">

				<!--表格-->
				<div id="s_meti"></div>
			  </td>
            </tr>
          </table>
        </form></DIV></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
<SCRIPT type="text/javascript">
		  
    
        function getXlsFromTbl(inTblId, inWindow) {
     try {
         var allStr = "";
         var curStr = "";
         //alert("getXlsFromTbl");
         if (inTblId != null && inTblId != "" && inTblId != "null") {
             curStr = getTblData(inTblId, inWindow);
         }
         if (curStr != null) {
             allStr += curStr;
        }
        else {
            alert("你要导出的表不存在！");
            return;
        }
        var fileName = getExcelFileName();
        doFileExport(fileName, allStr);
    }
    catch(e) {
        alert("导出发生异常:" + e.name + "->" + e.description + "!");
    }
}
function getTblData(inTbl, inWindow) {
    var rows = 0;
    //alert("getTblData is " + inWindow);
    var tblDocument = document;
    if (!!inWindow && inWindow != "") {
        if (!document.all(inWindow)) {
            return null;
        }
        else {
            tblDocument = eval(inWindow).document;
        }
    }
    var curTbl = tblDocument.getElementById(inTbl);
    var outStr = "";
    if (curTbl != null) {
        for (var j = 0; j < curTbl.rows.length; j++) {
            for (var i = 0; i < curTbl.rows[j].cells.length; i++) {
                if (i == 0 && rows > 0) {
                    outStr += " \t";
                    rows -= 1;
                }
                outStr += curTbl.rows[j].cells[i].innerText + "\t";
                if (curTbl.rows[j].cells[i].colSpan > 1) {
                    for (var k = 0; k < curTbl.rows[j].cells[i].colSpan - 1; k++) {
                        outStr += " \t";
                    }
                }
                if (i == 0) {
                    if (rows == 0 && curTbl.rows[j].cells[i].rowSpan > 1) {
                        rows = curTbl.rows[j].cells[i].rowSpan - 1;
                    }
                }
            }
            outStr += "\r\n";
        }
    }
    else {
        outStr = null;
        alert(inTbl + "不存在!");
    }
    return outStr;
}
function getExcelFileName() {
    var d = new Date();
    var curYear = d.getYear();
    var curMonth = "" + (d.getMonth() + 1);
    var curDate = "" + d.getDate();
    var curHour = "" + d.getHours();
    var curMinute = "" + d.getMinutes();
    var curSecond = "" + d.getSeconds();
    if (curMonth.length == 1) {
        curMonth = "0" + curMonth;
    }
    if (curDate.length == 1) {
        curDate = "0" + curDate;
    }
    if (curHour.length == 1) {
        curHour = "0" + curHour;
    }
    if (curMinute.length == 1) {
        curMinute = "0" + curMinute;
    }
    if (curSecond.length == 1) {
        curSecond = "0" + curSecond;
    }
    var fileName = "91zaojia" + "_" + curYear + curMonth + curDate + "_"
            + curHour + curMinute + curSecond + ".xls";
    return fileName;
}
function doFileExport(inName, inStr) {
    var xlsWin = null;
    if (!!document.all("glbHideFrm")) {
        xlsWin = glbHideFrm;
    }
    else {
        var width = 6;
        var height = 4;
        var openPara = "left=" + (window.screen.width / 2 - width / 2)
                + ",top=" + (window.screen.height / 2 - height / 2)
                + ",scrollbars=no,width=" + width + ",height=" + height;
        xlsWin = window.open("", "_blank", openPara);
    }
    xlsWin.document.write(inStr);
    xlsWin.document.close();
    xlsWin.document.execCommand('Saveas', true, inName);
    xlsWin.close();
}
        
  
       
  
  
        //第五种方法  
        var idTmr;  
        function  getExplorer() {  
            var explorer = window.navigator.userAgent ;  
            //ie  
            if (explorer.indexOf("MSIE") >= 0) {  
                return 'ie';  
            }  
            //firefox  
            else if (explorer.indexOf("Firefox") >= 0) {  
                return 'Firefox';  
            }  
            //Chrome  
            else if(explorer.indexOf("Chrome") >= 0){  
                return 'Chrome';  
            }  
            //Opera  
            else if(explorer.indexOf("Opera") >= 0){  
                return 'Opera';  
            }  
            //Safari  
            else if(explorer.indexOf("Safari") >= 0){  
                return 'Safari';  
            }  
        }  
        function method5(tableid) {  
            if(getExplorer()=='ie')  
            {  
                var curTbl = document.getElementById(tableid);  
                var oXL = new ActiveXObject("Excel.Application");  
                var oWB = oXL.Workbooks.Add();  
                var xlsheet = oWB.Worksheets(1);  
                var sel = document.body.createTextRange();  
                sel.moveToElementText(curTbl);  
                sel.select();  
                sel.execCommand("Copy");  
                xlsheet.Paste();  
                oXL.Visible = true;  
  
                try {  
                    var fname = oXL.Application.GetSaveAsFilename("Excel.xls", "Excel Spreadsheets (*.xls), *.xls");  
                } catch (e) {  
                    print("Nested catch caught " + e);  
                } finally {  
                    oWB.SaveAs(fname);  
                    oWB.Close(savechanges = false);  
                    oXL.Quit();  
                    oXL = null;  
                    idTmr = window.setInterval("Cleanup();", 1);  
                }  
  
            }  
            else  
            {  
                tableToExcel(tableid)  
            }  
        }  
        function Cleanup() {  
            window.clearInterval(idTmr);  
            CollectGarbage();  
        }  
        var tableToExcel = (function() {  
            var uri = 'data:application/vnd.ms-excel;base64,',  
                    template = '<html><head><meta charset="UTF-8"></head><body><table>{table}</table></body></html>',  
                    base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) },  
                    format = function(s, c) {  
                        return s.replace(/{(\w+)}/g,  
                                function(m, p) { return c[p]; }) }  
            return function(table, name) {  
                if (!table.nodeType) table = document.getElementById(table)  
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}  
                window.location.href = uri + base64(format(template, ctx))  
            }  
        })();




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
	$.get("../admin/search1.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("../admin/search1.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("../admin/search1.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("../admin/search1.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("../admin/search1.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("../admin/search1.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("../admin/search1.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("../admin/search1.php?a=mt_searchall",{"zhmh":id},function(data){

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
$("#tableExcel").dataTable({
      "bJQueryUI": false,
      'bPaginate': false, //是否分页
      "bRetrieve": false, //是否允许从新生成表格
      "bInfo": false, //显示表格的相关信息
      "bDestroy": true,
      "bServerSide": false,
      "bProcessing": true, //当处理大量数据时，显示进度，进度条等
      "bFilter": false, //搜索框
      "bLengthChange": false, //动态指定分页后每页显示的记录数
      "bSort": false, //排序
      "bStateSave": false, //缓存
      "sAjaxDataProp": "data",
      "sDom": 'T<"clear">lfrtip'
      "oTableTools": {
        "sSwfPath": "DataTables-1.9.4/extras/TableTools/media/images/print.png"
      }
    } );
</SCRIPT>
</BODY>
</HTML>
