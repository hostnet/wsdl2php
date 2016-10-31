<?php

namespace Controle;

class SearchOrderRequest
{
	/**
	 * @var array \Controle\OrderType
	 */
	public $ordertypes;
	/**
	 * @var array \Controle\OrderStatusType
	 */
	public $orderstatustypes;
	/**
	 * @var dateTime
	 */
	public $fromdate;
	/**
	 * @var dateTime
	 */
	public $todate;
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @var string
	 */
	public $transactioncomment;
	/**
	 * @var string
	 */
	public $comments;
	/**
	 * @var boolean
	 */
	public $includedomaindetails;
	/**
	 * @var \Controle\PagingInfo
	 */
	public $pageinfo;
	/**
	 * @var \Controle\SearchOrderSortType
	 */
	public $ordersort;
	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val)
	{
        $this->ordertypes = (int)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val)
	{
        $this->orderstatustypes = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val)
	{
        $this->fromdate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val)
	{
        $this->todate = (int)$val;
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
        $this->domainname = (int)$val;
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
        $this->transactioncomment = (int)$val;
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
        $this->comments = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val)
	{
        $this->includedomaindetails = (int)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val)
	{
        $this->pageinfo = (int)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val)
	{
        $this->ordersort = (int)$val;
	}
}
