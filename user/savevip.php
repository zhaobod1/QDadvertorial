<?php
//header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
?>

<?php
  $action=@$_REQUEST["action"];
  $flag=$_REQUEST["flag"];
  $qq=$_REQUEST["qq"];
  $dianhua=$_REQUEST["tel"];
  $weburl=$_REQUEST["web"];
  $myemail=$_REQUEST["email"];

  switch($action)
  {
  case "add":
  
  $VipUser=$_REQUEST["user"];
  $VipPass=md5(@$_REQUEST["pass1"]);
  $regtime=date("Y-m-d h:i:s");
  $data = date("Y-m-d h:i:s");
  
  $sql="select * from user where VipUser='".$VipUser."'";
  $result=mysql_db_query($dbname,$sql);
  //mysql_select_db($dbname);
  //$result=mysql_query($sql);
  if(mysql_num_rows($result)==NULL)
  {
   $sql="insert into user (VipUser,VipPass,qq,dianhua,weburl,myemail,flag,regtime) values ('".$VipUser."','".$VipPass."','".$qq."','".$dianhua."','".$weburl."','".$myemail."',".$flag.",'".$regtime."')";
   mysql_db_query($dbname,$sql);
   //mysql_select_db($dbname);
   //$result=mysql_query($sql);
   
   $ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
   $ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
   setcookie('ckey',"yes");
   setcookie('VipUser',$VipUser);
   setcookie('fg',$flag);
   setcookie('ips',$ip);
   setcookie('dt',$data);
   echo "<script>alert('注册成功！');location.href='../user/index.php';</script>";
  }
  else
  {
   echo "<script>alert('用户已存在！');history.go(-1);</script>";
  }
  break;
  
  case "save":
  
  $ID=$_REQUEST["ID"];
  $headpic=$_REQUEST["headpic"];
  
  $sql="update user set qq='".$qq."',dianhua='".$dianhua."',weburl='".$weburl."',myemail='".$myemail."',headpic='".$headpic."',flag=".$flag." where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  echo "<script>alert('修改成功！');location.href='viplist.php';</script>";
  break;
  
  }
?>