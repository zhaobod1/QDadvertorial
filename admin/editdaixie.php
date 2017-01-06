<?php
include ("checkuser.php");
include ("../include/config.php");

$ID=$_REQUEST["ID"];
$sqlN="select * from daixie_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
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
<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script>
KE.show({
	id : 'yijian',
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
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>代写编辑</H6>
<DIV class=content>
<FORM id=form1 onsubmit="return check()" method=post name=form1 action="savedaixie.php?action=edit">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=20 width="12%">
      <DIV align=center>会员</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff width="88%" align=left><?php echo $rsN["VipUser"];?><INPUT 
      id="userid" value="<?php echo $rsN["ID"];?>" type="hidden" name="userid"></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=20 width="12%">
      <DIV align=center>标题</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff width="88%" align=left><?php echo $rsN["title"];?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>要求</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php echo $rsN["content"];?></TD></TR>
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
    bgColor=#ffffff align=left><SELECT id="flag" lang=require onchange=setprice(this.value) name="flag"> <OPTION selected value=0 <?if($rsN["flag"]==0){echo "selected";}?>>未确认</OPTION> <OPTION value=1 <?if($rsN["flag"]==1){echo "selected";}?>>已确认</OPTION> <OPTION value=2 <?if($rsN["flag"]==2){echo "selected";}?>>已完成</OPTION> <OPTION value=3 <?if($rsN["flag"]==3){echo "selected";}?>>请修改</OPTION> <OPTION value=4 <?if($rsN["flag"]==4){echo "selected";}?>>已修改</OPTION></SELECT></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>稿件内容</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><textarea name="yijian"  style="width:100%;height:330px;visibility:hidden;"><?php echo htmlspecialchars($rsN["encontent"]);?></textarea>
       </TD></TR>
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
