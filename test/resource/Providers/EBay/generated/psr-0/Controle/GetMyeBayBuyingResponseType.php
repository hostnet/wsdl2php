<?php

namespace Controle;

/**
 * GetMyeBayBuyingResponseType
 * Returns items from All Buying or All Favorites in the user's My eBay account.
 */
class GetMyeBayBuyingResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\BuyingSummaryType | Contains a summary of the items the user has bid on. Returned at all detail levels.
	 */
	public $BuyingSummary;
	/**
	 * @var \Controle\PaginatedItemArrayType | Contains the items the user is watching. Only returned if items exist that meet the request
	 * criteria.
	 */
	public $WatchList;
	/**
	 * @var \Controle\PaginatedItemArrayType | Contains all the items the user has bid on. Only returned if items exist that meet the
	 * request criteria.
	 */
	public $BidList;
	/**
	 * @var \Controle\PaginatedItemArrayType | Contains the items the user has placed best offers on. Only returned if items exist that
	 * meet the request criteria.
	 */
	public $BestOfferList;
	/**
	 * @var \Controle\PaginatedOrderTransactionArrayType | Contains the items the user has bid on and won. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $WonList;
	/**
	 * @var \Controle\PaginatedItemArrayType | Contains the items the user has bid on and lost. Only returned if items exist that meet
	 * the request criteria.
	 */
	public $LostList;
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
	 * @var \Controle\ItemType | A Second Chance Offer item.
	 */
	public $SecondChanceOffer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BuyingSummaryType $val
	 * @throws Exception
	 */
	public function setBuyingSummary($val)
	{
        $this->BuyingSummary = ()$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setWatchList($val)
	{
        $this->WatchList = ()$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setBidList($val)
	{
        $this->BidList = ()$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setBestOfferList($val)
	{
        $this->BestOfferList = ()$val;
	}

	/**
	 * @param PaginatedOrderTransactionArrayType $val
	 * @throws Exception
	 */
	public function setWonList($val)
	{
        $this->WonList = ()$val;
	}

	/**
	 * @param PaginatedItemArrayType $val
	 * @throws Exception
	 */
	public function setLostList($val)
	{
        $this->LostList = ()$val;
	}

	/**
	 * @param MyeBayFavoriteSearchListType $val
	 * @throws Exception
	 */
	public function setFavoriteSearches($val)
	{
        $this->FavoriteSearches = ()$val;
	}

	/**
	 * @param MyeBayFavoriteSellerListType $val
	 * @throws Exception
	 */
	public function setFavoriteSellers($val)
	{
        $this->FavoriteSellers = ()$val;
	}

	/**
	 * @param ItemType $val
	 * @throws Exception
	 */
	public function setSecondChanceOffer($val)
	{
        $this->SecondChanceOffer = ()$val;
	}
}
