<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetCategoryListingsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemArrayType | Contains a list of Item types.
     */
    public $ItemArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryType | Describes a category that contains items that match the query.
     */
    public $Category;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryArrayType | Collection of the sub-categories that are child to the category indicated in Category.
     * Data for each sub-category is conveyed in a CategoryType object.
     */
    public $SubCategories;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyingGuideDetailsType | Contains URLs and other information about relevant buying guides (if any), as well as
     * the site's buying guide hub. Unavailable in the Sandbox environment. Buying guides are
     * useful to buyers who do not have a specific product in mind. For example, a digital
     * camera buying guide could help a buyer determine what kind of digital camera is right
     * for them. Only returned for product finder searches (using SearchRequest.SearchAttributes)
     * and for searches that retrieve matching categories along with item data (using Categories.CategoriesOnly=false).
     */
    public $BuyingGuideDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RelatedSearchKeywordArrayType | Container for keywords related to the original keywords in the request. Can be returned
     * if the request specified more than zero in the MaxRelatedSearchKeywords field.
     */
    public $RelatedSearchKeywordArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemArrayType $val
     * @throws \Exception
     */
    public function setItemArray($val)
    {
        $this->ItemArray = $val;
    }

    /**
     * @param CategoryType $val
     * @throws \Exception
     */
    public function setCategory($val)
    {
        $this->Category = $val;
    }

    /**
     * @param CategoryArrayType $val
     * @throws \Exception
     */
    public function setSubCategories($val)
    {
        $this->SubCategories = $val;
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
     * @param BuyingGuideDetailsType $val
     * @throws \Exception
     */
    public function setBuyingGuideDetails($val)
    {
        $this->BuyingGuideDetails = $val;
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
