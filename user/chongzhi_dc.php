<?php
include ("checkuser.php");
include("../include/config.php");
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

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>在线充值</H6>
<DIV class=content>
<TABLE cellSpacing=1 cellPadding=5 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=38><div align=left style="padding-left:10px">付款到下面帐号后，通知您的客服专员帮您代充到平台！客服QQ：1275522625 电话：18520022850</div></TD>
  </TR>
  <TR>
    <TD style="PADDING-BOTTOM: 20px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 20px" 
    bgColor=#ffffff><p><IMG src="../images/zfb.jpg" width=256 
      height=57></p><br>
	<?php
	  $sqls="select * from bank_info order by ID asc limit 0,1";
	  $results=mysql_db_query($dbname,$sqls);
	    while($rss=mysql_fetch_array($results))
		{
	?>
	  <p>支付宝账户：<?php echo $rss["accnumber"];?></p><br>
	  <p>户名：<?php echo $rss["name"];?></p><br>
	  <p>点此进入支付宝付款页面：<a href="<?php echo $rss["bankname"];?>" target="blank"><?php echo $rss["bankname"];?></a></p>
	<?php
		}
	?>
	</TD>
  </TR>
  </TBODY></TABLE>
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
