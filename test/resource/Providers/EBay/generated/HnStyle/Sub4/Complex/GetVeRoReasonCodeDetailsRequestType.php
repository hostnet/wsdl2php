<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetVeRoReasonCodeDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var long | Unique identifier for a reason code. If this ReasonCodeID is passed then  only details
     * of this ReasonCodeID will be returned. If no reason code is  specified, all reason codes
     * are returned.
     */
    public $ReasonCodeID;
    /**
     * @var boolean | Set to true to retrieve reason codes for all sites. If not specified,  reason codes
     * are returned for the site specified in the request header  only.  If ReasonCodeID is
     * specified, this parameter is ignored.
     */
    public $ReturnAllSites;
    // @codingStandardsIgnoreEnd

    /**
     * @param long $val
     * @throws \Exception
     */
    public function setReasonCodeID($val)
    {
        $this->ReasonCodeID = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setReturnAllSites($val)
    {
        $this->ReturnAllSites = $val;
    }
}
