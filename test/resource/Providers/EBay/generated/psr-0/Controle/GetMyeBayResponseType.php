<?php

namespace Controle;
/**
 * GetMyeBayResponseType
 * Contains the lists of items from the requesting user's My eBay page. This includes a list
 * of the items the user has bid on and a list of the items the user is watching. The number
 * of items returned in any list can be controlled using the MaxItemsPerList property of the
 * request object.
 */
class GetMyeBayResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\ItemArrayType | Contains the list of items the requesting user has bid on. BiddingItemArray is
	 *          an array of ItemType objects, each of which represents one item.
	 */
	public $BiddingItemArray;
	/**
	 * @var \Controle\ItemArrayType | Contains the list of items the requesting user has bid on but not has won. LostItemArray
	 * is an array of ItemType objects, each of which represents one item.
	 */
	public $LostItemArray;
	/**
	 * @var \Controle\ItemArrayType | Contains the list of items the requesting user is watching. WatchItemArray is an array
	 * of ItemType objects, each of which represents one item.
	 */
	public $WatchItemArray;
	/**
	 * @var \Controle\ItemArrayType | Contains the list of items the requesting user has won. WonItemArray is an array of ItemType
	 * objects, each of which represents one item.
	 */
	public $WonItemArray;
	/**
	 * @var \Controle\MyeBayFavoriteSearchListType | Contains a list of the user's favorite searches. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $FavoriteSearches;
	/**
	 * @var \Controle\MyeBayFavoriteSellerListType | Contains a list of the user's favorite sellers. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $FavoriteSellers;
	/**
	 * @var \Controle\MyeBaySecondChanceOfferListType | Contains a list of the user's My eBay Second Chance Offers.
	 */
	public $SecondChanceOffers;
}

