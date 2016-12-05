<?php

namespace Controle;

/**
 * BiddingDetailsType
 * Detailed information about a bid.
 */
class BiddingDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\AmountType | Converted value of the value in MaxBid, in the currency indicated by SiteCurrency. For
     * active items, refresh the listing's data every 24 hours to pick up the current conversion
     * rates. Under conditions where this value would be N/A on the eBay site, this element
     * is not returned at all.
     */
    public $ConvertedMaxBid;
    /**
     * @var \Controle\AmountType | Amount of the offer placed. For competitive-bidding listings, the amount bid on the
     * item (subject to outbid by other buyers). For fixed-price listings, the fixed sale price
     * at which the item is purchased. For competitive-bidding listings with an active Buy
     * It Now option, this amount will be either the Buy It Now price for purchase or the amount
     * of a bid, depending on the offer type (as specified in Action). For PlaceOffer, the
     * currencyID attribute is ignored if provided.
     */
    public $MaxBid;
    /**
     * @var int | Number of items from the listing the user agreed to purchase with a bid. For single-item
     * listings, always 1. For multi-item listings, will be between 1 and the number of items
     * offered in the auction. Number of items purchased so far.
     */
    public $QuantityBid;
    /**
     * @var int | Used mainly for Dutch auction. For an active listing, number of items the user stands
     * to win if the user is a current winning bidder. For an ended listing, number of items
     * the user actually won. In both cases, the number may be less than that returned in QuantityBid
     * as the lowest winning bidder in a Dutch auction might not win the number of items the
     * user has bid on.
     */
    public $QuantityWon;
    /**
     * @var boolean | (GetMyeBay only) Indicates whether the user is the current high bidder in a currently
     * active listing.
     */
    public $Winning;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setConvertedMaxBid($val)
    {
        $this->ConvertedMaxBid = ()$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMaxBid($val)
    {
        $this->MaxBid = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQuantityBid($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QuantityBid = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQuantityWon($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QuantityWon = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWinning($val)
    {
        $this->Winning = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
