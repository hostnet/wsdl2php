<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CharitySellerType
 * Contains information about one seller with a eBay Giving Works provider charity seller account.
 */
class CharitySellerType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharitySellerStatusCodeType | Indicates the status of the seller's charity seller account.
     */
    public $charitysellerstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationType | Indicates the affiliation status for nonprofit charity organizations registered with
     * the dedicated eBay Giving Works provider.
     */
    public $charityaffiliation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param CharitySellerStatusCodeType $val
     * @throws Exception
     */
    public function setCharitySellerStatus($val)
    {
        $this->charitysellerstatus = (int)$val;
    }

    /**
     * @param CharityAffiliationType $val
     * @throws Exception
     */
    public function setCharityAffiliation($val)
    {
        $this->charityaffiliation = (int)$val;
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