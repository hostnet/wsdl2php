<?php

namespace Controle;
/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\StorePreferencesType | Specifies the store preferences.
	 */
	public $StorePreferences;
}

