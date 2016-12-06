<?php

namespace Controle\sub1\sub2;

/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreVacationPreferencesType | Store vacation hold preferences.
	 */
	public $VacationPreferences;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreVacationPreferencesType $val
	 * @throws Exception
	 */
	public function setVacationPreferences($val)
	{
        $this->VacationPreferences = $val;
	}
}
