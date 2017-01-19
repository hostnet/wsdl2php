<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Address;

class InsertCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress
     */
    public $Address;
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
     * @param EmployeeAddress $val
     * @throws \Exception
     */
    public function setAddress($val)
    {
        $this->Address = $val;
    }
}
