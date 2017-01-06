<?php
include ("../include/config.php");
include ("../include/function.php");
$AdminUser=$_COOKIE["AdminUser"];
//echo "<script>alert('".$AdminUser."');</script>";
$sqlu="select * from admin where AdminUser='".$AdminUser."'";
$resultu=mysql_db_query($dbname,$sqlu);
$rsu=mysql_fetch_array($resultu);
if($rsu!=NULL)
{
    $yue=$rsu["yue"];
	$flag=$rsu["flag"];
}
?>

<?php
if($_GET["fl"]<>""){
	$id=$_GET["fl"];
	$sql="select * from media_info where sh=1 and nav_id=54 and class_id=".$id." order by ID asc";
}
elseif($_GET["lj"]<>""){
	$id=$_GET["lj"];
	$sql="select * from media_info where sh=1 and nav_id=54 and linkurl='".$id."' order by ID asc";
}
elseif($_GET["xw"]<>""){
	$id=$_GET["xw"];
	$sql="select * from media_info where sh=1 and nav_id=54 and xinwenyuan='".$id."' order by ID asc";
}
elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
	$id=$_GET["jg"];
	switch($_GET["jg"])
		{
		 case "0":
		   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=54 order by ID asc";
		   break;
		 case "1":
		   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=54 order by ID asc";
		   break;
		 case "2":
		   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=54 order by ID asc";
		   break;
		 case "3":
		   $sql="select * from media_info where scprice >120 and sh=1 and nav_id=54 order by ID asc";
		   break;
		 default:
		   $sql="select * from media_info where sh=1 and nav_id=54 order by ID asc";
		}
}
elseif($_GET["dq"]<>""){
	$id=$_GET["dq"];
	$sql="select * from media_info where sh=1 and nav_id=54 and diqu='".$id."' order by ID asc";
}
elseif($_GET["zhmh"]<>""){
	$id=$_GET["zhmh"];
	$sql="select * from media_info where sh=1 and nav_id=54 and zhmh='".$id."' order by ID asc";
}
else{
	$mc=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=$_GET["skey"];
	$mh=$_GET["mh"];
	$diqu=$_GET["diqu"];
	$lurl=$_GET["lurl"];
	$xwy=$_GET["xwy"];
	switch($skey)
	{
	case "1":
		$ssql="order by scprice asc";
		break;
	case "2":
		$ssql="order by scprice desc";
		break;
	case "3":
		$ssql="order by fans asc";
		break;
	case "4":
		$ssql="order by fans desc";
		break;
	default:
		$ssql="order by ID desc";
	}
	if($mc==""){
		$msql="";
	}
	else{
		$msql="and medianame like '%".$mc."%'";
	}
	if($cid==""){
		$csql="";
	}
	else{
		$csql="and class_id=".$cid."";
	}
	if($mh==""){
		$hsql="";
	}
	else{
		$hsql="and zhmh='".$mh."'";
	}
	if($diqu==""){
		$dsql="";
	}
	else{
		$dsql="and diqu='".$diqu."'";
	}
	if($lurl==""){
		$lsql="";
	}
	else{
		$lsql="and linkurl='".$lurl."'";
	}
	if($xwy==""){
		$xsql="";
	}
	else{
		$xsql="and xinwenyuan='".$xwy."'";
	}
	
	$sql="select * from media_info where sh=1 and nav_id=54 ".$csql." ".$hsql." ".$dsql." ".$lsql." ".$xsql." ".$msql." ".$ssql."";
}
$result=mysql_db_query($dbname,$sql);

//echo "<script>alert('".$id."');</script>";

?>

<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" id="searchtr" style="font-size:13px">

  <tr> 

    <th height="30" width="33" bgcolor="#CDD3EB"><div align="center"><strong>勾选</strong></div></th>

	<th height="30" width="100" bgcolor="#CDD3EB"><div align="center"><strong>媒体分类</strong></div></th>

    <th width="130" bgcolor="#CDD3EB"><div align="center"><strong>媒体名称</strong></div></th>
	
	<th width="80" bgcolor="#CDD3EB"><div align="center"><strong>推荐指数</strong></div></th>
	
	<th width="100" bgcolor="#CDD3EB"><div align="center"><strong>成本价</strong></div></th>

    <th width="100" bgcolor="#CDD3EB"><div align="center"><strong>代理价</strong></div></th>

    <th width="100" bgcolor="#CDD3EB"><div align="center"><strong>零售价</strong></div></th>

    <th width="120" bgcolor="#CDD3EB"><div align="center"><strong>带网址情况</strong></div></th>

    <th width="100" bgcolor="#CDD3EB"><div align="center"><strong>新闻源</strong></div></th>

    <th width="250" bgcolor="#CDD3EB"><div align="center"><strong>备注</strong></div></th>

  </tr>
<?php
	if (mysql_num_rows($result)==NULL)
		{
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>没有相关媒体数据！</span></td></tr></table>";
		}
       
	else
		{
		?>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
			$ID=$rs["ID"];
			$price=$rs["price"];
			$class_id=$rs["class_id"];
			$sqlb="select * from media_class where ID=".$class_id."";
			$resultb=mysql_db_query($dbname,$sqlb);
			$rsb=mysql_fetch_array($resultb)
		?>
    <tr id='yixuna<?php echo $rs["ID"];?>' >

	<td height="25" width="33" align="center"><input name="xz[]" type="checkbox" id="xz_<?php echo $rs["ID"];?>" value="<?php echo $rs["ID"]?>" onclick="sel(<?php echo $rs["ID"];?>,<?php echo $rs["ID"];?>,<?php echo $rs["scprice"];?>,<?php echo $rsu["yue"];?>);" /></td>

    <td height="25" width="100" align="center"><?php echo $rsb["SmallClass"];?></td>

    <td width="130" ><div align="center"><a href='../zyinfo.php?ID=<?php echo $rs["ID"];?>' target="_blank"><?php echo $rs["medianame"];?></a></div><input name="xz_mc_<?php echo $rs["ID"];?>" type="hidden" id="xz_mc_<?php echo $rs["ID"];?>" value="<?php echo $rs["medianame"];?>"><span style="float:right"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><img  alt="" src="<?php if ($rs["VipUser"]<>""){echo '../images/qiuqiu1.png';} else{echo '../images/qiuqiu2.png';}?>" name="qiu"  height="12"/></a></span></td>
	
	<td width="80" ><div align="center"><img src="<?php echo $rs["tj"];?>" border="0" width="auto" height="11" alt="推荐指数"></div></td>

    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["scprice"];?></b></div></td>
	
	<td width="100" ><div align="center" style="color: rgb(0, 0, 0);"><?php echo $rs["dlprice"];?></div></td>

    <td width="100" ><div align="center" style="text-decoration:line-through"><?php echo $rs["price"];?></div></td>

    <td width="100" ><div align="center"><?php echo $rs["linkurl"];?></div></td>

    <td width="100" ><div align="center"><?php echo $rs["xinwenyuan"];?></div></td>

    <td width="250" ><div align="center"><?php echo $rs["content"];?></div></td>

  </tr>
<?php
	$i=$i+1;
	}
}
?>
</table>
