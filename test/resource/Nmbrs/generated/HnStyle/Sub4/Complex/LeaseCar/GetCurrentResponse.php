<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar
     */
    public $leasecar_getcurrentresult;
    /**
     * @param EmployeeLeaseCar $val
     * @throws Exception
     */
    public function setLeaseCarGetCurrentResult($val)
    {
        $this->leasecar_getcurrentresult = (int)$val;
    }
}
