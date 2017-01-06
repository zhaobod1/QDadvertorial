<?php
include ("checkuser.php");
include ("../include/config.php");
$VipUser=$_COOKIE["VipUser"];
$ID=$_REQUEST["ID"];

/*-----------------接收相关数据值---------------------*/
//$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
/*-----------------计算共有记录数--------------------*/
$sqlN="select Count(*) from caiwu where VipUser='".$VipUser."'";
$resultN=mysql_query($sqlN);
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

$sql="select * from caiwu where VipUser='".$VipUser."' order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
$result=mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>

<SCRIPT type=text/javascript>
	window.focus();
	var pc_hash = 'oxB0Wa';
	</SCRIPT>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
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

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>财务管理</H6>
<DIV class=content>
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY><?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>您还没有财务数据！</span></td></tr></table>";
		 }
       
		 else
		 {
		?>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>订单号</DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center>交易时间</DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center>交易类型</DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center>交易金额（元）</DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center>交易状态</DIV></TD></TR>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
		?>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center><?php echo $rs["order_id"];?></DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["data"];?></DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["leixing"];?></DIV></TD>
    <TD 
    style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" 
    bgColor=#ffffff>
      <DIV align=center><?php echo $rs["jine"];?></DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center><?php 
	if($rs['flag']==0)
	{
		echo "<b style='color:#FF0000'>未充值</b>";
	}
	elseif($rs['flag']==1)
	{
		echo "<b style='color:#2a8104'>已充值</b>";
	}
	elseif($rs['flag']==2)
	{
		echo "<b style='color:#FF0000'>未扣款</b>";
	}
	elseif($rs['flag']==3)
	{
		echo "<b style='color:#2a8104'>已扣款</b>";
	}
	elseif($rs['flag']==4)
	{
		echo "<b style='color:#FF0000'>未退款</b>";
	}
	elseif($rs['flag']==5)
	{
		echo "<b style='color:#FF0000'>已退款</b>";
	}
	else
	{
		echo "<b style='color:#2a8104'>已付款</b>";
	}
	?></DIV></TD></TR>
<?php
	$i=$i+1;
	}
	?>
	</TBODY>
	<?php
		}
		?>
</TABLE><BR>
	  <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:13px">
            <tr>
                <td width="87%" height="35" align="center"><DIV class=pager><?php
				if($Num>0){
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href='caiwu.php'>首页</a>&nbsp;&nbsp;";
					  echo "<a href=caiwu.php?Page=".$Prv.">上一页</a>&nbsp;&nbsp;";
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
					  echo "<a href=caiwu.php?Page=".$NtPage.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=caiwu.php?Page=".$EdPage.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					}  ?></DIV></td>
            </tr>
      </table>
</DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" 
frameBorder=0 width=0 name=main></IFRAME>
</BODY>
</HTML>
