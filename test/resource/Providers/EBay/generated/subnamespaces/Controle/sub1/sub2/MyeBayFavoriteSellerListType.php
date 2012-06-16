<?php

namespace Controle\sub1\sub2;
/**
 * MyeBayFavoriteSellerListType
 * A list of favorite sellers the user has saved on the My eBay page.
 */
class MyeBayFavoriteSellerListType {
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\sub1\sub2\MyeBayFavoriteSellerType | A favorite seller the user has saved, with a user ID and store name.
	 */
	public $FavoriteSeller;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

