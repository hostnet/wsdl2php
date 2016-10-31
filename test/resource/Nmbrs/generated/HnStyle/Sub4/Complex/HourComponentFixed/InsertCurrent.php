<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $hourcomponent;
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
     * @param HourComponent $val
     * @throws Exception
     */
    public function setHourcomponent($val)
    {
        $this->hourcomponent = (int)$val;
    }
}
