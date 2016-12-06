<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FlatRateInsuranceRangeCostType
 * Insurance Cost for Item Price Range
 */
class FlatRateInsuranceRangeCostType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FlatRateInsuranceRangeCodeType | The price range for the shipment for which the insurance cost is being specified.
     */
    public $FlatRateInsuranceRange;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The cost of insurance for the specified price range.
     */
    public $InsuranceCost;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param FlatRateInsuranceRangeCodeType $val
     * @throws Exception
     */
    public function setFlatRateInsuranceRange($val)
    {
        $this->FlatRateInsuranceRange = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setInsuranceCost($val)
    {
        $this->InsuranceCost = $val;
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
