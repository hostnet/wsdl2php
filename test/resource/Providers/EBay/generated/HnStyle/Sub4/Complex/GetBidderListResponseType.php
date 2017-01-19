<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetBidderListResponseType
 * Response to GetBidderListRequest.
 */
class GetBidderListResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserType | Data for one eBay bidder.
     */
    public $Bidder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemArrayType | Array of items the bidder has bid on, has won or has lost.
     */
    public $BidItemArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param UserType $val
     * @throws \Exception
     */
    public function setBidder($val)
    {
        $this->Bidder = $val;
    }

    /**
     * @param ItemArrayType $val
     * @throws \Exception
     */
    public function setBidItemArray($val)
    {
        $this->BidItemArray = $val;
    }
}
