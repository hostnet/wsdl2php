<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProPackPlusEnabledDefinitionType
 * Defines the ProPackPlus feature (a feature pack). If the field is present, the corresponding
 * feature applies to the category. The field is returned as an empty element (i.e., a boolean
 * value is not returned).
 */
class ProPackPlusEnabledDefinitionType
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
