<?php

namespace Controle;
class ReturnCodesResponse {
    /**
     * @var array \Controle\AnyType
     */
    public $ReturnCodesResult;
    /**
     * @param ArrayOfAnyType $val
     * @throws Exception
     */
    public function setReturnCodesResult($val) {
        
        $this->ReturnCodesResult = (int)$val;
    }

}

