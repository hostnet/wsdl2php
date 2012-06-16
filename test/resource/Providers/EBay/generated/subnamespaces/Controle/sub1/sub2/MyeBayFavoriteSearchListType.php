<?php

namespace Controle\sub1\sub2;
/**
 * MyeBayFavoriteSearchListType
 * A list of favorite searches a user has saved on the My eBay page.
 */
class MyeBayFavoriteSearchListType {
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\sub1\sub2\MyeBayFavoriteSearchType | A favorite search the user has saved, with a name and a search query.
	 */
	public $FavoriteSearch;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

