<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class Update
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
    /**
     * @var dateTime
     */
    public $Start;
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

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStart($val)
    {
        $this->Start = $val;
    }
}
