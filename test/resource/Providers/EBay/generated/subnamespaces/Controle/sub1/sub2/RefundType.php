<?php

namespace Controle\sub1\sub2;

/**
 * RefundType
 * Contains information about a single refund. A refund contains information about the amount
 * refunded for a transaction to a single buyer. This refund contains information about the
 * amount refunded from seller, refunded time and total amount refunded to buyer (amount from
 * seller + half)
 */
class RefundType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\AmountType | Total amount refunded by the seller for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $RefundFromSeller;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Total amount refunded to the buyer for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $TotalRefundToBuyer;
	/**
	 * @var dateTime | The date and time at which the refund was issued. Applicable to Half.com (for GetOrders).
	 */
	public $RefundTime;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setRefundFromSeller($val)
	{
        $this->RefundFromSeller = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotalRefundToBuyer($val)
	{
        $this->TotalRefundToBuyer = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRefundTime($val)
	{
        $this->RefundTime = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
