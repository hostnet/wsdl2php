<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeHourComponent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $hourcode;
    /**
     * @var decimal
     */
    public $hours;
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
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setHourCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->hourcode = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setHours($val)
    {
        $this->hours = (int)$val;
    }
}
