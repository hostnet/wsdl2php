<?php

namespace Controle\sub1\sub2;

/**
 * GetPopularKeywordsResponseType
 * Contains the keyword data for the requested categories. A category's data are contained
 * in a CategoryArrayType object if there is no error (one or more CategoryType objects). Each
 * CategoryType contains its ID, parent ID and keyword list.
 */
class GetPopularKeywordsResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	/**
	 * @var \Controle\sub1\sub2\CategoryArrayType | Statistical information about categories that contain items that match the query, if any.
	 * Returns empty if no matches are found or when the Categories filter was not passed in the
	 * request. (For categories associated with specific items, see items returned in each search result.)
	 * Shows the distribution of items across each category.
	 */
	public $CategoryArray;
	/**
	 * @var boolean | If true, the query results contain additional pages (higher than the current page number). You
	 * can retrieve more results by incrementing the PageNumber value that was passed in the request.
	 *               For GetProductSearchResults, only returned with compatibility level 387 and
	 * higher.               For GetProductFamilyMembers, only returned with compatibility level
	 * 415 and higher.               With lower compatibility levels, ProductSearchResult.HasMore
	 * is returned instead.
	 */
	public $HasMore;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = (int)$val;
	}

	/**
	 * @param CategoryArrayType $val
	 * @throws Exception
	 */
	public function setCategoryArray($val)
	{
        $this->CategoryArray = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHasMore($val)
	{
        $this->HasMore = (int)$val;
	}
}
