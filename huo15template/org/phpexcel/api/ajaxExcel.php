<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2017/1/19
 * Time: 上午11:48
 */


session_start();
error_reporting(E_ALL);
require_once "../PHPExcel.php";
require_once "../../../../include/config.php";
require_once ROOT_PATH . "include/function.php";

$action = isset($_GET['action'])? $_GET['action']:0;
if ($action == "generateExcel") {
	/* 软文列表页面导出excel */
	$start = isset($_REQUEST['s'])? $_REQUEST['s']:0;
	$end = isset($_REQUEST['e'])? $_REQUEST['e']:0;



	$VipUser = $_COOKIE["VipUser"];

	if ($start == $end) {
		$sql = "select * from ruanwen_info where VipUser='" . $VipUser . "' and date_format(data,'%Y-%m-%d') = '" . $start ."'";
	} else {
		$sql = "select * from ruanwen_info where VipUser='" . $VipUser . "' and date_format(data,'%Y-%m-%d') between '" . $start . "' and '" . $end . "' ";

	}
	$result = mysql_db_query($dbname, $sql);




	$fileName = $_COOKIE["VipUser"].date("Ymd-His");


	$objPHPExcel = new \PHPExcel(); //生成一个sheet
	$objSheet = $objPHPExcel->getActiveSheet();//当前活动sheet
	$objSheet->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)
		->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$objSheet->setTitle($fileName);
	$objSheet->setCellValue("A1", "软文直通车-软文订单");
	$objSheet->mergeCells("A1:I1");
	$objSheet->getDefaultStyle()->getFont()->setName("微软雅黑")->setSize(16)->setBold(false);
	$objSheet->getStyle("A1:I1")->getFont()->setName("微软雅黑")->setSize(20)->setBold(true)->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_WHITE));
	$objSheet->getStyle("A1:I1")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
		->getStartColor()->setRGB("2083e9");

	$objSheet->setCellValue("A2", "导出时间：".date("Y-m-d H:i:s",time()));
	$objSheet->mergeCells("A2:L2");
	$objSheet->setCellValue("A3", "编号");
	$objSheet->setCellValue("B3", "订单类型");
	$objSheet->setCellValue("C3", "订单号");
	$objSheet->setCellValue("D3", "会员名");
	$objSheet->setCellValue("E3", "发布时间");
	$objSheet->setCellValue("F3", "标题");
	$objSheet->setCellValue("G3", "链接");
	$objSheet->setCellValue("H3", "媒体名称");
	$objSheet->setCellValue("I3", "费用（元）");


	$arrOrders = array();
	while ($rs = mysql_fetch_array($result)) {

		if ($rs['yn'] == 1) {
			$arrOrders[] = $rs;
		}

	}


	foreach ($arrOrders as $key => $arrOrder) {

		$objSheet->setCellValue("A".($key+4), $arrOrder['ID']);
		$objSheet->setCellValue("B".($key+4), "软文");
		$objSheet->setCellValue("C".($key+4), "'".$arrOrder['order_id']."'");

		$objSheet->setCellValue("D".($key+4), $_COOKIE["VipUser"]);
		$objSheet->setCellValue("E".($key+4), $arrOrder["fbtime"]);
		$objSheet->setCellValue("F".($key+4), $arrOrder["title"]);
		$objSheet->setCellValue("G".($key+4), $arrOrder["weburl"]);

		$objSheet->getCell("G".($key+4))->getHyperlink()->setUrl($arrOrder['weburl']);    //超链接url地址
		$objSheet->getCell("G".($key+4))->getHyperlink()->setTooltip( '官方网址');  //鼠标移上去连接提示信息
		$objSheet->getStyle("G".($key+4))->getFont()->setColor(new PHPExcel_Style_Color("177bb1"));


		//../rwinfo.php?ID=<?php echo $rs["ID"];

		$objSheet->setCellValue("H".($key+4), $arrOrder["medianame"]);
		$mediaUrl = "http://" . $_SERVER['SERVER_NAME'] . "/rwinfo.php?ID=".$arrOrder["ID"];
		$objSheet->getCell("H".($key+4))->getHyperlink()->setUrl($mediaUrl);    //超链接url地址
		$objSheet->getCell("H".($key+4))->getHyperlink()->setTooltip( '案例网址');  //鼠标移上去连接提示信息
		$objSheet->getStyle("H".($key+4))->getFont()->setColor(new PHPExcel_Style_Color("177bb1"));

		$objSheet->setCellValue("I".($key+4), $arrOrder["price"]);

	}



	$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel5");//Excel5 2003，Excel2007
	$path = ROOT_PATH . "huo15template/excel_advertorial/".$fileName.".xls";
	$front_path = "huo15template/excel_advertorial/".$fileName.".xls";
	$res = $objWriter->save($path);
	echo json_encode($front_path);
	die;
	/* 软文列表页面导出excel  end*/
}