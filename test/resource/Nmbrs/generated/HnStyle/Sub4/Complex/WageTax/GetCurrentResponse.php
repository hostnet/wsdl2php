<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageTax;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings
     */
    public $wagetax_getcurrentresult;
    /**
     * @param WageTaxSettings $val
     * @throws Exception
     */
    public function setWageTaxGetCurrentResult($val)
    {
        $this->wagetax_getcurrentresult = (int)$val;
    }
}
