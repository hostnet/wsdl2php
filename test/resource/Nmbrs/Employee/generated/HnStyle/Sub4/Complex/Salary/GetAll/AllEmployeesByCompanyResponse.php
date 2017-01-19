<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeSalaryItem
     */
    public $Salary_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeSalaryItem $val
     * @throws \Exception
     */
    public function setSalaryGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Salary_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
