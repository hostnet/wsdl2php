<?php

namespace Controle;
/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType {
    /**
     * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
     * specified via My eBay preferences.
     */
    public $CheckoutRedirectProStores;
    /**
     * @var \Controle\ProStoresDetailsType | Details about the store.
     */
    public $ProStoresDetails;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

