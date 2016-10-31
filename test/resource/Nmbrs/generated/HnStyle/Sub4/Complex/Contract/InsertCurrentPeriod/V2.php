<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod;

class V2
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $contract;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param Contract_v2 $val
     * @throws Exception
     */
    public function setContract($val)
    {
        $this->contract = (int)$val;
    }
}
