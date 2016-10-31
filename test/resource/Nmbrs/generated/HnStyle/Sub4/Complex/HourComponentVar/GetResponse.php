<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $hourcomponentvar_getresult;
    /**
     * @param ArrayOfHourComponent $val
     * @throws Exception
     */
    public function setHourComponentVarGetResult($val)
    {
        $this->hourcomponentvar_getresult = (int)$val;
    }
}
