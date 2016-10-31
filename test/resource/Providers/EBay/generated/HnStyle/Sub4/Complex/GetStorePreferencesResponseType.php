<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StorePreferencesType | Specifies the store preferences.
     */
    public $storepreferences;
    /**
     * @param StorePreferencesType $val
     * @throws Exception
     */
    public function setStorePreferences($val)
    {
        $this->storepreferences = (int)$val;
    }
}
