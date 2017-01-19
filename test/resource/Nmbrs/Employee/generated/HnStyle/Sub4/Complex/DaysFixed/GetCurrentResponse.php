<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class GetCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DaysFixed_GetCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDaysFixedGetCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysFixed_GetCurrentResult = $val;
    }
}
