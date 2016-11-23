<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SellingStatusType
 * Contains various details about the current status of a listing. These values are computed
 * by eBay and cannot be specified at listing time.
 */
class SellingStatusType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding
     * listings (Chinese and Dutch auctions).
     */
    public $BidCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Smallest amount a bid must be above the current high bid. Only applicable to competitive-bidding
     * listings (Chinese and Dutch auctions). Returns zero (0.00) for Ad type, eBay Stores
     * Inventory (Stores Fixed-price), and Basic Fixed-Price (Fixed Price Item) listings.
     */
    public $BidIncrement;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Converted value of the CurrentPrice in the currency of the site that returned this response.
     * For active items, refresh the listing's data every 24 hours to pick up the current conversion
     * rates.
     */
    public $ConvertedCurrentPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | For competitive-bidding listings (Chinese and Dutch auctions), current minimum asking
     * price (start price) or the current highest bid for the item if bids have been placed.
     * Shows minimum bid if no bids have been placed on the item. For Basic Fixed-Price (FixedPriceItem),
     * Store Inventory (StoresFixedPrice), or Ad type (AdType) listings this returns the original
     * price specified when the item was listed/re-listed or the revised price if the item
     * was revised.<br> <br> For GetSearchResultsExpress, this is the current fixed price of
     * the listing, and it is always returned when ItemArray.Item is returned.
     */
    public $CurrentPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserType | For single-item (Quantity = 1) auction listings that have ended and have a winning bidder,
     * indicates the user who is the current high bidder. For single-item basic fixed price
     * (FixedPriceItem) or Store Inventory (StoresFixedPrice) listings that have ended, indicates
     * the user who purchased the item. Not returned for auctions that have received no bids, fixed
     * price and Store Inventory listings that are still active, or any multi-item (Quantity
     * > 1) listings.
     */
    public $HighBidder;
    /**
     * @var int | Applicable to Ad type listings only. Indicates how many leads to potential buyers are
     * associated with this item. Returns 0 (zero) for listings in other formats.
     */
    public $LeadCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Smallest amount the next bid on the item can be. Returns same value as Item.StartPrice
     * (if no bids have yet been placed) or CurrentPrice plus BidIncrement (if at least one
     * bid has been placed). Only applicable to Chinese and Dutch auction listings. Returns
     * null for basic Fixed Price (FixedPriceItem), Store Inventory (StoresFixedPrice), and
     * Ad type listings.
     */
    public $MinimumToBid;
    /**
     * @var int | Number of items purchased so far. (Subtract from the value returned in the Item.Quantity
     * field to calculate the number of items remaining.)
     */
    public $QuantitySold;
    /**
     * @var boolean | Indicates whether the reserve price has been met for the listing. Returns true if the
     * reserve price was met or no reserve price was specified.
     */
    public $ReserveMet;
    /**
     * @var boolean | Part of the Second Chance Offer feature, indicates whether the seller can extend a second
     * chance offer for the item.
     */
    public $SecondChanceEligible;
    /**
     * @var long | Number of bidders for an item. Only applicable to competitive-bidding listings (Chinese
     * and Dutch auctions). Only returned for the seller of the item.
     */
    public $BidderCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingStatusCodeType | Specifies an active or ended listing's status in eBay's processing workflow. If a listing
     * ends with a sale (or sales), eBay needs to update the sale details (e.g., total price
     * and buyer/high bidder) and the final value fee. This processing can take several minutes.
     * If you retrieve a sold item and no details about the buyer/high bidder are returned
     * or no final value fee is available, use this listing status information to determine
     * whether eBay has finished processing the listing.
     */
    public $ListingStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | You are charged a Final Value Fee if your item is sold, ends with a winning bid, or
     * is purchased. This fee applies whether or not you actually complete the sale with the
     * buyer. If you request a Final Value Fee Credit, the value of Transaction.FinalValueFee
     * will not change for the item if a credit is issued. (The credit only appears in the
     * seller's account data.) See the eBay.com Web site online help for more information about
     * the Final Value Fee. The Final Value Fee for FixedPriceItem, StoresFixedPrice, and Buy
     * It Now Dutch listing types is returned by GetSellerTransactions and GetItemTransactions
     * on a transaction by transaction basis. For all other listing types, including Chinese
     * and Dutch (no Buy It Now purchases), the Final Value Fee is returned when the listing
     * status is Completed. If the item was a Dutch auction that ended with bids (not Buy It
     * Now purchases), the Final Value Fee is returned in Item.SellingStatus.FinalValueFee.
     * For all other listing types, including Dutch auctions that end with Buy It Now purchases,
     * the Final Value Fee is returned in Transaction.FinalValueFee. Not applicable to Half.com.
     */
    public $FinalValueFee;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBidCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->BidCount = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setBidIncrement($val)
    {
        $this->BidIncrement = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setConvertedCurrentPrice($val)
    {
        $this->ConvertedCurrentPrice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setCurrentPrice($val)
    {
        $this->CurrentPrice = (int)$val;
    }

    /**
     * @param UserType $val
     * @throws Exception
     */
    public function setHighBidder($val)
    {
        $this->HighBidder = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setLeadCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->LeadCount = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMinimumToBid($val)
    {
        $this->MinimumToBid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQuantitySold($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QuantitySold = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setReserveMet($val)
    {
        $this->ReserveMet = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSecondChanceEligible($val)
    {
        $this->SecondChanceEligible = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setBidderCount($val)
    {
        $this->BidderCount = (int)$val;
    }

    /**
     * @param ListingStatusCodeType $val
     * @throws Exception
     */
    public function setListingStatus($val)
    {
        $this->ListingStatus = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFinalValueFee($val)
    {
        $this->FinalValueFee = (int)$val;
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
