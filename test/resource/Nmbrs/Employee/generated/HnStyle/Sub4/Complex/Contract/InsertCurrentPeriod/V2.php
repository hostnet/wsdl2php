<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v2
     */
    public $Contract;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = $val;
    }

    /**
     * @param Contract_v2 $val
     * @throws \Exception
     */
    public function setContract($val)
    {
        $this->Contract = $val;
    }
}
