<?php

namespace Controle\sub1\sub2;

/**
 * BidApprovalArrayType
 * Mulitple bidders can be approved with one call.
 */
class BidApprovalArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BidApprovalType | Contains data for an item listing found by a search.            Output only.
	 */
	public $LiveAuctionBid;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BidApprovalType $val
	 * @throws Exception
	 */
	public function setLiveAuctionBid($val)
	{
        $this->LiveAuctionBid = (int)$val;
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
