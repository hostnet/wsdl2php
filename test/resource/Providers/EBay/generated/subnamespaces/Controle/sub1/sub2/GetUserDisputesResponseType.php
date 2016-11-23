<?php

namespace Controle\sub1\sub2;

/**
 * GetUserDisputesResponseType
 * Returns a list of disputes that involve the calling user as buyer or seller, in response
 * to a GetUserDisputesRequest.
 */
class GetUserDisputesResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\DisputeIDType | The index of the first dispute in the current result set, relative to the total number
	 * of disputes available. Primarily useful for interpreting paginated results. For example,
	 * if 228 disputes are available and 200 results are returned per page: The first page returns a
	 * StartingDisputeID value of 1 and the second page returns a StartingDisputeID value of 201.
	 */
	public $StartingDisputeID;
	/**
	 * @var \Controle\sub1\sub2\DisputeIDType | The index of the last dispute in the current result set, relative to the total number of
	 * disputes available. Primarily useful for interpreting paginated results. For example, if
	 * 228 disputes are available and 200 results are returned per page: The first page returns an
	 * EndingDisputeID value of 200 and the second page returns an EndingDisputeID value of 228.
	 */
	public $EndingDisputeID;
	/**
	 * @var \Controle\sub1\sub2\DisputeArrayType | The array of disputes returned.
	 */
	public $DisputeArray;
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
	 * @var \Controle\sub1\sub2\DisputeFilterCountType | The number of disputes that involve the requester as buyer or seller and match a given
	 * filter type.
	 */
	public $DisputeFilterCount;
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DisputeIDType $val
	 * @throws Exception
	 */
	public function setStartingDisputeID($val)
	{
        $this->StartingDisputeID = (int)$val;
	}

	/**
	 * @param DisputeIDType $val
	 * @throws Exception
	 */
	public function setEndingDisputeID($val)
	{
        $this->EndingDisputeID = (int)$val;
	}

	/**
	 * @param DisputeArrayType $val
	 * @throws Exception
	 */
	public function setDisputeArray($val)
	{
        $this->DisputeArray = (int)$val;
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
        $this->ItemsPerPage = (int)$val;
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
        $this->PageNumber = (int)$val;
	}

	/**
	 * @param DisputeFilterCountType $val
	 * @throws Exception
	 */
	public function setDisputeFilterCount($val)
	{
        $this->DisputeFilterCount = (int)$val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = (int)$val;
	}
}
