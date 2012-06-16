<?php

namespace Controle;
/**
 * GetVeROReportStatusResponseType
 * Contains status information for items reported by the VeRO Program member.
 */
class GetVeROReportStatusResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
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
	 * @var long | A unique packet identifier for the items reported.
	 */
	public $VeROReportPacketID;
	/**
	 * @var \Controle\VeROReportPacketStatusCodeType | The processing status of the packet.
	 */
	public $VeROReportPacketStatus;
	/**
	 * @var \Controle\VeROReportedItemDetailsType | Contains the list of the reported item details. Returns empty if no items are available
	 * that match the request.
	 */
	public $ReportedItemDetails;
	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val) {
		
		$this->PaginationResult = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHasMoreItems($val) {
		
		$this->HasMoreItems = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setItemsPerPage($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ItemsPerPage = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageNumber($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->PageNumber = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setVeROReportPacketID($val) {
		
		$this->VeROReportPacketID = (int)$val;
	}

	/**
	 * @param VeROReportPacketStatusCodeType $val
	 * @throws Exception
	 */
	public function setVeROReportPacketStatus($val) {
		
		$this->VeROReportPacketStatus = (int)$val;
	}

	/**
	 * @param VeROReportedItemDetailsType $val
	 * @throws Exception
	 */
	public function setReportedItemDetails($val) {
		
		$this->ReportedItemDetails = (int)$val;
	}

}

