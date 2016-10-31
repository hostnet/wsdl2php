<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class UpdateCurrent
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $svwsettings;
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
     * @param SVWSettings $val
     * @throws Exception
     */
    public function setSVWSettings($val)
    {
        $this->svwsettings = (int)$val;
    }
}
