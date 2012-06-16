<?php

namespace Controle\sub1\sub2;
/**
 * SearchStoreFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on an item's appearing in a        specific eBay Store.
 */
class SearchStoreFilterType {
	/**
	 * @var string | The name of the seller's eBay Store.
	 */
	public $StoreName;
	/**
	 * @var \Controle\sub1\sub2\StoreSearchCodeType | Specifies the type of store search used in the filtering: one eBay Store (name
	 *    specified in StoreName) or all eBay stores, and also by listing type. Possible
	 *       values are enumerated in the StoreSearchCodeType code list.
	 */
	public $StoreSearch;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

