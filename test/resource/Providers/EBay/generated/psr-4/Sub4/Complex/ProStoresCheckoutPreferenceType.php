<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
     * specified via My eBay preferences.
     */
    public $CheckoutRedirectProStores;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProStoresDetailsType | Details about the store.
     */
    public $ProStoresDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCheckoutRedirectProStores($val)
    {
        $this->CheckoutRedirectProStores = (boolean)$val;
    }

    /**
     * @param ProStoresDetailsType $val
     * @throws Exception
     */
    public function setProStoresDetails($val)
    {
        $this->ProStoresDetails = (ProStoresDetailsType)$val;
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
