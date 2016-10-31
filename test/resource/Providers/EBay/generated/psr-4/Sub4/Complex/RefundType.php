<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RefundType
 * Contains information about a single refund. A refund contains information about the amount
 * refunded for a transaction to a single buyer. This refund contains information about the
 * amount refunded from seller, refunded time and total amount refunded to buyer (amount from
 * seller + half)
 */
class RefundType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Total amount refunded by the seller for this transaction. Applicable to Half.com (for
     * GetOrders).
     */
    public $refundfromseller;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Total amount refunded to the buyer for this transaction. Applicable to Half.com (for
     * GetOrders).
     */
    public $totalrefundtobuyer;
    /**
     * @var dateTime | The date and time at which the refund was issued. Applicable to Half.com (for GetOrders).
     */
    public $refundtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
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

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRefundTime($val)
    {
        $this->refundtime = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
