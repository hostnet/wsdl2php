<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class GetCurrentResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeCostCenter
     */
    public $costcenter_getcurrentresult;
    /**
     * @param ArrayOfEmployeeCostCenter $val
     * @throws Exception
     */
    public function setCostCenterGetCurrentResult($val)
    {
        $this->costcenter_getcurrentresult = (int)$val;
    }
}
