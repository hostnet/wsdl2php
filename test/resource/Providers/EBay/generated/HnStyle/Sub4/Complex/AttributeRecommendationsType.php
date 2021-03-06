<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AttributeRecommendationsType
 * Item Specifics data returned from the Suggested Attributes engine.
 */
class AttributeRecommendationsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AttributeSetArrayType | Reserved for future use.
     */
    public $AttributeSetArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AttributeSetArrayType $val
     * @throws \Exception
     */
    public function setAttributeSetArray($val)
    {
        $this->AttributeSetArray = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
