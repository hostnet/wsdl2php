<?php

namespace Controle;
/**
 * GetMyeBayBuyingResponseType
 * Returns items from All Buying or All Favorites in the user's My eBay account.
 */
class GetMyeBayBuyingResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\BuyingSummaryType | Contains a summary of the items the user has bid on. Returned at all detail levels.
     */
    public $BuyingSummary;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains the items the user is watching. Only returned if items exist that meet the
     * request criteria.
     */
    public $WatchList;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains all the items the user has bid on. Only returned if items exist that meet the
     * request criteria.
     */
    public $BidList;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains the items the user has placed best offers on. Only returned if items exist
     * that meet the request criteria.
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
    /**
     * @param BuyingSummaryType $val
     * @throws Exception
     */
    public function setBuyingSummary($val) {
        
        $this->BuyingSummary = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setWatchList($val) {
        
        $this->WatchList = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setBidList($val) {
        
        $this->BidList = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setBestOfferList($val) {
        
        $this->BestOfferList = (int)$val;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $val
     * @throws Exception
     */
    public function setWonList($val) {
        
        $this->WonList = (int)$val;
    }

    /**
     * @param PaginatedItemArrayType $val
     * @throws Exception
     */
    public function setLostList($val) {
        
        $this->LostList = (int)$val;
    }

    /**
     * @param MyeBayFavoriteSearchListType $val
     * @throws Exception
     */
    public function setFavoriteSearches($val) {
        
        $this->FavoriteSearches = (int)$val;
    }

    /**
     * @param MyeBayFavoriteSellerListType $val
     * @throws Exception
     */
    public function setFavoriteSellers($val) {
        
        $this->FavoriteSellers = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setSecondChanceOffer($val) {
        
        $this->SecondChanceOffer = (int)$val;
    }

}

