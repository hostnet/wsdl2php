<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeScheduleItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\V2
     */
    public $employeeschedules;
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
     * @param ArrayOfSchedule_V2 $val
     * @throws Exception
     */
    public function setEmployeeSchedules($val)
    {
        $this->employeeschedules = (int)$val;
    }
}
