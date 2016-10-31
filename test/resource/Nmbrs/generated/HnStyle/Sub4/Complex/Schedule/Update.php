<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule;

class Update
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Schedule
     */
    public $schedule;
    /**
     * @var dateTime
     */
    public $start;
    /**
     * @var int
     */
    public $companyroosternr;
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
     * @param Schedule $val
     * @throws Exception
     */
    public function setSchedule($val)
    {
        $this->schedule = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStart($val)
    {
        $this->start = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyRoosterNr($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->companyroosternr = (int)$val;
    }
}
