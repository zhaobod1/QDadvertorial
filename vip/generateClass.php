<?php
/**
 * Created by 火一五信息科技有限公司.
 * 生成小类
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2017/1/16
 * Time: 下午1:16
 */

define('ROOT_PATH', str_replace('vip', '', str_replace('\\', '/', dirname(__FILE__))));
include(ROOT_PATH. "include/config.php");
include(ROOT_PATH. "include/function.php");

$bigId = isset($_REQUEST['bigId'])? intval($_REQUEST['bigId']):46;// 46 软文发布
$sOptions = '';
$sqls = "select * from media_class where BigID=$bigId order by paixu desc";

$results = mysql_db_query($dbname, $sqls);
while ($rss = mysql_fetch_array($results)) {
	$sOptions.= "<a href=\"javascript:;\" onclick=\"mt_search1(".$rss["ID"].")\">".$rss['SmallClass']."</a>";
}

echo json_encode($sOptions);

