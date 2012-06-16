<?php

namespace Controle\sub1\sub2;
/**
 * StorePreferencesType
 * Store Preferences type.
 */
class StorePreferencesType {
	/**
	 * @var \Controle\sub1\sub2\StoreVacationPreferencesType | Store vacation hold preferences.
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

