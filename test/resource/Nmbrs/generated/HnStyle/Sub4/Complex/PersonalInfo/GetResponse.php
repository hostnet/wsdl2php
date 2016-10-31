<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo
     */
    public $personalinfo_getresult;
    /**
     * @param PersonalInfo $val
     * @throws Exception
     */
    public function setPersonalInfoGetResult($val)
    {
        $this->personalinfo_getresult = (int)$val;
    }
}
