<?php

namespace Controle;

/**
 * ListingDetailsType
 * Various details about a listing. Some of the details are calculated or derived after an
 * item is listed. The details in this type include the start and end time and the converted
 * (localized) prices. The details in this type also include input values applicable to the
 * Best Offer feature. Additional details in this type include flags indicating if a seller specified
 * fields whose values are not visible to the requesting user.
 */
class ListingDetailsType
{
    /**
     * @var boolean | If true, the item is listed in a Mature category. Users must accept the Mature Category
     * agreement on the eBay site to retrieve items listed in Mature categories. (Users do
     * not need to sign this agreement to be able to list items in Mature Categories.)
     */
    public $adult;
    /**
     * @var boolean | Applicable for Real Estate auctions only. If true, buyers and sellers are expected to
     * follow through on the sale. If false, bids for the Real Estate auction are only expressions
     * of interest.
     */
    public $bindingauction;
    /**
     * @var boolean | Indicates whether the user as a seller has the option set to default new item listings
     * to go through checkout. (Sellers enable this property in their My eBay user preferences
     * on the eBay site.)
     */
    public $checkoutenabled;
    /**
     * @var \Controle\AmountType | Converted value of the BuyItNowPrice in the currency of the site that returned this
     * response. For active items, refresh this value every 24 hours to pick up the current
     * conversion rates.
     */
    public $convertedbuyitnowprice;
    /**
     * @var \Controle\AmountType | Converted value of the StartPrice in the currency of the site that returned this response. For
     * active items, refresh this value every 24 hours to pick up the current conversion rates.
     */
    public $convertedstartprice;
    /**
     * @var \Controle\AmountType | Converted value of the ReservePrice in the currency of the site that returned this response.
     * Only returned for listings with a reserve price when the requesting user is the listing's
     * seller. For active items, refresh this value every 24 hours to pick up the current conversion
     * rates. Not applicable to Fixed Price and Store Inventory listings.
     */
    public $convertedreserveprice;
    /**
     * @var boolean | If true, the seller specified a value in ReservePrice.
     */
    public $hasreserveprice;
    /**
     * @var string | Obsolete: the use of regions for locating items is being phased out and has been replaced
     * on most sites by distance-based searching and searches by location. Some sites, such
     * as the China site, still use region. Although all sites will still allow you to specify
     * Item.RegionID in AddItem when listing an item, only those sites that support the use
     * of regions will return RegionName in the response for GetItem, and the region information will
     * not appear on or be used by the web site. For sites that no longer support the use of
     * regions, use Item.PostalCode and Item.Location instead.
     */
    public $regionname;
    /**
     * @var \Controle\ItemIDType | Indicates the new item ID for a re-listed item. When an item is re-listed, the item
     * ID for the new (re-list) item is added to the old (expired) listing to provide buyers
     * a means to navigate to the new listing. This value only appears when the old listing
     * is retrieved. Output only.
     */
    public $relisteditemid;
    /**
     * @var \Controle\ItemIDType | The item ID for the original listing from which a second chance offer is made. This
     * value is only returned when the data for the second chance offer listing is retrieved. Output
     * only.
     */
    public $secondchanceoriginalitemid;
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $starttime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $endtime;
    /**
     * @var \Controle\anyURI | The URL of the Web page where a user can view the listing. On the US site, this is called
     * the "View Item" page. If you enabled affiliate tracking in a search-related call (for
     * example, if you used the AffiliateTrackingDetails container in an applicable call),
     * ViewItemURL contains a string that includes affiliate tracking information (see the
     * <a href="http://affiliates.ebay.com/" target="_blank">eBay Affiliate Program</a>). For
     * GetSearchResultsExpress, the ViewItemURL field is returned only if you specified AffiliateTrackingDetails
     * in the request.
     */
    public $viewitemurl;
    /**
     * @var boolean | Indicates whether the item has any unanswered questions. Use GetMemberMessages to retrieve
     * unanswered questions for the item if this flag indicates that there are any.
     */
    public $hasunansweredquestions;
    /**
     * @var boolean | Indicates whether the item has any publicly displayed messages. Use GetMemberMessages
     * to retrieve public messages for the item if this flag indicates that there are any.
     */
    public $haspublicmessages;
    /**
     * @var boolean | Indicates whether, for a Dutch Auction, there is a Buy It Now option. Germany site (site
     * ID 77) and China site (site ID 223) only.
     */
    public $buyitnowavailable;
    /**
     * @var \Controle\SellerBusinessCodeType | Type of seller account. This value is returned if the German site (site ID 77) or eBay
     * Motors site (site ID 100) is specified.
     */
    public $sellerbusinesstype;
    /**
     * @var \Controle\AmountType | Specifies the minimum acceptable best offer price. If a buyer submits a best offer that
     * is below this value, the offer is automatically declined by the seller. Applies only
     * to items listed in categories that support the Best Offer Auto-Decline feature. Best
     * Offer must be enabled for the item, and only the seller who listed the item can see
     * this value. To remove this value when revising or relisting an item, use DeletedField.
     */
    public $minimumbestofferprice;
    /**
     * @var string | Specifies the message sent from the seller to the buyer when a submitted best offer
     * is automatically declined by the seller. A best offer is automatically declined if it
     * does not meet the minimum acceptable best offer price specified by the seller with MinimumBestOfferPrice.
     * Applies only to items listed in categories that support the Best Offer Auto-Decline feature.
     * Best Offer must be enabled for the item. To remove this value when revising or relisting
     * an item, use DeletedField.
     */
    public $minimumbestoffermessage;
    /**
     * @var string | Specifies a distance (in miles) used as the radius of the area about the supplied postal
     * code that constitutes the local market. Use GetCategoryFeatures to determine the local
     * listing distances supported by a given site, category, and Local Market subscription
     * level.
     */
    public $locallistingdistance;
    /**
     * @var boolean | If true, the item is qualified for the eBay Express site associated with the item's
     * listing site (US or Germany).<br> <br> For fixed-price, Store Inventory, and Express
     * format listings, this means the item appears on Express. <br> <br> For Chinese auction listings
     * with Buy It Now, this means the item appears on Express as long as it has no bids and
     * doesn't end within 12 hours. See Item.SellingStatus.BidCount to determine whether an
     * auction with Buy It Now has bids or not, and see EndTime or Item.TimeLeft to to determine
     * how soon the listing ends.
     */
    public $expresslisting;
    /**
     * @var \Controle\ExpressItemRequirementsType | Contains details about why an item does or doesn't qualify as an Express listing. Only
     * returned when IncludeExpressRequirements is true the request. Whether a child field
     * is returned can depend on whether the field currently applies to the site on which the
     * item would be listed. Whether a child field is returned also can depend on whether its value
     * would be true or false, or the order of eligibility precedence. The item requirements
     * are assessed in this order:<br> - SellerExpressEligible<br> - ExpressOptOut<br> - ExpressApproved<br> -
     * All other settings
     */
    public $expressitemrequirements;
    /**
     * @var \Controle\ItemIDType | Indicates the item ID of the original item listing from which a Transaction Confirmation
     * Request (TCR) was created. This value is only returned when the data for a TCR is retrieved.
     */
    public $tcroriginalitemid;
    /**
     * @var \Controle\anyURI | This URL takes you to the same View Item page as ViewItemURL, but this URL is optimized
     * to support natural search. That is, this URL is designed to make items on eBay easier
     * to find via popular Internet search engines. For example, this URL specifies the item
     * title, and it is optimized for natural search: "_W0QQ" is like "?" (question mark), "QQ"
     * is like "&" (ampersand), and "Z" is like "=" (equals sign). <br> <br> <span class="tablenote"><b>Note</b>: This
     * URL may include additional query parameters that don't appear in ViewItemURL and vice
     * versa. You should not modify the query syntax.  For example, eBay won't recognize the
     * URL if you change QQ to ?.</span>
     */
    public $viewitemurlfornaturalsearch;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAdult($val)
    {
        $this->adult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBindingAuction($val)
    {
        $this->bindingauction = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCheckoutEnabled($val)
    {
        $this->checkoutenabled = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setConvertedBuyItNowPrice($val)
    {
        $this->convertedbuyitnowprice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setConvertedStartPrice($val)
    {
        $this->convertedstartprice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setConvertedReservePrice($val)
    {
        $this->convertedreserveprice = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasReservePrice($val)
    {
        $this->hasreserveprice = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRegionName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegionName');
        }
        $this->regionname = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setRelistedItemID($val)
    {
        $this->relisteditemid = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setSecondChanceOriginalItemID($val)
    {
        $this->secondchanceoriginalitemid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->starttime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->endtime = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setViewItemURL($val)
    {
        $this->viewitemurl = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasUnansweredQuestions($val)
    {
        $this->hasunansweredquestions = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasPublicMessages($val)
    {
        $this->haspublicmessages = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBuyItNowAvailable($val)
    {
        $this->buyitnowavailable = (int)$val;
    }

    /**
     * @param SellerBusinessCodeType $val
     * @throws Exception
     */
    public function setSellerBusinessType($val)
    {
        $this->sellerbusinesstype = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMinimumBestOfferPrice($val)
    {
        $this->minimumbestofferprice = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMinimumBestOfferMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MinimumBestOfferMessage');
        }
        $this->minimumbestoffermessage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLocalListingDistance($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LocalListingDistance');
        }
        $this->locallistingdistance = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setExpressListing($val)
    {
        $this->expresslisting = (int)$val;
    }

    /**
     * @param ExpressItemRequirementsType $val
     * @throws Exception
     */
    public function setExpressItemRequirements($val)
    {
        $this->expressitemrequirements = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setTCROriginalItemID($val)
    {
        $this->tcroriginalitemid = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setViewItemURLForNaturalSearch($val)
    {
        $this->viewitemurlfornaturalsearch = (int)$val;
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
