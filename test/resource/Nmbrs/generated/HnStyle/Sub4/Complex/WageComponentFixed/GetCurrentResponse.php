<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class GetCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $wagecomponentfixed_getcurrentresult;
    /**
     * @param ArrayOfWageComponent $val
     * @throws Exception
     */
    public function setWageComponentFixedGetCurrentResult($val)
    {
        $this->wagecomponentfixed_getcurrentresult = (int)$val;
    }
}
