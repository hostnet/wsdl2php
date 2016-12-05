<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetStorePreferencesRequestType
 * Sets the preferences for a user's eBay Store. These preferences include various seller vacation
 * options.
 */
class SetStorePreferencesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
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
        $this->StorePreferences = (StorePreferencesType)$val;
    }
}
