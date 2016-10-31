<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $wagecomponent;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param WageComponent $val
     * @throws Exception
     */
    public function setWageComponent($val)
    {
        $this->wagecomponent = (int)$val;
    }
}
