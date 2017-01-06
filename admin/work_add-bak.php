<?php
include ("../include/config.php");
include ("checkuser.php");

$titleID=$_REQUEST["titleID"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理中心</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
<script type="text/javascript">
	window.focus();
	var pc_hash = 'oxB0Wa';
	</script>
<script type='text/javascript' src='../images/ueditor.config.js'></script>
<script type='text/javascript' src='../images/ueditor.all.js'></script> 
</head>
<body>
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>提交工单</h6>
	<div class="content">
	  <form id="form1" name="form1" method="post" action="work_add.php?titleID=ask" onsubmit="return check()">
	    <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2">
	      <tr>
	        <td width="12%" height="30" bgcolor="#FFFFFF" style="padding-left:10px;"><div align="center">
	          <div align="center">问题标题</div>
	          </div></td>
	        <td width="88%" align="left" bgcolor="#FFFFFF"><input name="title" type="text" class="txt" id="title"  size="100" lang='require' />（订单问题请提供订单ID方便快速为您解决）</td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF" style="padding-left:10px;"><div align="center">问题详述</div></td>
	        <td align="left" bgcolor="#FFFFFF">

      <textarea name="memo" id="myEditor"></textarea>
        <script type='text/javascript'>
            var editor = new UE.ui.Editor();
            editor.render('myEditor');
        </script>            
        </td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
	        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;"><input type="submit" name="button" id="button"  value=" 提 交 "  style="width:60px; height:25px;"/></td>
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
		
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.title.value))
		{
			alert("不能输入特殊字符！");
			document.form1.title.focus();
			return false;
		}
		
        return true;
    }  

</script>
</body>
</html>