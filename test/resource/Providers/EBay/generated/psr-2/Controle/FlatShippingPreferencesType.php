<?php

namespace Controle;
/**
 * FlatShippingPreferencesType
 *
 */
class FlatShippingPreferencesType {
    /**
     * @var \Controle\AmountType | If the user specifies ChargeAmountForEachAdditionalItem for FlatShippingRateOption,
     * then this value is used to specify how much to charge for each additional item.
     */
    public $AmountPerAdditionalItem;
    /**
     * @var \Controle\AmountType | If the user specifies DeductAmountFromEachAdditionalItem for FlatShippingRateOption,
     * then this value is used to specify how much to deduct for each additional item shipped.
     */
    public $DeductionAmountPerAdditionalItem;
    /**
     * @var \Controle\FlatRateInsuranceRangeCostType | For the given range, specifies the cost of insurance. If the InsuranceOption is either
     * Optional or Required, then 6 instances of this field must be specifies, one for each
     * cost range.
     */
    public $FlatRateInsuranceRangeCost;
    /**
     * @var \Controle\FlatShippingRateOptionCodeType | Specifies how the user wants flat-rate shipping to be calculated.
     */
    public $FlatShippingRateOption;
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
    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAmountPerAdditionalItem($val) {
        
        $this->AmountPerAdditionalItem = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setDeductionAmountPerAdditionalItem($val) {
        
        $this->DeductionAmountPerAdditionalItem = (int)$val;
    }

    /**
     * @param FlatRateInsuranceRangeCostType $val
     * @throws Exception
     */
    public function setFlatRateInsuranceRangeCost($val) {
        
        $this->FlatRateInsuranceRangeCost = (int)$val;
    }

    /**
     * @param FlatShippingRateOptionCodeType $val
     * @throws Exception
     */
    public function setFlatShippingRateOption($val) {
        
        $this->FlatShippingRateOption = (int)$val;
    }

    /**
     * @param InsuranceOptionCodeType $val
     * @throws Exception
     */
    public function setInsuranceOption($val) {
        
        $this->InsuranceOption = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

