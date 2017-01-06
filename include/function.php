<?php
class newsNr
{
  /*--------------------截取字符串--------------------------*/
  
    function str($title,$n)
  {
  $len = strlen($title);//15
  if ($len <= $n)
  {
   $title = $title;
  }
  else
  {
  $title = substr($title,0,$n).".."; 
  }
   return $title;
  }
  
  
function ChgTitle($title,$n)  
{  
$length = $n; //我们允许字符串显示的最大长度 
if (strlen($title)>$length) {  
$temp = 0;  
for($i=0; $i<$length; $i++)  
if (ord($title[$i]) > 128) $temp++;  
if ($temp%2 == 0)  
$title = substr($title,0,$length)."...";  
else  
$title = substr($title,0,$length+1)."...";  
}  
return $title;  
}

  
  /*--------------------BigClass转换--------------------------*/
  function BigIDtoBig($BigID,$table)
  {
    $sql="select * from ".$table." where id=".$BigID."";
	global $dbname;
	$result = mysql_db_query($dbname, $sql);
	$rs=mysql_fetch_array($result);
	return $rs["BigClass"];
  }
  
  public function utfSubstr($str, $position, $length){
  $type=1;
  $startPos = strlen($str);
  $startByte = 0;
  $endPos = strlen($str);
  $count = 0;
  for($i=0; $i<strlen($str); $i++){
   if($count>=$position && $startPos>$i){
    $startPos = $i;
    $startByte = $count;
   }
   if(($count-$startByte) >= $length) {
    $endPos = $i;
    break;
   }    
   $value = ord($str[$i]);
   if($value > 127){
    $count++;
    if($value>=192 && $value<=223) $i++;
    elseif($value>=224 && $value<=239) $i = $i + 2;
    elseif($value>=240 && $value<=247) $i = $i + 3;
    else return self::raiseError("\"$str\" Not a UTF-8 compatible string", 0, __CLASS__, __METHOD__, __FILE__, __LINE__);
   }
   $count++;

  }
  if($type==1 && ($endPos-6)>$length){
   return substr($str, $startPos, $endPos-$startPos)."..."; 
       }else{
   return substr($str, $startPos, $endPos-$startPos);     
    }
  
 }
  
}
$newsOB=new newsNr();


//判断奇数，是返回TRUE，否返回FALSE

function is_odd($num){
return (is_numeric($num)&($num&1));
}

//判断偶数，是返回TRUE，否返回FALSE

function is_even($num){
return (is_numeric($num)&(!($num&1)));
}


//取得时间的年
//echo "年：".getyear(date('Y-m-d H:i:s'));
function getyear($date)
{
$strtime = $date;
$strtimes = explode(" ",$strtime);
$timearray = explode("-",$strtimes[0]);
$year = $timearray[0];
$month = $timearray[1];
$day = $timearray[2];
return $year;
}
//取得时间的月
//echo "月：".getmonth(date('Y-m-d H:i:s'));
function getmonth($date)
{
$strtime = $date;
$strtimes = explode(" ",$strtime);
$timearray = explode("-",$strtimes[0]);
$year = $timearray[0];
$month = $timearray[1];
$day = $timearray[2];
return $month;
}
//取得时间的日
//echo "日：".getday(date('Y-m-d H:i:s'));
function getday($date)
{
$strtime = $date;
$strtimes = explode(" ",$strtime);
$timearray = explode("-",$strtimes[0]);
$year = $timearray[0];
$month = $timearray[1];
$day = $timearray[2];
return $day;
}
?>