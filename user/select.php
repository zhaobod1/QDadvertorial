<?php
include("../include/config.php");
$nav_id = $_GET["nav_id"];
if(isset($nav_id)){
$sql=mysql_query("select * from media_class where BigID = ".$nav_id."");
while($rs=mysql_fetch_array($sql)){
$select[] = array("sc_id"=>$rs['ID'],"sc_name"=>urlencode($rs['SmallClass']));
}
echo urldecode(json_encode($select));
}
?>