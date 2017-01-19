<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeContractItem
     */
    public $Contract_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeContractItem $val
     * @throws \Exception
     */
    public function setContractGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Contract_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
