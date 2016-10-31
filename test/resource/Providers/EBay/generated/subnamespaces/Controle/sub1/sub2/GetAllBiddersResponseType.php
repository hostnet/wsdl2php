<?php

namespace Controle\sub1\sub2;

/**
 * GetAllBiddersResponseType
 * Includes the list of bidders for the requested item as part of the general item listing
 * data.
 */
class GetAllBiddersResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\OfferArrayType | Contains a list of zero, one, or multiple OfferType objects. Each OfferType object represents
	 * the data for one high bidder. See the schema documentation for OfferType for details on
	 * its properties and their meanings.
	 */
	public $bidarray;
	/**
	 * @var \Controle\sub1\sub2\UserIDType | For single-item (Quantity = 1) auction listings that have ended and have a winning bidder,
	 * indicates the user who is the current high bidder. For single-item basic fixed price (FixedPriceItem)
	 * or Store Inventory (StoresFixedPrice) listings that have ended, indicates the user who purchased
	 * the item. Not returned for auctions that have received no bids, fixed price and Store Inventory
	 * listings that are still active, or any multi-item (Quantity > 1) listings.
	 */
	public $highbidder;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount the highest bidder had bid on the item. Applicable only to competitive-bidding listings
	 * (Chinese and Dutch auctions) where there is progressive bidding and winning bidders are
	 * determined based on the highest bid.
	 */
	public $highestbid;
	/**
	 * @var \Controle\sub1\sub2\ListingStatusCodeType | Specifies an active or ended listing's status in eBay's processing workflow. If a listing
	 * ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and
	 * buyer/high bidder) and the final value fee. This processing can take several minutes. If
	 * you retrieve a sold item and no details about the buyer/high bidder are returned or no
	 * final value fee is available, use this listing status information to determine whether
	 * eBay has finished processing the listing.
	 */
	public $listingstatus;
	/**
	 * @param OfferArrayType $val
	 * @throws Exception
	 */
	public function setBidArray($val)
	{
        $this->bidarray = (int)$val;
	}

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setHighBidder($val)
	{
        $this->highbidder = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setHighestBid($val)
	{
        $this->highestbid = (int)$val;
	}

	/**
	 * @param ListingStatusCodeType $val
	 * @throws Exception
	 */
	public function setListingStatus($val)
	{
        $this->listingstatus = (int)$val;
	}
}
