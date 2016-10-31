<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoReasonCodeDetailsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROSiteDetailType | Contains reason code details for a site.
     */
    public $verositedetail;
    /**
     * @param VeROSiteDetailType $val
     * @throws Exception
     */
    public function setVeROSiteDetail($val)
    {
        $this->verositedetail = (int)$val;
    }
}
