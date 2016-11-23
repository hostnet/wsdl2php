<?php

namespace Controle;

/**
 * InsuranceDetailsType
 * some notes here.
 */
class InsuranceDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\AmountType | Cost of shipping insurance set by the seller. If the buyer bought more than one of this
	 * item, this is the insurance for just a single item. Exception: for GetItemShipping, this
	 * is proportional to QuantitySold. Value should be greater than 0.00 if InsuranceOption is
	 * Optional or Required. For flat shipping only. Optional as input and only allowed if ChangePaymentInstructions is
	 * true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express. Not
	 * applicable to eBay Motors vehicle listings.
	 */
	public $InsuranceFee;
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
	public function setInsuranceFee($val)
	{
        $this->InsuranceFee = (int)$val;
	}

	/**
	 * @param InsuranceOptionCodeType $val
	 * @throws Exception
	 */
	public function setInsuranceOption($val)
	{
        $this->InsuranceOption = (int)$val;
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
