<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBayBuyingResponseType
 * Returns items from All Buying or All Favorites in the user's My eBay account.
 */
class GetMyeBayBuyingResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyingSummaryType | Contains a summary of the items the user has bid on. Returned at all detail levels.
     */
    public $buyingsummary;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedItemArrayType | Contains the items the user is watching. Only returned if items exist that meet the
     * request criteria.
     */
    public $watchlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedItemArrayType | Contains all the items the user has bid on. Only returned if items exist that meet the
     * request criteria.
     */
    public $bidlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedItemArrayType | Contains the items the user has placed best offers on. Only returned if items exist
     * that meet the request criteria.
     */
    public $bestofferlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedOrderTransactionArrayType | Contains the items the user has bid on and won. Only returned if items exist that meet
     * the request criteria.
     */
    public $wonlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedItemArrayType | Contains the items the user has bid on and lost. Only returned if items exist that meet
     * the request criteria.
     */
    public $lostlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSearchListType | Contains a list of the user's favorite searches. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesearches;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSellerListType | Contains a list of the user's favorite sellers. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesellers;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | A Second Chance Offer item.
     */
    public $secondchanceoffer;
    /**
     * @param BuyingSummaryType $val
     * @throws Exception
     */
    public function setBuyingSummary($val)
    {
        $this->buyingsummary = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setWatchList($val)
    {
        $this->watchlist = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setBidList($val)
    {
        $this->bidlist = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setBestOfferList($val)
    {
        $this->bestofferlist = (int)$val;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $val
     * @throws Exception
     */
    public function setWonList($val)
    {
        $this->wonlist = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setLostList($val)
    {
        $this->lostlist = (int)$val;
    }

    /**
     * @param MyeBayFavoriteSearchListType $val
     * @throws Exception
     */
    public function setFavoriteSearches($val)
    {
        $this->favoritesearches = (int)$val;
    }

    /**
     * @param MyeBayFavoriteSellerListType $val
     * @throws Exception
     */
    public function setFavoriteSellers($val)
    {
        $this->favoritesellers = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setSecondChanceOffer($val)
    {
        $this->secondchanceoffer = (int)$val;
    }
}
