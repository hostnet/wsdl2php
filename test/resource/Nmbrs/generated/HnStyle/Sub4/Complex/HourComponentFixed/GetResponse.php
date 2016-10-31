<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $hourcomponentfixed_getresult;
    /**
     * @param ArrayOfHourComponent $val
     * @throws Exception
     */
    public function setHourComponentFixedGetResult($val)
    {
        $this->hourcomponentfixed_getresult = (int)$val;
    }
}
