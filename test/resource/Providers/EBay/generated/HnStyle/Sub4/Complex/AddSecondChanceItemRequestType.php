<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddSecondChanceItemRequestType
 * Creates a new Second Chance Offer (that is, an offer for an unsold item) for one of that
 * item's non-winning bidders.
 */
class AddSecondChanceItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | Specifies the bidder from the original, ended listing to whom the seller is extending
     * the second chance offer. Specify only one RecipientBidderUserID per call. If multiple
     * users are specified (each in a RecipientBidderUserID node), only the last one specified
     * receives the offer.
     */
    public $recipientbidderuserid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | For Chinese auction listings, Buy It Now allows a user to purchase the item at a fixed
     * price and end the auction immediately. eBay China also supports Buy It Now for Dutch
     * auction listings (see International Differences Overview in the eBay Web Services guide).
     * Use this field to add Buy It Now and specify the amount a buyer would need to bid to
     * take advantage of the Buy It Now feature. <br><br> On the main eBay site, not applicable
     * to fixed-price items (ListingTypeCodeType type StoresFixedPrice or FixedPriceItem),
     * AdFormat listings, or Half.com listings. For fixed-price and Half.com listings, see StartPrice
     * instead. See the eBay Web Services Guide for validation rules when revising US eBay
     * Motors listings, including rules for lowering the Buy It Now price of a Motors listing. <br><br> On
     * most sites, once a Chinese auction has bids, the listing is no longer eligible for Buy
     * It Now. However, calls like GetItem and GetSearchResults still return the BuyItNowPrice
     * that the seller set for the listing. You can use Item.SellingStatus.BidCount to determine
     * whether an auction with Buy It Now has bids or not. With GetSearchResults, you can examine
     * the Item.SearchDetails.BuyItNowEnabled flag to determine whether an auction is still
     * a Buy It Now listing. With GetItem, you can examine the Item.ListingDetails.BuyItNowAvailable
     * flag to determine whether a Dutch auction is still a Buy It Now listing. <br><br> For
     * a listing to be eligible for Express, the max Buy It Now Price is USD 10,000.00 for
     * the US. (Additional price limits may be imposed by the seller's PayPal account or the
     * payment method used. Such limits cannot be determined via the eBay API and are not covered
     * in eBay's API documentation, as they may vary for each user.) <br><br> To remove this
     * value when revising or relisting an item, use DeletedField.
     */
    public $buyitnowprice;
    /**
     * @var boolean | Regardless of the request version you specify, the seller always receives a copy of
     * the notification email that goes to the recipient user.
     */
    public $copyemailtoseller;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SecondChanceOfferDurationCodeType | Specifies the length of time an auction can be open, in days. The allowed durations vary
     * according to the type of listing. The value GTC means Good Til Canceled.
     */
    public $duration;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $site;
    /**
     * @var string | Text response to buyer from seller.
     */
    public $sellermessage;
    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setRecipientBidderUserID($val)
    {
        $this->recipientbidderuserid = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setBuyItNowPrice($val)
    {
        $this->buyitnowprice = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCopyEmailToSeller($val)
    {
        $this->copyemailtoseller = (int)$val;
    }

    /**
     * @param SecondChanceOfferDurationCodeType $val
     * @throws Exception
     */
    public function setDuration($val)
    {
        $this->duration = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSite($val)
    {
        $this->site = (int)$val;
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
}