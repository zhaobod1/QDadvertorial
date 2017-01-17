<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2017/1/17
 * Time: 下午5:30
 */
session_start();
error_reporting(E_ALL);
require_once "../PHPExcel.php";
require_once "../../../../include/config.php";
require_once ROOT_PATH . "include/function.php";

$postData = isset($_REQUEST['data'])? $_REQUEST['data']:null;
$postTotal = isset($_REQUEST['total'])? intval($_REQUEST['total']):null;
if ($postData !== null) {
	$condition = implode(",", $postData);

	$sql = "select * from media_info where ID in ({$condition})";
	$resultc = mysql_db_query($dbname, $sql);
	$arrMedias = array();
	while ($rsc = mysql_fetch_array($resultc)) {
		if ($_COOKIE['fg']) {
			switch ($_COOKIE['fg']) {
				case 11:
					$price = $rsc["scprice"].", ".$rsc["dlprice1"].", ".$rsc["dlprice2"].", ".$rsc["dlprice3"].", ".$rsc["price"];
					break;
				case 1:
					$price = $rsc["price"];
					break;
				case 3:
					$price = $rsc["dlprice1"];
					break;
				case 4:
					$price = $rsc["dlprice2"];
					break;
				case 5:
					$price = $rsc["dlprice3"];
					break;
				default:
					$price = $rsc["dlprice1"];
					break;
			}
		} else {
			$price =  $rsc["price"];
		}
		$rsc["final_price"] = $price;

		$arrMedias[] = $rsc;
	}

	$fileName = $_COOKIE["VipUser"].date("Ymd-His");


	$objPHPExcel = new \PHPExcel(); //生成一个sheet
	$objSheet = $objPHPExcel->getActiveSheet();//当前活动sheet
	$objSheet->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)
		->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$objSheet->setTitle($fileName);
	$objSheet->setCellValue("A1", "软文直通车-新闻稿资源明细");
	$objSheet->mergeCells("A1:K1");
	$objSheet->getDefaultStyle()->getFont()->setName("微软雅黑")->setSize(16)->setBold(false);
	$objSheet->getStyle("A1:K1")->getFont()->setName("微软雅黑")->setSize(20)->setBold(true)->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_WHITE));
	$objSheet->getStyle("A1:K1")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
		->getStartColor()->setRGB("2083e9");

	$objSheet->setCellValue("A2", $_COOKIE["VipUser"]." 的资源列表：  总费用：".$postTotal."元  资源数：".count($arrMedias));
	$objSheet->mergeCells("A2:L2");
	$objSheet->setCellValue("A3", "编号");
	$objSheet->setCellValue("B3", "媒体分类");
	$objSheet->setCellValue("C3", "媒体名称");
	$objSheet->setCellValue("D3", "入口类型");
	$objSheet->setCellValue("E3", "市场价格");
	$objSheet->setCellValue("F3", "普通会员");
	$objSheet->setCellValue("G3", "中级代理");
	$objSheet->setCellValue("H3", "高级代理");
	$objSheet->setCellValue("I3", "链接分类");
	$objSheet->setCellValue("J3", "新闻源");
	$objSheet->setCellValue("K3", "案例地址");
	$objSheet->setCellValue("L3", "其他备注");



	foreach ($arrMedias as $key=>$arrMedia) {
		//echo "key:".$key."-----"."question:".$question;
		$objSheet->setCellValue("A".($key+4), $key);

		$sql = "select SmallClass from media_class where ID = " . $arrMedia["class_id"];
		$resultc = mysql_db_query($dbname, $sql);
		while ($rsc = mysql_fetch_array($resultc)) {
			$meidaName = $rsc["SmallClass"];
		}

		$objSheet->setCellValue("B".($key+4), $meidaName);
		$objSheet->setCellValue("C".($key+4), $arrMedia["medianame"]);
		$objSheet->getCell("C".($key+4))->getHyperlink()->setUrl( $arrMedia['weburl']);    //超链接url地址
		$objSheet->getCell("C".($key+4))->getHyperlink()->setTooltip( '官方网址');  //鼠标移上去连接提示信息
		$objSheet->getStyle("C".($key+4))->getFont()->setColor(new PHPExcel_Style_Color("177bb1"));
		$objSheet->setCellValue("D".($key+4), $arrMedia["rkjibie"]);
		$objSheet->setCellValue("E".($key+4), $arrMedia["price"]);
		$objSheet->setCellValue("F".($key+4), $arrMedia["dlprice1"]);
		$objSheet->setCellValue("G".($key+4), $arrMedia["dlprice2"]);
		$objSheet->setCellValue("H".($key+4), $arrMedia["dlprice3"]);
		$objSheet->setCellValue("I".($key+4), $arrMedia["linkurl"]);
		$objSheet->setCellValue("J".($key+4), $arrMedia["xinwenyuan"]);
		$objSheet->setCellValue("K".($key+4), $arrMedia["anliurl"]);
		$objSheet->getCell("K".($key+4))->getHyperlink()->setUrl( $arrMedia['anliurl']);    //超链接url地址
		$objSheet->getCell("K".($key+4))->getHyperlink()->setTooltip( '案例网址');  //鼠标移上去连接提示信息
		$objSheet->getStyle("K".($key+4))->getFont()->setColor(new PHPExcel_Style_Color("177bb1"));

		$objSheet->setCellValue("L".($key+4), $arrMedia["content"]);




	}

	$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel5");//Excel5 2003，Excel2007
	$path = ROOT_PATH . "huo15template/excel/".$fileName.".xls";
	$front_path = "huo15template/excel/".$fileName.".xls";
	$res = $objWriter->save($path);
	/*browser_export('Excel5',$fileName);
	$objWriter->save("php://output");*/
	$result['flag'] =1;
	$result['content'] =$front_path;
	echo json_encode($result);
	die;


}
echo json_encode(null);

function browser_export($type, $fileName) {

	if ($type == 'Excel5') {
		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		$fileName = $fileName . "xls";
	} else {
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		$fileName = $fileName . "xls";
	}


	header('Content-Disposition: attachment;filename="'.$fileName.'"');
	header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
	/*header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0*/

}