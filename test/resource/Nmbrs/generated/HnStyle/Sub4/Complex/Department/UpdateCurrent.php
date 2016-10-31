<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var int
     */
    public $departmentid;
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
     * @param int $val
     * @throws Exception
     */
    public function setDepartmentId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->departmentid = (int)$val;
    }
}
