<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeContractItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Contract\v3
     */
    public $employeecontracts;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param ArrayOfContract_v3 $val
     * @throws Exception
     */
    public function setEmployeeContracts($val)
    {
        $this->employeecontracts = (int)$val;
    }
}
