<?php

namespace Controle;
/**
 * BiddingSummaryType
 * Contains bidding summary information of a bidder to an item.
 */
class BiddingSummaryType {
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
}

