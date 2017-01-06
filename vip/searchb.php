<?php
include ("../include/config.php");
include ("../include/function.php");
?>

<?php
/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
$skey=@$_REQUEST["skey"];
$key=@$_REQUEST["key"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=50;
/*-----------------计算共有记录数--------------------*/
if($key=="")
{
	if($_GET["mc"]<>""){
		$id=$_GET["mc"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%'";
	}
	elseif($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and class_id=".$id."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and small_id=".$id."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and linkurl='".$id."'";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."'";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sqlN="select Count(*) from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46";
			   break;
			 case "1":
			   $sqlN="select Count(*) from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46";
			   break;
			 case "2":
			   $sqlN="select Count(*) from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46";
			   break;
			 case "3":
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and dlprice >120";
			   break;
			 default:
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and diqu='".$id."'";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and zhmh='".$id."'";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46";
	}
}
else
{
	if($_GET["mc"]<>""){
		$id=$_GET["mc"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and class_id=".$id." ".$skey." like '%".$key."%'";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and small_id=".$id." ".$skey." like '%".$key."%'";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and linkurl='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sqlN="select Count(*) from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "1":
			   $sqlN="select Count(*) from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "2":
			   $sqlN="select Count(*) from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "3":
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and dlprice >120 ".$skey." like '%".$key."%'";
			   break;
			 default:
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and diqu='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and zhmh='".$id."' ".$skey." like '%".$key."%'";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
	}
}
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;

if($key=="")
{
	if($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$id." order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id=".$id." order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sql="select * from media_info where sh=1 and nav_id=46 and linkurl='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sql="select * from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "1":
			   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "2":
			   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "3":
			   $sql="select * from media_info where sh=1 and nav_id=46 and dlprice >120 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 default:
			   $sql="select * from media_info where sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sql="select * from media_info where sh=1 and nav_id=46 and diqu='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sql="select * from media_info where sh=1 and nav_id=46 and zhmh='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
	$id=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=$_GET["skey"];
	switch($skey)
	{
	case "1":
		$ssql="order by dlprice asc";
		break;
	case "2":
		$ssql="order by dlprice desc";
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
	if($id==""){
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." ".$ssql."";
		}
	}
	else{
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." and medianame like '%".$id."%' ".$ssql."";
		}
	}
}
}
else{
	if($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$id." ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id=".$id." ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sql="select * from media_info where sh=1 and nav_id=46 and linkurl='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sql="select * from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "1":
			   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "2":
			   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "3":
			   $sql="select * from media_info where sh=1 and nav_id=46 and dlprice >120 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 default:
			   $sql="select * from media_info where sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sql="select * from media_info where sh=1 and nav_id=46 and diqu='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sql="select * from media_info where sh=1 and nav_id=46 and zhmh='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
	$id=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=$_GET["skey"];
	switch($skey)
	{
	case "1":
		$ssql="order by dlprice asc";
		break;
	case "2":
		$ssql="order by dlprice desc";
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
	if($id==""){
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." ".$ssql."";
		}
	}
	else{
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." and medianame like '%".$id."%' ".$ssql."";
		}
	}
}

}
$result=mysql_db_query($dbname,$sql);

//echo "<script>alert('".$id."');</script>";
?>

<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" id="searchtr">

  <tr>

	<th height="30" width="100" bgcolor="#CDD3EB"><div align="center"><strong>媒体分类</strong></div></th>

    <th width="130" bgcolor="#CDD3EB"><div align="center"><strong>媒体名称</strong></div></th>
	
	<th width="80" bgcolor="#CDD3EB"><div align="center"><strong>推荐指数</strong></div></th>

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
			$class_id=$rs["class_id"];
			$sqlb="select * from media_class where ID=".$class_id."";
			$resultb=mysql_db_query($dbname,$sqlb);
			$rsb=mysql_fetch_array($resultb)
		?>
    <tr id='yixuna<?php echo $rs["ID"];?>' >

    <td height="25" width="100" align="center"><?php echo $rsb["SmallClass"];?></td>

    <td width="130" ><div align="center"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><?php echo $rs["medianame"];?></a><span style="float:right"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><img  alt="" src="<?php if ($rs["VipUser"]<>""){echo '../images/qiuqiu1.png';} else{echo '../images/qiuqiu2.png';}?>" name="qiu"  height="12"/></a></span></div></td>
	
	<td width="80" ><div align="center"><img src="<?php echo $rs["tj"];?>" border="0" width="auto" height="12" alt="推荐指数"></div></td>

    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice"];?></b></div></td>

    <td width="100" ><div align="center" style="text-decoration:line-through"><?php echo $rs["price"];?></div></td>

    <td width="100" ><div align="center"><?php echo $rs["linkurl"];?></div></td>

    <td width="100" ><div align="center"><?php echo $rs["xinwenyuan"];?></div></td>

    <td width="250" ><div align="center"><?php echo $rs["content"];?></div></td>

  </tr>
<?php
	$i=$i+1;
	}
?>
	<tr align="center" >
                    <td colspan="8" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="87%" height="35" align="right"><?php
					  if($Page!=0)
					  {
					  $Prv=$Page-1;
					  echo "<a href=search.php?skey=".$skey."&key=".$key.">首页</a>&nbsp;&nbsp;";
					  echo "<a href=search.php?Page=".$Prv."&skey=".$skey."&key=".$key.">上一页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "首页&nbsp;&nbsp;";
					   echo "上一页&nbsp;&nbsp;";
					  }
					  if($Page!=$CountPage-1)
					  {
					  $NtPage=$Page+1;
					  $EdPage=$CountPage-1;
					  echo "<a href=search.php?Page=".$NtPage."&skey=".$skey."&key=".$key.">下一页</a>&nbsp;&nbsp;";
					  echo "<a href=search.php?Page=".$EdPage."&skey=".$skey."&key=".$key.">尾页</a>&nbsp;&nbsp;";
					  }
					  else
					  {
					   echo "下一页&nbsp;&nbsp;";
					   echo "尾页&nbsp;&nbsp;";
					  }
					  echo "当前为".$Cpage."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
					  ?></td>
                        </tr>
                    </table></td>
                  </tr>
<?php
}
?>
</table>
