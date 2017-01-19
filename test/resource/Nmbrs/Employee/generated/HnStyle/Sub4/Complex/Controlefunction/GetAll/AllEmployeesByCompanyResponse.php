<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeFunctionItem
     */
    public $Function_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeFunctionItem $val
     * @throws \Exception
     */
    public function setFunctionGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Function_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
