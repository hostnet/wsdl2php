<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BidApprovalArrayType
 * Mulitple bidders can be approved with one call.
 */
class BidApprovalArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidApprovalType | Contains data for an item listing found by a search.            Output only.
     */
    public $LiveAuctionBid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param BidApprovalType $val
     * @throws Exception
     */
    public function setLiveAuctionBid($val)
    {
        $this->LiveAuctionBid = ()$val;
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
