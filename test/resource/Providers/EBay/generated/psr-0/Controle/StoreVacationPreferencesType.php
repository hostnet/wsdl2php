<?php

namespace Controle;

/**
 * StoreVacationPreferencesType
 * Specifies a set of Store vacation preferences.
 */
class StoreVacationPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Specifies whether the Store owner is on vacation.<br> When OnVacation is true, the Store
	 * owner's listings do not appear on Express, regardless of the listing format and regardless
	 * of how the seller has configured their vacation settings for items that appear on eBay.
	 */
	public $OnVacation;
	/**
	 * @var dateTime | Seller return date from vacation.
	 */
	public $ReturnDate;
	/**
	 * @var boolean | Hide Store Inventory format items when the Store owner is on vacation.<br><br> When OnVacation
	 * is true, the Store owner's listings do not appear on Express, regardless of the listing
	 * format and regardless of how the seller has configured their vacation settings for items
	 * that appear on eBay.
	 */
	public $HideFixedPriceStoreItems;
	/**
	 * @var boolean | Add a message when the Store owner is on vacation to all their active items.
	 */
	public $MessageItem;
	/**
	 * @var boolean | Add a message to all the Store pages when the Store owner is on vacation.
	 */
	public $MessageStore;
	/**
	 * @var boolean | Display custom message on the Store pages instead of the default message.
	 */
	public $DisplayMessageStoreCustomText;
	/**
	 * @var string | The custom message to display for the Store when the user is on vacation. May contain HTML
	 * markup.
	 */
	public $MessageStoreCustomText;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setOnVacation($val)
	{
        $this->OnVacation = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setReturnDate($val)
	{
        $this->ReturnDate = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHideFixedPriceStoreItems($val)
	{
        $this->HideFixedPriceStoreItems = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setMessageItem($val)
	{
        $this->MessageItem = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setMessageStore($val)
	{
        $this->MessageStore = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDisplayMessageStoreCustomText($val)
	{
        $this->DisplayMessageStoreCustomText = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessageStoreCustomText($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageStoreCustomText');
        }
        $this->MessageStoreCustomText = $val;
	}
}
