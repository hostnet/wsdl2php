<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Function
     */
    public $function_getcurrentresult;
    /**
     * @param Function $val
     * @throws Exception
     */
    public function setFunctionGetCurrentResult($val)
    {
        $this->function_getcurrentresult = (int)$val;
    }
}
