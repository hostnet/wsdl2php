<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VeRoSiteDetailType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $Site;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReasonCodeDetailType | Contains details for a given reason code.
     */
    public $ReasonCodeDetail;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSite($val)
    {
        $this->Site = (SiteCodeType)$val;
    }

    /**
     * @param ReasonCodeDetailType $val
     * @throws Exception
     */
    public function setReasonCodeDetail($val)
    {
        $this->ReasonCodeDetail = (ReasonCodeDetailType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
