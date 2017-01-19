<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryInput
     */
    public $Salary;
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
     * @param SalaryInput $val
     * @throws \Exception
     */
    public function setSalary($val)
    {
        $this->Salary = $val;
    }
}
