<?php

namespace Controle;

class ReturnCodesResponse
{
    /**
     * @var array \Controle\AnyType
     */
    public $returncodesresult;
    /**
     * @param ArrayOfAnyType $val
     * @throws Exception
     */
    public function setReturnCodesResult($val)
    {
        $this->returncodesresult = (int)$val;
    }
}
