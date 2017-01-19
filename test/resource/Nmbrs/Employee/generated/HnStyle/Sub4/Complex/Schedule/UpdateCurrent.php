<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Schedule
     */
    public $Schedule;
    /**
     * @var int
     */
    public $CompanyRoosterNr;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param Schedule $val
     * @throws \Exception
     */
    public function setSchedule($val)
    {
        $this->Schedule = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCompanyRoosterNr($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyRoosterNr = $val;
    }
}
