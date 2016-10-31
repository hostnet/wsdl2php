<?php

namespace Controle\sub1\sub2;

/**
 * RefundArrayType
 * Contains an array of refunds.
 */
class RefundArrayType
{
	/**
	 * @var \Controle\sub1\sub2\RefundType | Contains information about one refund. Applicable to Half.com (for GetOrders).
	 */
	public $refund;
	/**
	 * @param RefundType $val
	 * @throws Exception
	 */
	public function setRefund($val)
	{
        $this->refund = (int)$val;
	}
}
