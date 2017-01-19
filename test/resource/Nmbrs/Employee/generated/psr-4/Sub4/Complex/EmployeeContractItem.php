<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeContractItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v3
     */
    public $EmployeeContracts;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param ArrayOfContract_v3 $val
     * @throws \Exception
     */
    public function setEmployeeContracts($val)
    {
        $this->EmployeeContracts = $val;
    }
}
