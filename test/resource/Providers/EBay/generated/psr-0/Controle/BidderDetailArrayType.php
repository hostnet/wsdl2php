<?php

namespace Controle;

/**
 * BidderDetailArrayType
 * A collection of Bidder Detail.
 */
class BidderDetailArrayType
{
	/**
	 * @var \Controle\BidderDetailType | Details about a Live Auctions bidder. Returned if at least one bidder has requested approval.
	 */
	public $bidderdetail;
	/**
	 * @param BidderDetailType $val
	 * @throws Exception
	 */
	public function setBidderDetail($val)
	{
        $this->bidderdetail = (int)$val;
	}
}
