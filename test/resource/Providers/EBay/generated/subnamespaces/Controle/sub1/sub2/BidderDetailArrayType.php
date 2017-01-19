<?php

namespace Controle\sub1\sub2;

/**
 * BidderDetailArrayType
 * A collection of Bidder Detail.
 */
class BidderDetailArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BidderDetailType | Details about a Live Auctions bidder. Returned if at least one bidder has requested approval.
	 */
	public $BidderDetail;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BidderDetailType $val
	 * @throws \Exception
	 */
	public function setBidderDetail($val)
	{
        $this->BidderDetail = $val;
	}
}
