<?php

namespace Controle\sub1\sub2;
/**
 * FlatRateInsuranceRangeCostType
 * Insurance Cost for Item Price Range
 */
class FlatRateInsuranceRangeCostType {
	/**
	 * @var \Controle\sub1\sub2\FlatRateInsuranceRangeCodeType | The price range for the shipment for which the insurance cost is being specified.
	 */
	public $FlatRateInsuranceRange;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The cost of insurance for the specified price range.
	 */
	public $InsuranceCost;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

