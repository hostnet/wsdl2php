<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Function
     */
    public $function_getlistresult;
    /**
     * @param ArrayOfFunction $val
     * @throws Exception
     */
    public function setFunctionGetListResult($val)
    {
        $this->function_getlistresult = (int)$val;
    }
}
