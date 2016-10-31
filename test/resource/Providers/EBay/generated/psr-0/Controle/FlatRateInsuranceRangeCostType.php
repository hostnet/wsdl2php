<?php

namespace Controle;

/**
 * FlatRateInsuranceRangeCostType
 * Insurance Cost for Item Price Range
 */
class FlatRateInsuranceRangeCostType
{
	/**
	 * @var \Controle\FlatRateInsuranceRangeCodeType | The price range for the shipment for which the insurance cost is being specified.
	 */
	public $flatrateinsurancerange;
	/**
	 * @var \Controle\AmountType | The cost of insurance for the specified price range.
	 */
	public $insurancecost;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param FlatRateInsuranceRangeCodeType $val
	 * @throws Exception
	 */
	public function setFlatRateInsuranceRange($val)
	{
        $this->flatrateinsurancerange = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setInsuranceCost($val)
	{
        $this->insurancecost = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
