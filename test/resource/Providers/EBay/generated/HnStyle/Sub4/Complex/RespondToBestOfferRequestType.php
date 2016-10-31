<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RespondToBestOfferRequestType
 * Enables the seller of a Best Offer item to accept, decline, or counter offers made by bidders.
 * Best offers can be declined in bulk, using the same message from the seller to the bidders
 * of all rejected offers.
 */
class RespondToBestOfferRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferIDType | An id to distinguish this best offer from other best offers made on the item.
     */
    public $bestofferid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $action;
    /**
     * @var string | A comment from the seller to the buyer.
     */
    public $sellerresponse;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The counter offer price. When Action is set to Counter, you must specify the amount
     * for the counteroffer with CounterOfferPrice. The value of CounterOfferPrice cannot exceed
     * the Buy It Now price for a single quantity item. The value of CounterOfferPrice may
     * exceed the Buy It Now price if the value for CounterOfferQuantity is greater than 1.
     */
    public $counterofferprice;
    /**
     * @var int | The counter offer quantity. When Action is set to Counter you must specify the quantity
     * of items for the counteroffer with CounterOfferQuantity.
     */
    public $counterofferquantity;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param BestOfferIDType $val
     * @throws Exception
     */
    public function setBestOfferID($val)
    {
        $this->bestofferid = (int)$val;
    }

    /**
     * @param BestOfferActionCodeType $val
     * @throws Exception
     */
    public function setAction($val)
    {
        $this->action = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerResponse($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerResponse');
        }
        $this->sellerresponse = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setCounterOfferPrice($val)
    {
        $this->counterofferprice = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCounterOfferQuantity($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->counterofferquantity = (int)$val;
    }
}
