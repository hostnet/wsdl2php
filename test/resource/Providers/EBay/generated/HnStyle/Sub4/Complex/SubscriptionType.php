<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SubscriptionType
 *
 */
class SubscriptionType
{
    /**
     * @var string | Unique identifier for the user that does not change when the eBay user name is changed.
     * Use when an application needs to associate a new eBay user name with the corresponding
     * eBay user. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $eiastoken;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType |      */
    public $siteid;
    /**
     * @var boolean |      */
    public $active;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setEIASToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EIASToken');
        }
        $this->eiastoken = (int)$val;
    }

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSiteID($val)
    {
        $this->siteid = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setActive($val)
    {
        $this->active = (int)$val;
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
