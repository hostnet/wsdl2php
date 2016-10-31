<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeContractItem
     */
    public $contract_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeContractItem $val
     * @throws Exception
     */
    public function setContractGetAllAllEmployeesByCompanyResult($val)
    {
        $this->contract_getall_allemployeesbycompanyresult = (int)$val;
    }
}
