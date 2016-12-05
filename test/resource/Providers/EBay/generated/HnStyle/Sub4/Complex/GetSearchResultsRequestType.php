<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSearchResultsRequestType
 * Retrieves item listings based on keywords you specify. The keywords can include wildcards. <br> <br> The
 * response is in the form of an array whose size and contents you specify, using a variety
 * of input fields. You can filter the item listings returned using such criteria as the listing
 * category, location, whether the item is listed in an ebay Store, and listing type. You can
 * include or exclude specified sellers. <br> <br> The call returns those item listings where
 * the keywords appear in the title, subtitle, and (optionally) the description. Some input
 * fields (e.g., Query) are primary search criteria that let you specify data to match in listings.
 * For example, you can search for all listings that include the word "Toy" in the title. <br> <br> Some
 * fields (e.g., ItemTypeFilter) are secondary search criteria that let you further refine
 * data to match in listings. For example, you can search for all toys that are listed as auctions.
 * In general, the effect of secondary search fields is cumulative (using "AND" logic) unless
 * otherwise specified. Some fields (e.g., TotalOnly) control what is actually returned in
 * the result set. For example, you can search for all toys that are listed as Chinese auctions,
 * but just retrieve the total count (not the listings themselves). <br> <br> Some fields (e.g.,
 * IncludeCondition) affect the data to retrieve for each listing in the result set. For example,
 * for each toy returned in the result, you can also choose to see the toy's new or used condition. <br> <br> Some
 * fields (e.g., Order) control the way the listings are organized in the response. For example,
 * you can retrieve all the toy listings in chronological order, with the newest one first.
 * Use the DetailLevel ItemReturnCategories to return the primary category and, if applicable,
 * the secondary category. <br> <br> Use a DetailLevel value of ItemReturnAttributes (or ReturnAll)
 * to return summary Item Specifics (only returned for categories that support summary Item
 * Specifics in search results). <br><br>Not applicable to eBay Express or Half.com. Applicable
 * to the <a href="http://developer.ebay.com/developercenter/rest/" target="_blank">REST API</a>.
 */
class GetSearchResultsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Listing upgrade that features the item in eBay search results on the mobile.de partner
     * site. Applicable to eBay Germany. If true in listing requests and responses, the seller
     * is purchasing or has purchased cross-promotional placement on the mobile.de site. See
     * the eBay Web Services Guide for applicable categories, revise and relist rules, and
     * additional information on featuring vehicles on the Mobile.de Site. Not applicable to
     * Half.com.
     */
    public $MotorsGermanySearchable;
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchFlagsCodeType | Secondary search criterion that checks item descriptions for keywords that match the
     * query, limits the search results to only charity items, limits the result set to those
     * items with PayPal as a payment method, and/or provides other criteria to refine the
     * search. Not allowed with UserIdFilter (IncludeSellers or ExcludeSellers).
     */
    public $SearchFlags;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PriceRangeFilterType | Limits the result set to just those items where the price is within the specified range.
     * The PriceRangeFilterType includes a minimum and a maximum price.
     */
    public $PriceRangeFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProximitySearchType | Limits the result set to just those items whose location is within a specified distance
     * of a postal code. The ProximitySearchType includes a maximum distance and a postal code.
     */
    public $ProximitySearch;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTypeFilterCodeType | Filters items based on the ListingType set for the items. If you search for Store Inventory
     * items, you must use values in ItemTypeFilter instead of StoresFixedPrice, which soon
     * will be obsolete. If ItemTypeFilter is not specified (or if the AllItemTypes value of
     * ItemTypeFilter is specified), all listing types can be returned unless another relevant
     * filter is specified. You cannot use GetSearchResults to search eBay Express.
     */
    public $ItemTypeFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchTypeCodeType | Indicates whether one attribute or multiple attributes can be used as the search keyword
     *          when calling GetProductSearchResults. Applications can ignore this data because
     *          GetProductSearchPage only supports single-attribute searches.          Use
     * GetProductFinder to determine valid multi-attribute searches.
     */
    public $SearchType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIdFilterType | Limits the the result set to just those items listed by one or more specified sellers
     * or those items not listed by the one or more specified sellers.
     */
    public $UserIdFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchLocationFilterType | Limits the result set to just those items that meet location criteria: listed in a specified
     * eBay site, location where the seller has the item, location from which the user is searching,
     * and/or items listed with a specified currency. You cannot use GetSearchResults to search
     * eBay Express.
     */
    public $SearchLocationFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchStoreFilterType | Limits the result set to just those items that meet criteria related to eBay Stores
     * sellers and eBay Stores. Use this to retrieve items listed in a particular seller's
     * eBay Store or in all store sellers' eBay Stores.
     */
    public $StoreSearchFilter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchSortOrderCodeType | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchRequestType | A query consisting of a set of attributes (Item Specifics). Use this kind of query to
     * search against the Item Specifics in listings (e.g., to search for a particular shoe
     * size). If the query includes multiple attributes, the search engine will apply "AND"
     * logic to the query and narrow the results. Use GetProductFinder to determine the list
     * of valid attributes and how many are permitted for the specified characteristic set.
     * Retrieves items along with any buying guide details that are associated with the specified
     * product finder. Applicable in combination with the Query argument. Cannot be used in
     * combination with ProductID or ExternalProductID. CategoryID is ignored when SearchRequest is
     * specified.
     */
    public $SearchRequest;
    /**
     * @var string | Identifier for a representative stock product in a product family.            Used as
     * input in GetProductFamilyMembers requests to identify a product family.            Use
     * GetProductSearchResults to determine the available IDs.
     */
    public $ProductID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $ExternalProductID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RequestCategoriesType | Retrieves statistical information about categories that contain items that match the
     * query. Can also cause the result to include information about buying guides that are
     * associated with the matching categories. Does not control the set of listings to return
     * or the details to return for each listing.
     */
    public $Categories;
    /**
     * @var boolean | Retrieves the total quantity of matching items, without returning the item data. See
     * PaginationResult.TotalNumberOfEntries in the response. If TotalOnly and Categories.CategoriesOnly
     * are both specified in the request and their values are inconsistent with each other,
     * TotalOnly overrides Categories.CategoriesOnly. That is, if TotalOnly is true and Categories.CategoriesOnly
     * is false, the results include matching categories but no item data or buying guides.
     * If TotalOnly is false and Categories.CategoriesOnly is true, the results include matching categories,
     * item data, and buying guides. If TotalOnly is not specified, it has no logical effect.
     */
    public $TotalOnly;
    /**
     * @var dateTime | Specifies the earliest (oldest) date to use in a date range filter based on item end
     * time. Specify either the end time range or start time range filter in every request.
     */
    public $EndTimeFrom;
    /**
     * @var dateTime | Specifies the latest (most recent) date to use in a date range filter based on item
     * end time. Must be specified if EndTimeFrom is specified.
     */
    public $EndTimeTo;
    /**
     * @var dateTime | A filter that retrieves disputes whose DisputeModifiedTime is later than or equal to
     * this value. Specify the time value in GMT. See the eBay Web Services documentation for
     * information about specifying time values. For more precise control of the date range
     * filter, it is a good practice to also specify ModTimeTo. Otherwise, the end of the date
     * range is the present time. Filtering by date range is optional. You can use date range
     * filters in combination with other filters like DisputeFilterType to control the amount
     * of data returned.
     */
    public $ModTimeFrom;
    /**
     * @var boolean | When passed with a value of true, limits the results to Get It Fast listings.
     */
    public $IncludeGetItFastItems;
    /**
     * @var boolean | Applications currently using StoresFixedPrice must begin using values in ItemTypeFilter
     * instead of StoresFixedPrice. Otherwise, you may get unexpected results. This field is
     * ignored if Store-related values in ItemTypeFilter are used as input filters.<br> <br> <b>Earlier
     * behavior:</b> StoresFixedPrice controls whether or not to use the Store Inventory format
     * as a filtering criterion.<br> <br> For US, Canada, and Motors:<br> The StoresFixedPrice
     * input field does not currently work for these sites.<br> For all other sites:<br> If
     * true, the results only include Store Inventory listings (with no listings in other formats).<br> If
     * false, the results only include listings in other formats (with no Store Inventory listings).<br> If
     * omitted (the default), this filter is not applied at all, so all formats can be returned
     * (depending on other criteria you pass in the request). In this case, Store Inventory
     * listings appear after all other matching auction and basic fixed price listings. <br> <br> You
     * can use this filter regardless of whether you are searching in eBay Stores. If you pass
     * StoresFixedPrice in the same request with StoreSearchFilter or certain values in ItemTypeFilter,
     * "AND" logic may be applied, and you might not get the desired results. For example,
     * if you specify StoresFixedPrice=true and ItemTypeFilter=AuctionItemsOnly, the call may
     * succeed but no listings will be returned (because no listings can use both auction and
     * Store Inventory formats).
     */
    public $StoresFixedPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaymentMethodSearchCodeType |      */
    public $PaymentMethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GranularityLevelCodeType | Specifies the subset of item and user fields to return. See GetSellerList in the eBay
     * Web Services guide for a list of the fields that are returned for each granularity level. For
     * GetSellerList, use DetailLevel or GranularityLevel in a request, but not both. For GetSellerList,
     * if GranularityLevel is specified, DetailLevel is ignored.
     */
    public $GranularityLevel;
    /**
     * @var boolean | Expands search results when a small result set is returned. For example, on the US site
     * (site ID 0), if a search would normally result in fewer than 10 items, then if you specify
     * true for this tag, the search results are expanded. Specifically, the search returns
     * items (if there are matches) in one or more of the following containers: InternationalExpansionArray
     * (for items available from international sellers), FilterRemovedExpansionArray (items
     * that would be returned if filters such as PriceRangeFilter are removed), StoreExpansionArray
     * (for items listed in the Store Inventory Format), and AllCategoriesExpansionArray (for
     * items available if category filters are removed). Maximum number of items returned in
     * each expansion container is 6 to 10.
     */
    public $ExpandSearch;
    /**
     * @var boolean | Limits the results to only those listings for which Item.LotSize is 2 or greater.
     */
    public $Lot;
    /**
     * @var boolean | Restricts listings to return only items that have the Ad Format feature. If true, the
     * values of ItemTypeFilter, StoresFixedPrice, and StoreSearchFilter are ignored (if they
     * are specified). That is, "AND" logic is not applied.
     */
    public $AdFormat;
    /**
     * @var boolean | If true, only items with free shipping for the user's location are returned. The user's
     * location is determined from the site ID specified in the request. If false, no filtering
     * is done via this attribute. A listing is not considered a free shipping listing if it
     * requires insurance or requires pick up or requires a shipping surcharge.
     */
    public $FreeShipping;
    /**
     * @var int | Specifies the number of items from the specified listing the user tendering the offer
     * intends to purchase or bid on. For Chinese auctions and other listing formats that only
     * allow one item per listing, value may not exceed one. For multi-item listings, must
     * be greater than zero and not exceeding the number of items offered for sale in the listing.
     */
    public $Quantity;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QuantityOperatorCodeType | Limits the results to listings with quantities greater than, equal to, or less than
     * Quantity. Controls the set of listings to return (not the details to return for each
     * listing).
     */
    public $QuantityOperator;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerBusinessCodeType | Type of seller account. This value is returned if the German site (site ID 77) or eBay
     * Motors site (site ID 100) is specified.
     */
    public $SellerBusinessType;
    /**
     * @var boolean | Indicates whether the order contains at least one transaction for a digital listing. Not
     * applicable to Half.com.
     */
    public $DigitalDelivery;
    /**
     * @var boolean | If true, each item in the result set can also include the item condition attribute (e.g.,
     * New or Used) in the ItemSpecific property of the response. An item only includes a condition attribute
     * in the response if the seller filled in the Item Condition in the Item Specifics section
     * of the listing. (That is, the condition attribute is not returned if the seller only
     * put the word "New" in the listing's title but did not specify the condition in the listing's
     * Item Specifics.) Controls the details to return for each listing (not the set of listings
     * that match the query). Note: This field does not control whether to retrieve only new
     * or used items. In some categories, you can use a product finder search (SearchRequest)
     * to only retrieve new or used items.
     */
    public $IncludeCondition;
    /**
     * @var boolean | If true, each item in the result set also includes information about the seller's feedback.
     * Controls the details to return for each listing (not the set of listings that match
     * the query).
     */
    public $IncludeFeedback;
    /**
     * @var int | A unique identification number assigned by eBay to registered nonprofit charity organizations.
     * Required input when listing Giving Works items.
     */
    public $CharityID;
    /**
     * @var string | Include local items in returning results near this postal code. This postal code is
     * the basis for local search.
     */
    public $LocalSearchPostalCode;
    /**
     * @var int | The maximum number of related keywords to be retrieved. Use this field if you want the
     * search results to include recommended keywords (that is, keywords matching one or more
     * of the original keywords) in a RelatedSearchKeywordArray container. A value of 0 (the
     * default) means no related search information is processed.
     */
    public $MaxRelatedSearchKeywords;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AffiliateTrackingDetailsType | Container for affiliate tags for the REST API and for the unified schema API. If you
     * use affiliate tags, it is possible to get affiliate commissions based on calls made
     * by your application. (See the <a href="http://affiliates.ebay.com/" target="_blank">eBay
     * Affiliate Program</a> for information about commissions.) Affiliate tags enable the
     * tracking of user activity. You can use child tags of AffiliateTrackingDetails if you
     * want call output to include a string, in ItemArray.Item.ListingDetails.ViewItemURL,
     * that includes affiliate tracking information. For GetSearchResultsExpress, the ViewItemURL
     * field is returned only if you specify AffiliateTrackingDetails in the request.
     */
    public $AffiliateTrackingDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMotorsGermanySearchable($val)
    {
        $this->MotorsGermanySearchable = (boolean)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->Query = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = (string)$val;
    }

    /**
     * @param SearchFlagsCodeType $val
     * @throws Exception
     */
    public function setSearchFlags($val)
    {
        $this->SearchFlags = (SearchFlagsCodeType)$val;
    }

    /**
     * @param PriceRangeFilterType $val
     * @throws Exception
     */
    public function setPriceRangeFilter($val)
    {
        $this->PriceRangeFilter = (PriceRangeFilterType)$val;
    }

    /**
     * @param ProximitySearchType $val
     * @throws Exception
     */
    public function setProximitySearch($val)
    {
        $this->ProximitySearch = (ProximitySearchType)$val;
    }

    /**
     * @param ItemTypeFilterCodeType $val
     * @throws Exception
     */
    public function setItemTypeFilter($val)
    {
        $this->ItemTypeFilter = (ItemTypeFilterCodeType)$val;
    }

    /**
     * @param SearchTypeCodeType $val
     * @throws Exception
     */
    public function setSearchType($val)
    {
        $this->SearchType = (SearchTypeCodeType)$val;
    }

    /**
     * @param UserIdFilterType $val
     * @throws Exception
     */
    public function setUserIdFilter($val)
    {
        $this->UserIdFilter = (UserIdFilterType)$val;
    }

    /**
     * @param SearchLocationFilterType $val
     * @throws Exception
     */
    public function setSearchLocationFilter($val)
    {
        $this->SearchLocationFilter = (SearchLocationFilterType)$val;
    }

    /**
     * @param SearchStoreFilterType $val
     * @throws Exception
     */
    public function setStoreSearchFilter($val)
    {
        $this->StoreSearchFilter = (SearchStoreFilterType)$val;
    }

    /**
     * @param SearchSortOrderCodeType $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->Order = (SearchSortOrderCodeType)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (PaginationType)$val;
    }

    /**
     * @param SearchRequestType $val
     * @throws Exception
     */
    public function setSearchRequest($val)
    {
        $this->SearchRequest = (SearchRequestType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductID');
        }
        $this->ProductID = (string)$val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws Exception
     */
    public function setExternalProductID($val)
    {
        $this->ExternalProductID = (ExternalProductIDType)$val;
    }

    /**
     * @param RequestCategoriesType $val
     * @throws Exception
     */
    public function setCategories($val)
    {
        $this->Categories = (RequestCategoriesType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setTotalOnly($val)
    {
        $this->TotalOnly = (boolean)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeFrom($val)
    {
        $this->EndTimeFrom = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeTo($val)
    {
        $this->EndTimeTo = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeFrom($val)
    {
        $this->ModTimeFrom = (dateTime)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeGetItFastItems($val)
    {
        $this->IncludeGetItFastItems = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setStoresFixedPrice($val)
    {
        $this->StoresFixedPrice = (boolean)$val;
    }

    /**
     * @param PaymentMethodSearchCodeType $val
     * @throws Exception
     */
    public function setPaymentMethod($val)
    {
        $this->PaymentMethod = (PaymentMethodSearchCodeType)$val;
    }

    /**
     * @param GranularityLevelCodeType $val
     * @throws Exception
     */
    public function setGranularityLevel($val)
    {
        $this->GranularityLevel = (GranularityLevelCodeType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setExpandSearch($val)
    {
        $this->ExpandSearch = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLot($val)
    {
        $this->Lot = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAdFormat($val)
    {
        $this->AdFormat = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setFreeShipping($val)
    {
        $this->FreeShipping = (boolean)$val;
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
        $this->Quantity = (int)$val;
    }

    /**
     * @param QuantityOperatorCodeType $val
     * @throws Exception
     */
    public function setQuantityOperator($val)
    {
        $this->QuantityOperator = (QuantityOperatorCodeType)$val;
    }

    /**
     * @param SellerBusinessCodeType $val
     * @throws Exception
     */
    public function setSellerBusinessType($val)
    {
        $this->SellerBusinessType = (SellerBusinessCodeType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDigitalDelivery($val)
    {
        $this->DigitalDelivery = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeCondition($val)
    {
        $this->IncludeCondition = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeFeedback($val)
    {
        $this->IncludeFeedback = (boolean)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCharityID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CharityID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLocalSearchPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LocalSearchPostalCode');
        }
        $this->LocalSearchPostalCode = (string)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxRelatedSearchKeywords($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->MaxRelatedSearchKeywords = (int)$val;
    }

    /**
     * @param AffiliateTrackingDetailsType $val
     * @throws Exception
     */
    public function setAffiliateTrackingDetails($val)
    {
        $this->AffiliateTrackingDetails = (AffiliateTrackingDetailsType)$val;
    }
}
