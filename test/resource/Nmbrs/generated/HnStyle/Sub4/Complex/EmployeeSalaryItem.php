<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeSalaryItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Salary\V2
     */
    public $employeesalaries;
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
     * @param ArrayOfSalary_V2 $val
     * @throws Exception
     */
    public function setEmployeeSalaries($val)
    {
        $this->employeesalaries = (int)$val;
    }
}
