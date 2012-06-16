<?php

namespace Controle\sub1\sub2;
/**
 * PaginationResultType
 * Shows the pagination of data returned by requests. Pagination of returned data is not needed
 * in and not supported for every call. See the documentation for individual calls to determine
 * whether pagination is supported, required, or desirable.
 */
class PaginationResultType {
	/**
	 * @var int | Indicates the total number of pages of data that could be returned by repeated requests.
	 * For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com). Returned
	 * with a value of 0 if no pages are available.
	 */
	public $TotalNumberOfPages;
	/**
	 * @var int | Indicates the total number of entries that could be returned by repeated requests. For GetOrders,
	 * not applicable to eBay.com (for GetOrders, applicable to Half.com). Returned with a value
	 * of 0 if no entries are available.
	 */
	public $TotalNumberOfEntries;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

