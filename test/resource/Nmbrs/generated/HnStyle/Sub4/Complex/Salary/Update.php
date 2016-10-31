<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Salary;

class Update
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryInput
     */
    public $salary;
    /**
     * @var dateTime
     */
    public $start;
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
     * @param SalaryInput $val
     * @throws Exception
     */
    public function setSalary($val)
    {
        $this->salary = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStart($val)
    {
        $this->start = (int)$val;
    }
}
