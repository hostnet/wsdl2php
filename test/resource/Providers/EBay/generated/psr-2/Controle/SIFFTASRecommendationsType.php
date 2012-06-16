<?php

namespace Controle;
/**
 * SIFFTASRecommendationsType
 * Reserved for future use..
 */
class SIFFTASRecommendationsType {
    /**
     * @var \Controle\AttributeSetArrayType | Reserved for future use.
     */
    public $AttributeSetArray;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param AttributeSetArrayType $val
     * @throws Exception
     */
    public function setAttributeSetArray($val) {
        
        $this->AttributeSetArray = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

