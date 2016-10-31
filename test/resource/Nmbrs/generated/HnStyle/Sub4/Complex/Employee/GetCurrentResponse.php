<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Employee;

class GetCurrentResponse
{
    /**
     * @var string
     */
    public $employee_getcurrentresult;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmployeeGetCurrentResult($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Employee_GetCurrentResult');
        }
        $this->employee_getcurrentresult = (int)$val;
    }
}
