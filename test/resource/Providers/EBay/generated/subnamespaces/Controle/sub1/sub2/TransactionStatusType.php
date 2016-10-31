<?php

namespace Controle\sub1\sub2;

/**
 * TransactionStatusType
 * Contains the status of the transaction, such as the buyer's online payment and whether the
 * checkout process for the transaction has been completed.
 */
class TransactionStatusType
{
	/**
	 * @var \Controle\sub1\sub2\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
	 * applicable if the buyer chose PayPal as the payment method for the transaction. If the
	 * payment failed, the value returned indicates the reason for the failure. Output only.
	 */
	public $ebaypaymentstatus;
	/**
	 * @var \Controle\sub1\sub2\CheckoutStatusCodeType | Indicates the current status of the checkout process for the transaction.
	 */
	public $checkoutstatus;
	/**
	 * @var dateTime | Indicates date and time a transaction's status or incomplete state was last updated (in
	 * GMT).
	 */
	public $lasttimemodified;
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | Payment method the buyer selected for paying the seller for the transaction. If checkout
	 * is not yet complete, PaymentMethodUsed is set to whatever the buyer selected as his or
	 * her preference on the Review Your Purchase page.
	 */
	public $paymentmethodused;
	/**
	 * @var \Controle\sub1\sub2\CompleteStatusCodeType | Indicates whether the transaction process is complete or incomplete.
	 */
	public $completestatus;
	/**
	 * @var boolean | Indicates whether the buyer has selected shipping details during checkout. False indicates
	 * that the shipping service was selected by eBay for the buyer. For example, if the buyer
	 * has not yet completed the Review Your Purchase page, he has not picked a shipping service.
	 * If it is false, the application should ignore ShippingServiceCost and ShippingServiceSelected (items
	 * whose values are defaulted by eBay).
	 */
	public $buyerselectedshipping;
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
	 * @param CheckoutStatusCodeType $val
	 * @throws Exception
	 */
	public function setCheckoutStatus($val)
	{
        $this->checkoutstatus = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastTimeModified($val)
	{
        $this->lasttimemodified = (int)$val;
	}

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethodUsed($val)
	{
        $this->paymentmethodused = (int)$val;
	}

	/**
	 * @param CompleteStatusCodeType $val
	 * @throws Exception
	 */
	public function setCompleteStatus($val)
	{
        $this->completestatus = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBuyerSelectedShipping($val)
	{
        $this->buyerselectedshipping = (int)$val;
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
