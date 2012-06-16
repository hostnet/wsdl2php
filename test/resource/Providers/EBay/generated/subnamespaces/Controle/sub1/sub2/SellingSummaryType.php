<?php

namespace Controle\sub1\sub2;
/**
 * SellingSummaryType
 * Contains summary information about the items the user is selling.
 */
class SellingSummaryType {
	/**
	 * @var int | The number of currently active auctions that will sell. That is, there is at least one
	 * bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
	 */
	public $ActiveAuctionCount;
	/**
	 * @var int | The total number of currently active auctions for a given seller. Note that this does not
	 * include listings that are FixedPriceItem or StoresFixedPrice. Equivalent to the "Auction
	 * Quantity" value in My eBay.
	 */
	public $AuctionSellingCount;
	/**
	 * @var int | The total number of bids made on the user's active listings.
	 */
	public $AuctionBidCount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total value of all items the user has for sale in all listings.
	 */
	public $TotalAuctionSellingValue;
	/**
	 * @var int | The total number of items the user has sold.
	 */
	public $TotalSoldCount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The total monetary value of the items the user has sold.
	 */
	public $TotalSoldValue;
	/**
	 * @var int | The average duration, in days, of all items sold.
	 */
	public $SoldDurationInDays;
}
