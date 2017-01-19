<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Levensloop;

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
     * @var decimal
     */
    public $Amount;
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
     * @param decimal $val
     * @throws \Exception
     */
    public function setAmount($val)
    {
        $this->Amount = $val;
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
