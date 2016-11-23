<?php

namespace Controle\sub1\sub2;

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
	 * @var \Controle\sub1\sub2\AmountType | 	 */
	public $FeeOrCreditAmount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | If positive, the amount the buyer pays the seller through PayPal on the purchase of items.
	 * If negative, the amount refunded the buyer. Default = 0.
	 */
	public $PaymentOrRefundAmount;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
        $this->ExternalTransactionID = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExternalTransactionTime($val)
	{
        $this->ExternalTransactionTime = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setFeeOrCreditAmount($val)
	{
        $this->FeeOrCreditAmount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setPaymentOrRefundAmount($val)
	{
        $this->PaymentOrRefundAmount = (int)$val;
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
