<?php
include ("../include/config.php");
include ("../include/function.php");
?>

<?php
$action=@$_REQUEST["action"];
if($_GET["mc"]<>""){
	$id=$_GET["mc"];
	$sql="select * from media_info where sh=1 and medianame='".$id."' order by ID asc";
}
elseif($_GET["fl"]<>""){
	$id=$_GET["fl"];
	$sql="select * from media_info where sh=1 and class_id=".$id." order by ID asc";
}
elseif($_GET["lj"]<>""){
	$id=$_GET["lj"];
	$sql="select * from media_info where sh=1 and linkurl='".$id."' order by ID asc";
}
elseif($_GET["xw"]<>""){
	$id=$_GET["xw"];
	$sql="select * from media_info where sh=1 and xinwenyuan='".$id."' order by ID asc";
}
elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
	$id=$_GET["jg"];
	switch($_GET["jg"])
		{
		 case "0":
		   $sql="select * from media_info where sh=1 and (dlprice between 0 and 40) order by ID asc";
		   break;
		 case "1":
		   $sql="select * from media_info where sh=1 and (dlprice between 41 and 70) order by ID asc";
		   break;
		 case "2":
		   $sql="select * from media_info where sh=1 and (dlprice between 71 and 120) order by ID asc";
		   break;
		 case "3":
		   $sql="select * from media_info where sh=1 and dlprice >120 order by ID asc";
		   break;
		 default:
		   $sql="select * from media_info where sh=1 order by ID asc";
		}
}
elseif($_GET["dq"]<>""){
	$id=$_GET["dq"];
	$sql="select * from media_info where sh=1 and diqu='".$id."' order by ID asc";
}
elseif($_GET["zhmh"]<>""){
	$id=$_GET["zhmh"];
	$sql="select * from media_info where sh=1 and zhmh='".$id."' order by ID asc";
}
else{
	$sql="select * from media_info where sh=1 order by ID asc";
}
$result=mysql_db_query($dbname,$sql);

//echo "<script>alert('".$id."');</script>";
?>

<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" id="searchtr">

  <tr>

	<th height="30" width="100" bgcolor="#CDD3EB"><div align="center"><strong>媒体分类</strong></div></th>

    <th width="130" bgcolor="#CDD3EB"><div align="center"><strong>媒体名称</strong></div></th>
	
	<th width="80" bgcolor="#CDD3EB"><div align="center"><strong>推荐指数</strong></div></th>

    <th width="100" bgcolor="#CDD3EB"><div align="center"><strong>代理价格</strong></div></th>

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
			$class_id=$rs["class_id"];
			$sqlb="select * from media_class where ID=".$class_id."";
			$resultb=mysql_db_query($dbname,$sqlb);
			$rsb=mysql_fetch_array($resultb)
		?>
    <tr id='yixuna<?php echo $rs["ID"];?>' >

    <td height="25" width="100" align="center"><?php echo $rsb["BigClass"];?></td>

    <td width="130" ><div align="center"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><?php echo $rs["medianame"];?></a><span style="float:right"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><img  alt="" src="<?php if ($rs["VipUser"]<>""){echo '../images/qiuqiu1.png';} else{echo '../images/qiuqiu2.png';}?>" name="qiu"  height="12"/></a></span></div></td>
	
	<td width="80" ><div align="center"><img src="<?php echo $rs["tj"];?>" border="0" width="auto" height="12" alt="推荐指数"></div></td>

    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice"];?></b></div></td>

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
