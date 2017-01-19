<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Leave;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Leave
     */
    public $Leave;
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
     * @param Leave $val
     * @throws \Exception
     */
    public function setLeave($val)
    {
        $this->Leave = $val;
    }
}
