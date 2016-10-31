<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class GetCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $hourcomponentfixed_getcurrentresult;
    /**
     * @param ArrayOfHourComponent $val
     * @throws Exception
     */
    public function setHourComponentFixedGetCurrentResult($val)
    {
        $this->hourcomponentfixed_getcurrentresult = (int)$val;
    }
}
