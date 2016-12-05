<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SubscriptionType
 *
 */
class SubscriptionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique identifier for the user that does not change when the eBay user name is changed.
     * Use when an application needs to associate a new eBay user name with the corresponding
     * eBay user. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $EIASToken;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType |      */
    public $SiteID;
    /**
     * @var boolean |      */
    public $Active;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEIASToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EIASToken');
        }
        $this->EIASToken = ()$val;
    }

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        $this->SiteID = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setActive($val)
    {
        $this->Active = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
