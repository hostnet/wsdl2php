<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class GetCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $hourcomponentvar_getcurrentresult;
    /**
     * @param ArrayOfHourComponent $val
     * @throws Exception
     */
    public function setHourComponentVarGetCurrentResult($val)
    {
        $this->hourcomponentvar_getcurrentresult = (int)$val;
    }
}
