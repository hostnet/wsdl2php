<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $svw_getresult;
    /**
     * @param SVWSettings $val
     * @throws Exception
     */
    public function setSVWGetResult($val)
    {
        $this->svw_getresult = (int)$val;
    }
}
