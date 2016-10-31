<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DebtorServicelevel
     */
    public $servicelevel_getresult;
    /**
     * @param DebtorServicelevel $val
     * @throws Exception
     */
    public function setServiceLevelGetResult($val)
    {
        $this->servicelevel_getresult = (int)$val;
    }
}
