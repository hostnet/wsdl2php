<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar
     */
    public $leasecar_getresult;
    /**
     * @param EmployeeLeaseCar $val
     * @throws Exception
     */
    public function setLeaseCarGetResult($val)
    {
        $this->leasecar_getresult = (int)$val;
    }
}
