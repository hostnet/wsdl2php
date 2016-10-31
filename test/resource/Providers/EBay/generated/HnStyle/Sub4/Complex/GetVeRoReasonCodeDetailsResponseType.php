<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetVeRoReasonCodeDetailsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReasonCodeDetailsType | Contains the list of the status codes for a site.
     */
    public $veroreasoncodedetails;
    /**
     * @param VeROReasonCodeDetailsType $val
     * @throws Exception
     */
    public function setVeROReasonCodeDetails($val)
    {
        $this->veroreasoncodedetails = (int)$val;
    }
}
