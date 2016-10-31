<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo
     */
    public $personalinfo_getcurrentresult;
    /**
     * @param PersonalInfo $val
     * @throws Exception
     */
    public function setPersonalInfoGetCurrentResult($val)
    {
        $this->personalinfo_getcurrentresult = (int)$val;
    }
}
