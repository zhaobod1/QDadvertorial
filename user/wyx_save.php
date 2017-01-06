<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("../include/function.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>3)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=@$_REQUEST["action"];
  $data=date("Y-m-d h:i:s");
  $order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
  
  $ID=@$_REQUEST["userid"];
  
  switch($action)
  {
   case "add":
    $VipUser=$_COOKIE["VipUser"];
    $title=@$_REQUEST["biaoti"];
    $content=@$_REQUEST["neirong"];
    $price=@$_REQUEST["totalmoney"];
    $medianame=substr(@$_REQUEST["yixuanhidden"],0,-1);
    $flag=0;
	$flag1=3;
	
	$sqls="select * from user where VipUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	if($rss!=NULL)
	{
		$leixing="微营销发稿";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
	
		$yue=$rss["yue"]-$price;
		$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
		mysql_db_query($dbname,$sqlu);

		$mtmc=explode(",",$medianame);
		if(count($mtmc)>1){
			for($i=0;$i<count($mtmc);$i++){
				$medianame=$mtmc[$i];
				$idmc=explode(":",$medianame);
				$mid=$idmc[0];
				$medianame=$idmc[1];
				
				$sqla="select * from media_info where ID=".$mid."";
				$resulta=mysql_db_query($dbname,$sqla);
				$rsa=mysql_fetch_array($resulta);
				$owner=$rsa["VipUser"];
				if($_COOKIE["fg"]==1){
					$price=$rsa["dlprice"];
				}elseif($_COOKIE["fg"]==2){
					$price=$rsa["scprice"];
				}
				else{
					$price=$rsa["price"];
				}
				
				//$sqlb="select * from media_info where medianame='".$medianame."'";
				//$resultb=mysql_db_query($dbname,$sqlb);
				//$rsb=mysql_fetch_array($resultb);
				//$price=$rsb["dlprice"];
				
				$sql="insert into wyx_info (order_id,owner,mid,title,medianame,content,price,VipUser,data,flag) values ('".$order_id."','".$owner."',".$mid.",'".$title."','".$medianame."','".$content."',".$price.",'".$VipUser."','".$data."',".$flag.")";
				mysql_db_query($dbname,$sql);
			}
		}
		else{
			$idmc=explode(":",$medianame);
			$mid=$idmc[0];
			$medianame=$idmc[1];
			
			$sqla="select * from media_info where ID=".$mid."";
			$resulta=mysql_db_query($dbname,$sqla);
			$rsa=mysql_fetch_array($resulta);
			$owner=$rsa["VipUser"];
			if($_COOKIE["fg"]==1){
				$price=$rsa["dlprice"];
			}elseif($_COOKIE["fg"]==2){
				$price=$rsa["scprice"];
			}
			else{
				$price=$rsa["price"];
			}

			$sql="insert into wyx_info (order_id,owner,mid,title,medianame,content,price,VipUser,data,flag) values ('".$order_id."','".$owner."',".$mid.",'".$title."','".$medianame."','".$content."',".$price.",'".$VipUser."','".$data."',".$flag.")";
			mysql_db_query($dbname,$sql);
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
		}
		echo "<script>alert('提交微营销订单成功！');location.href='wyx.php';</script>";
	}
	else
	{
		echo "<script>alert('提交微营销订单失败！');location.href='wyx.php';</script>";
	}
	break;
 
  case "edit":
    $title=@$_REQUEST["biaoti"];
    $content=@$_REQUEST["neirong"];

    $sql="update wyx_info set title='".$title."',content='".$content."' where ID=".$ID."";
    mysql_db_query($dbname,$sql);
    echo "<script>alert('成功保存修改！');location.href='wyx.php';</script>";
    break;
   
  case "pub":
  
   $flag=@$_REQUEST["flag"];
   $weburl=@$_REQUEST["weburl"];
   if($flag==2){
	$sql="update wyx_info set flag=".$flag.",weburl='".$weburl."',fbtime='".$data."' where ID=".$ID."";
   }
   else{
	$sql="update wyx_info set flag=".$flag.",weburl='"."',fbtime='"."' where ID=".$ID."";
   }
   mysql_db_query($dbname,$sql);
   echo "<script>alert('发布操作成功！');location.href='wyx_list.php';</script>";
   break;
   
  case "rec":
  
   $flag=@$_REQUEST["flag"];
   $sql="update wyx_info set flag=".$flag." where ID=".$ID."";
   mysql_db_query($dbname,$sql);
   echo "<script>alert('收稿操作成功！');location.href='wyx_list.php';</script>";
   break;
   
  case "ref":	//拒稿，不进行资金结算
   $VipUser=@$_REQUEST["User"];
   $reason=@$_REQUEST["reason"];
   //$price=@$_REQUEST["price"];
   $flag=@$_REQUEST["flag"];
   //$flag1=5;
  
   $sqls="select * from user where VipUser='".$VipUser."'";
   $results=mysql_db_query($dbname,$sqls);
   $rss=mysql_fetch_array($results);
   if($rss!=NULL){
		/*
		$leixing="微营销拒稿";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
	
		$yue=$rss["yue"]+$price;
		$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
		mysql_db_query($dbname,$sqlu);
		*/
		
		$sql="update wyx_info set reason='".$reason."',flag=".$flag.",fbtime='".$data."' where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('拒稿操作成功！');location.href='wyx_list.php';</script>";
   }
   else{
		$sqls="select * from admin where AdminUser='".$VipUser."'";
		$results=mysql_db_query($dbname,$sqls);
		$rss=mysql_fetch_array($results);
		if($rss!=NULL){
			$sql="update wyx_info set reason='".$reason."',flag=".$flag.",fbtime='".$data."' where ID=".$ID."";
			mysql_db_query($dbname,$sql);
			echo "<script>alert('拒稿操作成功！');location.href='wyx_list.php';</script>";
		}
		else{
			echo "<script>alert('拒稿操作失败！');location.href='wyx_list.php';</script>";
		}
   }
   break;

  case "isdel":
  
	$VipUser=$_COOKIE["VipUser"];
	$ID=@$_REQUEST["ID"];
	$dyn=1;
	$flag1=5;

	$sql1="select * from wyx_info where ID=".$ID."";
	$result1=mysql_db_query($dbname,$sql1);
	$rs1=mysql_fetch_array($result1);
	$price=$rs1["price"];
	
	$leixing="微营销删单";
	$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
	mysql_db_query($dbname,$sqlc);

	$sqls="select * from user where VipUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);	
	
	$yue=$rss["yue"]+$price;
	$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
	mysql_db_query($dbname,$sqlu);
   
	$sql="update wyx_info set dyn=".$dyn." where ID=".$ID."";
	mysql_db_query($dbname,$sql);
	echo "<script>alert('删单操作成功！');location.href='wyx.php';</script>";
	break;
   
  case "del":
   foreach(@$_REQUEST["ID"] as $it)
   {
    $sql2="delete from wyx_info where ID=".$it."";
    mysql_db_query($dbname,$sql2);
   }
   echo "<script>alert('删除微营销成功！');location.href='wyx.php';</script>";
   break;
  }
}
?>