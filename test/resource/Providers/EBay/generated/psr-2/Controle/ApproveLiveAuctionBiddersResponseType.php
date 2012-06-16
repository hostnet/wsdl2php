<?php

namespace Controle;
/**
 * ApproveLiveAuctionBiddersResponseType
 * Provides the Live Auction sellers with the ability to approve, decline, and set the bidding
 * limit of the bidders that have signed up for a catalog.
 */
class ApproveLiveAuctionBiddersResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\LiveAuctionApprovalStatusArrayType | Contains the results of the request for each item. Mulitple bidders can be approved
     * with one call.
     */
    public $BidderUpdateStatus;
}
