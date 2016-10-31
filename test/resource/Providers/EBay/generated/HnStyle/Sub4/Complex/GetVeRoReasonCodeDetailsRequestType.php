<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetVeRoReasonCodeDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var long | Unique identifier for a reason code. If this ReasonCodeID is passed then  only details
     * of this ReasonCodeID will be returned. If no reason code is  specified, all reason codes
     * are returned.
     */
    public $reasoncodeid;
    /**
     * @var boolean | Set to true to retrieve reason codes for all sites. If not specified,  reason codes
     * are returned for the site specified in the request header  only.  If ReasonCodeID is
     * specified, this parameter is ignored.
     */
    public $returnallsites;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setReasonCodeID($val)
    {
        $this->reasoncodeid = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setReturnAllSites($val)
    {
        $this->returnallsites = (int)$val;
    }
}
