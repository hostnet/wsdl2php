<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Employee;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Employee_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Employee_InsertResult = $val;
    }
}
