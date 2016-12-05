<?php

namespace Controle;

/**
 * BiddingSummaryType
 * Contains bidding summary information of a bidder to an item.
 */
class BiddingSummaryType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The number of days included in the summary. Currently always set to 30 days.
	 */
	public $SummaryDays;
	/**
	 * @var int | The total number of bids that the bidder has placed.
	 */
	public $TotalBids;
	/**
	 * @var int | Percentage of the bidder's total bids that the bidder placed on items that the seller is
	 * offering.
	 */
	public $BidActivityWithSeller;
	/**
	 * @var int | Number of unique sellers whose items the bidder has placed bids on.
	 */
	public $BidsToUniqueSellers;
	/**
	 * @var int | For items that the bidder has bid on, the number of unique categories that they belong
	 * to.
	 */
	public $BidsToUniqueCategories;
	/**
	 * @var int | The total number of bids that the bidder has retracted.
	 */
	public $BidRetractions;
	/**
	 * @var \Controle\ItemBidDetailsType | Detail bidding information on the items that the bidder has bid on.
	 */
	public $ItemBidDetails;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setSummaryDays($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->SummaryDays = (int)$val;
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
        $this->TotalBids = (int)$val;
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
        $this->BidActivityWithSeller = (int)$val;
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
        $this->BidsToUniqueSellers = (int)$val;
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
        $this->BidsToUniqueCategories = (int)$val;
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
        $this->BidRetractions = (int)$val;
	}

	/**
	 * @param ItemBidDetailsType $val
	 * @throws Exception
	 */
	public function setItemBidDetails($val)
	{
        $this->ItemBidDetails = (ItemBidDetailsType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
