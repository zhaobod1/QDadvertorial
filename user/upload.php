<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2016/11/4
 * Time: 下午3:34
 */

error_reporting(0);
include("checkuser.php");
include("../include/config.php");
include("../include/function.php");
if (isset($_FILES["Filedata"]["name"])) {
	$entension = pathinfo($_FILES["Filedata"]["name"], PATHINFO_EXTENSION);
	if ((($entension == "doc") || ($entension == "docx") || ($entension == "txt")) && ($_FILES["Filedata"]["size"] < 2000000))
	{
		if ($_FILES["Filedata"]["error"] > 0)
		{
			echo "错误: " . $_FILES["Filedata"]["error"];
			die;
		}
		$newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
		if (file_exists("../huo15template/upload/" . date('Ymd') . '/' . $newName))
		{
			echo "错误: 此文件已经存在";die;
		}
		$basePath = dirname(dirname(__FILE__));
		$folder = $basePath . "/huo15template/upload/" . date('Ymd');
		if(!is_dir($folder)) {
			mkdir($folder);

		}
		$path = $basePath . "/huo15template/upload/" . date('Ymd') . '/' . $newName;
		$r = move_uploaded_file($_FILES["Filedata"]["tmp_name"], $path);
		if (!$r) {
			echo '上传失败';die;
		} else {
			echo $path;die;
		}

	} else {
		echo '文件太大，不能超过2M';die;
	}
}



