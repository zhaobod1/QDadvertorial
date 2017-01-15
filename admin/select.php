<?php
/**
 * Created by iMac
 * ajax 获取资源小类。
 * $.getJSON("select.php", {nav_id: $("#nav_id").val()}, function (json) {
	var sc_id = $("#sc_id");
	$("option", sc_id).remove(); //清空原有的选项，也可使用 sc_id.empty();
	$.each(json, function (index, array) {
	var option = "<option value='" + array['sc_id'] + "'>" + array['sc_name'] + "</option>";
	sc_id.append(option);
	});
	});
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/16
 */

include("../include/config.php");
$nav_id = $_GET["nav_id"];// nav_class->ID
if(isset($nav_id)){
$sql=mysql_query("select * from media_class where BigID = ".$nav_id."");
while($rs=mysql_fetch_array($sql)){
$select[] = array("sc_id"=>$rs['ID'],"sc_name"=>urlencode($rs['SmallClass']));
}
echo urldecode(json_encode($select));
}
?>