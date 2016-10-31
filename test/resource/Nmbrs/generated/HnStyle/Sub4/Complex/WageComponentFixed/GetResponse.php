<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $wagecomponentfixed_getresult;
    /**
     * @param ArrayOfWageComponent $val
     * @throws Exception
     */
    public function setWageComponentFixedGetResult($val)
    {
        $this->wagecomponentfixed_getresult = (int)$val;
    }
}
