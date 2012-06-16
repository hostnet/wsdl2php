<?php

namespace Controle;
/**
 * GetWantItNowSearchResultsResponseType
 * Response contains the Want It Now posts that have the specified keyword(s) in the title
 * and (optionally) the description.
 */
class GetWantItNowSearchResultsResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\WantItNowPostArrayType | Contains the returned Want It Now posts, if any. The data for each post is returned in
	 * a WantItNowPostType object.
	 */
	public $WantItNowPostArray;
	/**
	 * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
	 */
	public $HasMoreItems;
	/**
	 * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
	 * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
	 * in the request.
	 */
	public $ItemsPerPage;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $PageNumber;
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
}

