<?php

namespace Controle;

/**
 * RefundArrayType
 * Contains an array of refunds.
 */
class RefundArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\RefundType | Contains information about one refund. Applicable to Half.com (for GetOrders).
     */
    public $Refund;
    // @codingStandardsIgnoreEnd

    /**
     * @param RefundType $val
     * @throws \Exception
     */
    public function setRefund($val)
    {
        $this->Refund = $val;
    }
}
