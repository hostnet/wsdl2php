<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeAddressItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress\V2
     */
    public $employeeaddresses;
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
     * @param ArrayOfEmployeeAddress_V2 $val
     * @throws Exception
     */
    public function setEmployeeAddresses($val)
    {
        $this->employeeaddresses = (int)$val;
    }
}
