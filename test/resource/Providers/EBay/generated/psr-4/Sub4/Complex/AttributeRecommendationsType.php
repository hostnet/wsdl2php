<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AttributeRecommendationsType
 * Item Specifics data returned from the Suggested Attributes engine.
 */
class AttributeRecommendationsType
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
