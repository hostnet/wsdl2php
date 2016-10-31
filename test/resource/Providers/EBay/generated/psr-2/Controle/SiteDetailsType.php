<?php

namespace Controle;

/**
 * SiteDetailsType
 * Details about a specific site.
 */
class SiteDetailsType
{
    /**
     * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $site;
    /**
     * @var int |      */
    public $siteid;
    /**
     * @var \Controle\<anyXML>
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
     * @param int $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->siteid = (int)$val;
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
