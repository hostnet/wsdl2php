<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeCostCenter
     */
    public $costcenter_getresult;
    /**
     * @param ArrayOfEmployeeCostCenter $val
     * @throws Exception
     */
    public function setCostCenterGetResult($val)
    {
        $this->costcenter_getresult = (int)$val;
    }
}
