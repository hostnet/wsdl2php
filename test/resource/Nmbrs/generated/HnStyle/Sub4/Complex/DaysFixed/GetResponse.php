<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class GetResponse
{
    /**
     * @var int
     */
    public $daysfixed_getresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDaysFixedGetResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->daysfixed_getresult = (int)$val;
    }
}
