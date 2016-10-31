<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Leave;

class GetList
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveType
     */
    public $type;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LeaveUsageType
     */
    public $soort;
    /**
     * @var int
     */
    public $year;
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
     * @param LeaveType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param LeaveUsageType $val
     * @throws Exception
     */
    public function setSoort($val)
    {
        $this->soort = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->year = (int)$val;
    }
}
