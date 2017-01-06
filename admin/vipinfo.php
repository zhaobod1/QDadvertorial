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
	$regtime=$rs["regtime"];
	$qq=$rs["qq"];
	$dianhua=$rs["dianhua"];
	$weburl=$rs["weburl"];
	$myemail=$rs["myemail"];
	$headpic=$rs["headpic"];
    $yue=$rs["yue"];
	$flag=$rs["flag"];
	if($flag=="1"){
		$viplx="核心代理";
	}
	elseif($flag=="2"){
		$viplx="合作加盟供应商";
	}
	else{
		$viplx="企业用户";
	}
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
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>会员详细信息</h6>
	<div class="content">
		<form id="form1" name="form1" method="post" action="savevip.php?action=save&amp;ID=<?php echo $rs["ID"];?>" onsubmit="return check()">
	    <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#e2e2e2">
		<div width="120px" style="float:left;margin-left:18px;padding-top:3px;padding-bottom:5px;"><img src="<?php echo $rs["headpic"];?>" border="0" width="110" height="110"></div>
	      <tr>
	        <td width="12%" height="30" bgcolor="#FFFFFF"><div align="center">
	          <div align="right">会员名称：</div>
	          </div></td>
	        <td width="88%" align="left" bgcolor="#FFFFFF"><?php echo $VipUser;?></td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">注册时间：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><?php echo $regtime;?></td>
          </tr>
		  <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">会员类型：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><!--?php echo $viplx;?--><?php
				$flag=$rs["flag"];
				switch($flag)
				{
				 case "1":
				 echo "<input type=radio name=flag value=1 checked=checked />核心代理
				       <input type=radio name=flag value=2>合作加盟供应商
					   <input type=radio name=flag value=3>企业用户";
				 break;
				    
				 case "2":
				 echo "<input type=radio name=flag value=1>核心代理
				       <input type=radio name=flag value=2  checked=checked/>合作加盟供应商
					   <input type=radio name=flag value=3 >企业用户";
			     break;
				 
				 case "3":
				 echo "<input type=radio name=flag value=1>核心代理
				       <input type=radio name=flag value=2>合作加盟供应商
					   <input type=radio name=flag value=3 checked=checked/>企业用户";
				 break;
				}
				?></td>
          </tr>
		  <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">帐号余额：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><b style='color:#FF0000'><?php echo $yue;?></b>元</td>
          </tr>
		  <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">腾 讯 QQ：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><input name="qq" type="text" class="txt" id="qq" lang='require' value="<?php echo $qq;?>"  size="40" xml:lang="require"/></td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">联系电话：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><input name="tel" type="text" class="txt" id="tel" lang='require' value="<?php echo $dianhua;?>"  size="40" xml:lang="require"/></td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">个人网站：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><input name="web" type="text" class="txt" id="web" lang='require' value="<?php echo $weburl;?>"  size="40" xml:lang="require"/></td>
          </tr>
	      <tr>
	        <td height="30" bgcolor="#FFFFFF"><div align="right">联系邮箱：</div></td>
	        <td align="left" bgcolor="#FFFFFF"><input name="email" type="text" class="txt" id="email" lang='require' value="<?php echo $myemail;?>"  size="40" xml:lang="require"/></td>
          </tr>
		  <tr bgcolor="#FFFFFF">
		  <td height="30" bgcolor="#FFFFFF"><div align="right">个人头像：</div></td>
		  <td><input name="headpic" type="text" class="webInput" id="headpic" value="<?php echo $headpic;?>" size="40" />
			  <input type="button" name="Submit4" value="上传头像" onclick="window.open('upfile_indexpic.php?setform=form1&amp;setpic=headpic&amp;setress=headpic','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" /></td>
		  </tr>
		  <tr>
	        <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
	        <td align="left" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value=" 提 交 "  style="width:60px; height:25px;"/></td>
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
    }  

</script>
</body>
</html>