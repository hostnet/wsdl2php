<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Service;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var dateTime
     */
    public $Start;
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
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStart($val)
    {
        $this->Start = $val;
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
