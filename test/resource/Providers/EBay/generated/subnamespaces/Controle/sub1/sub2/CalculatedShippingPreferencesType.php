<?php

namespace Controle\sub1\sub2;
/**
 * CalculatedShippingPreferencesType
 * Calculated shipping preferences for the user.
 */
class CalculatedShippingPreferencesType {
	/**
	 * @var \Controle\sub1\sub2\AmountType | The calculated shipping amount for the entire order.
	 */
	public $CalculatedShippingAmountForEntireOrder;
	/**
	 * @var \Controle\sub1\sub2\CalculatedShippingChargeOptionCodeType | Specifies whether to charge the actual shipping and handling cost for the entire order or
	 * for each item.
	 */
	public $CalculatedShippingChargeOption;
	/**
	 * @var \Controle\sub1\sub2\CalculatedShippingRateOptionCodeType | Specifies whether to calculate the actual rate shipping based on the combined item weight or
	 * the individual item weight.
	 */
	public $CalculatedShippingRateOption;
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
}

