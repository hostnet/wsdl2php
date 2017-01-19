<?php

namespace Controle;

/**
 * GetSearchResultsResponseType
 * Response contains the item listings that have the specified keyword(s) in the title, sub-title,
 * and (optionally) the description. If the request uses any of the optional filtering properties,
 * the item listings returned are those containing the keyword(s) and meeting the filter criteria.
 * <br><br> Not applicable to eBay Express or Half.com.
 */
class GetSearchResultsResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SearchResultItemArrayType | Contains the returned item listings, if any. The data for each listing is returned in
     * an ItemType object.
     */
    public $SearchResultItemArray;
    /**
     * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
     * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
     * in the request.
     */
    public $ItemsPerPage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $PageNumber;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $HasMoreItems;
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var \Controle\CategoryArrayType | Statistical information about categories that contain items that match the query, if
     * any. Returns empty if no matches are found or when the Categories filter was not passed
     * in the request. (For categories associated with specific items, see items returned in
     * each search result.) Shows the distribution of items across each category.
     */
    public $CategoryArray;
    /**
     * @var \Controle\BuyingGuideDetailsType | Contains URLs and other information about relevant buying guides (if any), as well as
     * the site's buying guide hub. Unavailable in the Sandbox environment. Buying guides are
     * useful to buyers who do not have a specific product in mind. For example, a digital
     * camera buying guide could help a buyer determine what kind of digital camera is right
     * for them. Only returned for product finder searches (using SearchRequest.SearchAttributes)
     * and for searches that retrieve matching categories along with item data (using Categories.CategoriesOnly=false).
     */
    public $BuyingGuideDetails;
    /**
     * @var \Controle\ExpansionArrayType | Returned for the US site, US eBay Motors site, and Canada site; returned for other international
     * sites beginning in mid-September 2006. Contains items listed in the Store Inventory
     * Format, if the request specifies that ExpandSearch is true.
     */
    public $StoreExpansionArray;
    /**
     * @var \Controle\ExpansionArrayType | Can be returned if the request specifies that ExpandSearch is true. Provides additional
     * search results when a small result set would have been returned with the original search.
     * For example, on the US site (site ID 0), if a search would normally result in fewer
     * than 10 items, and ExpandSearch is true, the search results are expanded to include
     * (if matching the query) the InternationalExpansionArray container for items, as well
     * as other containers. The InternationalExpansionArray container contains items available
     * from international sellers.
     */
    public $InternationalExpansionArray;
    /**
     * @var \Controle\ExpansionArrayType | Can be returned if the request specifies that ExpandSearch is true. Provides additional
     * search results when a small result set would have been returned with the original search.
     * For example, on the US site (site ID 0), if a search would normally result in fewer
     * than 10 items, and ExpandSearch is true, the search results are expanded to include
     * (if matching the query) the FilterRemovedExpansionArray container for items, as well
     * as other containers. The FilterRemovedExpansionArray container contains items that would
     * be returned if filters such as PriceRangeFilter are removed.
     */
    public $FilterRemovedExpansionArray;
    /**
     * @var \Controle\ExpansionArrayType | Can be returned if the request specifies that ExpandSearch is true. Provides additional
     * search results when a small result set would have been returned with the original search.
     * For example, on the US site (site ID 0), if a search would normally result in fewer
     * than 10 items, and ExpandSearch is true, the search results are expanded to include
     * (if matching the query) the AllCategoriesExpansionArray container for items, as well
     * as other containers. The AllCategoriesExpansionArray container contains items available
     * if category filters are removed.
     */
    public $AllCategoriesExpansionArray;
    /**
     * @var \Controle\SpellingSuggestionType | Suggestion for a different spelling of the search term or terms, along with the number
     * of matching items that would have been returned if the suggestions had been used. The
     * suggestions are given in Text tags and the suggestion for the first word is given before
     * the suggestion for subsequent words. Suggestions are based on correctly-spelled terms
     * in items, so suggestions vary over time and depend on whether a word or word combination
     * is in one or more items.
     */
    public $SpellingSuggestion;
    /**
     * @var \Controle\RelatedSearchKeywordArrayType | Container for keywords related to the original keywords in the request. Can be returned
     * if the request specified more than zero in the MaxRelatedSearchKeywords field.
     */
    public $RelatedSearchKeywordArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param SearchResultItemArrayType $val
     * @throws \Exception
     */
    public function setSearchResultItemArray($val)
    {
        $this->SearchResultItemArray = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setItemsPerPage($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ItemsPerPage = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PageNumber = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setHasMoreItems($val)
    {
        $this->HasMoreItems = $val;
    }

    /**
     * @param PaginationResultType $val
     * @throws \Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = $val;
    }

    /**
     * @param CategoryArrayType $val
     * @throws \Exception
     */
    public function setCategoryArray($val)
    {
        $this->CategoryArray = $val;
    }

    /**
     * @param BuyingGuideDetailsType $val
     * @throws \Exception
     */
    public function setBuyingGuideDetails($val)
    {
        $this->BuyingGuideDetails = $val;
    }

    /**
     * @param ExpansionArrayType $val
     * @throws \Exception
     */
    public function setStoreExpansionArray($val)
    {
        $this->StoreExpansionArray = $val;
    }

    /**
     * @param ExpansionArrayType $val
     * @throws \Exception
     */
    public function setInternationalExpansionArray($val)
    {
        $this->InternationalExpansionArray = $val;
    }

    /**
     * @param ExpansionArrayType $val
     * @throws \Exception
     */
    public function setFilterRemovedExpansionArray($val)
    {
        $this->FilterRemovedExpansionArray = $val;
    }

    /**
     * @param ExpansionArrayType $val
     * @throws \Exception
     */
    public function setAllCategoriesExpansionArray($val)
    {
        $this->AllCategoriesExpansionArray = $val;
    }

    /**
     * @param SpellingSuggestionType $val
     * @throws \Exception
     */
    public function setSpellingSuggestion($val)
    {
        $this->SpellingSuggestion = $val;
    }

    /**
     * @param RelatedSearchKeywordArrayType $val
     * @throws \Exception
     */
    public function setRelatedSearchKeywordArray($val)
    {
        $this->RelatedSearchKeywordArray = $val;
    }
}
