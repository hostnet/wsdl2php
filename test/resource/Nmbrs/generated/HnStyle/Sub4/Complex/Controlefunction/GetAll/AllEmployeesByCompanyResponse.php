<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeFunctionItem
     */
    public $function_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeFunctionItem $val
     * @throws Exception
     */
    public function setFunctionGetAllAllEmployeesByCompanyResult($val)
    {
        $this->function_getall_allemployeesbycompanyresult = (int)$val;
    }
}
