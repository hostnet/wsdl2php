<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class InsertResponse
{
    /**
     * @var int
     */
    public $department_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDepartmentInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->department_insertresult = (int)$val;
    }
}
