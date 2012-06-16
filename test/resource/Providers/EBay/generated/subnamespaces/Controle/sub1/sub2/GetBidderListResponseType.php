<?php

namespace Controle\sub1\sub2;
/**
 * GetBidderListResponseType
 * Response to GetBidderListRequest.
 */
class GetBidderListResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\UserType | Data for one eBay bidder.
	 */
	public $Bidder;
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Array of items the bidder has bid on, has won or has lost.
	 */
	public $BidItemArray;
}

