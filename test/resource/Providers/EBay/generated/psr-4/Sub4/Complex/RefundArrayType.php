<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RefundArrayType
 * Contains an array of refunds.
 */
class RefundArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RefundType | Contains information about one refund. Applicable to Half.com (for GetOrders).
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
