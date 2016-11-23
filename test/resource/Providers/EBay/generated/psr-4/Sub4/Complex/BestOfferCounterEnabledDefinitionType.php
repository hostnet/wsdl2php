<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BestOfferCounterEnabledDefinitionType
 * Defines the BestOfferCounterEnabled feature. If the field is present, the corresponding
 * feature applies to the category. The field is returned as an empty element (i.e., a boolean
 * value is not returned).
 */
class BestOfferCounterEnabledDefinitionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
