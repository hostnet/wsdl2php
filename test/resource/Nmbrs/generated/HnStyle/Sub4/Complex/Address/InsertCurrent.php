<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class InsertCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress
     */
    public $address;
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
     * @param EmployeeAddress $val
     * @throws Exception
     */
    public function setAddress($val)
    {
        $this->address = (int)$val;
    }
}
