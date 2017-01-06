<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文件管理</title>
<style type="text/css">
*{font-size:12px;}
tr{height:25px;line-height:25px;background-color:#efefef;}
td{text-indent:5px;}
tr:hover{background-color:#666;color:#fff;}
tr:hover a{color:#fff;}
cite{float:right;margin-right:3px;font-style:normal;}
cite a{color:#fff;}
.trTitle{background-color:#555;font-weight:bold;color:#fff;}
.dir{background-color:#99FFCC;}
.file{background-color:#FFFFCC;}

h3{margin:0px;padding:0px;background-color:#555;color:#fff;text-indent:10px;height:25px;line-height:25px;}
h3 span{margin-left:10px;}

textarea{background-color:#f7f7f7;}

ul{list-style:none;margin:0px;padding:0px;height:50px;}
li{float:right;width:50px;height:50px;line-height:50px;text-align:center;margin-right:3px;background-color:#666;}
li a{color:#fff;text-decoration:none;display:block;width:50px;height:50px;font-weight:bold;}
li a:hover{background-color:#999;}
</style>
<script type="text/javascript">
function opendiv(action,divId)
{
	if(action=="open")
	{
		document.getElementById(divId).style.display="block";
	}
	else
	{
		document.getElementById(divId).style.display="none";
	}
}
function fillfile(urlstr,file)
{
	document.getElementById('movefileurl').value=urlstr;
	document.getElementById('movefilename').value=file;
	//document.getElementById('testdiv').innerHTML=urlstr+"|"+file;
	opendiv('open','movefileform');
}
</script>
</head>
<body>
<div style="width:98%;border:1px solid #666;">
<div style="width:100%;background-color:#555;height:50px;"><span style="float:left;font-weight:bold;font-size:14px;color:#fff;margin-left:10px;margin-top:5px;">文件管理器</span>
</div>
<?
//获取参数
$action=$_GET["action"];
$urlStr=$_GET["urlstr"];
$fileName=$_GET["filename"];
$file=$_GET["file"];
ini_set('date.timezone','Asia/Shanghai');

//输出表格
echo "<table style=\"width:100%;\">";

//读文件夹下的文件 
function loadDir($dirName)
{
	if($handle=openDir($dirName))
	{
		echo "<tr class='trTitle'><td>类型</td><td>文件名</td><td>大小</td><td>最后修改时间</td><td>操作</td></tr>";
		while(false!==($files=readDir($handle)))
		{
			if($files!="."&&$files!="..")
			{
				$urlStrs=$dirName."/".$files;
				
				if(!is_dir($dirName."/".$files))
				{
					$types="文件";
					$cons="<a href=\"loaddir.php?action=edit&urlstr=$urlStrs\">编辑</a>";
					$className="file";
					$fileSize=getSize($dirName."/".$files);
					$fileaTime=date("Y-m-d H:i:s",getEditTime($dirName."/".$files));
					$arrayfile[]="<tr class='$className'><td>$types</td><td>$files</td><td>".$fileSize." bytes</td><td>$fileaTime</td><td>$cons</td></tr>";
				}
				//echo "<tr class='$className'><td>$types</td><td>$files</td><td>".$fileSize." bytes</td><td>$fileaTime</td><td>$cons</td></tr>";
			}
		}
		//$arraydirLen=count($arraydir);
		//for($i=0;$i<$arraydirLen;$i++) echo $arraydir[$i];
		$arrayfileLen=count($arrayfile);
		for($i=0;$i<$arrayfileLen;$i++) echo $arrayfile[$i];
		//echo $arraydir;
		closeDir($handle);
	}
}

//获取文件大小
function getSize($a)
{
	if(file_exists($a))
	{
		return fileSize($a);
	}
}

//获取最后修改时间
function getEditTime($a)
{
	if(file_exists($a))
	{
		return filemTime($a);
	}
}

//读取文件
function readFiles($a)
{
  $fname=explode("/",$a);
  $fnameNums=count($fname);
  $fname=$fname[$fnameNums-1];
  if(strcmp($fname,"loaddir.php")==0)
	{
	  echo "<script>alert('不能编辑该文件!');location.href='loaddir.php';</script>";
	}
	//$exts=substr($a,-3);
	$exts=explode(".",$a);
	$extsNums=count($exts);
	$exts=$exts[$extsNums-1];
	if($exts=="php"||$exts=="asp"||$exts=="txt"||$exts=="html"||$exts=="aspx"||$exts=="jsp"||$exts=="htm")
	{
		$handle=@fOpen($a,"r");
		if($handle)
		{
			echo "<h3>修改文件：$a</h3>";
			echo "<form action='loaddir.php?action=doedit&urlstr=$a' method='post'><textarea style='width:99%;height:300px;margin-left:auto;margin-right:auto;' name='content'>";
			while(!fEof($handle))
			{
				//$buffer=fGets($handle);
				//echo ubb(mb_convert_variables(fGets($handle),"gb2312","gb2312,utf-8"));
				//echo ubb(mb_convert_encoding(fGets($handle),"gb2312","utf-8,gb2312"));
				echo ubb(mb_convert_encoding(fGets($handle),"utf-8","auto"));
				//echo ubb(iconv("utf-8,gb2312","gb2312",fGets($handle)));
				//echo ubb(fGets($handle));
			}
			fClose($handle);
			echo "</textarea><h3><input type='submit' value='修改' /></h3></form>";
		}
		else 
		{
			//echo "文件不存在或不可用";
			echo "<script>alert('文件不存在或不可用');location.href='loaddir.php';</script>";
		}
	}
	else 
	{
		//echo "不能编辑该文件";
		echo "<script>alert('不能编辑该文件');location.href='loaddir.php';</script>";
	}
}

//修改文件
function editFiles($a)
{
	$contents=get_magic_quotes_gpc()?stripslashes($_POST["content"]):$_POST["content"];
	//if(get_magic_quotes_gpc()) $contents=stripslashes($_POST["content"]); else $contents=$_POST["content"];
	
	if(is_writeable($a))
	{
		//echo substr(sprintf('%o',fileperms($a)),-4);
		if(!$handle=@fopen($a,"wb"))
		{
			//echo "不能打开文件：$a";
			echo "<script>alert('不能打开文件：'".$a.");location.href='loaddir.php';</script>";
			exit;
		}
		if(@fwrite($handle,$contents)===FALSE)
		{
			//echo "不能写入到文件：$a";
			echo "<script>alert('不能写入到文件：'".$a.");location.href='loaddir.php';</script>";
		}
		else 
		{
			//echo "修改文件成功";
			echo "<script>alert('修改文件成功!');location.href='loaddir.php';</script>";
		}
		@fclose($handle);
	}
	else 
	{
		//echo "不能修改文件";
		echo "<script>alert('不能修改文件!');location.href='loaddir.php';</script>";
	}
	/*if(function_exists("file_put_contents"))
	{
		if(file_put_contents($a,$contents))
		{
			echo "修改文件成功";
		}
		else 
		{
			echo "修改文件失败";
		}
	}
	else 
	{
		echo "貌似不能使用修改功能";
	}*/
}

//字符转换
function ubb($str)
{
	$str=str_replace("<","&lt;",$str);
	$str=str_replace(">","&gt;",$str);
	return $str;
}

//具体操作
if(!$action)
{
	loadDir("..");
}
elseIf ($action=="edit")
{
	readFiles($urlStr);
}
elseif ($action=="doedit")
{
	editFiles($urlStr);
}
else
{
	loadDir($fileName);
}
?>
</table>
</div>
</body>
</html>