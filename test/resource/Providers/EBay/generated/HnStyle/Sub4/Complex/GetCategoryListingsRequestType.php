<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCategoryListingsRequestType
 * Returns items in a specified category. A number of inputs are provided for filtering the
 * item listings returned using such criteria as location, whether the item is listed in an
 * ebay Store, the listing type, and including or excluding specified sellers. <p>Applicable
 * to the <a href="http://developer.ebay.com/developercenter/rest/" target="_blank">REST API</a>.</p>
 */
class GetCategoryListingsRequestType extends
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
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $Currency;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTypeFilterCodeType | Filters items based on the ListingType set for the items. If you search for Store Inventory
     * items, you must use values in ItemTypeFilter instead of StoresFixedPrice, which soon
     * will be obsolete. If ItemTypeFilter is not specified (or if the AllItemTypes value of
     * ItemTypeFilter is specified), all listing types can be returned unless another relevant
     * filter is specified. You cannot use GetSearchResults to search eBay Express.
     */
    public $ItemTypeFilter;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryListingsSearchCodeType | Indicates whether one attribute or multiple attributes can be used as the search keyword
     *          when calling GetProductSearchResults. Applications can ignore this data because
     *          GetProductSearchPage only supports single-attribute searches.          Use
     * GetProductFinder to determine valid multi-attribute searches.
     */
    public $SearchType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryListingsOrderCodeType | Specifies the order in which the item listings returned will be sorted. Store Inventory
     * listings are usually returned after other listing types, regardless of the sort order.
     */
    public $OrderBy;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchLocationType | Specifies filtering based on site ID.
     */
    public $SearchLocation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProximitySearchType | Limits the result set to just those items whose location is within a specified distance
     * of a postal code. The ProximitySearchType includes a maximum distance and a postal code.
     */
    public $ProximitySearch;
    /**
     * @var boolean | When passed with a value of true, limits the results to Get It Fast listings.
     */
    public $IncludeGetItFastItems;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaymentMethodSearchCodeType |      */
    public $PaymentMethod;
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
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMotorsGermanySearchable($val)
    {
        $this->MotorsGermanySearchable = ()$val;
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
        $this->CategoryID = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAdFormat($val)
    {
        $this->AdFormat = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setFreeShipping($val)
    {
        $this->FreeShipping = ()$val;
    }

    /**
     * @param CurrencyCodeType $val
     * @throws Exception
     */
    public function setCurrency($val)
    {
        $this->Currency = ()$val;
    }

    /**
     * @param ItemTypeFilterCodeType $val
     * @throws Exception
     */
    public function setItemTypeFilter($val)
    {
        $this->ItemTypeFilter = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setStoresFixedPrice($val)
    {
        $this->StoresFixedPrice = ()$val;
    }

    /**
     * @param CategoryListingsSearchCodeType $val
     * @throws Exception
     */
    public function setSearchType($val)
    {
        $this->SearchType = ()$val;
    }

    /**
     * @param CategoryListingsOrderCodeType $val
     * @throws Exception
     */
    public function setOrderBy($val)
    {
        $this->OrderBy = ()$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = ()$val;
    }

    /**
     * @param SearchLocationType $val
     * @throws Exception
     */
    public function setSearchLocation($val)
    {
        $this->SearchLocation = ()$val;
    }

    /**
     * @param ProximitySearchType $val
     * @throws Exception
     */
    public function setProximitySearch($val)
    {
        $this->ProximitySearch = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeGetItFastItems($val)
    {
        $this->IncludeGetItFastItems = ()$val;
    }

    /**
     * @param PaymentMethodSearchCodeType $val
     * @throws Exception
     */
    public function setPaymentMethod($val)
    {
        $this->PaymentMethod = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeCondition($val)
    {
        $this->IncludeCondition = ()$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeFeedback($val)
    {
        $this->IncludeFeedback = ()$val;
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
        $this->LocalSearchPostalCode = ()$val;
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
        $this->MaxRelatedSearchKeywords = ()$val;
    }
}
