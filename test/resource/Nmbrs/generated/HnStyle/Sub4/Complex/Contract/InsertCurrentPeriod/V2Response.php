<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod;

class V2Response
{
    /**
     * @var int
     */
    public $contract_insertcurrentperiod_v2result;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setContractInsertCurrentPeriodv2Result($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->contract_insertcurrentperiod_v2result = (int)$val;
    }
}
