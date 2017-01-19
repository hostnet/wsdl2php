<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $WageComponent;
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
     * @param WageComponent $val
     * @throws \Exception
     */
    public function setWageComponent($val)
    {
        $this->WageComponent = $val;
    }
}
