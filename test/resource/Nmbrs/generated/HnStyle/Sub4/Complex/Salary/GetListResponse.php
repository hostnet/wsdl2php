<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Salary
     */
    public $salary_getlistresult;
    /**
     * @param ArrayOfSalary $val
     * @throws Exception
     */
    public function setSalaryGetListResult($val)
    {
        $this->salary_getlistresult = (int)$val;
    }
}
