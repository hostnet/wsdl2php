<?php

namespace Controle\sub1\sub2;

/**
 * GetMyeBayResponseType
 * Contains the lists of items from the requesting user's My eBay page. This includes a list
 * of the items the user has bid on and a list of the items the user is watching. The number
 * of items returned in any list can be controlled using the MaxItemsPerList property of the
 * request object.
 */
class GetMyeBayResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains the list of items the requesting user has bid on. BiddingItemArray is
	 *          an array of ItemType objects, each of which represents one item.
	 */
	public $BiddingItemArray;
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains the list of items the requesting user has bid on but not has won. LostItemArray
	 * is an array of ItemType objects, each of which represents one item.
	 */
	public $LostItemArray;
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains the list of items the requesting user is watching. WatchItemArray is an array
	 * of ItemType objects, each of which represents one item.
	 */
	public $WatchItemArray;
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains the list of items the requesting user has won. WonItemArray is an array of ItemType
	 * objects, each of which represents one item.
	 */
	public $WonItemArray;
	/**
	 * @var \Controle\sub1\sub2\MyeBayFavoriteSearchListType | Contains a list of the user's favorite searches. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $FavoriteSearches;
	/**
	 * @var \Controle\sub1\sub2\MyeBayFavoriteSellerListType | Contains a list of the user's favorite sellers. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $FavoriteSellers;
	/**
	 * @var \Controle\sub1\sub2\MyeBaySecondChanceOfferListType | Contains a list of the user's My eBay Second Chance Offers.
	 */
	public $SecondChanceOffers;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setBiddingItemArray($val)
	{
        $this->BiddingItemArray = $val;
	}

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setLostItemArray($val)
	{
        $this->LostItemArray = $val;
	}

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setWatchItemArray($val)
	{
        $this->WatchItemArray = $val;
	}

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setWonItemArray($val)
	{
        $this->WonItemArray = $val;
	}

	/**
	 * @param MyeBayFavoriteSearchListType $val
	 * @throws Exception
	 */
	public function setFavoriteSearches($val)
	{
        $this->FavoriteSearches = $val;
	}

	/**
	 * @param MyeBayFavoriteSellerListType $val
	 * @throws Exception
	 */
	public function setFavoriteSellers($val)
	{
        $this->FavoriteSellers = $val;
	}

	/**
	 * @param MyeBaySecondChanceOfferListType $val
	 * @throws Exception
	 */
	public function setSecondChanceOffers($val)
	{
        $this->SecondChanceOffers = $val;
	}
}
