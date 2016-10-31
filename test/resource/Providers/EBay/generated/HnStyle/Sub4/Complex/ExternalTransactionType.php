<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ExternalTransactionType
 * Container for external transaction information.
 */
class ExternalTransactionType
{
    /**
     * @var string | Unique payment transaction ID.
     */
    public $externaltransactionid;
    /**
     * @var dateTime | Date on which transaction occurs in PayPal.
     */
    public $externaltransactiontime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $feeorcreditamount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | If positive, the amount the buyer pays the seller through PayPal on the purchase of
     * items. If negative, the amount refunded the buyer. Default = 0.
     */
    public $paymentorrefundamount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalTransactionID');
        }
        $this->externaltransactionid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExternalTransactionTime($val)
    {
        $this->externaltransactiontime = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFeeOrCreditAmount($val)
    {
        $this->feeorcreditamount = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPaymentOrRefundAmount($val)
    {
        $this->paymentorrefundamount = (int)$val;
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
