<?php

namespace Controle\sub1\sub2;
/**
 * StorefrontType
 * Contains information related to the item in the context of a seller's eBay Store. Applicable
 * for auction format, Basic Fixed Price, and Store Inventory format items listed by eBay Stores
 * sellers.
 */
class StorefrontType {
	/**
	 * @var int | Numeric ID for a custom category that the seller created in their eBay Store, if any. eBay
	 * Stores sellers can create up to three levels of custom categories for their stores. Items
	 * can only be listed in store categories that have no child categories (subcategories). If
	 * you attempt to list an item in a category that has subcategories, the call response contains
	 * a warning, and the item is listed in the Other store category. In GetSearchResults, this
	 * field currently returns 0. As a workaround, use GetItem or related calls to get the ID.
	 */
	public $StoreCategoryID;
	/**
	 * @var int | Applicable for eBay Store sellers only. Numeric ID for a second custom category that the
	 * seller created in their eBay Store. eBay Stores sellers can create up to 300 custom categories
	 * for their stores. (One additional Store category cannot be customized and retains the value
	 * of "Other"). <br> If you specify an invalid value, the values are the same for both the
	 * primary and secondary store categories, or if the seondary store category is specified
	 * but the primary is left blank (or other),  the system resets the value to 0 (None). In
	 * short, the primary store category must be set to something meaningful and different from
	 * the second store category in order to set the secondary store category to a value other
	 * than 0. In GetSearchResults, this field currently returns 0. As a workaround, use GetItem
	 * or related calls to get the ID.
	 */
	public $StoreCategory2ID;
	/**
	 * @var \Controle\sub1\sub2\anyURI | The URL of the seller's eBay Store page. Output only.
	 */
	public $StoreURL;
	/**
	 * @var string | The name of the seller's eBay Store.
	 */
	public $StoreName;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStoreCategoryID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->StoreCategoryID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStoreCategory2ID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->StoreCategory2ID = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setStoreURL($val) {
		
		$this->StoreURL = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStoreName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for StoreName');
		$this->StoreName = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

