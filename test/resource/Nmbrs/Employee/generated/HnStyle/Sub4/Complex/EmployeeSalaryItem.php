<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeSalaryItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Salary\V2
     */
    public $EmployeeSalaries;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param ArrayOfSalary_V2 $val
     * @throws \Exception
     */
    public function setEmployeeSalaries($val)
    {
        $this->EmployeeSalaries = $val;
    }
}
