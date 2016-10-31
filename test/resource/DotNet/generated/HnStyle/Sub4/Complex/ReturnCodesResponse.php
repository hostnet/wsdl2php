<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ReturnCodesResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\AnyType
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
