<?php
include ("checkuser.php");
include("../include/config.php");
include("../include/function.php");
require_once("../pay/payconfig.php");

if ($_REQUEST["action"]=="pay"){
  $paymode=$_REQUEST["paymode"];
  if($paymode==1){
	//echo "<script>location.href='chongzhi_alipay.php';</script>";
    echo "<script>location.href='../alipayDemo/index.php';</script>";
   }
  elseif($paymode==2){
    echo "<script>location.href='chongzhi_chinabank.php';</script>";
    die;
	//echo "<script>location.href='chongzhi_chinabank.php';</script>";
   }
  else{
	echo "<script>alert('支付方式未选择，请先选择支付方式！');location.href='chongzhi.php';</script>";
   }
}
?>
<HTML>
<HEAD>
<TITLE>充值管理</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<LINK rel=stylesheet type=text/css href="../pay/images/layout.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>
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
<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>在线充值</H6>
<DIV class=content>
<FORM name="form1" id="form1" action="chongzhi.php?action=pay" method="post">
<TABLE cellSpacing=1 cellPadding=5 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=35>
      <DIV align=center>支付方式</DIV></TD>
    <TD bgColor=#ffffff align=left>　<input type="radio" name="paymode" id="paymode1" value="1" /><IMG src="../images/zfb.jpg" width=256 height=57><input type="radio" name="paymode" id="paymode2" value="2" /><IMG src="../images/chinabank.gif" width=160 height=57></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=35>&nbsp;</TD>
    <TD bgColor=#ffffff align=left>　<INPUT onclick="javascript:check()" style="WIDTH: 60px; HEIGHT: 25px" id=button value=" 确 定 " type=submit name=button></TD></TR></TBODY></TABLE></FORM>
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
$result=mysql_query($sql);
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
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" frameBorder=0 width=0 name=main></IFRAME>
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
