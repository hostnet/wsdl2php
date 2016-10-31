<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RefundArrayType
 * Contains an array of refunds.
 */
class RefundArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RefundType | Contains information about one refund. Applicable to Half.com (for GetOrders).
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
