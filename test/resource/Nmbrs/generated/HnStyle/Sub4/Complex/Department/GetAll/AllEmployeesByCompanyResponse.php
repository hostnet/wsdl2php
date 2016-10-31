<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDepartmentItem
     */
    public $department_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeDepartmentItem $val
     * @throws Exception
     */
    public function setDepartmentGetAllAllEmployeesByCompanyResult($val)
    {
        $this->department_getall_allemployeesbycompanyresult = (int)$val;
    }
}
