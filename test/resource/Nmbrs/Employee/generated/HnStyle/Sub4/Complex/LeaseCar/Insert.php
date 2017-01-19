<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar
     */
    public $LeaseAuto;
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
     * @param EmployeeLeaseCar $val
     * @throws \Exception
     */
    public function setLeaseAuto($val)
    {
        $this->LeaseAuto = $val;
    }
}
