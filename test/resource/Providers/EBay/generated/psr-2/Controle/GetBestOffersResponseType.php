<?php

namespace Controle;
/**
 * GetBestOffersResponseType
 * All best offers for the item according to the filter or best offer id (or both) used in
 * the input. For the notification client usage, this response includes a single Best Offer.
 */
class GetBestOffersResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\BestOfferArrayType | All best offers for the item according to the filter or best offer id (or both) used
     * in the input. The buyer and seller messages are returned only if the detail level is defined.
     * Includes the buyer and seller message only if detail level ReturnAll is used. Only returned
     * if best offers have been made.
     */
    public $BestOfferArray;
    /**
     * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setBestOfferArray($val) {
        
        $this->BestOfferArray = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val) {
        
        $this->Item = (int)$val;
    }

}

