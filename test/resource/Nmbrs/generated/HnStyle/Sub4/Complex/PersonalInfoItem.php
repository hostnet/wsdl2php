<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PersonalInfoItem
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\V2
     */
    public $employeepersonalinfos;
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
     * @param ArrayOfPersonalInfo_V2 $val
     * @throws Exception
     */
    public function setEmployeePersonalInfos($val)
    {
        $this->employeepersonalinfos = (int)$val;
    }
}
