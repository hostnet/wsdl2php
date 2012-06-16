<?php

namespace Controle\sub1\sub2;
class SearchOrderRequest {
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
}

