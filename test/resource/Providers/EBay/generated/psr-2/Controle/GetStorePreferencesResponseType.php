<?php

namespace Controle;

/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StorePreferencesType | Specifies the store preferences.
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
