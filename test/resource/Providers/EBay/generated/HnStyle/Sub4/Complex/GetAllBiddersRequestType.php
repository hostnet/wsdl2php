<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetAllBiddersRequestType
 * Provides three modes for retrieving a list of the users that bid on a listing. One of the
 * modes is of particular value in support of the Second Chance Offer feature. Includes the
 * list of bidders for the requested item as part of the general item listing data.
 */
class GetAllBiddersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersModeCodeType | Specifies which bidder information to return.
     */
    public $callmode;
    /**
     * @var boolean | Specifies whether return BiddingSummary container for each offer.
     */
    public $includebiddingsummary;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param GetAllBiddersModeCodeType $val
     * @throws Exception
     */
    public function setCallMode($val)
    {
        $this->callmode = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeBiddingSummary($val)
    {
        $this->includebiddingsummary = (int)$val;
    }
}
