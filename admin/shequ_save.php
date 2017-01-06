<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("../include/function.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>2)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=@$_REQUEST["action"];
  $title=@$_REQUEST["biaoti"];
  $content=@$_REQUEST["neirong"];
  $price=@$_REQUEST["totalmoney"];
  $medianame=substr(@$_REQUEST["yixuanhidden"],0,-1);
  $data=date("Y-m-d H:i:s");
  //$order_id=strtotime("now").rand(0,10000);
  $order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
  //echo "<script>alert('会员：".$VipUser."　标题：".$title."　内容：".$content."　金额：".$price."');</script>";
  
  $ID=@$_REQUEST["userid"];
  
  switch($action)
  {
   case "add":	//增加
	$flag=0;
	$flag1=3;
	$VipUser=$_COOKIE["AdminUser"];
   
	$sqls="select * from admin where AdminUser='".$VipUser."'";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	if($rss!=NULL)
	{
		$leixing="微营销发稿";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
	
		$yue=$rss["yue"]-$price;
		$sqlu="update admin set yue=".$yue." where AdminUser='".$VipUser."'";
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
				$price=$rsa["scprice"];
				
				//$sqlb="select * from media_info where medianame='".$medianame."'";
				//$resultb=mysql_db_query($dbname,$sqlb);
				//$rsb=mysql_fetch_array($resultb);
				//$price=$rsb["scprice"];
				
				$sql="insert into shequ_info (order_id,owner,mid,title,medianame,content,price,VipUser,data,flag) values ('".$order_id."','".$owner."',".$mid.",'".$title."','".$medianame."','".$content."',".$price.",'".$VipUser."','".$data."',".$flag.")";
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
			$price=$rsa["scprice"];
		
			$sql="insert into shequ_info (order_id,owner,mid,title,medianame,content,price,VipUser,data,flag) values ('".$order_id."','".$owner."',".$mid.",'".$title."','".$medianame."','".$content."',".$price.",'".$VipUser."','".$data."',".$flag.")";
			mysql_db_query($dbname,$sql);
			//mysql_select_db($dbname);
			//$result=mysql_query($sql);
		}
		echo "<script>alert('提交微营销订单成功！');location.href='shequ.php';</script>";
	}
	else
	{
		echo "<script>alert('提交微营销订单失败！');location.href='shequ.php';</script>";
	}
	break;
 
  case "edit":	//编辑
   
   $sql="update shequ_info set title='".$title."',content='".$content."' where ID=".$ID."";
   mysql_db_query($dbname,$sql);
   //mysql_select_db($dbname);
   //$result=mysql_query($sql);
   echo "<script>alert('成功保存修改！');location.href='shequ.php';</script>";
   break;
   
  case "editmt":
  
  $ID=$_REQUEST["ID"];
  $nav_id=@$_REQUEST["nav_id"];
  $class_id=@$_REQUEST["sc_id"];
  $small_id=@$_REQUEST["small_id"];
  $medianame=@$_REQUEST["medianame"];
  $diqu=@$_REQUEST["diqu"];
  $weburl=@$_REQUEST["weburl"];
  $anliurl=@$_REQUEST["anliurl"];
  $linkurl=@$_REQUEST["linkurl"];
  $xinwenyuan=@$_REQUEST["xinwenyuan"];
  $zhmh=@$_REQUEST["zhmh"];
  $price=@$_REQUEST["price"];
  $dlprice=@$_REQUEST["dlprice"];
  $scprice=@$_REQUEST["scprice"];
  $content=@$_REQUEST["content"];
  $tj=@$_REQUEST["tj"];

  $sql="update media_info set nav_id=".$nav_id.",class_id=".$class_id.",small_id=".$small_id.",medianame='".$medianame."',diqu='".$diqu."',weburl='".$weburl."',anliurl='".$anliurl."',linkurl='".$linkurl."',xinwenyuan='".$xinwenyuan."',zhmh='".$zhmh."',price=".$price.",dlprice=".$dlprice.",scprice=".$scprice.",content='".$content."',tj='".$tj."' where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  //mysql_select_db($dbname);
  //$result=mysql_query($sql);
  echo "<script>alert('修改媒体资源成功！');location.href='shequ_list.php';</script>";
  break;
   
  case "isok":	//确认
  
   $AdminUser=$_COOKIE["AdminUser"];
   $VipUser=@$_REQUEST["User"];
   $reason=@$_REQUEST["reason"];
   $price=@$_REQUEST["price"];
   $flag=@$_REQUEST["flag"];
   $weburl=@$_REQUEST["weburl"];
   $yn=@$_REQUEST["yn"];
   if($yn==0){
	$sql="update shequ_info set title='".$title."',content='".$content."',flag=".$flag.",weburl='".$weburl."',reason='".$reason."' where ID=".$ID."";
   }
   else{
	$sql="update shequ_info set title='".$title."',content='".$content."',flag=".$flag.",weburl='".$weburl."',reason='".$reason."',yn=".$yn." where ID=".$ID."";
	
	$sqla="select * from shequ_info where ID='".$ID."'";
	$resulta=mysql_db_query($dbname,$sqla);
	$rsa=mysql_fetch_array($resulta);
	$mid=$rsa["mid"];			//获取媒体资源ID
	$owner=$rsa["owner"];		//获取供应商
	$pubuser=$rsa["VipUser"];	//获取发布用户
	$pubprice=$rsa["price"];	//获取发布费用
	
	//echo "<script>alert('媒体资源对应ID：".$mid."');</script>";
	
	$sqlb="select * from media_info where ID=".$mid."";
	$resultb=mysql_db_query($dbname,$sqlb);
	$rsb=mysql_fetch_array($resultb);
	$scprice=$rsb["scprice"];	//获取成本价格
	$chae=$pubprice-$scprice;	//计算差额费用
	
	//echo "<script>alert('成本价格：".$scprice."');</script>";
	
	if($flag==2){//发布
		$flag1=6;
		
		$sqlw="select * from user where VipUser='".$owner."'";
		$resultw=mysql_db_query($dbname,$sqlw);
		$rsw=mysql_fetch_array($resultw);
		if($rsw!=NULL){
			//$Viper=$rsw["VipUser"];	//获取媒介编辑用户
			$yue=$rsw["yue"];		//获取媒介编辑用户帐户余额
			$eyue=$yue+$scprice;	//媒介编辑最终帐户余额
			$leixing="发稿费用";
			
			//echo "<script>alert('媒介编辑：".$owner."');</script>";
			
			$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$owner."','".$AdminUser."','".$leixing."',".$scprice.",".$flag1.",'".$data."')";
			mysql_db_query($dbname,$sqlc);
			
			$sqlu="update user set yue=".$eyue." where VipUser='".$owner."'";
			mysql_db_query($dbname,$sqlu);
		}
		
		$sqls="select * from admin where AdminUser='".$AdminUser."'";
		$results=mysql_db_query($dbname,$sqls);
	    $rss=mysql_fetch_array($results);
	    if($rss!=NULL){
			$yue=$rss["yue"];		//获取超管帐户余额
			$eyue=$yue+$chae;		//超管最终帐户余额
			$leixing="发稿利润";
			
			$sqld="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$AdminUser."','".$AdminUser."','".$leixing."',".$chae.",".$flag1.",'".$data."')";
			mysql_db_query($dbname,$sqld);
			
			$sqlu="update admin set yue=".$eyue." where AdminUser='".$AdminUser."'";
			mysql_db_query($dbname,$sqlu);
		}
	}
	elseif($flag==3){//拒稿
	   $flag1=5;
	  
	   $sqls="select * from user where VipUser='".$VipUser."'";
	   $results=mysql_db_query($dbname,$sqls);
	   $rss=mysql_fetch_array($results);
	   
	   //echo "<script>alert('拒搞用户：".$VipUser."');</script>";
	   //echo "<script>alert('拒搞金额：".$pubprice."');</script>";
	   
	   if($rss!=NULL){
			$leixing="微营销拒稿";
			$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$AdminUser."','".$leixing."',".$pubprice.",".$flag1.",'".$data."')";
			mysql_db_query($dbname,$sqlc);
		
			$yue=$rss["yue"]+$pubprice;
			$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
			mysql_db_query($dbname,$sqlu);
	   }
	   else{
			$sqls="select * from admin where AdminUser='".$VipUser."'";
			$results=mysql_db_query($dbname,$sqls);
			$rss=mysql_fetch_array($results);
			if($rss!=NULL){
				$leixing="微营销拒稿";
				$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$AdminUser."','".$leixing."',".$pubprice.",".$flag1.",'".$data."')";
				mysql_db_query($dbname,$sqlc);
			
				$yue=$rss["yue"]+$pubprice;
				$sqlu="update admin set yue=".$yue." where AdminUser='".$VipUser."'";
				mysql_db_query($dbname,$sqlu);
			}
			else{
				echo "<script>alert('拒稿操作失败！');location.href='shequ.php';</script>";
			}
	   }
	}
   }
   
   mysql_db_query($dbname,$sql);
   //mysql_select_db($dbname);
   //$result=mysql_query($sql);
   echo "<script>alert('操作成功！');location.href='shequ.php';</script>";
   break;
   
  case "rec":	//收稿
  
   $flag=@$_REQUEST["flag"];
   $sql="update shequ_info set flag=".$flag." where ID=".$ID."";
   mysql_db_query($dbname,$sql);
   echo "<script>alert('收稿操作成功！');location.href='shequ.php';</script>";
   break;
   
  case "pub":	//发布
  
   $VipUser=@$_REQUEST["VipUser"];
   $flag=@$_REQUEST["flag"];
   $weburl=@$_REQUEST["weburl"];
   if($flag==2){
	$sql="update shequ_info set flag=".$flag.",weburl='".$weburl."',fbtime='".$data."' where ID=".$ID."";
   }
   else{
	$sql="update shequ_info set flag=".$flag.",weburl='"."',fbtime='"."' where ID=".$ID."";
   }
   mysql_db_query($dbname,$sql);
   echo "<script>alert('发布操作成功！');location.href='shequ.php';</script>";
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
		
		$sql="update shequ_info set reason='".$reason."',flag=".$flag.",fbtime='".$data."' where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('拒稿操作成功！');location.href='shequ.php';</script>";
   }
   else{
			$sqls="select * from admin where AdminUser='".$VipUser."'";
			$results=mysql_db_query($dbname,$sqls);
			$rss=mysql_fetch_array($results);
			if($rss!=NULL){
				$sql="update shequ_info set reason='".$reason."',flag=".$flag.",fbtime='".$data."' where ID=".$ID."";
				mysql_db_query($dbname,$sql);
				echo "<script>alert('拒稿操作成功！');location.href='shequ.php';</script>";
			}
			else{
				echo "<script>alert('拒稿操作失败！');location.href='shequ.php';</script>";
			}
   }
   break;

  case "isdel":	//审核删单申请，同意后执行退款处理
   $AdminUser=$_COOKIE["AdminUser"];
   $VipUser=@$_REQUEST["User"];
   $dreason=@$_REQUEST["dreason"];
   //$price=@$_REQUEST["price"];
   $dyn=@$_REQUEST["dyn"];
   //$flag1=5;
  
   $sqls="select * from user where VipUser='".$VipUser."'";
   $results=mysql_db_query($dbname,$sqls);
   $rss=mysql_fetch_array($results);
   if($rss!=NULL){
		$leixing="微营销删单";
		$sqlc="insert into caiwu (order_id,VipUser,operator,leixing,jine,flag,data) values ('".$order_id."','".$VipUser."','".$VipUser."','".$leixing."',".$price.",".$flag1.",'".$data."')";
		mysql_db_query($dbname,$sqlc);
	
		$yue=$rss["yue"]+$price;
		$sqlu="update user set yue=".$yue." where VipUser='".$VipUser."'";
		mysql_db_query($dbname,$sqlu);

		
		$sql="update shequ_info set reason='".$reason."',flag=".$flag." where ID=".$ID."";
		mysql_db_query($dbname,$sql);
		echo "<script>alert('拒稿操作成功！');location.href='shequ.php';</script>";
   }
   else{
			$sqls="select * from admin where AdminUser='".$VipUser."'";
			$results=mysql_db_query($dbname,$sqls);
			$rss=mysql_fetch_array($results);
			if($rss!=NULL){
				$sql="update shequ_info set reason='".$reason."',flag=".$flag." where ID=".$ID."";
				mysql_db_query($dbname,$sql);
				echo "<script>alert('拒稿操作成功！');location.href='shequ.php';</script>";
			}
			else{
				echo "<script>alert('拒稿操作失败！');location.href='shequ.php';</script>";
			}
   }
   break;
   
  case "del":
   foreach(@$_REQUEST["ID"] as $it)
   {
    $sql2="delete from shequ_info where ID=".$it."";
    mysql_db_query($dbname,$sql2);
    //mysql_select_db($dbname);
    //$result2=mysql_query($sql2);
   }
   echo "<script>alert('删除微营销成功！');location.href='shequ.php';</script>";
   break;
  }
}
?>