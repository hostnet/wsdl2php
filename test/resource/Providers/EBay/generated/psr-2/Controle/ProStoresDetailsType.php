<?php

namespace Controle;
/**
 * ProStoresDetailsType
 * Details about the store.
 */
class ProStoresDetailsType {
    /**
     * @var string | The username associated with the store.  Returned only if the parent container is returned.
     */
    public $SellerThirdPartyUsername;
    /**
     * @var string | The name of the seller's eBay Store.
     */
    public $StoreName;
    /**
     * @var \Controle\EnableCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

