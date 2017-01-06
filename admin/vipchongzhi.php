<?php
include ("checkuser.php");
include ("../include/config.php");
$ID=@$_REQUEST["ID"];
$sqls="select * from user where ID=".$ID."";
$results=mysql_db_query($dbname,$sqls);
$rss=mysql_fetch_array($results);
if($rss!=NULL)
{
	$VipUser=$rss["VipUser"];
}
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

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
.wycz_zh {
	LINE-HEIGHT: 32px; MARGIN-TOP: 10px
}
.wycz_zh TABLE {
	TEXT-ALIGN: center; BORDER-COLLAPSE: collapse
}
.wycz_zh TABLE {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TH {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TD {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TH {
	BACKGROUND: #f0f5fb
}
#kaihu_sm {
	MARGIN-TOP: 20px; COLOR: #ff0000; FONT-SIZE: 14px; FONT-WEIGHT: normal
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>在线充值</H6>
<DIV class=content>
<!--FORM onsubmit="return check()" method=post name=alipayment action=alipay/alipayapi.php target=_blank-->
<FORM onsubmit="return check()" method=post name=alipayment action="savevipchongzhi.php">
<TABLE cellSpacing=1 cellPadding=5 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>充　　值</DIV></TD>
    <TD bgColor=#ffffff align=left><IMG src="../images/zfb.jpg" width=256 
      height=57></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30 width="12%">
      <DIV align=center>
      <DIV align=center>账　　号</DIV></DIV></TD>
    <TD bgColor=#ffffff width="88%" align=left>&nbsp;&nbsp;<?php echo $VipUser;?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>充值金额</DIV></TD>
    <TD bgColor=#ffffff align=left>&nbsp; <INPUT style="WIDTH: 80px" id="money" lang=require class=txt size=40 name="money"> 元 <INPUT value="<?php echo $VipUser;?>" type="hidden" name="VipUser"></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>&nbsp;</TD>
    <TD bgColor=#ffffff align=left><INPUT style="WIDTH: 60px; HEIGHT: 25px" id=button value=" 提 交 " type=submit name=button></TD></TR></TBODY></TABLE></FORM>
<DIV class="bk20 hr"></DIV>
<DIV class=wycz_zh>
<TABLE width="100%" style="font-size:13px">
  <TBODY>
  <TR>
    <TH id=kaihu_sm colSpan=4>其他支付方式：请在支付后通知客服查账！</TH></TR>
  <TR>
    <TH width="18%">银行</TH>
    <TH width="17%">账户</TH>
    <TH width="30%">帐号</TH>
    <TH width="40%">开户行</TH></TR>
<?php
$sql="select * from bank_info order by ID asc";
$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result))
	{
?>
  <TR>
    <TD><IMG src="<?php echo $rs["propic"];?>"></TD>
    <TD><?php echo $rs["name"];?></TD>
    <TD><?php echo $rs["accnumber"];?></TD>
    <TD><?php echo $rs["bankname"];?></TD></TR>
<?php
	}
?>
  <TR>
    <TH id=kaihu_sm colSpan=4>如需开票，需要额外加收8%的税点。</TH></TR></TBODY></TABLE></DIV></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" 
frameBorder=0 width=0 name=main></IFRAME>
<SCRIPT type=text/javascript>
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
		 
		if(flg==false)
		{
	 	    alert('红色提示为关键信息,请填写完整,不能空!');
			return false;
		}
        return true;
    }
</SCRIPT>
</BODY>
</HTML>
