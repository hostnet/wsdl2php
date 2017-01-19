<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class GetResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DaysFixed_GetResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDaysFixedGetResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysFixed_GetResult = $val;
    }
}
