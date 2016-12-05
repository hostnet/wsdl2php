<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * IssueRefundResponseType
 * Indicates the refund amount that a seller issued to a buyer for a single Half.com transaction. Refunds
 * may only be issued for a specific transaction. Sellers do not have the ability to issue
 * a general refund (not tied to a transaction) to a buyer.
 */
class IssueRefundResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Total amount refunded by the seller for this transaction. Applicable to Half.com (for
     * GetOrders).
     */
    public $RefundFromSeller;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Total amount refunded to the buyer for this transaction. Applicable to Half.com (for
     * GetOrders).
     */
    public $TotalRefundToBuyer;
    // @codingStandardsIgnoreEnd

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setRefundFromSeller($val)
    {
        $this->RefundFromSeller = (AmountType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setTotalRefundToBuyer($val)
    {
        $this->TotalRefundToBuyer = (AmountType)$val;
    }
}
