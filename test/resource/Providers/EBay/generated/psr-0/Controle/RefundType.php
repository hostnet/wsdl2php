<?php

namespace Controle;
/**
 * RefundType
 * Contains information about a single refund. A refund contains information about the amount
 * refunded for a transaction to a single buyer. This refund contains information about the
 * amount refunded from seller, refunded time and total amount refunded to buyer (amount from
 * seller + half)
 */
class RefundType {
	/**
	 * @var \Controle\AmountType | Total amount refunded by the seller for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $RefundFromSeller;
	/**
	 * @var \Controle\AmountType | Total amount refunded to the buyer for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $TotalRefundToBuyer;
	/**
	 * @var dateTime | The date and time at which the refund was issued. Applicable to Half.com (for GetOrders).
	 */
	public $RefundTime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}
