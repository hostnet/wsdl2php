<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\SVWSettings
     */
    public $svw_getlistresult;
    /**
     * @param ArrayOfSVWSettings $val
     * @throws Exception
     */
    public function setSVWGetListResult($val)
    {
        $this->svw_getlistresult = (int)$val;
    }
}
