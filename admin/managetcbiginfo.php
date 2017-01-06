<?php
include ("../include/config.php");
include ("checkuser.php");
include ("../include/function.php");
?>

<?php
/*-----------------接收相关数据值---------------------*/
$titleID=$_REQUEST["titleID"];
//echo "<script>alert('".$titleID."');</script>";
//$Page=@$_REQUEST["Page"];
$skey=@$_REQUEST["skey"];
$key=@$_REQUEST["key"];
$nav_id=@$_REQUEST["nav_id"];
switch($skey)
	{
	case "1":
		$ssql="order by data asc";
		break;
	case "2":
		$ssql="order by data desc";
		break;
	default:
		$ssql="order by ID desc";
	}
/*-----------------设置每页显示数目-------------------*/
$List_Num=20;
/*-----------------计算共有记录数--------------------*/
if($key=="")
{
	if($nav_id=="")
	{
		$sqlN="select Count(*) from ".$titleID."_info";
	}
	else{
		$sqlN="select Count(*) from ".$titleID."_info where class_id=".$nav_id."";
	}
}
else
{
	if($nav_id=="")
	{
		$sqlN="select Count(*) from ".$titleID."_info where title like '%".$key."%'";
	}
	else{
		$sqlN="select Count(*) from ".$titleID."_info where class_id=".$nav_id." and title like '%".$key."%'";
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
		$sql="select * from ".$titleID."_info ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from ".$titleID."_info where class_id=".$nav_id." ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}
else
{
	if($nav_id=="")
	{
		$sql="select * from ".$titleID."_info where title like '%".$key."%' ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from ".$titleID."_info where class_id=".$nav_id." and title like '%".$key."%' ".$ssql." limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}
$result=mysql_db_query($dbname,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
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
background:#009FE4; border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.pager a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
</STYLE>
</head>
<body>
<table style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 35px" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" align=center>
  <tr>
    <td style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px">
	<form id="myform2" name="myform1" method="post" action="managetcbiginfo.php?titleID=<?php echo $titleID;?>" onsubmit="return checkSo();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" >
          <td width="100%" bgcolor="#FFFFFF"><table width="698" border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td width='130' align='center'>信息标题：</td>
			  <td width='130'><input name='key' type='text' id="key" style='width:130px' value='' />
              </td>
              <td width='130'><select name="nav_id" size="1" id="nav_id">
			  <option value=''>选择分类...</option>
			  <?php
				$sqlc="select * from taocan_class";
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
                <option value="1">时间=>升序</option>
				<option value="2">时间=>降序</option>
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
    </form></td>
  </tr>
</table>
<br />
<table border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
  <tr bgColor=#7691c7>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="savetcbiginfo.php?action=del&amp;titleID=<?php echo $titleID;?>">
      <table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td bgColor=#FFFFFF colSpan=7 align=middle><?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "";
		 }
       
		 else
		 {
		?>
              <table style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center style="font-size:12px">
                <tr align="center" height=25 bgColor=#e3e8f3>
                    <td align="center">序号</td>
                    <td align="center">信息标题</td>
                    <td width="20%" align="center">信息类型</td>
                    <td width="10%" align="center">推荐首页</td>
                    <td width="14%" align="center">添加时间</td>
                    <td width="10%" align="center">操作</td>
                    <td width="7%" align="center">选择</td>
                  </tr>
                  <?php
				$i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
                  <tr align="center" onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
                    <td height="30" align="center"><?php echo $Page;?>-<?php echo $i;?></td>
                    <td style="padding-left:15px"><?php echo $newsOB->utfSubstr($rs["title"],0,93);?></td>
                    <td align="center"><?php
				  $sqlB="select * from ".$titleID."_class where ID=".$rs["class_id"]."";
                  //$resultB=mysql_db_query($dbname,$sqlB);//执行SQL命令
				  mysql_select_db($dbname);
				  $resultB=mysql_query($sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  ?>                    </td>
                    <td align="center"><?php
                    if($rs["tj"]<>1)
					{
					 echo "否";
					}
					else
					{
					 echo "是";
					}
					?></td>
                    <td align="center">[<?php echo $rs["data"];?>]</td>
                    <td align="center"><DIV class="alink" align=center>
					<a href="edittcbiginfo.php?ID=<?php echo $rs["ID"];?>&amp;class_id=<?php echo $rs["class_id"];?>&amp;titleID=<?php echo $titleID;?>">修改</a></div></td>
                    <td align="center"><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"]?>" /></td>
                  </tr>
                  <?php
				$i=$i+1;
			  }
			  ?>
                  <tr align="center" >
                    <td colspan="7" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="87%" height="35" align="center"><DIV class=pager><?php
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href=?skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=?Page=".$Prv."&skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id.">上一页</a>&nbsp;&nbsp;";
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
							$str.="<a href=\"?Page=".$i."&skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id."\">".$i."</a>&nbsp;&nbsp;";}
						}
					}else{
						for($j=1;$j<=$ep;$j++)
						{
						if($Page==$j){
							$str.="<span class=\"ok\">".$j."</span>&nbsp;&nbsp;";
						}else{
							$str.="<a href=\"?Page=".$j."&skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id."\">".$j."</a>&nbsp;&nbsp;";}
						}
					}
					echo $str;
					  
					  if($Page!=$CountPage)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage;
					  echo "<a href=?Page=".$NtPage."&skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=?Page=".$EdPage."&skey=".$skey."&key=".$key."&titleID=".$titleID."&nav_id=".$nav_id.">尾页</a>&nbsp;&nbsp;";
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
                </table>
            <?php
			}
			?>
          </td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<?php
include ("footx.php");
?>
</body>
</html>
<script language="javascript" src="comm_js/javascriptTxt.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(!checkLength("BigClass1" , "新闻类别" , 2 , 15 , "~!@#$%^&*+=\\\'\"\<\>"))
			return false;
		if(!checkLength("classidorder1" , "新闻类别序号" , 1 , 15 , "&<>\'"))
			return false;
	}
	function CheckForm1()
	{
		if(!checkLength("BigClass" , "新闻类别" , 2 , 15 , "~!@#$%^&*+=\\\'\"\<\>"))
			return false;
		if(!checkLength("classidorder" , "新闻类别序号" , 1 , 15 , "&<>\'"))
			return false;
	}
</script>
<SCRIPT language=JScript>
function check(){
if(document.myform.ID[].value==""){
document.myform.ID[].focus();
alert("请选择!");
return false;
}
</SCRIPT>