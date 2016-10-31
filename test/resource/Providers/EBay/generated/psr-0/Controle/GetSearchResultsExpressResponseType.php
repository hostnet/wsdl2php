<?php

namespace Controle;

/**
 * GetSearchResultsExpressResponseType
 * The GetSearchResultsExpress response contains the listings that match the query or ID specified
 * in the request, related eBay catalog product information, and a histogram showing the the
 * quantity (count) of matching items in Express departments, aisles, and product types. The
 * results may be limited by filters that were specified in the request.
 */
class GetSearchResultsExpressResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\DomainHistogramType | Indicates the quantity of items and catalog products that fall into departments, aisles,
	 * and/or product types that match the criteria in the request. The sort order is controlled
	 * by the value of HistogramSort in the request. Only returned when matching data is found
	 * and HistogramDetails is Coarse (the default) or Fine.<br> <br> When HistogramDetails==Coarse
	 * and no DepartmentName, AisleName, or ProductTypeName is specified in the request, Express
	 * only returns histogram details for departments. In this particular case, Express returns
	 * no histogram details when no departments match the request. This could occur when Express
	 * only finds matching results in stand-alone product types or stand-alone aisles (because
	 * they aren't grouped into departments).
	 */
	public $histogram;
	/**
	 * @var \Controle\ItemArrayType | Contains a list of Item types.
	 */
	public $itemarray;
	/**
	 * @var \Controle\ProductArrayType | Contains a list of eBay catalog products have been used to pre-fill listings that match
	 * the criteria specified in the request. The sort order is controlled by the value of ProductSort
	 * in the request. Only returned when matching data is found and ProductDetails is Coarse
	 * (the default) or Fine. To determine which products are currently available in a given domain,
	 * specify the DepartmentName, AisleName, or ProductTypeName in the request.
	 */
	public $productarray;
	/**
	 * @var int | Specifies the maximum number of entries to return in a single call. If the number of entries
	 * that can be returned is less than the value in EntriesPerPage, then the lower number is
	 * returned. For most calls, the max is 200 and the default is 25. For GetUserDisputes, the
	 * value is hard-coded at 200, and any input is ignored. See the documentation for other individual
	 * calls to determine the correct max and default values. For GetOrders, not applicable to
	 * eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $entriesperpage;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $pagenumber;
	/**
	 * @var boolean | If true, there are additional item and/or product results (on higher- numbered pages) that
	 * match the query. To retrieve them, call GetSearchResultsExpress again and increment the
	 * page number or specify a higher value for EntriesPerPage in the request.
	 */
	public $hasmoreentries;
	/**
	 * @param DomainHistogramType $val
	 * @throws Exception
	 */
	public function setHistogram($val)
	{
        $this->histogram = (int)$val;
	}

	/**
	 * @param ItemArrayType $val
	 * @throws Exception
	 */
	public function setItemArray($val)
	{
        $this->itemarray = (int)$val;
	}

	/**
	 * @param ProductArrayType $val
	 * @throws Exception
	 */
	public function setProductArray($val)
	{
        $this->productarray = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setEntriesPerPage($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->entriesperpage = (int)$val;
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
	public function setHasMoreEntries($val)
	{
        $this->hasmoreentries = (int)$val;
	}
}
