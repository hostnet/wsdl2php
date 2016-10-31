<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BidApprovalArrayType
 * Mulitple bidders can be approved with one call.
 */
class BidApprovalArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidApprovalType | Contains data for an item listing found by a search.            Output only.
     */
    public $liveauctionbid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param BidApprovalType $val
     * @throws Exception
     */
    public function setLiveAuctionBid($val)
    {
        $this->liveauctionbid = (int)$val;
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
