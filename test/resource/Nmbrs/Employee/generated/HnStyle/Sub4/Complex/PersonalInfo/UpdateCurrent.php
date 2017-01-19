<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo
     */
    public $PersonalInfo;
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
     * @param PersonalInfo $val
     * @throws \Exception
     */
    public function setPersonalInfo($val)
    {
        $this->PersonalInfo = $val;
    }
}
