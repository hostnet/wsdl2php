<?php

namespace Controle\sub1\sub2;

/**
 * PaginationType
 * Contains data for controlling pagination in API requests. Pagination of returned data is
 * required for some calls and not needed in or not supported for some calls. See the documentation for
 * individual calls to determine whether pagination is supported, required, or desirable.
 */
class PaginationType
{
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
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
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
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
