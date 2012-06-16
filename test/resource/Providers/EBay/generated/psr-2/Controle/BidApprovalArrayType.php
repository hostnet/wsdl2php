<?php

namespace Controle;
/**
 * BidApprovalArrayType
 * Mulitple bidders can be approved with one call.
 */
class BidApprovalArrayType {
    /**
     * @var \Controle\BidApprovalType | Contains data for an item listing found by a search.            Output only.
     */
    public $LiveAuctionBid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

