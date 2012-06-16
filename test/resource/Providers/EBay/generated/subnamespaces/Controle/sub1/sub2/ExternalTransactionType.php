<?php

namespace Controle\sub1\sub2;
/**
 * ExternalTransactionType
 * Container for external transaction information.
 */
class ExternalTransactionType {
	/**
	 * @var string | Unique payment transaction ID.
	 */
	public $ExternalTransactionID;
	/**
	 * @var dateTime | Date on which transaction occurs in PayPal.
	 */
	public $ExternalTransactionTime;
	/**
	 * @var \Controle\sub1\sub2\AmountType | 	 */
	public $FeeOrCreditAmount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | If positive, the amount the buyer pays the seller through PayPal on the purchase of items.
	 * If negative, the amount refunded the buyer. Default = 0.
	 */
	public $PaymentOrRefundAmount;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

