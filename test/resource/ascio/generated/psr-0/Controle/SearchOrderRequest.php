<?php

namespace Controle;
class SearchOrderRequest {
	/**
	 * @var array \Controle\OrderType
	 */
	public $OrderTypes;
	/**
	 * @var array \Controle\OrderStatusType
	 */
	public $OrderStatusTypes;
	/**
	 * @var dateTime
	 */
	public $FromDate;
	/**
	 * @var dateTime
	 */
	public $ToDate;
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var string
	 */
	public $TransactionComment;
	/**
	 * @var string
	 */
	public $Comments;
	/**
	 * @var boolean
	 */
	public $IncludeDomainDetails;
	/**
	 * @var \Controle\PagingInfo
	 */
	public $PageInfo;
	/**
	 * @var \Controle\SearchOrderSortType
	 */
	public $OrderSort;
	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val) {
		
		$this->OrderTypes = (int)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val) {
		
		$this->OrderStatusTypes = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val) {
		
		$this->FromDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val) {
		
		$this->ToDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for TransactionComment');
		$this->TransactionComment = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Comments');
		$this->Comments = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val) {
		
		$this->IncludeDomainDetails = (int)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val) {
		
		$this->PageInfo = (int)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val) {
		
		$this->OrderSort = (int)$val;
	}

}

