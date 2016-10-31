<?php

namespace Controle;

/**
 * BestOfferType
 * Details about a best offer.
 */
class BestOfferType
{
    /**
     * @var \Controle\BestOfferIDType | An id to distinguish this best offer from other best offers made on the item.
     */
    public $bestofferid;
    /**
     * @var dateTime | Date and time when this notification will be removed from the eBay system.
     */
    public $expirationtime;
    /**
     * @var \Controle\UserType | Contains the data for the transaction's buyer. See UserType for its child elements. Not
     * applicable to Half.com except for GetOrders.
     */
    public $buyer;
    /**
     * @var \Controle\AmountType | The amount of the best offer.
     */
    public $price;
    /**
     * @var \Controle\BestOfferStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $status;
    /**
     * @var int | Specifies the number of items from the specified listing the user tendering the offer
     * intends to purchase or bid on. For Chinese auctions and other listing formats that only
     * allow one item per listing, value may not exceed one. For multi-item listings, must
     * be greater than zero and not exceeding the number of items offered for sale in the listing.
     */
    public $quantity;
    /**
     * @var string | Display message from buyer. This field holds transient data that is only being returned
     * in the notification flow. This field is only returned in the Checkout related notifications. Not
     * applicable to Half.com.
     */
    public $buyermessage;
    /**
     * @var string | Text response to buyer from seller.
     */
    public $sellermessage;
    /**
     * @var \Controle\BestOfferTypeCodeType | The best offer type.
     */
    public $bestoffercodetype;
    /**
     * @var string | The status of the call, either Success or Failure.
     */
    public $callstatus;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param BestOfferIDType $val
     * @throws Exception
     */
    public function setBestOfferID($val)
    {
        $this->bestofferid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExpirationTime($val)
    {
        $this->expirationtime = (int)$val;
    }

    /**
     * @param UserType $val
     * @throws Exception
     */
    public function setBuyer($val)
    {
        $this->buyer = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPrice($val)
    {
        $this->price = (int)$val;
    }

    /**
     * @param BestOfferStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->status = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQuantity($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->quantity = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBuyerMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BuyerMessage');
        }
        $this->buyermessage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerMessage');
        }
        $this->sellermessage = (int)$val;
    }

    /**
     * @param BestOfferTypeCodeType $val
     * @throws Exception
     */
    public function setBestOfferCodeType($val)
    {
        $this->bestoffercodetype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCallStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CallStatus');
        }
        $this->callstatus = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
