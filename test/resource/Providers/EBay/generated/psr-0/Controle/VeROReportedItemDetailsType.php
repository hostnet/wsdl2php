<?php

namespace Controle;
/**
 * VeROReportedItemDetailsType
 * Container for a list of reported items. Can contain zero, one, or multiple VeROReportedItemType
 * objects, each of which conveys the data for one item listing.
 */
class VeROReportedItemDetailsType {
	/**
	 * @var \Controle\VeROReportedItemType | Contains the data and status of a reported item.
	 */
	public $ReportedItem;
}

