<?php

namespace Controle;
/**
 * GetBidderListResponseType
 * Response to GetBidderListRequest.
 */
class GetBidderListResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\UserType | Data for one eBay bidder.
     */
    public $Bidder;
    /**
     * @var \Controle\ItemArrayType | Array of items the bidder has bid on, has won or has lost.
     */
    public $BidItemArray;
}

