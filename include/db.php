<?php
$ip = real_ip();
dbSetByIp($ip);
$dbhost = $GLOBALS['dbhost'];		//数据库服务器
$dbuser = $GLOBALS['dbuser'];			//数据库用户名
$dbpasswd = $GLOBALS['dbpasswd'];		//数据库密码
$dbname = $GLOBALS['dbname'];		//数据库名

if(is_file($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php');
} // 注意文件路径


function dbSetByIp($ip) {
	if ($ip=="127.0.0.1") {

		$GLOBALS['dbhost'] = '116.255.235.26';		//数据库服务器
		$GLOBALS['dbuser'] = 'advertorial';			//数据库用户名
		$GLOBALS['dbpasswd'] = 'huo15_adv';		//数据库密码
		$GLOBALS['dbname'] = 'advertorial';		//数据库名

		$GLOBALS['dbhost'] = 'localhost';		//数据库服务器
		$GLOBALS['dbuser'] = 'root';			//数据库用户名
		$GLOBALS['dbpasswd'] = 'huo15com';		//数据库密码
		$GLOBALS['dbname'] = 'advertorial';		//数据库名
	} else {
		$GLOBALS['dbhost'] = 'localhost';		//数据库服务器
		$GLOBALS['dbuser'] = 'advertorial';			//数据库用户名
		$GLOBALS['dbpasswd'] = 'huo15_adv';		//数据库密码
		$GLOBALS['dbname'] = 'advertorial';		//数据库名
	}
}

/**
 * 获得用户的真实IP地址
 *
 * @access  public
 * @return  string
 */
function real_ip()
{
	static $realip = NULL;

	if ($realip !== NULL)
	{
		return $realip;
	}

	if (isset($_SERVER))
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

			/* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
			foreach ($arr AS $ip)
			{
				$ip = trim($ip);

				if ($ip != 'unknown')
				{
					$realip = $ip;

					break;
				}
			}
		}
		elseif (isset($_SERVER['HTTP_CLIENT_IP']))
		{
			$realip = $_SERVER['HTTP_CLIENT_IP'];
		}
		else
		{
			if (isset($_SERVER['REMOTE_ADDR']))
			{
				$realip = $_SERVER['REMOTE_ADDR'];
			}
			else
			{
				$realip = '0.0.0.0';
			}
		}
	}
	else
	{
		if (getenv('HTTP_X_FORWARDED_FOR'))
		{
			$realip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_CLIENT_IP'))
		{
			$realip = getenv('HTTP_CLIENT_IP');
		}
		else
		{
			$realip = getenv('REMOTE_ADDR');
		}
	}

	preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
	$realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

	return $realip;
}

?>