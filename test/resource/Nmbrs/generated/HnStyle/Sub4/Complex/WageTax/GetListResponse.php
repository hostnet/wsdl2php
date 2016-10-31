<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageTax;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings
     */
    public $wagetax_getlistresult;
    /**
     * @param ArrayOfWageTaxSettings $val
     * @throws Exception
     */
    public function setWageTaxGetListResult($val)
    {
        $this->wagetax_getlistresult = (int)$val;
    }
}
