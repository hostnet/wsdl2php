<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod;

class V2Response
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Contract_InsertCurrentPeriod_v2Result;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setContractInsertCurrentPeriodv2Result($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Contract_InsertCurrentPeriod_v2Result = $val;
    }
}
