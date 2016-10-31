<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class Insert
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Department
     */
    public $department;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtorid = (int)$val;
    }

    /**
     * @param Department $val
     * @throws Exception
     */
    public function setDepartment($val)
    {
        $this->department = (int)$val;
    }
}
