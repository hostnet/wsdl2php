<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDepartmentItem
     */
    public $Department_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeDepartmentItem $val
     * @throws \Exception
     */
    public function setDepartmentGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Department_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
