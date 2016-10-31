<?php

namespace Controle;

/**
 * CalculatedShippingPreferencesType
 * Calculated shipping preferences for the user.
 */
class CalculatedShippingPreferencesType
{
    /**
     * @var \Controle\AmountType | The calculated shipping amount for the entire order.
     */
    public $calculatedshippingamountforentireorder;
    /**
     * @var \Controle\CalculatedShippingChargeOptionCodeType | Specifies whether to charge the actual shipping and handling cost for the entire order or
     * for each item.
     */
    public $calculatedshippingchargeoption;
    /**
     * @var \Controle\CalculatedShippingRateOptionCodeType | Specifies whether to calculate the actual rate shipping based on the combined item weight or
     * the individual item weight.
     */
    public $calculatedshippingrateoption;
    /**
     * @var \Controle\InsuranceOptionCodeType | Whether the seller offers shipping insurance and, if so, whether the insurance is optional
     * or required. Flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions
     * is true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express.
     */
    public $insuranceoption;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setCalculatedShippingAmountForEntireOrder($val)
    {
        $this->calculatedshippingamountforentireorder = (int)$val;
    }

    /**
     * @param CalculatedShippingChargeOptionCodeType $val
     * @throws Exception
     */
    public function setCalculatedShippingChargeOption($val)
    {
        $this->calculatedshippingchargeoption = (int)$val;
    }

    /**
     * @param CalculatedShippingRateOptionCodeType $val
     * @throws Exception
     */
    public function setCalculatedShippingRateOption($val)
    {
        $this->calculatedshippingrateoption = (int)$val;
    }

    /**
     * @param InsuranceOptionCodeType $val
     * @throws Exception
     */
    public function setInsuranceOption($val)
    {
        $this->insuranceoption = (int)$val;
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
