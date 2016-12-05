<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetBestOffersResponseType
 * All best offers for the item according to the filter or best offer id (or both) used in
 * the input. For the notification client usage, this response includes a single Best Offer.
 */
class GetBestOffersResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferArrayType | All best offers for the item according to the filter or best offer id (or both) used
     * in the input. The buyer and seller messages are returned only if the detail level is defined.
     * Includes the buyer and seller message only if detail level ReturnAll is used. Only returned
     * if best offers have been made.
     */
    public $BestOfferArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    // @codingStandardsIgnoreEnd

    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setBestOfferArray($val)
    {
        $this->BestOfferArray = (BestOfferArrayType)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->Item = (ItemType)$val;
    }
}
