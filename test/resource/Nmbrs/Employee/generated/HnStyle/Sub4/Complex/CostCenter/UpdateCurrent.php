<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeCostCenter
     */
    public $CostCenters;
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
     * @param ArrayOfEmployeeCostCenter $val
     * @throws \Exception
     */
    public function setCostCenters($val)
    {
        $this->CostCenters = $val;
    }
}
