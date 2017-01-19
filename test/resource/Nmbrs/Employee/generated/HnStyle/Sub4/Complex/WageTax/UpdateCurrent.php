<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageTax;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings
     */
    public $LoonheffingSettings;
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
     * @param WageTaxSettings $val
     * @throws \Exception
     */
    public function setLoonheffingSettings($val)
    {
        $this->LoonheffingSettings = $val;
    }
}
