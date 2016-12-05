<?php

namespace Controle;

/**
 * BidApprovalArrayType
 * Mulitple bidders can be approved with one call.
 */
class BidApprovalArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\BidApprovalType | Contains data for an item listing found by a search.            Output only.
     */
    public $LiveAuctionBid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param BidApprovalType $val
     * @throws Exception
     */
    public function setLiveAuctionBid($val)
    {
        $this->LiveAuctionBid = (BidApprovalType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
