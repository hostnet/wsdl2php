<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreVacationPreferencesType | Store vacation hold preferences.
     */
    public $VacationPreferences;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreVacationPreferencesType $val
     * @throws \Exception
     */
    public function setVacationPreferences($val)
    {
        $this->VacationPreferences = $val;
    }
}
