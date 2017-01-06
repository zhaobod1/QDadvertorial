<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
$VipUser=$_COOKIE["VipUser"];

/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=10;
/*-----------------计算共有记录数--------------------*/
$sqlu="select * from user where VipUser='".$VipUser."'";
$resultu=mysql_db_query($dbname,$sqlu);
$rsu=mysql_fetch_array($resultu);
$medianame=$rsu["medianame"];
if($medianame<>""){
	$mtmc=explode(",",$medianame);
	if(count($mtmc)>1){
		for($i=0;$i<count($mtmc);$i++){
			if($i==0){
				$sql_mtmc="medianame='".$mtmc[$i]."'";
			}
			else{
				$sql_mtmc=$sql_mtmc." or medianame='".$mtmc[$i]."'";
			}
		}
	}
	else{
		$sql_mtmc="medianame='".$medianame."'";
	}
}
else{
$sqls="select * from media_info where VipUser='".$VipUser."' and sh=0";
$results=mysql_db_query($dbname,$sqls);
if( mysql_num_rows($results)==NULL ){
	//找不到
	
  }
else{
	$i=0;
	$medianame="";
	while($rs=mysql_fetch_array($result))
	{
		//循环获取媒体
		if($i==0){
			$sql_mtmc="medianame='".$mtmc[$i]."'";
		}
		else{
			$sql_mtmc=$sql_mtmc." or medianame='".$mtmc[$i]."'";
		}
	}
  }
}

$sqlN="select Count(*) from media_info where ".$sql_mtmc."";
//$sqlN="select Count(*) from media_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

$sql="select * from media_info where ".$sql_mtmc." order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
//$sql="select * from media_info order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
$result=mysql_db_query($dbname,$sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>媒介资源管理</TITLE>
<META charset=utf-8>
<LINK rel=stylesheet type=text/css href="website_list_files/style.css">
<LINK rel=stylesheet type=text/css href="website_list_files/mis.css">
<LINK rel=stylesheet type=text/css href="website_list_files/tipswindown.css">
<LINK rel=stylesheet type=text/css href="website_list_files/pagination.css">
<SCRIPT language=javascript type=text/javascript src="website_list_files/jquery-1.4.2.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="website_list_files/tipswindown.js"></SCRIPT>

<STYLE type=text/css>.style2 {
	COLOR: #3e5f9b; FONT-WEIGHT: bold
}
UL {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Arial; PADDING-TOP: 0px
}
UL LI {
	LIST-STYLE-TYPE: none; LIST-STYLE-IMAGE: none
}
.all {
	MARGIN: 0px; PADDING-LEFT: 0px
}
.navMenu {
	LINE-HEIGHT: 28px; PADDING-LEFT: 0px; BACKGROUND: #f7f7f7; HEIGHT: 28px; MARGIN-LEFT: auto; CLEAR: both; MARGIN-RIGHT: auto
}
.navMenu UL {
	FLOAT: left
}
.navMenu LI {
	DISPLAY: inline; LETTER-SPACING: 1px; FONT-SIZE: 13px
}
.navMenu LI A {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; FLOAT: left; HEIGHT: 28px; COLOR: #3e5f9b; FONT-WEIGHT: bold; BORDER-RIGHT: #cfcfcf 1px solid; TEXT-DECORATION: none; PADDING-TOP: 0px
}
.navMenu LI A:hover {
	BACKGROUND: #c9d3e9; COLOR: #3e5f9b
}
.navMenu LI.hover A {
	BACKGROUND: #c9d3e9; COLOR: #3e5f9b
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY bottomMargin=0 leftMargin=0 rightMargin=0 topMargin=0>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
  <TBODY>
  <TR>
    <TD>
      <TABLE style="MARGIN-TOP: 5px; BORDER-COLLAPSE: collapse; MARGIN-BOTTOM: 5px; HEIGHT: 30px" 
      border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="98%" 
      align=center>
        <TBODY>
        <TR>
          <TD 
          style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px">
            <UL>
              <LI>亲，为了不与客户发生纠纷麻烦，请及时更新您的资源信息，包括带网址情况、收录情况、备注说明等；您有优势的资源也可以联系我们，将通过各种方式推广您的资源，一起互利合作，谢谢。</LI></UL></TD></TR></TBODY></TABLE>
      <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=1 
      borderColor=#c9d3e9 cellPadding=0 width="98%" align=center>
        <TBODY>
        <TR>
          <TD>
            <DIV class=navMenu>
            <DIV class=all>
            <UL>
              <LI class=hover><A href="website_list.php">我的资源管理</A></LI></UL></DIV></DIV></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" align=center>
        <TBODY>
        <TR bgColor=#7691c7>
          <TD bgColor=#f1f3f9 colSpan=11 align=middle>
            <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=1 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center>
			<?php
			 if (mysql_num_rows($result)==NULL)
			 {
			   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
					 <td align=center><span class=rd rd>您还没有软文数据！</span></td></tr></table>";
			 }
		   
			 else
			 {
			?>
              <TBODY>
              <TR height=25 bgColor=#e3e8f3>
                <TD>
                  <DIV align=center>网站类型</DIV></TD>
                <TD>
                  <DIV align=center>网站频道</DIV></TD>
                <TD>
                  <DIV align=center>VIP秒杀价</DIV></TD>
				<TD>
                  <DIV align=center>市场价</DIV></TD>
                <TD>
                  <DIV align=center>带网址情况</DIV></TD>
                <TD>
                  <DIV align=center>新闻源</DIV></TD>
                <TD>
                  <DIV align=center>备注</DIV></TD>
                <TD>
                  <DIV align=center>操作</DIV></TD></TR>
			<?php
			$i=1;
			while($rs=mysql_fetch_array($result))
			{
				$ID=$rs["class_id"];
				$sqlb="select * from media_class where ID=".$ID."";
				$resultb=mysql_db_query($dbname,$sqlb);
				$rsb=mysql_fetch_array($resultb);
			?>
              <TR onmouseover="this.bgColor='#FBDFCC';" 
              onmouseout="this.bgColor='#f1f3f9';" height=25>
                <TD>
                  <DIV align=center><?php echo $rsb["BigClass"];?></DIV></TD>
                <TD>
                  <DIV align=center><A href="<?php echo $rs["weburl"];?>" target=_blank><?php echo $rs["medianame"];?></A> </DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["dlprice"];?></DIV></TD>
				<TD>
                  <DIV align=center style="text-decoration:line-through"><?php echo $rs["price"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["linkurl"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["xinwenyuan"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["content"];?></DIV></TD>
                <TD>
                  <DIV align=center><A href="editmtbiginfo.php?ID=<?php echo $rs["ID"];?>&amp;class_id=<?php echo $rs["class_id"];?>&amp;titleID=media">修改</A></DIV></TD></TR>
			<?php
			$i=$i+1;
			}?>
			  </TBODY>
			<?php }?>
			  </TABLE></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
