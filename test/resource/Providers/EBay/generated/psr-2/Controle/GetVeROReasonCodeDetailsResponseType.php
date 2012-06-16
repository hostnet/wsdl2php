<?php

namespace Controle;
/**
 * GetVeROReasonCodeDetailsResponseType
 * Contains the reason codes for all sites.
 */
class GetVeROReasonCodeDetailsResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\VeROReasonCodeDetailsType | Contains the list of the status codes for a site.
     */
    public $VeROReasonCodeDetails;
    /**
     * @param VeROReasonCodeDetailsType $val
     * @throws Exception
     */
    public function setVeROReasonCodeDetails($val) {
        
        $this->VeROReasonCodeDetails = (int)$val;
    }

}

