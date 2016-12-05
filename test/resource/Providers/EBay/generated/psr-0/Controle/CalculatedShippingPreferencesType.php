<?php

namespace Controle;

/**
 * CalculatedShippingPreferencesType
 * Calculated shipping preferences for the user.
 */
class CalculatedShippingPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\AmountType | The calculated shipping amount for the entire order.
	 */
	public $CalculatedShippingAmountForEntireOrder;
	/**
	 * @var \Controle\CalculatedShippingChargeOptionCodeType | Specifies whether to charge the actual shipping and handling cost for the entire order or
	 * for each item.
	 */
	public $CalculatedShippingChargeOption;
	/**
	 * @var \Controle\CalculatedShippingRateOptionCodeType | Specifies whether to calculate the actual rate shipping based on the combined item weight or
	 * the individual item weight.
	 */
	public $CalculatedShippingRateOption;
	/**
	 * @var \Controle\InsuranceOptionCodeType | Whether the seller offers shipping insurance and, if so, whether the insurance is optional
	 * or required. Flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions
	 * is true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express.
	 */
	public $InsuranceOption;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setCalculatedShippingAmountForEntireOrder($val)
	{
        $this->CalculatedShippingAmountForEntireOrder = ()$val;
	}

	/**
	 * @param CalculatedShippingChargeOptionCodeType $val
	 * @throws Exception
	 */
	public function setCalculatedShippingChargeOption($val)
	{
        $this->CalculatedShippingChargeOption = ()$val;
	}

	/**
	 * @param CalculatedShippingRateOptionCodeType $val
	 * @throws Exception
	 */
	public function setCalculatedShippingRateOption($val)
	{
        $this->CalculatedShippingRateOption = ()$val;
	}

	/**
	 * @param InsuranceOptionCodeType $val
	 * @throws Exception
	 */
	public function setInsuranceOption($val)
	{
        $this->InsuranceOption = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
