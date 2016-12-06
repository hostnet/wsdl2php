<?php

namespace Controle\sub1\sub2;

/**
 * GetLiveAuctionBiddersResponseType
 * Includes the list of bidders for the requested catalog.
 */
class GetLiveAuctionBiddersResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BidderDetailArrayType | Contains the bidder details that match the bidder query passed in the request. Returned
	 * when bidder search results are found.
	 */
	public $BidderDetails;
	/**
	 * @var int | Total number of bidders in Pending state.
	 */
	public $TotalPending;
	/**
	 * @var int | Total number of bidders in Approved state.
	 */
	public $TotalApproved;
	/**
	 * @var int | Total number of bidders in Denied state.
	 */
	public $TotalDenied;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $PageNumber;
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BidderDetailArrayType $val
	 * @throws Exception
	 */
	public function setBidderDetails($val)
	{
        $this->BidderDetails = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalPending($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalPending = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalApproved($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalApproved = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalDenied($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalDenied = $val;
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
        $this->PageNumber = $val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = $val;
	}
}
