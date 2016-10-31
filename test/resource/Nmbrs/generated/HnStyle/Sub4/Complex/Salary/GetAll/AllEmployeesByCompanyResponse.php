<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeSalaryItem
     */
    public $salary_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeSalaryItem $val
     * @throws Exception
     */
    public function setSalaryGetAllAllEmployeesByCompanyResult($val)
    {
        $this->salary_getall_allemployeesbycompanyresult = (int)$val;
    }
}
