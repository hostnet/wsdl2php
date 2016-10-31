<?php

namespace Controle;

/**
 * BiddingSummaryType
 * Contains bidding summary information of a bidder to an item.
 */
class BiddingSummaryType
{
    /**
     * @var int | The number of days included in the summary. Currently always set to 30 days.
     */
    public $summarydays;
    /**
     * @var int | The total number of bids that the bidder has placed.
     */
    public $totalbids;
    /**
     * @var int | Percentage of the bidder's total bids that the bidder placed on items that the seller
     * is offering.
     */
    public $bidactivitywithseller;
    /**
     * @var int | Number of unique sellers whose items the bidder has placed bids on.
     */
    public $bidstouniquesellers;
    /**
     * @var int | For items that the bidder has bid on, the number of unique categories that they belong
     * to.
     */
    public $bidstouniquecategories;
    /**
     * @var int | The total number of bids that the bidder has retracted.
     */
    public $bidretractions;
    /**
     * @var \Controle\ItemBidDetailsType | Detail bidding information on the items that the bidder has bid on.
     */
    public $itembiddetails;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setSummaryDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->summarydays = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalBids($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalbids = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBidActivityWithSeller($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bidactivitywithseller = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBidsToUniqueSellers($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bidstouniquesellers = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBidsToUniqueCategories($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bidstouniquecategories = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBidRetractions($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bidretractions = (int)$val;
    }

    /**
     * @param ItemBidDetailsType $val
     * @throws Exception
     */
    public function setItemBidDetails($val)
    {
        $this->itembiddetails = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
