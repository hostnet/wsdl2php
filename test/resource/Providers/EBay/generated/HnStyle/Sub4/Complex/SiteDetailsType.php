<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SiteDetailsType
 * Details about a specific site.
 */
class SiteDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $Site;
    /**
     * @var int |      */
    public $SiteID;
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
     * @param int $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->SiteID = (int)$val;
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
