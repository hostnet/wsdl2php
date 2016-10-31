<?php

namespace Controle;

/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType
{
    /**
     * @var \Controle\StoreVacationPreferencesType | Store vacation hold preferences.
     */
    public $vacationpreferences;
    /**
     * @param StoreVacationPreferencesType $val
     * @throws Exception
     */
    public function setVacationPreferences($val)
    {
        $this->vacationpreferences = (int)$val;
    }
}
