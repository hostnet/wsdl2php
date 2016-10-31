<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageTax;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings
     */
    public $loonheffingsettings;
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
     * @param WageTaxSettings $val
     * @throws Exception
     */
    public function setLoonheffingSettings($val)
    {
        $this->loonheffingsettings = (int)$val;
    }
}
