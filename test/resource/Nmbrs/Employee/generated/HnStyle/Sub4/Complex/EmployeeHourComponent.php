<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeHourComponent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var int
     */
    public $Id;
    /**
     * @var int
     */
    public $HourCode;
    /**
     * @var decimal
     */
    public $Hours;
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
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setHourCode($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourCode = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setHours($val)
    {
        $this->Hours = $val;
    }
}
