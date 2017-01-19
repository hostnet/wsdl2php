<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class Stop
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var dateTime
     */
    public $End;
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
    public function setEnd($val)
    {
        $this->End = $val;
    }
}
