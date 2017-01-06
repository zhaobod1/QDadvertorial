<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");

/*-----------------接收相关数据值---------------------*/
//$Page=@$_REQUEST["Page"];
$skey=@$_REQUEST["skey"];
$key=@$_REQUEST["key"];
$nav_id=@$_REQUEST["nav_id"];
switch($skey)
	{
	case "1":
		$ssql="order by scprice asc";
		break;
	case "2":
		$ssql="order by scprice desc";
		break;
	case "3":
		$ssql="order by fans asc";
		break;
	case "4":
		$ssql="order by fans desc";
		break;
	default:
		$ssql="order by ID desc";
	}
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
/*-----------------计算共有记录数--------------------*/
if($key=="")
{
	if($nav_id=="")
	{
		$sqlN="select Count(*) from media_info where sh=0";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=0 and nav_id=".$nav_id."";
	}
}
else
{
	if($nav_id=="")
	{
		$sqlN="select Count(*) from media_info where sh=0 and medianame like '%".$key."%'";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=0 and nav_id=".$nav_id." and medianame like '%".$key."%'";
	}
}
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当前页--------------------*/
if(empty($_REQUEST["Page"])){
	$Page=1;
}else{
	$Page=$_REQUEST["Page"];
	if($Page<1){$Page=1;}
	if($Page>$CountPage){$Page=$CountPage;}
}
$Cpage=$Page+1;
/*--------------------------------------------------*/

if($key=="")
{
	if($nav_id=="")
	{
		$sql="select * from media_info where sh=0 ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from media_info where sh=0 and nav_id=".$nav_id." ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}
else
{
	if($nav_id=="")
	{
		$sql="select * from media_info where sh=0 and medianame like '%".$key."%' ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from media_info where sh=0 and nav_id=".$nav_id." and medianame like '%".$key."%' ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}
$result=mysql_db_query($dbname,$sql);
?>
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<SCRIPT language=javascript> 
<!-- 
window.onerror=function(){return true;} 
// --> 
</SCRIPT>
<STYLE type=text/css>
.alink{
line-height:32px;}
.alink a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.alink a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
.ok{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#3399FF; font-weight:bold;
}
.pager{
background:#ffffff; line-height:32px; padding-left:6px;}
.pager a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.pager a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
</STYLE>
</HEAD>
<BODY bottomMargin=0 leftMargin=0 rightMargin=0 topMargin=0>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
  <TBODY>
  <TR>
    <TD>
	  <FORM id="myform2" name="myform1" method="post" action="managemtbiginfo1.php" onsubmit="return checkSo();">
      <TABLE style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 30px" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" align=center>
        <TBODY>
        <TR>
          <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" >
          <td width="100%" bgcolor="#FFFFFF"><table width="730" border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td width='130' align='center'>资源名称：</td>
			  <td width='130'><input name='key' type='text' id="key" style='width:130px' value='' />
              </td>
              <td width='130'>　<select name="nav_id" size="1" id="nav_id">
			  <option value=''>选择分类...</option>
			  <?php
				$sqlc="select * from nav_class";
				$resultc=mysql_db_query($dbname,$sqlc);
				while($rsc=mysql_fetch_array($resultc))
				{
				?>
			  <option value="<?php echo $rsc["ID"];?>"><?php echo $rsc["BigClass"];?></option>
			  <?php
				}
			  ?>
			</select>
              </td>
			  <td width='100' align='center'>排序方式：</td>
			  <td width='120'><select name='skey' id="skey" style='width:120'>
                <option value=''>选择排序...</option>
                <option value="1">价格=>升序</option>
				<option value="2">价格=>降序</option>
                <option value="3">粉丝数量=>升序</option>
				<option value="4">粉丝数量=>降序</option>
              </select>
              </td>
              <td width='66' align="left"><input style="WIDTH: 60px; CURSOR: pointer" type="submit" name="Submit2" value="查询"/></td>
            </tr>
          </table></td>
        </tr>
        <tr align="center" >
          <td bgcolor="#FFFFFF"><span class="red">*搜索相关数据时，如果搜索条件未选择，将搜索所有的数据!</span></td>
        </tr>
      </table>
          </TD></TR></TBODY></TABLE></FORM>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
        <TBODY>
        <TR bgColor=#7691c7>
          <TD bgColor=#FFFFFF colSpan=12 align=middle>
		  <form id="myform" name="myform" method="post" action="savemtbiginfo.php?action=del&amp;titleID=media">
            <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center style="font-size:12px">
			<?php
			 if (mysql_num_rows($result)==NULL)
			 {
			   echo "";
			 }
		   
			 else
			 {
			?>
              <TBODY>
              <TR height=25 bgColor=#e3e8f3>
                <TD>
                  <DIV align=center>序号</DIV></TD>
				<TD>
                  <DIV align=center>媒体名称</DIV></TD>
                <TD>
                  <DIV align=center>媒体大类</DIV></TD>
				<TD>
                  <DIV align=center>媒体小类</DIV></TD>
                <TD>
                  <DIV align=center>优惠类别</DIV></TD>
				<TD>
                  <DIV align=center>成本价</DIV></TD>
                <TD>
                  <DIV align=center>代理价</DIV></TD>
                <TD>
                  <DIV align=center>零售价</DIV></TD>
				<TD>
                  <DIV align=center>新闻源</DIV></TD>
                <TD>
                  <DIV align=center>所在地区</DIV></TD>
                <TD>
                  <DIV align=center>操作</DIV></TD>
				<TD>
                  <DIV align=center>选择</DIV></TD></TR></TR>
			<?php
			$i=1;
			while($rs=mysql_fetch_array($result))
			{
			?>
              <TR onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
				<TD>
                  <DIV align=center><?php echo $Page;?>-<?php echo $i;?></DIV></TD>
				<TD>
                  <DIV align=center><A href="<?php echo $rs["weburl"];?>" target=_blank><?php echo $newsOB->utfSubstr($rs["medianame"],0,20);?></A><span style="float:right"><img  alt="" src="<?php if ($rs["VipUser"]<>""){echo '../images/qiuqiu1.png';} else{echo '../images/qiuqiu2.png';}?>" name="qiu"  height="12"/></span></DIV></TD>
                <TD>
                  <DIV align=center><?php
				  $sqlB="select * from nav_class where ID=".$rs["nav_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  ?></DIV></TD>
				<TD>
                  <DIV align=center><?php
				  $sqlB="select * from media_class where ID=".$rs["class_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["SmallClass"];
				  ?></DIV></TD>
                <TD>
                  <DIV align=center><?php
				if($rs["small_id"]<>""){
				  $sqlB="select * from media_small where ID=".$rs["small_id"]."";
                  $resultB=mysql_query($sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  }
				  ?></DIV></TD>
				<TD>
                  <DIV align=center><?php echo $rs["scprice"];?>元</DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["dlprice"];?>元</DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["price"];?>元</DIV></TD>
				<TD>
                  <DIV align=center><?php echo $rs["xinwenyuan"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["diqu"];?></DIV></TD>
                <TD>
                  <DIV class="alink" align=center><A href="editmtbiginfo1.php?ID=<?php echo $rs["ID"];?>&nav_id=<?php echo $rs["nav_id"];?>&class_id=<?php echo $rs["class_id"];?>&small_id=<?php echo $rs["small_id"];?>&titleID=media">审核</A></DIV></TD>
				<TD>
                  <DIV align=center><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"]?>" /></DIV></TD></TR>
			<?php
			$i=$i+1;
			}?>
                  <tr align="center">
                    <td colspan="12" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="87%" height="35" align="center"><DIV class=pager><?php
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href=?skey=".$skey."&key=".$key."&nav_id=".$nav_id.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=?Page=".$Prv."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">上一页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;&nbsp;";
					  }
					  
					if($Page+3<$CountPage+1){
						$ep=$Page+3;
					}else{
						$ep=$CountPage;
					}
					if($Page-3>0){
						$sp=$Page-3;
					}else{
						$sp=1;
					}
					if($Page>=$CountPage-3){
						$sp=$CountPage-5;
					}
					if($Page>4){
						for($i=$sp;$i<=$ep;$i++)
						{
						if($Page==$i){
							$str.="<span class=\"ok\">".$i."</span>&nbsp;&nbsp;";
						}else{
							$str.="<a href=\"?Page=".$i."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$i."</a>&nbsp;&nbsp;";}
						}
					}else{
						for($j=1;$j<=$ep;$j++)
						{
						if($Page==$j){
							$str.="<span class=\"ok\">".$j."</span>&nbsp;&nbsp;";
						}else{
							$str.="<a href=\"?Page=".$j."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$j."</a>&nbsp;&nbsp;";}
						}
					}
					echo $str;
					  
					  if($Page!=$CountPage)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage;
					  echo "<a href=?Page=".$NtPage."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=?Page=".$EdPage."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></div></td>
                          <td width="13%" align="right"><a href="#" onclick="mm();">全选</a>
                              <input type="checkbox" name="checkbox" value="Check All" onclick="mm();" />
                              <input type="submit" name="Submit" value="删 除" onclick="return test();" /></td>
                        </tr>
                    </table></td>
                  </tr>
			  </TBODY>
			<?php }?>
			  </TABLE></form></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
        <TBODY>
        <TR>
          <TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY>
</TABLE>
<?php
include ("footx.php");
?>
</BODY>
</HTML>
<script language="javascript" src="comm_js/javascriptTxt.js"></script>
<script language="javascript">
function getVal(){
	$.getJSON("select.php",{nav_id:$("#nav_id").val()},function(json){
	var sc_id = $("#sc_id");
	$("option",sc_id).remove(); //清空原有的选项，也可使用 sc_id.empty();
	$.each(json,function(index,array){
	var option = "<option value='"+array['sc_id']+"'>"+array['sc_name']+"</option>";
	sc_id.append(option);
	});
	});
	}
	//下面是页面加载时自动执行一次getVal()函数
	$().ready(function(){
	getVal();
	$("#nav_id").change(function(){//有变动时，执行getVal()函数
	getVal();
	});
	});
</script>