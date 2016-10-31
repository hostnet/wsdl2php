<?php

namespace Controle\sub1\sub2;

/**
 * OrderTransactionType
 * Contains an order or a transaction. A transaction is the sale of one or more items from
 * a seller's listing to a buyer. An order combines two or more transactions into a single
 * payment.
 */
class OrderTransactionType
{
	/**
	 * @var \Controle\sub1\sub2\OrderType | Order in which the page is displayed in the list of custom pages.
	 */
	public $order;
	/**
	 * @var \Controle\sub1\sub2\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $transaction;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}

	/**
	 * @param TransactionType $val
	 * @throws Exception
	 */
	public function setTransaction($val)
	{
        $this->transaction = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
