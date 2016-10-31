<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Levensloop;

class Stop
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var dateTime
     */
    public $end;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setEnd($val)
    {
        $this->end = (int)$val;
    }
}
