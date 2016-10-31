<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class SetCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var int
     */
    public $days;
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
    public function setDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->days = (int)$val;
    }
}
