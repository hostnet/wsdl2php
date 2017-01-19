<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert;

class Batch
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeHourComponent
     */
    public $HourComponents;
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
     * @param ArrayOfEmployeeHourComponent $val
     * @throws \Exception
     */
    public function setHourComponents($val)
    {
        $this->HourComponents = $val;
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
