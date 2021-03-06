<?php

namespace Controle\sub1\sub2;

/**
 * LiveAuctionApprovalStatusArrayType
 * Contains the results of the request for each bidder.
 */
class LiveAuctionApprovalStatusArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\LiveAuctionApprovalStatusType | Indicates the current approval status of a bidder.
	 */
	public $LiveAuctionStatus;
	// @codingStandardsIgnoreEnd

	/**
	 * @param LiveAuctionApprovalStatusType $val
	 * @throws \Exception
	 */
	public function setLiveAuctionStatus($val)
	{
        $this->LiveAuctionStatus = $val;
	}
}
