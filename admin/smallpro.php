<?php
include ("../include/config.php");
include ("checkuser.php");
include ("../include/function.php");
?>

<?php


/*-----------------接收相关数据值---------------------*/
$BigID=@$_REQUEST["BigID"];
$ID=@$_REQUEST["ID"];
$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=10;
/*-----------------计算共有记录数--------------------*/
if($ID=="")
{
$sqlN="select Count(*) from smallpro";
}
else
{
$sqlN="select Count(*) from smallpro where proID = ".$ID."";
}
//$resultN=mysql_db_query($dbname,$sqlN);
mysql_select_db($dbname);
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

if($BigID=="")
{
$sql="select * from smallpro order by paixu asc limit ".($List_Num*$Page).",".$List_Num."";
}
else
{
$sql="select * from smallpro where proID = ".$ID." order by paixu asc limit ".($List_Num*$Page).",".$List_Num."";
}
//$result=mysql_db_query($dbname,$sql);
mysql_select_db($dbname);
$result=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
</head>
<body>
<?php
		  	$sqlB="select * from pro_info where ID=".$ID."";
			//$resultB=mysql_db_query($dbname,$sqlB);
			mysql_select_db($dbname);
			$resultB=mysql_query($sqlB);
			$rsB=mysql_fetch_array($resultB);
			$pro_name=$rsB["pro_name"];
?>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC">
  <tr>
    <td height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>产品&nbsp;&nbsp;<?php echo $pro_name;?>&nbsp;&nbsp;小图管理</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="savesmallpro.php?action=del&amp;proID=<?php echo $ID;?>">
      <table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td height="47" valign="top" bgcolor="#FFFFFF">
		  <?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>还没有添加数据！</span></td></tr></table>";
		 }
       
		 else
		 {
		?>
                <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
                  <tr align="center" bgcolor="#F8F8F8" >
                    <td width="6%" bgcolor="#FFFFFF">序号</td>
                    <td bgcolor="#FFFFFF">大类类型</td>
                    <td bgcolor="#FFFFFF">小类类型</td>
                    <td bgcolor="#FFFFFF">产品名称（中文）</td>
                    <td bgcolor="#FFFFFF">产品名称（英文）</td>
                    <td>产品图片</td>
                    <td width="11%" bgcolor="#FFFFFF">选择</td>
                  </tr>
                  <?php
			  while($rs=mysql_fetch_array($result))
			  {
			  ?>
                  <tr>
                    <td height="82" align="center" bgcolor="#FFFFFF"><?php echo $rs["paixu"];?></td>
                    <td width="18%" align="center" bgcolor="#FFFFFF"><?php
				  $sqlB="select * from pro_class where ID=".$rs["BigID"]."";
                  //$resultB=mysql_db_query($dbname,$sqlB);//执行SQL命令
				  mysql_select_db($dbname);
				  $resultB=mysql_query($sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  ?></td>
                    <td width="18%" align="center" bgcolor="#FFFFFF"><?php
				  $sqlS="select * from pro_small where ID=".$rs["SmallID"]."";
                  //$resultS=mysql_db_query($dbname,$sqlS);//执行SQL命令
				  mysql_select_db($dbname);
				  $resultS=mysql_query($sqlS);
			      $rsS=mysql_fetch_array($resultS);
				  echo $rsS["SmallClass"];
				  ?></td>
                    <td width="16%" align="center" bgcolor="#FFFFFF"><?php echo $rs["title"];?></td>
                    <td width="15%" align="center" bgcolor="#FFFFFF"><?php echo $rs["entitle"];?></td>
                    <td width="16%" align="center"><table border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
                        <tr>
                          <td bgcolor="#FFFFFF"><img src="<?php echo $rs["propic"];?>" width="70" height="70" /></td>
                        </tr>
                    </table></td>
                    <td align="center" bgcolor="#FFFFFF"><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"];?>" /></td>
                  </tr>
                  <?php
			  }
			  ?>
                  <tr align="center" >
                    <td colspan="14" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="87%" height="35" align="right"><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href=smallpro.php?BigID=".$BigID."&ID=".$proID.">首页&nbsp;&nbsp;</a>";
					  echo "<a href=smallpro.php?Page=".$Prv."&BigID=".$BigID."&ID=".$proID.">上一页&nbsp;</a>";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;";
					  }
					  if($Page!=$CountPage-1)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage-1;
					  echo "<a href=smallpro.php?Page=".$NtPage."&BigID=".$BigID."&ID=".$proID.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=smallpro.php?Page=".$EdPage."&BigID=".$BigID."&ID=".$proID.">尾页&nbsp;</a>";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?>                          </td>
                          <td width="13%" align="right"><a href="#" onclick="mm();">全选</a>
                              <input type="checkbox" name="checkbox" value="Check All" onclick="mm();" />
                              <input type="submit" name="Submit" value="删 除" onclick="return test();" /></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
            <?php
			}
			?>          </td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'><strong>添加产品&nbsp;&nbsp;<?php echo $pro_name;?>&nbsp;&nbsp;小图</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform2" name="myform2" method="post" action="savesmallpro.php?action=add&amp;proID=<?php echo $ID;?>" onsubmit="return CheckForm2();">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF">图片</td>
          <td width="20%" bgcolor="#FFFFFF">排序</td>
          <td width="24%" bgcolor="#FFFFFF">操 作</td>
        </tr>
        <tr align="center" bgcolor="#F8F8F8" >
          <td bgcolor="#FFFFFF"><span style="PADDING-LEFT: 10px">
            <input name="propic" type="text" class="webInput" id="propic" size="30" />
            <input type="button" name="Submit3" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=myform2&amp;setpic=propic&amp;setress=smallpro','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" />
          </span></td>
          <td bgcolor="#FFFFFF"><input name="classidorder1" type="text" id="classidorder1" value="<?php echo $Num+1;?>" size="4" /></td>
          <td bgcolor="#FFFFFF"><input type="submit" name="Submit2" value="确认添加" /></td>
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
<script language="javascript" src="comm_js/comm.js"></script>
<SCRIPT language=JScript>
function check(){
if(document.myform.ID[].value==""){
document.myform.ID[].focus();
alert("请选择!");
return false;
}
</SCRIPT>