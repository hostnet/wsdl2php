<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysVar;

class GetCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DaysVar_GetCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDaysVarGetCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysVar_GetCurrentResult = $val;
    }
}
