<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * DigitalDeliveryEnabledDefinitionType
 * If the field is present, the digital delivery feature applies to the category. If applicable,
 * the field is returned as an empty element (i.e., a boolean value is not returned).
 */
class DigitalDeliveryEnabledDefinitionType
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
