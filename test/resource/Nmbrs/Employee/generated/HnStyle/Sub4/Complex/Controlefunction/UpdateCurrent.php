<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var int
     */
    public $FunctionId;
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
     * @param int $val
     * @throws \Exception
     */
    public function setFunctionId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->FunctionId = $val;
    }
}
