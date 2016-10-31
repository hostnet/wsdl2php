<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Leave;

class Insert
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Leave
     */
    public $leave;
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
     * @param Leave $val
     * @throws Exception
     */
    public function setLeave($val)
    {
        $this->leave = (int)$val;
    }
}
