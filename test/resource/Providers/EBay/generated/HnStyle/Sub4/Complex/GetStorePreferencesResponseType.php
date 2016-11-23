<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StorePreferencesType | Specifies the store preferences.
     */
    public $StorePreferences;
    // @codingStandardsIgnoreEnd

    /**
     * @param StorePreferencesType $val
     * @throws Exception
     */
    public function setStorePreferences($val)
    {
        $this->StorePreferences = (int)$val;
    }
}
