<?php

/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: zhaobo
 * Date: 2017/2/21
 * Time: 上午1:26
 */

require_once dirname(__FILE__) . "/../PHPExcel/Reader/IReadFilter.php"; //   /huo15template/org/phpexcel/PHPExcel/Reader/IReadFilter.php
class ColumFilter implements PHPExcel_Reader_IReadFilter
{
	public $maxRow;
	public $minRow;
	public $maxColumn;
	public $minColumn;
	public $worksheetName;
	function __construct($worksheetName, $maxrow=20,$minrow=1, $maxcol=20, $mincol=1)
	{

		$this->maxRow = $maxrow;
		$this->maxColumn = $maxcol;
		$this->minRow = $minrow;
		$this->minColumn = $mincol;
		$this->worksheetName = $worksheetName;
	}

	public function readCell($column, $row, $worksheetName = '') {
		if ($this->worksheetName) {
			$worksheetName = $this->worksheetName;
		}
		// Read title row and rows 20 - 30
		if ($row == 1 || ($row >= $this->minRow && $row <= $this->maxRow)) {
			return true;
		}
		if ($column == 1 || ($column >= $this->minColumn && $row <= $this->maxColumn)) {
			return true;
		}

		return false;
	}

}