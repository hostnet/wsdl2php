<?php

namespace Controle;

/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\StorePreferencesType | Specifies the store preferences.
	 */
	public $storepreferences;
	/**
	 * @param StorePreferencesType $val
	 * @throws Exception
	 */
	public function setStorePreferences($val)
	{
        $this->storepreferences = (int)$val;
	}
}
