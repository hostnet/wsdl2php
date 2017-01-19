<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysVar;

class GetResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DaysVar_GetResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDaysVarGetResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysVar_GetResult = $val;
    }
}
