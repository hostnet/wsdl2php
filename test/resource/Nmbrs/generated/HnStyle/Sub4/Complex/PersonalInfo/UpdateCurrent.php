<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo
     */
    public $personalinfo;
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
     * @param PersonalInfo $val
     * @throws Exception
     */
    public function setPersonalInfo($val)
    {
        $this->personalinfo = (int)$val;
    }
}
