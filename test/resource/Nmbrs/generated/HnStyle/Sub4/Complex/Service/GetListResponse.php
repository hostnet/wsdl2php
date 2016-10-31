<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Service;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\ServiceInterval
     */
    public $service_getlistresult;
    /**
     * @param ArrayOfServiceInterval $val
     * @throws Exception
     */
    public function setServiceGetListResult($val)
    {
        $this->service_getlistresult = (int)$val;
    }
}
