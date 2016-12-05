<?php

namespace Controle;

/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreVacationPreferencesType | Store vacation hold preferences.
     */
    public $VacationPreferences;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreVacationPreferencesType $val
     * @throws Exception
     */
    public function setVacationPreferences($val)
    {
        $this->VacationPreferences = (StoreVacationPreferencesType)$val;
    }
}
