<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class Update
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo
     */
    public $personalinfo;
    /**
     * @var int
     */
    public $period;
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
     * @param PersonalInfo $val
     * @throws Exception
     */
    public function setPersonalInfo($val)
    {
        $this->personalinfo = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->period = (int)$val;
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
