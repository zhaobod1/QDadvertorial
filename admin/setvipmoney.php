<?php
include ("checkuser.php");
include ("../include/config.php");
$ID=@$_REQUEST["ID"];
$sql="select * from user where ID='".$ID."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $VipUser=$rs["VipUser"];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<TITLE>后台管理中心</TITLE>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script> 
</head>
<body>
<style type="text/css">
	html{_overflow-y:scroll}
.reg_inp {
	BORDER-BOTTOM: #bdc7d8 1px solid; BORDER-LEFT: #bdc7d8 1px solid; PADDING-BOTTOM: 5px; LINE-HEIGHT: 16px; PADDING-LEFT: 4px; PADDING-RIGHT: 4px; HEIGHT: 16px; BORDER-TOP: #bdc7d8 1px solid; BORDER-RIGHT: #bdc7d8 1px solid; PADDING-TOP: 5px
}
.f_red {
	COLOR: red
}
#button { width: 130px; height: 25px; border: 0; background:#2AABE4; color:#FFFFFF; }
#button:hover {width: 130px; height: 25px; border: 0; background:#34CAF4; cursor:hand;}
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>资金调整（会员：<b style='color:#2a8104'><?php echo $VipUser;?></b>）</h6>
	<div class="content">
    
	  <form id="form1" name="form1" method="post" action="savevip.php?action=money&amp;ID=<?php echo $rs["ID"];?>" onsubmit="return check()">
	    <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#e2e2e2" style="font-size:12px">
　<TR>
    <TD align="right" class=tl width="20%" height="36px" bgcolor="#FFFFFF">选择增/减：<SPAN class=f_red>*</SPAN></TD>
    <TD width="53%" bgcolor="#FFFFFF">　<select name="zjlx" size="1" id="zjlx">
          <option value=1 >资金增加</option>
		  <option value=2 selected>资金减少</option>
      </select></TD>
    <TD bgcolor="#FFFFFF"><SPAN id=dpassword class=f_red></SPAN>&nbsp; <input id="userid" value="<?php echo $VipUser;?>" type="hidden" name="userid" /></TD></TR>
  <TR>
    <TD align="right" class=tl width="20%" height="36px" bgcolor="#FFFFFF">调整金额：<SPAN class=f_red>*</SPAN></TD>
    <TD width="53%" bgcolor="#FFFFFF">　<INPUT style="LINE-HEIGHT: 22px; WIDTH: 80px; HEIGHT: 22px" id="jine" class="reg_inp" type="text" name="jine" value="0"></TD>
    <TD bgcolor="#FFFFFF"><SPAN id=dpassword class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD align="right" class=tl bgcolor="#FFFFFF">调整原因：<SPAN class=f_red>*</SPAN></TD>
    <TD bgcolor="#FFFFFF">　<INPUT style="LINE-HEIGHT: 22px; WIDTH: 380px; HEIGHT: 22px" id="reason" class="reg_inp" size=30 type="text" name="reason"> <SPAN id=un1 class=f_red></SPAN><SPAN style="COLOR: #ccc"></SPAN> </TD>
    <TD bgcolor="#FFFFFF"><SPAN id=dcpassword class=f_red></SPAN>&nbsp; </TD></TR>
	      <tr>
	        <td height="36px" bgcolor="#FFFFFF">&nbsp;</td>
	        <td align="left" bgcolor="#FFFFFF">　<input type="submit" name="button" id="button" value=" 提交调整 "/></td>
			<td align="left" bgcolor="#FFFFFF"></td>
          </tr>
        </table>
      </form>
	</div>
</div>
	<div class="bk20 hr"></div>	
</div>
<iframe name="main" width="0" height="0" id="main"  frameborder="0"></iframe>
<script type="text/javascript">
function check()
    {
        if(document.form1.jiner.value==""){
           document.form1.jiner.focus();
           alert("成本价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.jiner.value))
		{
			alert("请正确输入成本价格");
			document.form1.jiner.focus();
			return false;
		}
		if (Number(document.form1.jiner.value) < 0) {
			alert("成本价格只能输入数字，并且不能是负数");
			document.form1.jiner.focus();
			return false;
		}
		
		if(document.form1.reason.value==""){
           document.form1.reason.focus();
           alert("资金调整原因不能空!");
           return false;
		}
    }
</script>
</body>
</html>