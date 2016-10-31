<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar
     */
    public $leasecar_getlistresult;
    /**
     * @param ArrayOfEmployeeLeaseCar $val
     * @throws Exception
     */
    public function setLeaseCarGetListResult($val)
    {
        $this->leasecar_getlistresult = (int)$val;
    }
}
