<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\HourComponent
     */
    public $Hourcomponent;
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
     * @param HourComponent $val
     * @throws \Exception
     */
    public function setHourcomponent($val)
    {
        $this->Hourcomponent = $val;
    }
}
