<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Employee;

class InsertResponse
{
    /**
     * @var int
     */
    public $employee_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employee_insertresult = (int)$val;
    }
}
