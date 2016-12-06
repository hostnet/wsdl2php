<?php

namespace Controle\sub1\sub2;

/**
 * FlatShippingPreferencesType
 *
 */
class FlatShippingPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\AmountType | If the user specifies ChargeAmountForEachAdditionalItem for FlatShippingRateOption, then
	 * this value is used to specify how much to charge for each additional item.
	 */
	public $AmountPerAdditionalItem;
	/**
	 * @var \Controle\sub1\sub2\AmountType | If the user specifies DeductAmountFromEachAdditionalItem for FlatShippingRateOption, then
	 * this value is used to specify how much to deduct for each additional item shipped.
	 */
	public $DeductionAmountPerAdditionalItem;
	/**
	 * @var \Controle\sub1\sub2\FlatRateInsuranceRangeCostType | For the given range, specifies the cost of insurance. If the InsuranceOption is either
	 * Optional or Required, then 6 instances of this field must be specifies, one for each cost
	 * range.
	 */
	public $FlatRateInsuranceRangeCost;
	/**
	 * @var \Controle\sub1\sub2\FlatShippingRateOptionCodeType | Specifies how the user wants flat-rate shipping to be calculated.
	 */
	public $FlatShippingRateOption;
	/**
	 * @var \Controle\sub1\sub2\InsuranceOptionCodeType | Whether the seller offers shipping insurance and, if so, whether the insurance is optional
	 * or required. Flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions
	 * is true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express.
	 */
	public $InsuranceOption;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setAmountPerAdditionalItem($val)
	{
        $this->AmountPerAdditionalItem = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setDeductionAmountPerAdditionalItem($val)
	{
        $this->DeductionAmountPerAdditionalItem = $val;
	}

	/**
	 * @param FlatRateInsuranceRangeCostType $val
	 * @throws Exception
	 */
	public function setFlatRateInsuranceRangeCost($val)
	{
        $this->FlatRateInsuranceRangeCost = $val;
	}

	/**
	 * @param FlatShippingRateOptionCodeType $val
	 * @throws Exception
	 */
	public function setFlatShippingRateOption($val)
	{
        $this->FlatShippingRateOption = $val;
	}

	/**
	 * @param InsuranceOptionCodeType $val
	 * @throws Exception
	 */
	public function setInsuranceOption($val)
	{
        $this->InsuranceOption = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
