<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
$VipUser=$_COOKIE["VipUser"];

/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=100;
/*-----------------计算共有记录数--------------------*/
//$sqlN="select Count(*) from ruanwen_info where VipUser='".$VipUser."'";
$sqlN="select Count(*) from ruanwen_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;
/*--------------------------------------------------*/

$sql="select * from ruanwen_info order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
$result=mysql_db_query($dbname,$sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<TITLE>后台管理中心</TITLE>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>软文发布列表</h6>
	<div class="content">
	  <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" style="font-size:12px">
	  <?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>您还没有软文数据！</span></td></tr></table>";
		 }
       
		 else
		 {
		?>
	    <tr>
	      <td height="30" bgcolor="#FFFFFF" align="center">订单ID</td>
	      <td bgcolor="#FFFFFF" align="center">会员名称</td>
		  <td bgcolor="#FFFFFF" align="center">文章标题</td>
	      <td bgcolor="#FFFFFF" align="center">网址</td>
	      <td bgcolor="#FFFFFF" align="center">发布网站</td>
	      <td bgcolor="#FFFFFF" align="center">费用(元)</td>
	      <td bgcolor="#FFFFFF" align="center">状态</td>
		  <td bgcolor="#FFFFFF" align="center">编辑处理进程</td>
		  <td bgcolor="#FFFFFF" align="center">提交时间</td>
	      <td bgcolor="#FFFFFF" align="center">发布时间</td>
	      <td bgcolor="#FFFFFF" align="center">管理操作</td>
        </tr>
        <?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
		?>
		<TR>
		<TD bgColor=#ffffff height=30>
		  <DIV align=center><?php echo $rs["order_id"];?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["VipUser"];?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=left style="padding-left:5px"><a href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank"><?php echo $rs["title"];?></a></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php
	if($rs['flag']==2){?>
		<a href="<?php echo $rs["weburl"];?>" target="_blank"><?php echo $rs["weburl"];?></a>
	<?php
	}elseif($rs['flag']==3){?>
		<?php echo $rs["reason"];?>
	<?php }?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["medianame"];?></DIV></TD>
		<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 0px" 
		bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["price"];?>元</DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php
	if($rs['flag']==2 and $rs['yn']==1){
		echo "<b style='color:#0000FF'>已确认发布</b>";
	}elseif($rs['flag']==3 and $rs['yn']==1){
		echo "<b style='color:#0000FF'>已确认拒稿</b>";
	}else{
		if($rs['dyn']==1){
				echo "<b style='color:#000000'>已删单（已退款）</b>";
		}
		else{
			if($rs['flag']==0){
				echo "<b style='color:#2a8104'>未处理</b>";
			}
			elseif($rs['flag']==1){
				echo "<b style='color:#FF0000'>处理中</b>";
			}
			elseif($rs['flag']==2 and $rs['yn']!=1){
				echo "<b style='color:#0000FF'>未确认发布</b>";
			}
			elseif($rs['flag']==3 and $rs['yn']!=1){
				echo "<b style='color:#000000'>未确认拒稿</b>";
			}
		}
	}?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php
	if($rs['VipUser']<>""){
		if($rs['flag']==0){
			echo "<b style='color:#2a8104'>未处理</b>";
		}elseif($rs['flag']==1){
			echo "<b style='color:#FF0000'>处理中</b>";
		}elseif($rs['flag']==2){
			echo "<b style='color:#0000FF'>已发布</b>";
		}elseif($rs['flag']==3){
			echo "<b style='color:#0000FF'>已拒稿</b>";
		}else{
			echo "<b style='color:#0000FF'>处理完毕</b>";
		}
	}
	else{
		echo "<b style='color:#2a8104'>官方资源</b>";
	}
	?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["data"];?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["fbtime"];?></DIV></TD>
		<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 0px" 
    bgColor=#ffffff>
      <DIV align=center><?php
	if($rs['flag']==0 and $rs['dyn']==1){?>
			<A href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</A> | <A href="editruanwen.php?ID=<?php echo $rs["ID"];?>">编辑</A> | <A href="ruanwen_add.php?ID=<?php echo $rs["ID"];?>">再发布</A>
	<?php
	}
	elseif(($rs['flag']==2 or $rs['flag']==3) and $rs['yn']==1){?>
		<A href="../rwinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</A> | <A href="editruanwen.php?ID=<?php echo $rs["ID"];?>">编辑</A> | <A href="ruanwen_add.php?ID=<?php echo $rs["ID"];?>">再发布</A>
	<?php
	}
	else { ?>
		<A href="recruanwen.php?ID=<?php echo $rs["ID"];?>">收稿</A> | <A href="pubruanwen.php?ID=<?php echo $rs["ID"];?>">发布</A> | <A href="refruanwen.php?ID=<?php echo $rs["ID"];?>">拒稿</A> | <A href="editruanwen.php?ID=<?php echo $rs["ID"];?>">确认</A>
	<?php
	}
	?></DIV></TD></TR>
	<?php
		$i=$i+1;
		}
	  }?>
      </table><br />
	<table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:13px">
            <tr>
                <td width="87%" height="35" align="right"><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href='ruanwen.php'>首页&nbsp;&nbsp;</a>";
					  echo "<a href=ruanwen.php?Page=".$Prv.">上一页&nbsp;</a>";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;";
					  }
					  if($Page!=$CountPage-1)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage-1;
					  echo "<a href=ruanwen.php?Page=".$NtPage.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=ruanwen.php?Page=".$EdPage.">尾页&nbsp;</a>";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></td>
            </tr>
      </table>
	</div>
</div>
	<div class="bk20 hr"></div>	
</div>
<div id='closed' class="closed"><div id="model" class="model"></div><a href="#" onclick="$('#closed').slideUp()" style="float:right;padding:20px;">[关闭]</a></div>
<iframe name="main" width="0" height="0" id="main"  frameborder="0"></iframe> 
<script language="javascript">
 function letDivCenter(divName,str){    
        var top = ($(window).height() - $("#closed").height())/2;    
        var left = ($(window).width() - $("#closed").width())/2;    
        var scrollTop = $(document).scrollTop();    
        var scrollLeft = $(document).scrollLeft();    
		$(divName).html(str);
        $("#closed").css( { position : 'absolute', 'top' : top + scrollTop, left : left + scrollLeft } ).slideDown(100);   
    }  
</script>
</body>
</html>