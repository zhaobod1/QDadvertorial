<?php
include ("../include/config.php");
include ("checkuser.php");

if($_COOKIE["fg"]!=1)
{
  echo "<script>alert('您的权限有限，请与管理员联系！');history.go(-1);</script>";
}
?>

<?php
/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=10;
/*-----------------计算共有记录数--------------------*/
$sqlN="select Count(*) from user where flag=2";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

$sql="select * from user where flag=2 order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
$result=mysql_db_query($dbname,$sql);

?>
<HTML>
<HEAD runat="server">
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
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>会员管理</H6>
<DIV class=content>
<form id="myform" name="myform" method="post" action="saveworkinfo.php?action=del&amp;titleID=<?php echo $titleID;?>">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY><?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>还没有添加数据！</span></td></tr></table>";
		 }
       
		 else
		 {
		?>
  <TR>
    <TD bgColor=#ffffff height=30 width=5%>
      <DIV align=center>序号</DIV></TD>
    <TD bgColor=#ffffff width=13%>
      <DIV align=center>会员名称</DIV></TD>
    <TD bgColor=#ffffff width=13%>
      <DIV align=center>会员类型</DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center>媒体名称</DIV></TD>
	<TD bgColor=#ffffff width="13%">
      <DIV align=center>操作</DIV></TD>
	</TR>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
		 $flag=$rs["flag"];
		 if($flag=="1"){
			$viplx="VIP会员";
		 }
		 elseif($flag=="2"){
			$viplx="媒介编辑";
		 }
		 else{
			$viplx="普通会员";
		 }
		?>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center><?php echo $Cpage;?>-<?php echo $i;?></DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["VipUser"];?></DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $viplx;?></DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["medianame"];?></DIV></TD>
    <TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" 
    bgColor=#ffffff>
      <DIV align=center><a href="mediaediter.php?ID=<?php echo $rs["ID"];?>">资源设置</a></DIV></TD>
    </TR>
	<?php
		$i=$i+1;
		}
		?>
	</TBODY>
	<?php
		}
		?>
	</TABLE></form><BR>
	<table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:13px">
            <tr>
                <td width="87%" height="35" align="right"><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href=viplist.php?BigID=".$BigID."&titleID=".$titleID.">首页&nbsp;&nbsp;</a>";
					  echo "<a href=viplist.php?Page=".$Prv."&BigID=".$BigID."&titleID=".$titleID.">上一页&nbsp;</a>";
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
					  echo "<a href=viplist.php?Page=".$NtPage."&BigID=".$BigID."&titleID=".$titleID.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=viplist.php?Page=".$EdPage."&BigID=".$BigID."&titleID=".$titleID.">尾页&nbsp;</a>";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></td>
            </tr>
      </table>
	</DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" 
frameBorder=0 width=0 name=main></IFRAME>
</BODY>
</HTML>
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