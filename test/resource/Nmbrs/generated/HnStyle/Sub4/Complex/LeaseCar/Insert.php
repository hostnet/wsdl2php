<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class Insert
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar
     */
    public $leaseauto;
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
     * @param EmployeeLeaseCar $val
     * @throws Exception
     */
    public function setLeaseAuto($val)
    {
        $this->leaseauto = (int)$val;
    }
}
