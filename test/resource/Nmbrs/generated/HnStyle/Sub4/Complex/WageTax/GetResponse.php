<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageTax;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings
     */
    public $wagetax_getresult;
    /**
     * @param WageTaxSettings $val
     * @throws Exception
     */
    public function setWageTaxGetResult($val)
    {
        $this->wagetax_getresult = (int)$val;
    }
}
