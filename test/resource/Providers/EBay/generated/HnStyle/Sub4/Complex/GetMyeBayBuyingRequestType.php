<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBayBuyingRequestType
 * Returns items from the All Buying section of the user's My eBay account, including items
 * the user is watching, bidding on, has won, has not won, or has made best offers on. <br
 * /> A DetailLevel of ReturnSummary returns only the BuyingSummary and the specific container
 * requested. <br /> A DetailLevel of ReturnAll returns the BuyingSummary and all other containers.
 * Any containers that were not specified in the request are returned with default settings.
 */
class GetMyeBayBuyingRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user is watching. Only returned if items exist that meet the
     * request criteria.
     */
    public $watchlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains all the items the user has bid on. Only returned if items exist that meet the
     * request criteria.
     */
    public $bidlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user has placed best offers on. Only returned if items exist
     * that meet the request criteria.
     */
    public $bestofferlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user has bid on and won. Only returned if items exist that meet
     * the request criteria.
     */
    public $wonlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user has bid on and lost. Only returned if items exist that meet
     * the request criteria.
     */
    public $lostlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | Contains a list of the user's favorite searches. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesearches;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | Contains a list of the user's favorite sellers. Only returned if items exist that meet
     * the request criteria.
     */
    public $favoritesellers;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType | A Second Chance Offer item.
     */
    public $secondchanceoffer;
    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setWatchList($val)
    {
        $this->watchlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setBidList($val)
    {
        $this->bidlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setBestOfferList($val)
    {
        $this->bestofferlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setWonList($val)
    {
        $this->wonlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setLostList($val)
    {
        $this->lostlist = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setFavoriteSearches($val)
    {
        $this->favoritesearches = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setFavoriteSellers($val)
    {
        $this->favoritesellers = (int)$val;
    }

    /**
     * @param MyeBaySelectionType $val
     * @throws Exception
     */
    public function setSecondChanceOffer($val)
    {
        $this->secondchanceoffer = (int)$val;
    }
}
