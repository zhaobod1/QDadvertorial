<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
$AdminUser=$_COOKIE["AdminUser"];

/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=10;
/*-----------------计算共有记录数--------------------*/

$sqlN="select Count(*) from ruanwen_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

$sql="select * from ruanwen_info order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
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
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
  <TBODY>
  <TR>
    <TD>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" bgColor=#ffffff 
      align=center>
        <TBODY>
        <TR>
          <TD height=5></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" bgColor=#ffffff 
      align=center>
        <TBODY>
        <TR>
          <TD height=3></TD></TR></TBODY></TABLE>
      <FORM method=post name=addForm action="">
      <TABLE style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 30px" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" align=center>
        <TBODY>
        <TR>
          <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px"><SPAN 
            class=ca2>订单ID</SPAN> <INPUT style="WIDTH: 60px" id=order_id 
            type=text name=order_id> <SPAN class=ca2>文章标题</SPAN> <INPUT 
            style="WIDTH: 200px" id=title type=text name=title> <SPAN 
            class=ca2>发布时间</SPAN> <INPUT id=txtStart class=Wdate 
            onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'txtEnd\')||\'%y-%M-%d\'}'})" 
            type=text name=txtStart> 到 <INPUT id=txtEnd class=Wdate 
            onfocus="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'txtStart\')}',maxDate:'%y-%M-%d'})" 
            type=text name=txtEnd> <SPAN class=ca2>发布媒体</SPAN> <INPUT 
            style="WIDTH: 100px" id=media_name type=text name=media_name> <SPAN 
            class=ca2>发布状态</SPAN> <SELECT id=status name=status> <OPTION 
              selected value="">选择</OPTION> <OPTION value=1>待审核</OPTION> <OPTION 
              value=2>已收稿</OPTION> <OPTION value=3>已发布</OPTION> <OPTION 
              value=4>已拒稿</OPTION></SELECT> <INPUT style="WIDTH: 60px; CURSOR: pointer" class=misButton value=查询 type=submit name=Submit1> 
          </TD></TR></TBODY></TABLE></FORM>
      <TABLE border=0 cellSpacing=1 cellPadding=0 width="98%" align=center>
        <TBODY>
        <TR bgColor=#7691c7>
          <TD bgColor=#f1f3f9 colSpan=11 align=middle>
            <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center>
            <TBODY>
			<?php
			 if (mysql_num_rows($result)==NULL)
			 {
			   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
					 <td align=center><span class=rd rd>您还没有软文数据！</span></td></tr></table>";
			 }
		   
			 else
			 {
			?>
              <TR height=25 bgColor=#e3e8f3>
                <TD>
                  <DIV class=style2 align=center>订单ID</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>文章标题</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>发布网址</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>发布网站</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>费用(元)</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>发布状态</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>发布时间</DIV></TD>
                <TD>
                  <DIV class=style2 align=center>管理操作</DIV></TD></TR>
			<?php
			$i=1;
			while($rs=mysql_fetch_array($result))
			{
			?>
              <TR onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#f1f3f9';" height=25>
                <TD>
                  <DIV align=center><?php echo $rs["order_id"];?></DIV></TD>
                <TD>
                  <DIV align=left style="padding-left:10px"><?php echo $rs["title"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["weburl"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["medianame"];?></A></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["price"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php 
	if($rs['flag']==0)
	{
		echo "<b style='color:#FF0000'>未处理</b>";
	}
	elseif($rs['flag']==1)
	{
		echo "<b style='color:#FF0000'>处理中</b>";
	}
	elseif($rs['flag']==2)
	{
		echo "<b style='color:#2a8104'>已发布</b>";
	}
	elseif($rs['flag']==3)
	{
		echo "<b style='color:#000000'>已拒稿</b>";
	}
	else
	{
		echo "<b style='color:#FF0000'>已修改</b>";
	}
	?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["fbtime"];?></DIV></TD>
                <TD>
                  <DIV align=center>
				  <A href="recruanwen.php?ID=<?php echo $rs["ID"];?>">收稿</A> | <A href="pubruanwen.php?ID=<?php echo $rs["ID"];?>">发布</A> | <A href="refruanwen.php?ID=<?php echo $rs["ID"];?>">拒稿</A> 
                  </DIV></TD></TR>
              
			<?php
			$i=$i+1;
			}?>
			</TBODY></TABLE></TD></TR>
			<?php }?>
		</TBODY>
	  </TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" bgColor=#ffffff align=center>
        <TBODY>
        <TR>
          <TD height=10></TD></TR>
        <TR>
          <TD align=middle>
            <DIV class=pager><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href='ruanwen.php'>首页&nbsp;&nbsp;</a>";
					  echo "<a href=ruanwen.php?Page=".$Prv.">上一页&nbsp;</a>";
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
					  echo "<a href=ruanwen.php?Page=".$NtPage.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=ruanwen.php?Page=".$EdPage.">尾页&nbsp;</a>";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?>
			</DIV></TD></TR>
        <TR>
          <TD height=20></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
