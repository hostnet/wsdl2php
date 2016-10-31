<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $svw_getcurrentresult;
    /**
     * @param SVWSettings $val
     * @throws Exception
     */
    public function setSVWGetCurrentResult($val)
    {
        $this->svw_getcurrentresult = (int)$val;
    }
}
