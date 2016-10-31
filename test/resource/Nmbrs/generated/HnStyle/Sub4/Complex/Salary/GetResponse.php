<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Salary
     */
    public $salary_getresult;
    /**
     * @param Salary $val
     * @throws Exception
     */
    public function setSalaryGetResult($val)
    {
        $this->salary_getresult = (int)$val;
    }
}
