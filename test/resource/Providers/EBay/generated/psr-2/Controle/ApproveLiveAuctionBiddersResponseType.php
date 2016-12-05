<?php

namespace Controle;

/**
 * ApproveLiveAuctionBiddersResponseType
 * Provides the Live Auction sellers with the ability to approve, decline, and set the bidding
 * limit of the bidders that have signed up for a catalog.
 */
class ApproveLiveAuctionBiddersResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\LiveAuctionApprovalStatusArrayType | Contains the results of the request for each item. Mulitple bidders can be approved
     * with one call.
     */
    public $BidderUpdateStatus;
    // @codingStandardsIgnoreEnd

    /**
     * @param LiveAuctionApprovalStatusArrayType $val
     * @throws Exception
     */
    public function setBidderUpdateStatus($val)
    {
        $this->BidderUpdateStatus = ()$val;
    }
}
