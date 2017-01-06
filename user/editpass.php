<?php
include ("checkuser.php");
include ("../include/config.php");
$VipUser=$_COOKIE["VipUser"];
$sql="select * from user where VipUser='".$VipUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $VipPass=$rs["VipPass"];
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
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>修改密码</h6>
	<div class="content">
    
	  <form id="form1" name="form1" method="post" action="savepass.php" onsubmit="return check()">
	    <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#e2e2e2" style="font-size:12px">
　<TR>
    <TD align="right" class=tl width="20%" height="36px" bgcolor="#FFFFFF">输入新密码：<SPAN class=f_red>*</SPAN></TD>
    <TD width="53%" bgcolor="#FFFFFF"><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass1" class="reg_inp" type="password" name="pass1"> 密码不能小于6个字符</TD>
    <TD bgcolor="#FFFFFF"><SPAN id=dpassword class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD align="right" class=tl bgcolor="#FFFFFF">重复输入新密码：<SPAN class=f_red>*</SPAN></TD>
    <TD bgcolor="#FFFFFF"><INPUT onblur=twopass() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass2" class="reg_inp" size=30 type="password" name="pass2"> <SPAN id=un1 class=f_red></SPAN><SPAN style="COLOR: #ccc">两次密码请输入一致</SPAN> </TD>
    <TD bgcolor="#FFFFFF"><SPAN id=dcpassword class=f_red></SPAN>&nbsp; </TD></TR>
	      <tr>
	        <td height="36px" bgcolor="#FFFFFF">&nbsp;</td>
	        <td align="left" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value=" 提 交 "  style="width:60px; height:25px;"/></td>
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

        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();
        if(pass1=='')
        {
            alert("密码不能为空！");
            return false;
        }
        if(pass2=='')
        {
            alert("确认密码不能为空！");
            return false;
        }
        if(pass1!=pass2)
        {
            alert('两次输入的密码不一致');
            return false;
        }
    }

	function twopass()
	{
		if($("#pass1").val()!=$("#pass2").val())
		{
			$("#un1").html("<BR>两次密码不一致");
			return false;
		}
		else
		$("#un1").html(" ");
	}

</script>
</body>
</html>