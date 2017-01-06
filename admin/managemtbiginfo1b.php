<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
?>

<?php

/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
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
$List_Num=100;
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
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

if($key=="")
{
	if($nav_id=="")
	{
		$sql="select * from media_info where sh=0 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
		$sql="select * from media_info where sh=0 and nav_id=".$nav_id." ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
}
else
{
	if($nav_id=="")
	{
		$sql="select * from media_info where sh=0 and medianame like '%".$key."%' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
		$sql="select * from media_info where sh=0 and nav_id=".$nav_id." and medianame like '%".$key."%' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
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
</head>
<body>
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
                <option value="1">成本价格=>升序</option>
				<option value="2">成本价格=>降序</option>
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
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;&nbsp;<strong>媒体资源管理</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="savemtbiginfo.php?action=del&amp;titleID=<?php echo $titleID;?>">
      <table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td height="47" valign="top" bgcolor="#FFFFFF"><?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo " ";
		 }
       
		 else
		 {
		?>
                <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
                  <tr align="center" bgcolor="#F8F8F8" >
                    <td width="5%" bgcolor="#FFFFFF">序号</td>
                    <td width="18%" align="center" bgcolor="#FFFFFF">媒体名称</td>
                    <td width="10%" align="center" bgcolor="#FFFFFF">媒体大类</td>
					<td width="15%" align="center" bgcolor="#FFFFFF">媒体小类</td>
					<td width="10%" align="center" bgcolor="#FFFFFF">优惠类别</td>
					<td width="6%" bgcolor="#FFFFFF">成本价</td>
                    <td width="6%" bgcolor="#FFFFFF">代理价</td>
					<td width="6%" bgcolor="#FFFFFF">零售价</td>
					<td width="10%" bgcolor="#FFFFFF">新闻源</td>
                    <td width="8%" bgcolor="#FFFFFF">所在地区</td>
                    <td width="5%" bgcolor="#FFFFFF">编辑</td>
                    <td width="5%" bgcolor="#FFFFFF">选择</td>
                  </tr>
                  <?php
				$i=1;
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
                  <tr>
                    <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $Cpage;?>-<?php echo $i;?></td>
                    <td bgcolor="#FFFFFF" style="padding-left:15px"><?php echo $newsOB->utfSubstr($rs["medianame"],0,35);?><span style="float:right"><img  alt="" src="<?php if ($rs["VipUser"]<>""){echo '../images/qiuqiu1.png';} else{echo '../images/qiuqiu2.png';}?>" name="qiu"  height="12"/></span></td>
                    <td align="center" bgcolor="#FFFFFF"><?php
				  $sqlB="select * from nav_class where ID=".$rs["nav_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php
				  $sqlB="select * from media_class where ID=".$rs["class_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["SmallClass"];
				  ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php
				if($rs["small_id"]<>""){
				  $sqlB="select * from media_small where ID=".$rs["small_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  }
				  ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rs["scprice"];?>元</td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rs["dlprice"];?>元</td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rs["price"];?>元</td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rs["xinwenyuan"];?></td>
                    <td align="center"><?php echo $rs["diqu"];?></td>
                    <td align="center" bgcolor="#FFFFFF"><a href="editmtbiginfo1.php?ID=<?php echo $rs["ID"];?>&nav_id=<?php echo $rs["nav_id"];?>&class_id=<?php echo $rs["class_id"];?>&small_id=<?php echo $rs["small_id"];?>&titleID=media">审核</a></td>
                    <td align="center" bgcolor="#FFFFFF"><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"]?>" /></td>
                  </tr>
                  <?php
				$i=$i+1;
			  }
			  ?>
                  <tr align="center" >
                    <td colspan="13" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="87%" height="35" align="right"><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href=managemtbiginfo1.php?skey=".$skey."&key=".$key."&nav_id=".$nav_id.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=managemtbiginfo1.php?Page=".$Prv."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">上一页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;&nbsp;";
					  }
					  if($Page!=$CountPage-1)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage-1;
					  echo "<a href=managemtbiginfo1.php?Page=".$NtPage."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=managemtbiginfo1.php?Page=".$EdPage."&skey=".$skey."&key=".$key."&nav_id=".$nav_id.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></td>
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