<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Salary
     */
    public $salary_getcurrentresult;
    /**
     * @param Salary $val
     * @throws Exception
     */
    public function setSalaryGetCurrentResult($val)
    {
        $this->salary_getcurrentresult = (int)$val;
    }
}
