<?php

namespace Controle;

/**
 * GetUserDisputesResponseType
 * Returns a list of disputes that involve the calling user as buyer or seller, in response
 * to a GetUserDisputesRequest.
 */
class GetUserDisputesResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\DisputeIDType | The index of the first dispute in the current result set, relative to the total number
	 * of disputes available. Primarily useful for interpreting paginated results. For example,
	 * if 228 disputes are available and 200 results are returned per page: The first page returns a
	 * StartingDisputeID value of 1 and the second page returns a StartingDisputeID value of 201.
	 */
	public $startingdisputeid;
	/**
	 * @var \Controle\DisputeIDType | The index of the last dispute in the current result set, relative to the total number of
	 * disputes available. Primarily useful for interpreting paginated results. For example, if
	 * 228 disputes are available and 200 results are returned per page: The first page returns an
	 * EndingDisputeID value of 200 and the second page returns an EndingDisputeID value of 228.
	 */
	public $endingdisputeid;
	/**
	 * @var \Controle\DisputeArrayType | The array of disputes returned.
	 */
	public $disputearray;
	/**
	 * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
	 * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
	 * in the request.
	 */
	public $itemsperpage;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $pagenumber;
	/**
	 * @var \Controle\DisputeFilterCountType | The number of disputes that involve the requester as buyer or seller and match a given
	 * filter type.
	 */
	public $disputefiltercount;
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $paginationresult;
	/**
	 * @param DisputeIDType $val
	 * @throws Exception
	 */
	public function setStartingDisputeID($val)
	{
        $this->startingdisputeid = (int)$val;
	}

	/**
	 * @param DisputeIDType $val
	 * @throws Exception
	 */
	public function setEndingDisputeID($val)
	{
        $this->endingdisputeid = (int)$val;
	}

	/**
	 * @param DisputeArrayType $val
	 * @throws Exception
	 */
	public function setDisputeArray($val)
	{
        $this->disputearray = (int)$val;
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
	 * @param DisputeFilterCountType $val
	 * @throws Exception
	 */
	public function setDisputeFilterCount($val)
	{
        $this->disputefiltercount = (int)$val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->paginationresult = (int)$val;
	}
}
