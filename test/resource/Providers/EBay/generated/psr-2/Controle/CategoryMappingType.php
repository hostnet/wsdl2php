<?php

namespace Controle;
/**
 * CategoryMappingType
 * Mapping between an old category ID and an active category ID.
 */
class CategoryMappingType {
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $oldID;
    /**
     * @var string
     */
    public $id;
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
    public function setOldID($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for oldID');
        $this->oldID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setId($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for id');
        $this->id = (int)$val;
    }

}

