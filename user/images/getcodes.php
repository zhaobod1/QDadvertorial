<?


function random($length, $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}

function img($text){
	$img_height = 50;
	$img_width = 18;
	$img=imagecreate($img_height,$img_width);
	ImageColorAllocate($img, 255,255,255);
	$black = ImageColorAllocate($img, 0,0,0);
	
	
	for($i=0;$i<10;$i++){
	        ImageString($img,1,mt_rand(1,$img_height),mt_rand(0,$img_width),"Q",imageColorAllocate($img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255)));
	}
	
	ImageRectangle($img,0,0,$img_height-1,$img_width-1,$black);//
	Imagestring($img,5,5,2,$text,imageColorAllocate($img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200)));
	
	Imagepng($img);
	ImageDestroy($img);
}

header   ("content-type:   image/png");
$ssid = isset($_POST["ssid"]) ? $_POST["ssid"] : $_GET["ssid"];

//ษ๚ณษะกอผ
img($time_pwd);
?>