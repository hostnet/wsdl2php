<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeFunctionItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Function\V2
     */
    public $employeefunctions;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param ArrayOfFunction_V2 $val
     * @throws Exception
     */
    public function setEmployeeFunctions($val)
    {
        $this->employeefunctions = (int)$val;
    }
}
