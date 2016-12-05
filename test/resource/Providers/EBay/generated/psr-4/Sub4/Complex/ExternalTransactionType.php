<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ExternalTransactionType
 * Container for external transaction information.
 */
class ExternalTransactionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique payment transaction ID.
     */
    public $ExternalTransactionID;
    /**
     * @var dateTime | Date on which transaction occurs in PayPal.
     */
    public $ExternalTransactionTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $FeeOrCreditAmount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | If positive, the amount the buyer pays the seller through PayPal on the purchase of
     * items. If negative, the amount refunded the buyer. Default = 0.
     */
    public $PaymentOrRefundAmount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalTransactionID');
        }
        $this->ExternalTransactionID = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExternalTransactionTime($val)
    {
        $this->ExternalTransactionTime = (dateTime)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFeeOrCreditAmount($val)
    {
        $this->FeeOrCreditAmount = (AmountType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPaymentOrRefundAmount($val)
    {
        $this->PaymentOrRefundAmount = (AmountType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
