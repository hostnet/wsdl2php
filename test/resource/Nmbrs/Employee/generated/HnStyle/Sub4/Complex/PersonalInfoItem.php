<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PersonalInfoItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\V2
     */
    public $EmployeePersonalInfos;
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
     * @param ArrayOfPersonalInfo_V2 $val
     * @throws \Exception
     */
    public function setEmployeePersonalInfos($val)
    {
        $this->EmployeePersonalInfos = $val;
    }
}
