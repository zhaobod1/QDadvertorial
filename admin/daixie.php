<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");
$AdminUser=$_REQUEST["AdminUser"];

/*-----------------接收相关数据值---------------------*/
//$Page=@$_REQUEST["Page"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
/*-----------------计算共有记录数--------------------*/
//$sqlN="select Count(*) from daixie_info where VipUser='".$VipUser."'";
$sqlN="select Count(*) from daixie_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当前页--------------------*/
if(empty($_REQUEST["Page"])){
	$Page=1;
}else{
	$Page=$_REQUEST["Page"];
	if($Page<1){$Page=1;}
	if($Page>$CountPage){$Page=$CountPage;}
}
$Cpage=$Page+1;
/*--------------------------------------------------*/

$sql="select * from daixie_info order by ID desc limit ".($List_Num*($Page-1)).",".$List_Num."";
$result=mysql_db_query($dbname,$sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>代写预览</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
<script type="text/javascript">
	window.focus();
	var pc_hash = 'oxB0Wa';
	</script>
</head>
<body>
<style type="text/css">
html{_overflow-y:scroll}
.alink{
line-height:32px;}
.alink a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.alink a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
.ok{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#3399FF; font-weight:bold;
}
.pager{
background:#ffffff; line-height:32px; padding-left:6px;}
.pager a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.pager a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
<div class="col-2  col-auto" >
	<h6>代写列表</h6>
	<div class="content">
	  <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" style="font-size:12px">
	  <?php
		 if (mysql_num_rows($result)==NULL)
		 {
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd></span></td></tr></table>";
		 }
       
		 else
		 {
		?>
	    <tr>
	      <td height="30" bgcolor="#FFFFFF">
	        <div align="center">订单ID</div>
	      </td>
		  <td bgcolor="#FFFFFF"><div align="center">会员名称</div></td>
	      <td bgcolor="#FFFFFF"><div align="center">代写标题</div></td>
	      <td bgcolor="#FFFFFF"><div align="center">代写篇数</div></td>
	      <td bgcolor="#FFFFFF"><div align="center">价格</div></td>
	      <td bgcolor="#FFFFFF"><div align="center">创建时间</div></td>
	      <td bgcolor="#FFFFFF"><div align="center">当前状态</div></td>
	      <td bgcolor="#FFFFFF" width="210"><div align="center">管理操作</div></td>
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
		  <DIV align=left style="padding-left:10px"><a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank"><?php echo $rs["title"];?></a></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["pianshu"];?></DIV></TD>
		<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" 
		bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["price"];?>元</DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php echo $rs["data"];?></DIV></TD>
		<TD bgColor=#ffffff>
		  <DIV align=center><?php 
	if($rs['flag']==0 and $rs['dyn']==0)
	{
		echo "<b style='color:#2a8104'>未处理</b>";
	}
	elseif($rs['flag']==0 and $rs['dyn']==1)
	{
		echo "<b style='color:#000000'>已删单（已退款）</b>";
	}
	elseif($rs['flag']==1)
	{
		echo "<b style='color:#FF0000'>处理中 已反馈</b>";
	}
	elseif($rs['flag']==2 and $rs['yn']==0)
	{
		echo "<b style='color:#2a8104'>已交稿 已反馈</b>";
	}
	elseif($rs['flag']==2 and $rs['yn']==1)
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	elseif($rs['flag']==3 and $rs['yn']==0)
	{
		echo "<b style='color:#FF0000'>已回复 已反馈</b>";
	}
	elseif($rs['flag']==3 and $rs['yn']==1)
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	elseif($rs['flag']==4)
	{
		echo "<b style='color:#FF0000'>处理中 已反馈</b>";
	}
	else
	{
		echo "<b style='color:#0000FF'>已确认</b>";
	}
	?></DIV></TD>
		<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" 
    bgColor=#ffffff>
      <DIV class="alink" align=center><?php
	if($rs['VipUser']==$AdminUser){?>
		<?php if($rs['flag']==0 and $rs['dyn']==0){?>
			<a href="savedaixie.php?ID=<?php echo $rs["ID"];?>&action=isdel" onclick="if(confirm('确实要删除此条记录吗？')) return true;else return false; ">删除</a> <a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</A> <a href="editdaixie.php?ID=<?php echo $rs["ID"];?>">编辑</a>
		<?php } elseif($rs['flag']==0 and $rs['dyn']==1){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a>
		<?php } elseif($rs['flag']==1){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="daixie_ok.php?ID=<?php echo $rs["ID"];?>">交稿</a>
		<?php } elseif($rs['flag']==2){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="daixie_ok.php?ID=<?php echo $rs["ID"];?>">确认</a>
		<?php } else{?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="ruanwen_add.php?ID=<?php echo $rs["ID"];?>&action=dxadd">去发布</a>
		<?php }?>
	<?php }
	else{?>
		<?php if($rs['flag']==0 and $rs['dyn']==0){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="editdaixie.php?ID=<?php echo $rs["ID"];?>">收稿</a>
		<?php } elseif($rs['flag']==0 and $rs['dyn']==1){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a>
		<?php } elseif($rs['flag']==1){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="daixie_ok.php?ID=<?php echo $rs["ID"];?>">交稿</a> <a href="daixie_replay.php?ID=<?php echo $rs["ID"];?>">回复</a>
		<?php } elseif($rs['flag']==2 and $rs['flag']==3){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a>
		<?php } elseif($rs['flag']==4){?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a> <a href="daixie_ok.php?ID=<?php echo $rs["ID"];?>">交稿</a> <a href="daixie_replay.php?ID=<?php echo $rs["ID"];?>">回复</a>
		<?php } else{?>
			<a href="../dsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank">预览</a>
		<?php }?>
	<?php }?>
	  </DIV></TD></TR>
	<?php
		$i=$i+1;
		}
	  }?>
      </table><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:12px">
            <tr>
                <td width="87%" height="35" align="center"><DIV class=pager><?php
					  if($Page!=1)
					  {
					  $Prv=$Page-1;
					  echo "<a href='daixie.php'>首页</a>&nbsp;&nbsp;";
					  echo "<a href=daixie.php?Page=".$Prv.">上一页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;&nbsp;";
					  }
					  
					if($Page+3<$CountPage+1){
						$ep=$Page+3;
					}else{
						$ep=$CountPage;
					}
					if($Page-3>0){
						$sp=$Page-3;
					}else{
						$sp=1;
					}
					if($Page>=$CountPage-3){
						$sp=$CountPage-5;
					}
					if($Page>4){
						for($i=$sp;$i<=$ep;$i++)
						{
						if($Page==$i){
							$str.="<span class=\"ok\">".$i."</span>&nbsp;&nbsp;";
						}else{
							$str.="<a href=\"?Page=".$i."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$i."</a>&nbsp;&nbsp;";}
						}
					}else{
						for($j=1;$j<=$ep;$j++)
						{
						if($Page==$j){
							$str.="<span class=\"ok\">".$j."</span>&nbsp;&nbsp;";
						}else{
							$str.="<a href=\"?Page=".$j."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$j."</a>&nbsp;&nbsp;";}
						}
					}
					echo $str;
					  
					  if($Page!=$CountPage)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage;
					  echo "<a href=daixie.php?Page=".$NtPage.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=daixie.php?Page=".$EdPage.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></DIV></td>
            </tr>
      </table>
	</div>
</div>
	<div class="bk20 hr"></div>	
</div>
<iframe name="main" width="0" height="0" id="main"  frameborder="0"></iframe>

</body>
</html>