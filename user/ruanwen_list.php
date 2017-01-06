<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
$fg=$_COOKIE["fg"];

$VipUser=$_COOKIE["VipUser"];
//echo "<script>alert('".$VipUser."');</script>";

/*-----------------接收相关数据值---------------------*/
//$Page=@$_REQUEST["Page"];
$skey=@$_REQUEST["skey"];
$key=@$_REQUEST["key"];
$fbkey=@$_REQUEST["fbkey"];
switch($fbkey)
	{
	case "1":
		$fbsql="flag=1";
		break;
	case "2":
		$fbsql="flag=2";
		break;
	case "3":
		$fbsql="flag=3";
		break;
	case "4":
		$fbsql="dyn=1";
		break;
	default:
		$fbsql="flag=0 and dyn<>1";
	}
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
if($key=="")
{
	if($fbkey==""){
		$sqlN="select Count(*) from ruanwen_info where owner='".$VipUser."'";
	}
	else{
		$sqlN="select Count(*) from ruanwen_info where owner='".$VipUser."' and ".$fbsql."";
	}
}
else{
	if($fbkey==""){
		$sqlN="select Count(*) from ruanwen_info where owner='".$VipUser."' and ".$skey." like '%".$key."%'";
	}
	else{
		$sqlN="select Count(*) from ruanwen_info where owner='".$VipUser."' and ".$skey." like '%".$key."%' and ".$fbsql."";
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
	if($fbkey==""){
		$sql="select * from ruanwen_info where owner='".$VipUser."' order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from ruanwen_info where owner='".$VipUser."' and ".$fbsql." order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}
else{
	if($fbkey==""){
		$sql="select * from ruanwen_info where owner='".$VipUser."' and ".$skey." like '%".$key."%' order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
	else{
		$sql="select * from ruanwen_info where owner='".$VipUser."' and ".$skey." like '%".$key."%' and ".$fbsql." order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
	}
}

$result=mysql_db_query($dbname,$sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>出稿处理</TITLE>
<META charset=utf-8>
<LINK rel=stylesheet type=text/css href="images/style.css">
<LINK rel=stylesheet type=text/css href="images/mis.css">
<SCRIPT language=javascript type=text/javascript src="images/WdatePicker.js"></SCRIPT>
<LINK rel=stylesheet type=text/css href="images/datepicker.css">
<LINK disabled rel=stylesheet type=text/css href="images/datepicker(1).css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY bottomMargin=0 leftMargin=0 rightMargin=0 topMargin=0>
<style>
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
</style>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
  <TBODY>
  <TR>
    <TD>
      <FORM id="myform2" name="myform1" method="post" action="ruanwen_list.php" onsubmit="return checkSo();">
      <TABLE style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 30px" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" align=center style="font-size=12px">
        <TBODY>
        <TR>
          <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" >
          <td width="100%" bgcolor="#FFFFFF"><table width="730" border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td width='89' align='center'>搜索条件：</td>
              <td width='143'><select name='skey' id="skey" style='width:150'>
                <option value=''>选择类型...</option>
                <option value="order_id">订单ID</option>
                <option value="title">文章标题</option>
				<option value="medianame">媒体名称</option>
				<option value="data">订单时间</option>
				<option value="fbtime">发布时间</option>
              </select>
              </td>
              <td width='90'>搜索关键字： </td>
              <td width='210'><input name='key' type='text' id="key" style='width:150px' value='' />
              </td>
			  <td width='143'><select name='fbkey' id="fbkey" style='width:150'>
                <option value=''>选择状态...</option>
                <option value="0">未处理</option>
                <option value="1">处理中</option>
				<option value="2">已发布</option>
                <option value="3">已拒稿</option>
				<option value="4">已删单</option>
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
          <TD bgColor=#FFFFFF colSpan=11 align=middle>
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
                  <DIV align=center>订单ID</DIV></TD>
                <TD>
                  <DIV align=center>文章标题</DIV></TD>
                <TD>
                  <DIV align=center>发布网址</DIV></TD>
                <TD>
                  <DIV align=center>发布网站</DIV></TD>
                <TD>
                  <DIV align=center>费用(元)</DIV></TD>
                <TD>
                  <DIV align=center>发布状态</DIV></TD>
				<TD>
                  <DIV align=center>编辑处理进程</DIV></TD>
                <TD>
                  <DIV align=center>订单时间</DIV></TD>
				<TD>
                  <DIV align=center>发布时间</DIV></TD>
                <TD width="170">
                  <DIV align=center>管理操作</DIV></TD></TR>
			<?php
			$i=1;
			while($rs=mysql_fetch_array($result))
			{
				$sqla="select * from media_info where ID=".$rs["mid"]."";
				$resulta=mysql_db_query($dbname,$sqla);
				$rsa=mysql_fetch_array($resulta);
			?>
              <TR onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
                <TD>
                  <DIV align=center><?php echo $rs["order_id"];?></DIV></TD>
                <TD>
                  <DIV align=left style="padding-left:10px"><a href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank"><?php echo $rs["title"];?></a></DIV></TD>
                <TD>
                  <DIV align=center><?php
	if($rs['flag']==2){?>
		<a href="<?php echo $rs["weburl"];?>" target="_blank" style="color: rgb(255, 0, 0);">查看发布链接</a>
	<?php
	}elseif($rs['flag']==3){?>
		<?php echo $rs["reason"];?>
	<?php }?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["medianame"];?></A></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rsa["scprice"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php
	if($rs['flag']==2 and $rs['yn']==1){
		echo "<b style='color:#0000FF'>已确认发布</b>";
	}elseif($rs['flag']==3 and $rs['yn']==1){
		echo "<b style='color:#0000FF'>已确认拒稿</b>";
	}else{
		if($rs['dyn']==1){
				echo "<b style='color:#000000'>已删单</b>";
			}
			else{
				if($rs['flag']==0){
					echo "<b style='color:#2a8104'>未处理</b>";
				}
				elseif($rs['flag']==1){
					echo "<b style='color:#FF0000'>处理中</b>";
				}
				elseif($rs['flag']==2 and $rs['yn']!=1){
					echo "<b style='color:#0000FF'>未确认发布</b>";
				}
				elseif($rs['flag']==3 and $rs['yn']!=1){
					echo "<b style='color:#000000'>未确认拒稿</b>";
				}
		}
	}?></DIV></TD>

		<TD>
		  <DIV align=center><?php
	if($rs['VipUser']<>""){
		if($rs['dyn']==1){
			echo "<b style='color:#000000'>已删单</b>";
		}
		else{
			if($rs['flag']==0){
				echo "<b style='color:#2a8104'>未处理</b>";
			}elseif($rs['flag']==1){
				echo "<b style='color:#FF0000'>处理中</b>";
			}elseif($rs['flag']==2){
				echo "<b style='color:#0000FF'>已发布</b>";
			}elseif($rs['flag']==3){
				echo "<b style='color:#0000FF'>已拒稿</b>";
			}else{
				echo "<b style='color:#0000FF'>处理完毕</b>";
			}
		}
	}
	else{
		echo "<b style='color:#2a8104'>官方资源</b>";
	}
	?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["data"];?></DIV></TD>
				<TD>
                  <DIV align=center><?php echo $rs["fbtime"];?></DIV></TD>
                <TD>
                  <DIV class="alink" align=center><?php
			if($rs['flag']==0 and $rs['dyn']==1){?>
					<A href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</A>
			<?php
			}
			elseif(($rs['flag']==2 or $rs['flag']==3) and $rs['yn']==1){?>
				<A href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</A> <A href="ruanwen_edit.php?ID=<?php echo $rs["ID"];?>">编辑</A>
			<?php
			}
			else { ?>
				<A href="recruanwen.php?ID=<?php echo $rs["ID"];?>">收稿</A> <A href="pubruanwen.php?ID=<?php echo $rs["ID"];?>">发布</A> <A href="refruanwen.php?ID=<?php echo $rs["ID"];?>">拒稿</A>
			<?php
			}
			?></DIV></TD></TR>
			<?php
			$i=$i+1;
			}?>
			</TABLE></TD></TR>
			</TBODY>
			<?php }?>
		</TBODY>
	  </TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" bgColor=#ffffff align=center style="font-size:12px">
        <TBODY>
        <TR>
          <TD height=10></TD></TR>
        <TR>
          <TD align=middle>
            <DIV class=pager><?php
				if($Num>0){
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href=ruanwen_list.php?skey=".$skey."&key=".$key."&fbkey=".$fbkey.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=ruanwen_list.php?Page=".$Prv."&skey=".$skey."&key=".$key."&fbkey=".$fbkey.">上一页</a>&nbsp;&nbsp;";
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
					  echo "<a href=ruanwen_list.php?Page=".$NtPage."&skey=".$skey."&key=".$key."&fbkey=".$fbkey.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=ruanwen_list.php?Page=".$EdPage."&skey=".$skey."&key=".$key."&fbkey=".$fbkey.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					}  ?>
			</DIV></TD></TR>
        <TR>
          <TD height=20></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
