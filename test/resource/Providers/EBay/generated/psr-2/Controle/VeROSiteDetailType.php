<?php

namespace Controle;
/**
 * VeROSiteDetailType
 * Container for reason code details for a given site.
 */
class VeROSiteDetailType {
    /**
     * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $Site;
    /**
     * @var \Controle\ReasonCodeDetailType | Contains details for a given reason code.
     */
    public $ReasonCodeDetail;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSite($val) {
        
        $this->Site = (int)$val;
    }

    /**
     * @param ReasonCodeDetailType $val
     * @throws Exception
     */
    public function setReasonCodeDetail($val) {
        
        $this->ReasonCodeDetail = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

