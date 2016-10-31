<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType
{
    /**
     * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
     * specified via My eBay preferences.
     */
    public $checkoutredirectprostores;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProStoresDetailsType | Details about the store.
     */
    public $prostoresdetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCheckoutRedirectProStores($val)
    {
        $this->checkoutredirectprostores = (int)$val;
    }

    /**
     * @param ProStoresDetailsType $val
     * @throws Exception
     */
    public function setProStoresDetails($val)
    {
        $this->prostoresdetails = (int)$val;
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
