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
}

