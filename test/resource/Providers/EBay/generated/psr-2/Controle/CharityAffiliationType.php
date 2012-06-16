<?php

namespace Controle;
/**
 * CharityAffiliationType
 * Defines the affiliation status for a nonprofit charity organization registered with the
 * dedicated eBay Giving Works provider.
 */
class CharityAffiliationType {
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $id;
    /**
     * @var \Controle\CharityAffiliationTypeCodeType
     */
    public $type;
    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setId($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for id');
        $this->id = (int)$val;
    }

    /**
     * @param CharityAffiliationTypeCodeType $val
     * @throws Exception
     */
    public function setType($val) {
        
        $this->type = (int)$val;
    }

}

