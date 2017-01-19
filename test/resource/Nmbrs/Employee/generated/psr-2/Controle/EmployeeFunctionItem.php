<?php

namespace Controle;

class EmployeeFunctionItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var array \Controle\Function\V2
     */
    public $EmployeeFunctions;
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
     * @param ArrayOfFunction_V2 $val
     * @throws \Exception
     */
    public function setEmployeeFunctions($val)
    {
        $this->EmployeeFunctions = $val;
    }
}
