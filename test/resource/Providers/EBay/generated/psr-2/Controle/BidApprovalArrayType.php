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
    /**
     * @param BidApprovalType $val
     * @throws Exception
     */
    public function setLiveAuctionBid($val) {
        
        $this->LiveAuctionBid = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

