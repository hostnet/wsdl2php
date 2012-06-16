<?php

namespace Controle\sub1\sub2;
/**
 * VeROReportedItemType
 * A container for item and VeROReportedItem's.
 */
class VeROReportedItemType {
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\VeROItemStatusCodeType | The VeRO reporting status for a given item.
	 */
	public $ItemStatus;
	/**
	 * @var string | The explanation entered by eBay when an item reported for infringement is given a status
	 * of SubmissionFailed or ClarificationRequired.
	 */
	public $ItemReasonForFailure;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

