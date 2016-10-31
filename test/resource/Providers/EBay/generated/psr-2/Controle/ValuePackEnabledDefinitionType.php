<?php

namespace Controle;

/**
 * ValuePackEnabledDefinitionType
 * Defines the ValuePack feature (a feature pack). If the field is present, the corresponding
 * feature applies to the category. The field is returned as an empty element (i.e., a boolean
 * value is not returned).
 */
class ValuePackEnabledDefinitionType
{
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
