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
//$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
/*-----------------计算共有记录数--------------------*/
$sqlN="select Count(*) from user";
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

$sql="select * from user order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
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
<H6>会员管理</H6>
<DIV class=content>
<form id="myform" name="myform" method="post" action="savevip.php?action=del&amp;titleID=<?php echo $titleID;?>">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2 style="font-size:12px">
  <TBODY><?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd></span></td></tr></table>";
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
      <DIV align=center>注册时间</DIV></TD>
	<TD bgColor=#ffffff width=13%>
      <DIV align=center>账号余额</DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center width=5%>操作</DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center width=7%>选择</DIV></TD></TR>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
		 $flag=$rs["flag"];
		 if($flag=="1"){
			$viplx="核心代理";
		 }
		 elseif($flag=="2"){
			$viplx="合作加盟供应商";
		 }
		 else{
			$viplx="企业用户";
		 }
		?>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center><?php echo $Cpage;?>-<?php echo $i;?></DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center><a href="vipinfo.php?ID=<?php echo $rs["ID"];?>"><?php echo $rs["VipUser"];?></a></DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $viplx;?></DIV>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["regtime"];?></DIV></TD>
	<TD bgColor=#ffffff>
      <DIV align=center><?php echo $rs["yue"];?></DIV></TD></TD>
    <TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" 
    bgColor=#ffffff>
      <DIV class="alink" align=center><a href="vipinfo.php?ID=<?php echo $rs["ID"];?>">会员信息</a> <a href="vipcaiwu.php?ID=<?php echo $rs["ID"];?>">财务报表</a> <a href="setvippass.php?ID=<?php echo $rs["ID"];?>">修改密码</a> <a href="setvipmoney.php?ID=<?php echo $rs["ID"];?>">资金调整</a> <a href="managevip.php?ID=<?php echo $rs["ID"];?>">权限</a> <a href="vipchongzhi.php?ID=<?php echo $rs["ID"];?>">充值</a></DIV></TD>
    <TD bgColor=#ffffff>
      <DIV align=center><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"]?>" /></DIV></TD></TR>
	<?php
		$i=$i+1;
		}
		?>
	</TBODY>
	<?php
		}
		?>
	</TABLE><BR>
	<table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:12px">
            <tr>
                <td width="87%" height="35" align="center"><DIV class=pager><?php
				if($Num>0){
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href=viplist.php?BigID=".$BigID."&titleID=".$titleID.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=viplist.php?Page=".$Prv."&BigID=".$BigID."&titleID=".$titleID.">上一页</a>&nbsp;&nbsp;";
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
					  echo "<a href=viplist.php?Page=".$NtPage."&BigID=".$BigID."&titleID=".$titleID.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=viplist.php?Page=".$EdPage."&BigID=".$BigID."&titleID=".$titleID.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					}  ?></DIV></td>
                <td width="13%" align="right"><a href="#" onclick="mm();">全选</a>
                    <input type="checkbox" name="checkbox" value="Check All" onclick="mm();" />
                    <input type="submit" name="Submit" value=" 删除 " onclick="return test();" /></td>
            </tr>
      </table></form>
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