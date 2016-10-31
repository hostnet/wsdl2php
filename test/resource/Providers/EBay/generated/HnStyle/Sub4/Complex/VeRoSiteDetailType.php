<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoSiteDetailType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $site;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReasonCodeDetailType | Contains details for a given reason code.
     */
    public $reasoncodedetail;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSite($val)
    {
        $this->site = (int)$val;
    }

    /**
     * @param ReasonCodeDetailType $val
     * @throws Exception
     */
    public function setReasonCodeDetail($val)
    {
        $this->reasoncodedetail = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
