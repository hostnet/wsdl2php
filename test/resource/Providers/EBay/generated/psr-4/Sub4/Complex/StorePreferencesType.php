<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreVacationPreferencesType | Store vacation hold preferences.
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
