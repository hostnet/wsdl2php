<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed;

class Stop
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var int
     */
    public $Period;
    /**
     * @var int
     */
    public $Year;
    /**
     * @var boolean
     */
    public $UnprotectedMode;
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
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Period = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Year = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->UnprotectedMode = $val;
    }
}
