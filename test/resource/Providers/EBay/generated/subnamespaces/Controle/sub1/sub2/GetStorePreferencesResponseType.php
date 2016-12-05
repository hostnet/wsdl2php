<?php

namespace Controle\sub1\sub2;

/**
 * GetStorePreferencesResponseType
 * Contains the Store preferences retrieved for a user.
 */
class GetStorePreferencesResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StorePreferencesType | Specifies the store preferences.
	 */
	public $StorePreferences;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StorePreferencesType $val
	 * @throws Exception
	 */
	public function setStorePreferences($val)
	{
        $this->StorePreferences = ()$val;
	}
}
