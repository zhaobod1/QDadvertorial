<?php
# Name: PHP版MySQL数据库分卷备份工具
# Author: 年华<nianhua.liu@gmail.com> [QQ:4908220]
# Homepage:http://master8.net/
include ("../include/db.php");
$db_pconnect = 1;			//是否启用持久连接
$db_charset = 'gb2312';		//数据库字符集(可能值为GBK或UFT8等...MySQL版本4.1及其以上需设置)
$pws = '';					//管理员登陆密码
$deletetable = 0;			//是否允许程序删除表，较危险，默认禁止
$runsql = 0;				//是否允许执行SQL语句，较危险，建议在需要时开启，默认禁止
$uploadsql = 1;				//是否允许上传SQL文件，较危险，建议在需要时开启，默认禁止
?>