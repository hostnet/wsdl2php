<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SiFfTaSrecommendationsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AttributeSetArrayType | Reserved for future use.
     */
    public $attributesetarray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param AttributeSetArrayType $val
     * @throws Exception
     */
    public function setAttributeSetArray($val)
    {
        $this->attributesetarray = (int)$val;
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
