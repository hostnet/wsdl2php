<?php

namespace Controle\sub1\sub2;
/**
 * VeROReportedItemDetailsType
 * Container for a list of reported items. Can contain zero, one, or multiple VeROReportedItemType
 * objects, each of which conveys the data for one item listing.
 */
class VeROReportedItemDetailsType {
	/**
	 * @var \Controle\sub1\sub2\VeROReportedItemType | Contains the data and status of a reported item.
	 */
	public $ReportedItem;
	/**
	 * @param VeROReportedItemType $val
	 * @throws Exception
	 */
	public function setReportedItem($val) {
		
		$this->ReportedItem = (int)$val;
	}

}

