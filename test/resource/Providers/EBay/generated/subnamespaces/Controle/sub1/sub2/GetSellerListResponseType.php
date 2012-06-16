<?php

namespace Controle\sub1\sub2;
/**
 * GetSellerListResponseType
 * Contains a list of the items listed by the seller specified as input. The list of items
 * is returned in an ItemArrayType object, in which are returned zero, one, or multiple ItemType
 * objects. Each ItemType object contains the detail data for one item listing.
 */
class GetSellerListResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	/**
	 * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
	 */
	public $HasMoreItems;
	/**
	 * @var \Controle\sub1\sub2\ItemArrayType | Contains a list of Item types.
	 */
	public $ItemArray;
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
	 * @var int | Indicates the total number of items returned (i.e., the number of ItemType objects in ItemArray).
	 */
	public $ReturnedItemCountActual;
	/**
	 * @var \Controle\sub1\sub2\UserType | Container for information about this listing's seller. Not applicable to Half.com. <br> <br> In
	 * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.
	 */
	public $Seller;
}

