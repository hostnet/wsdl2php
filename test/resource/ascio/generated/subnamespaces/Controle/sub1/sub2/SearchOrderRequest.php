<?php

namespace Controle\sub1\sub2;

class SearchOrderRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var array \Controle\sub1\sub2\OrderType
	 */
	public $OrderTypes;
	/**
	 * @var array \Controle\sub1\sub2\OrderStatusType
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
	 * @var \Controle\sub1\sub2\PagingInfo
	 */
	public $PageInfo;
	/**
	 * @var \Controle\sub1\sub2\SearchOrderSortType
	 */
	public $OrderSort;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val)
	{
        $this->OrderTypes = (ArrayOfOrderType)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val)
	{
        $this->OrderStatusTypes = (ArrayOfOrderStatusType)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val)
	{
        $this->FromDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val)
	{
        $this->ToDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionComment');
        }
        $this->TransactionComment = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comments');
        }
        $this->Comments = (string)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val)
	{
        $this->IncludeDomainDetails = (boolean)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val)
	{
        $this->PageInfo = (PagingInfo)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val)
	{
        $this->OrderSort = (SearchOrderSortType)$val;
	}
}
