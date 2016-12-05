<?php

namespace Controle\sub1\sub2;

/**
 * LiveAuctionBidType
 * Contains the data for one listing found by a search .
 */
class LiveAuctionBidType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount that user has requested for the approval. This is returned if the auction house
	 * has requested that the bidder enter an amount for the approval.
	 */
	public $RequestedBiddingLimit;
	/**
	 * @var \Controle\sub1\sub2\BidderStatusCodeType | Indicates whether the user is "approved","denied", or "pending" or a combination of these.
	 */
	public $BidderStatus;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount that has been approved by the seller. If the seller has not yet approved, return
	 * value "Pending"
	 */
	public $ApprovedBiddingLimit;
	/**
	 * @var string | Comments entered by the seller when it declined an approval request, if any.
	 */
	public $DeclinedComment;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setRequestedBiddingLimit($val)
	{
        $this->RequestedBiddingLimit = ()$val;
	}

	/**
	 * @param BidderStatusCodeType $val
	 * @throws Exception
	 */
	public function setBidderStatus($val)
	{
        $this->BidderStatus = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setApprovedBiddingLimit($val)
	{
        $this->ApprovedBiddingLimit = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDeclinedComment($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DeclinedComment');
        }
        $this->DeclinedComment = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
