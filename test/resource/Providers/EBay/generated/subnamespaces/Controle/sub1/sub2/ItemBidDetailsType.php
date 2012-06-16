<?php

namespace Controle\sub1\sub2;
/**
 * ItemBidDetailsType
 * Contains bidding details information of a user on an item.
 */
class ItemBidDetailsType {
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding listings
	 * (Chinese and Dutch auctions).
	 */
	public $BidCount;
	/**
	 * @var \Controle\sub1\sub2\UserIDType | The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's
	 * user info is made anonymous, this tag will be returned with the anonymous value "Seller
	 * X", where X indicates where the seller falls in the sequence of sellers that the user has
	 * purchased items from. For example, if the seller is the third seller that the user has
	 * purchased items from, the value "Seller 3" is returned.
	 */
	public $SellerID;
	/**
	 * @var dateTime | The time at which the user placed the last bid on the item.
	 */
	public $LastBidTime;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

