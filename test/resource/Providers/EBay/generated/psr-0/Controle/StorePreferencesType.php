<?php

namespace Controle;
/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType {
	/**
	 * @var \Controle\StoreVacationPreferencesType | Store vacation hold preferences.
	 */
	public $VacationPreferences;
	/**
	 * @param StoreVacationPreferencesType $val
	 * @throws Exception
	 */
	public function setVacationPreferences($val) {
		
		$this->VacationPreferences = (int)$val;
	}

}

