<?php

namespace Controle;

class GetCategoryListingsResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\ItemArrayType | Contains a list of Item types.
     */
    public $itemarray;
    /**
     * @var \Controle\CategoryType | Describes a category that contains items that match the query.
     */
    public $category;
    /**
     * @var \Controle\CategoryArrayType | Collection of the sub-categories that are child to the category indicated in Category.
     * Data for each sub-category is conveyed in a CategoryType object.
     */
    public $subcategories;
    /**
     * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
     * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
     * in the request.
     */
    public $itemsperpage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $pagenumber;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $hasmoreitems;
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var \Controle\BuyingGuideDetailsType | Contains URLs and other information about relevant buying guides (if any), as well as
     * the site's buying guide hub. Unavailable in the Sandbox environment. Buying guides are
     * useful to buyers who do not have a specific product in mind. For example, a digital
     * camera buying guide could help a buyer determine what kind of digital camera is right
     * for them. Only returned for product finder searches (using SearchRequest.SearchAttributes)
     * and for searches that retrieve matching categories along with item data (using Categories.CategoriesOnly=false).
     */
    public $buyingguidedetails;
    /**
     * @var \Controle\RelatedSearchKeywordArrayType | Container for keywords related to the original keywords in the request. Can be returned
     * if the request specified more than zero in the MaxRelatedSearchKeywords field.
     */
    public $relatedsearchkeywordarray;
    /**
     * @param ItemArrayType $val
     * @throws Exception
     */
    public function setItemArray($val)
    {
        $this->itemarray = (int)$val;
    }

    /**
     * @param CategoryType $val
     * @throws Exception
     */
    public function setCategory($val)
    {
        $this->category = (int)$val;
    }

    /**
     * @param CategoryArrayType $val
     * @throws Exception
     */
    public function setSubCategories($val)
    {
        $this->subcategories = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemsPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->itemsperpage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->pagenumber = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreItems($val)
    {
        $this->hasmoreitems = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }

    /**
     * @param BuyingGuideDetailsType $val
     * @throws Exception
     */
    public function setBuyingGuideDetails($val)
    {
        $this->buyingguidedetails = (int)$val;
    }

    /**
     * @param RelatedSearchKeywordArrayType $val
     * @throws Exception
     */
    public function setRelatedSearchKeywordArray($val)
    {
        $this->relatedsearchkeywordarray = (int)$val;
    }
}
