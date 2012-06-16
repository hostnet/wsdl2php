<?php

namespace Controle;
/**
 * FlatRateInsuranceRangeCostType
 * Insurance Cost for Item Price Range
 */
class FlatRateInsuranceRangeCostType {
	/**
	 * @var \Controle\FlatRateInsuranceRangeCodeType | The price range for the shipment for which the insurance cost is being specified.
	 */
	public $FlatRateInsuranceRange;
	/**
	 * @var \Controle\AmountType | The cost of insurance for the specified price range.
	 */
	public $InsuranceCost;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

