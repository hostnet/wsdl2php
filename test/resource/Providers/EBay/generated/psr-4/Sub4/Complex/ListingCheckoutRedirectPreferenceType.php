<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingCheckoutRedirectPreferenceType
 * ProStores listing level preferences.
 */
class ListingCheckoutRedirectPreferenceType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The name of the store, if Item.ThirdPartyCheckout is true. To remove this value when
     * revising or relisting an item, use DeletedField.
     */
    public $ProStoresStoreName;
    /**
     * @var string | The username associated with the store.  Returned only if the parent container is returned.
     */
    public $SellerThirdPartyUsername;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProStoresStoreName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProStoresStoreName');
        }
        $this->ProStoresStoreName = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerThirdPartyUsername($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerThirdPartyUsername');
        }
        $this->SellerThirdPartyUsername = (int)$val;
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
