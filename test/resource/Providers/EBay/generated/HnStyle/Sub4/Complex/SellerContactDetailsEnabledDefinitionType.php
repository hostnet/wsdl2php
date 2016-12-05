<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SellerContactDetailsEnabledDefinitionType
 * Defines the SellerContactDetailsEnabled feature. If the field is present, the category allows
 * retrieval of seller-level contact information. The field is returned as an empty element
 * (e.g., a boolean value is not returned).
 */
class SellerContactDetailsEnabledDefinitionType
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
        $this->any = ()$val;
    }
}
