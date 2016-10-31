<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon
     */
    public $spaarloon_getlistresult;
    /**
     * @param ArrayOfSpaarloon $val
     * @throws Exception
     */
    public function setSpaarloonGetListResult($val)
    {
        $this->spaarloon_getlistresult = (int)$val;
    }
}
