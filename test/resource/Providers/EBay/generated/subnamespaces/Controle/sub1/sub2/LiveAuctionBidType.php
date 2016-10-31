<?php

namespace Controle\sub1\sub2;

/**
 * LiveAuctionBidType
 * Contains the data for one listing found by a search .
 */
class LiveAuctionBidType
{
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount that user has requested for the approval. This is returned if the auction house
	 * has requested that the bidder enter an amount for the approval.
	 */
	public $requestedbiddinglimit;
	/**
	 * @var \Controle\sub1\sub2\BidderStatusCodeType | Indicates whether the user is "approved","denied", or "pending" or a combination of these.
	 */
	public $bidderstatus;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount that has been approved by the seller. If the seller has not yet approved, return
	 * value "Pending"
	 */
	public $approvedbiddinglimit;
	/**
	 * @var string | Comments entered by the seller when it declined an approval request, if any.
	 */
	public $declinedcomment;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setRequestedBiddingLimit($val)
	{
        $this->requestedbiddinglimit = (int)$val;
	}

	/**
	 * @param BidderStatusCodeType $val
	 * @throws Exception
	 */
	public function setBidderStatus($val)
	{
        $this->bidderstatus = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setApprovedBiddingLimit($val)
	{
        $this->approvedbiddinglimit = (int)$val;
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
        $this->declinedcomment = (int)$val;
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
