<?php

namespace Controle;
class SOAPStructStruct {
    /**
     * @var \Controle\anyType
     */
    public $varString;
    /**
     * @var \Controle\anyType
     */
    public $varInt;
    /**
     * @var \Controle\anyType
     */
    public $varFloat;
    /**
     * @var \Controle\SOAPStruct
     */
    public $varStruct;
    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarString($val) {
        
        $this->varString = (int)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarInt($val) {
        
        $this->varInt = (int)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarFloat($val) {
        
        $this->varFloat = (int)$val;
    }

    /**
     * @param SOAPStruct $val
     * @throws Exception
     */
    public function setVarStruct($val) {
        
        $this->varStruct = (int)$val;
    }

}

