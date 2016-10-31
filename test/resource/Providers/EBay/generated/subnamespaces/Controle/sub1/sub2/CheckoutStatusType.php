<?php

namespace Controle\sub1\sub2;

class CheckoutStatusType
{
	/**
	 * @var \Controle\sub1\sub2\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
	 * applicable if the buyer chose PayPal as the payment method for the transaction. If the
	 * payment failed, the value returned indicates the reason for the failure. Output only.
	 */
	public $ebaypaymentstatus;
	/**
	 * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
	 */
	public $lastmodifiedtime;
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | 	 */
	public $paymentmethod;
	/**
	 * @var \Controle\sub1\sub2\CompleteStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $status;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param PaymentStatusCodeType $val
	 * @throws Exception
	 */
	public function setEBayPaymentStatus($val)
	{
        $this->ebaypaymentstatus = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastModifiedTime($val)
	{
        $this->lastmodifiedtime = (int)$val;
	}

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethod($val)
	{
        $this->paymentmethod = (int)$val;
	}

	/**
	 * @param CompleteStatusCodeType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
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
