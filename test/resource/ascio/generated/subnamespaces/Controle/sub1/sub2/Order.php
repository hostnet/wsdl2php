<?php

namespace Controle\sub1\sub2;
class Order {
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var \Controle\sub1\sub2\OrderType
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $AccountReference;
	/**
	 * @var \Controle\sub1\sub2\OrderStatusType
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $TransactionComment;
	/**
	 * @var string
	 */
	public $Comments;
	/**
	 * @var string
	 */
	public $Options;
	/**
	 * @var string
	 */
	public $LocalPresence;
	/**
	 * @var string
	 */
	public $Batch;
	/**
	 * @var string
	 */
	public $Documentation;
	/**
	 * @var \Controle\sub1\sub2\Domain
	 */
	public $Domain;
	/**
	 * @var dateTime
	 */
	public $CreDate;
}

