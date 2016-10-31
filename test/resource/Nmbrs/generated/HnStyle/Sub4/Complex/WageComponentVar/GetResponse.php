<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $wagecomponentvar_getresult;
    /**
     * @param ArrayOfWageComponent $val
     * @throws Exception
     */
    public function setWageComponentVarGetResult($val)
    {
        $this->wagecomponentvar_getresult = (int)$val;
    }
}
