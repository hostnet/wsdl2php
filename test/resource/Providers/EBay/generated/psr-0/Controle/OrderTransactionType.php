<?php

namespace Controle;
/**
 * OrderTransactionType
 * Contains an order or a transaction. A transaction is the sale of one or more items from
 * a seller's listing to a buyer. An order combines two or more transactions into a single
 * payment.
 */
class OrderTransactionType {
	/**
	 * @var \Controle\OrderType | Order in which the page is displayed in the list of custom pages.
	 */
	public $Order;
	/**
	 * @var \Controle\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $Transaction;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

