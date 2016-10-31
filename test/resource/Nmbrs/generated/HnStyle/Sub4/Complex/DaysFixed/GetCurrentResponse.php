<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class GetCurrentResponse
{
    /**
     * @var int
     */
    public $daysfixed_getcurrentresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDaysFixedGetCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->daysfixed_getcurrentresult = (int)$val;
    }
}
