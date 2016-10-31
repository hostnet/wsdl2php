<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeCostCenter
     */
    public $costcenters;
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
     * @param ArrayOfEmployeeCostCenter $val
     * @throws Exception
     */
    public function setCostCenters($val)
    {
        $this->costcenters = (int)$val;
    }
}
