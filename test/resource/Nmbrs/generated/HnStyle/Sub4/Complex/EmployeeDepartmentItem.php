<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeDepartmentItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Department\V2
     */
    public $employeedepartments;
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
     * @param ArrayOfDepartment_V2 $val
     * @throws Exception
     */
    public function setEmployeeDepartments($val)
    {
        $this->employeedepartments = (int)$val;
    }
}
