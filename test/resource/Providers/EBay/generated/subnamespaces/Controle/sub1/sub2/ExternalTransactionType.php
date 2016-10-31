<?php

namespace Controle\sub1\sub2;

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
	 * @var \Controle\sub1\sub2\AmountType | 	 */
	public $feeorcreditamount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | If positive, the amount the buyer pays the seller through PayPal on the purchase of items.
	 * If negative, the amount refunded the buyer. Default = 0.
	 */
	public $paymentorrefundamount;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
