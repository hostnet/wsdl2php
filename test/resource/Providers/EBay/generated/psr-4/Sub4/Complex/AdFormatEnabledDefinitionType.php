<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AdFormatEnabledDefinitionType
 * Defines the AdFormatEnabled feature. If the field is present, the corresponding feature
 * applies to the category. The field is returned as an empty element (e.g., a boolean value
 * is not returned).
 */
class AdFormatEnabledDefinitionType
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
