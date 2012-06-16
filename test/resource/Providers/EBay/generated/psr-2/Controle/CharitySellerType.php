<?php

namespace Controle;
/**
 * CharitySellerType
 * Contains information about one seller with a eBay Giving Works provider charity seller account.
 */
class CharitySellerType {
    /**
     * @var \Controle\CharitySellerStatusCodeType | Indicates the status of the seller's charity seller account.
     */
    public $CharitySellerStatus;
    /**
     * @var \Controle\CharityAffiliationType | Indicates the affiliation status for nonprofit charity organizations registered with
     * the dedicated eBay Giving Works provider.
     */
    public $CharityAffiliation;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

