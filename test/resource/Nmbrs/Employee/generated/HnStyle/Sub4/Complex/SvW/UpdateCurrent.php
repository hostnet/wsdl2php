<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $SVWSettings;
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
     * @param SVWSettings $val
     * @throws \Exception
     */
    public function setSVWSettings($val)
    {
        $this->SVWSettings = $val;
    }
}
