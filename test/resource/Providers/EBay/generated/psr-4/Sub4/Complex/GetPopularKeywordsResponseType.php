<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPopularKeywordsResponseType
 * Contains the keyword data for the requested categories. A category's data are contained
 * in a CategoryArrayType object if there is no error (one or more CategoryType objects). Each
 * CategoryType contains its ID, parent ID and keyword list.
 */
class GetPopularKeywordsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryArrayType | Statistical information about categories that contain items that match the query, if
     * any. Returns empty if no matches are found or when the Categories filter was not passed
     * in the request. (For categories associated with specific items, see items returned in
     * each search result.) Shows the distribution of items across each category.
     */
    public $categoryarray;
    /**
     * @var boolean | If true, the query results contain additional pages (higher than the current page number). You
     * can retrieve more results by incrementing the PageNumber value that was passed in the
     * request.               For GetProductSearchResults, only returned with compatibility
     * level 387 and higher.               For GetProductFamilyMembers, only returned with
     * compatibility level 415 and higher.               With lower compatibility levels, ProductSearchResult.HasMore
     * is returned instead.
     */
    public $hasmore;
    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }

    /**
     * @param CategoryArrayType $val
     * @throws Exception
     */
    public function setCategoryArray($val)
    {
        $this->categoryarray = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMore($val)
    {
        $this->hasmore = (int)$val;
    }
}