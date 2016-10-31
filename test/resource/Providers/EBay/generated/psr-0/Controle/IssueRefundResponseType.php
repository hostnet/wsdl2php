<?php

namespace Controle;

/**
 * IssueRefundResponseType
 * Indicates the refund amount that a seller issued to a buyer for a single Half.com transaction. Refunds
 * may only be issued for a specific transaction. Sellers do not have the ability to issue
 * a general refund (not tied to a transaction) to a buyer.
 */
class IssueRefundResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\AmountType | Total amount refunded by the seller for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $refundfromseller;
	/**
	 * @var \Controle\AmountType | Total amount refunded to the buyer for this transaction. Applicable to Half.com (for GetOrders).
	 */
	public $totalrefundtobuyer;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setRefundFromSeller($val)
	{
        $this->refundfromseller = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotalRefundToBuyer($val)
	{
        $this->totalrefundtobuyer = (int)$val;
	}
}
