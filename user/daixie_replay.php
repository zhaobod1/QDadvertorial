<?php
include ("checkuser.php");
include ("../include/config.php");
$VipUser=$_COOKIE["VipUser"];
$ID=$_REQUEST["ID"];
$sqlN="select * from daixie_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN);
$order_id=$rsN["order_id"];
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>

<SCRIPT type=text/javascript>
	window.focus();
	var pc_hash = 'oxB0Wa';
	</SCRIPT>
	<!--王庆路 将kindeditor替换为ueditor-->
<!--<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script>
KE.show({
	id : 'yaoqiu',
		afterCreate : function(id) {
			KE.event.ctrl(document, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
			KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
	}
});
</script>
<script>
KE.show({
	id : 'encontent',
		afterCreate : function(id) {
			KE.event.ctrl(document, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
			KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
	}
});
</script>
<script>
KE.show({
	id : 'recontent',
		afterCreate : function(id) {
			KE.event.ctrl(document, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
			KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
				KE.util.setData(id);
				document.forms['example'].submit();
			});
	}
});
</script>-->
	<?php include("../ueditor.php")?>
	<!--王庆路 将kindeditor替换为ueditor end-->
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>代写反馈</H6>
<DIV class=content>
<FORM id=form1 onsubmit="return check()" method=post name=form1 action="savedaixie.php?action=rep">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=20 width="12%">
	  <INPUT id="userid" value="<?php echo $rsN["ID"];?>" type="hidden" name="userid">
	  <INPUT id="order_id" value="<?php echo $order_id;?>" type="hidden" name="order_id">
      <DIV align=center>标题</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff width="88%" align=left><INPUT id="biaoti" value="<?php echo $rsN["title"];?>" lang=require class=txt size=80 name="biaoti">（标题字数控制在20个汉字以内为宜！）</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>要求</DIV></TD>
    <TD 
    style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><textarea name="yaoqiu"  style="width:100%;height:330px;visibility:hidden;"><?php echo htmlspecialchars($rsN["content"]);?></textarea>
       </TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>参考示例</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>1、推广对象：一起飞（www.yiqifei.com），正文里添加一处网址；<BR>2、文章体裁：采访型/评论型/故事型/自由型（请选择1种），字数1000以上，要求原创；<BR>3、文章标题：含关键词“特价机票”；<BR>4、宣传要点：一起飞机票网，特价机票2折起，可预订全球200个国家机票，方便又实惠；<BR>5、若有其他要求请写清楚详细，不满意可以重新修改。<BR>6、若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>篇数</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php echo $rsN["pianshu"];?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>金额</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php echo $rsN["price"];?>元</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>状态</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php 
	if($rsN['flag']==0 and $rsN['dyn']==0)
	{
		echo "<b style='color:#2a8104'>未处理</b>";
	}
	elseif($rsN['flag']==0 and $rsN['dyn']==1)
	{
		echo "<b style='color:#000000'>已删单（已退款）</b>";
	}
	elseif($rsN['flag']==1)
	{
		echo "<b style='color:#FF0000'>处理中</b>";
	}
	elseif($rsN['flag']==2 and $rsN['yn']==0)
	{
		echo "<b style='color:#2a8104'>已交稿</b>";
	}
	elseif($rsN['flag']==2 and $rsN['yn']==1)
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	elseif($rsN['flag']==3 and $rsN['yn']==0)
	{
		echo "<b style='color:#FF0000'>已回复</b>";
	}
	elseif($rsN['flag']==3 and $rsN['yn']==1)
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	elseif($rsN['flag']==4)
	{
		echo "<b style='color:#FF0000'>已反馈</b>";
	}
	else
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>稿件内容</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><textarea name="encontent"  style="width:100%;height:330px;visibility:hidden;"><?php echo $rsN["encontent"];?></textarea></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>交互信息</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>
	<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2>
	<?php
		$sqls="select * from daixie_discuss where order_id=".$order_id."";
		$results=mysql_db_query($dbname,$sqls);
		if (mysql_num_rows($results)==NULL)
		 {
		   echo " ";
		 }
		 else
		 {
			while($rss=mysql_fetch_array($results))
			  {
				$VipUser=$rss["VipUser"];
				$sqlu="select * from user where VipUser='".$VipUser."'";
				$resultu=mysql_db_query($dbname,$sqlu);
				$rsu=mysql_fetch_array($resultu);
				if($rsu!=NULL)
				{
					$headpic=$rsu["headpic"];
					$uflag=1;
					$bcolor="#e3e8f3";
				}
				else{
					$sqla="select * from admin where AdminUser='".$VipUser."'";
					$resulta=mysql_db_query($dbname,$sqla);
					$rsa=mysql_fetch_array($resulta);
					if($rsa!=NULL)
					{
						$headpic=$rsa["headpic"];
						$uflag=0;
						$bcolor="#c9d3e9";
					}
					else{
						$headpic="../images/headpic.gif";
					}
				}
				
			?>
			<TR><TD bgColor=<?php echo $bcolor;?> width="110" height="110" rowspan="2"><DIV align=center><img src="<?php echo $headpic;?>" border="0" width="93" height="93"></DIV></TD><TD bgColor=<?php echo $bcolor;?> width="110" height="25" style="PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 8px"><div style="float:left; width:100%; height:26px"><?php echo $rss["VipUser"];?>在【<?php echo $rss["data"];?>】<?php if($uflag) {echo "反馈：";} else {echo "回复：";}?></div></TD></TR>
			<TR>
				<TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 8px" 
				bgColor=#ffffff align=left>
				<div style="float:left; width:100%; height:26px; padding-top:10px;"><?php echo $rss["recontent"];?></div></TD>
			</TR>
		<?php }
		 }
		?>
	</TABLE>
	</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>反馈内容</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><textarea name="recontent"  style="width:100%;height:330px;visibility:hidden;"></textarea></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>&nbsp;</TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><INPUT style="WIDTH: 60px; HEIGHT: 25px" id="button" value=" 提 交 " type=submit name="button"> 
    </TD></TR></TBODY></TABLE></FORM></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 
src="../images/daixie_add.php" frameBorder=0 width=0 name=main></IFRAME>
<SCRIPT type=text/javascript>
function setprice(val)
{
	$("#jiage").val(val*50);
	if($("#jiage").val()==0)
	{
		$("#ye").html(" ");
		$("#button").attr("disabled",true);
	}
	else if($("#yuer").val()-0 < $("#jiage").val()-0)
	{
		$("#ye").html("余额不足请充值.");
		$("#button").attr("disabled",true);
	}
	else
	{
		$("#ye").html(" ");
		$("#button").attr("disabled",false);
	}
}


function check()
    {
        var flg = true;
		var flg1= true;
        $("input[lang='require']").each(function(){
			$(this).css("border-color","#ffffff"); 
            if($(this).val() == "") {
                flg = false;   
				$(this).css("border-color","#FF0000");            
            }        
        })
		
		 $("select[lang='require']").each(function(){
			$(this).css("background-color","#ffffff"); 
            if($(this).val() == "0") {
                flg1 = false;   
				$(this).css("background-color","#FF0000");            
            }        
        })
		
		if(flg==false || flg1==false)
		{
	 	    alert('红色提示为关键信息,请填写完整,不能空!');
			return false;   
			
		}
		
        return true;
    }  

</SCRIPT>
</BODY>
</HTML>
