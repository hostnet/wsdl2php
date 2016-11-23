<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PlaceOfferRequestType
 * Enables the requesting user to submit a bid (make an offer) on the item listing specified
 * in ItemID. For competitive-bidding listings (Chinese and Dutch auctions), makes a bid. For
 * fixed-price listings (Basic Fixed-Price and eBay Stores Inventory listings), purchases the
 * item. <br><br> This is available for use by authorized third parties and for evaluation
 * by all. For information on becoming authorized for PlaceOffer (including testing PlaceOffer
 * in the Sandbox), contact Developer Relations, developer-relations@ebay.com.
 */
class PlaceOfferRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OfferType | Contains the data for one offer. This includes: data for the user making the
     *     offer, the amount of the offer, the quantity of items being bought from the
     *        listing, the type of offer being made, and more.
     */
    public $Offer;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var boolean | If a warning message exists and BlockOnWarning is true, the warning message is returned
     * and the bid is blocked. If no warning message exists and BlockOnWarning is true, the
     * bid is placed. If BlockOnWarning is false, the bid is placed, regardless of warning.
     */
    public $BlockOnWarning;
    // @codingStandardsIgnoreEnd

    /**
     * @param OfferType $val
     * @throws Exception
     */
    public function setOffer($val)
    {
        $this->Offer = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBlockOnWarning($val)
    {
        $this->BlockOnWarning = (int)$val;
    }
}
