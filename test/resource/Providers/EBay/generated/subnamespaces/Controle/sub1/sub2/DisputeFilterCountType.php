<?php

namespace Controle\sub1\sub2;
/**
 * DisputeFilterCountType
 * The number of disputes that match a given filter.
 */
class DisputeFilterCountType {
	/**
	 * @var \Controle\sub1\sub2\DisputeFilterTypeCodeType | A filter used to reduce the number of disputes returned. The filter uses criteria such
	 * as whether the dispute is awaiting a response, is closed, or is eligible for credit. Both
	 * Unpaid Item and Item Not Received disputes can be returned for the same filter value.
	 */
	public $DisputeFilterType;
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

