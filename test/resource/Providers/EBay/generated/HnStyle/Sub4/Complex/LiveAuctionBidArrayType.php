<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LiveAuctionBidArrayType
 * Container for a list of Live Auction Bidders, such as returned by        GetLiveAuctionBidders.
 * Will contain zero, one, or multiple        LiveAuctionBidType bidders, each of which represents
 * one bidder's request listing        that was found by the search.        Output only.
 */
class LiveAuctionBidArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionBidType | Contains data for an item listing found by a search.            Output only.
     */
    public $liveauctionbid;
    /**
     * @param LiveAuctionBidType $val
     * @throws Exception
     */
    public function setLiveAuctionBid($val)
    {
        $this->liveauctionbid = (int)$val;
    }
}
