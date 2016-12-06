<?php

namespace Controle;

/**
 * TransactionStatusType
 * Contains the status of the transaction, such as the buyer's online payment and whether the
 * checkout process for the transaction has been completed.
 */
class TransactionStatusType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
	 * applicable if the buyer chose PayPal as the payment method for the transaction. If the
	 * payment failed, the value returned indicates the reason for the failure. Output only.
	 */
	public $eBayPaymentStatus;
	/**
	 * @var \Controle\CheckoutStatusCodeType | Indicates the current status of the checkout process for the transaction.
	 */
	public $CheckoutStatus;
	/**
	 * @var dateTime | Indicates date and time a transaction's status or incomplete state was last updated (in
	 * GMT).
	 */
	public $LastTimeModified;
	/**
	 * @var \Controle\BuyerPaymentMethodCodeType | Payment method the buyer selected for paying the seller for the transaction. If checkout
	 * is not yet complete, PaymentMethodUsed is set to whatever the buyer selected as his or
	 * her preference on the Review Your Purchase page.
	 */
	public $PaymentMethodUsed;
	/**
	 * @var \Controle\CompleteStatusCodeType | Indicates whether the transaction process is complete or incomplete.
	 */
	public $CompleteStatus;
	/**
	 * @var boolean | Indicates whether the buyer has selected shipping details during checkout. False indicates
	 * that the shipping service was selected by eBay for the buyer. For example, if the buyer
	 * has not yet completed the Review Your Purchase page, he has not picked a shipping service.
	 * If it is false, the application should ignore ShippingServiceCost and ShippingServiceSelected (items
	 * whose values are defaulted by eBay).
	 */
	public $BuyerSelectedShipping;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PaymentStatusCodeType $val
	 * @throws Exception
	 */
	public function setEBayPaymentStatus($val)
	{
        $this->eBayPaymentStatus = $val;
	}

	/**
	 * @param CheckoutStatusCodeType $val
	 * @throws Exception
	 */
	public function setCheckoutStatus($val)
	{
        $this->CheckoutStatus = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastTimeModified($val)
	{
        $this->LastTimeModified = $val;
	}

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethodUsed($val)
	{
        $this->PaymentMethodUsed = $val;
	}

	/**
	 * @param CompleteStatusCodeType $val
	 * @throws Exception
	 */
	public function setCompleteStatus($val)
	{
        $this->CompleteStatus = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBuyerSelectedShipping($val)
	{
        $this->BuyerSelectedShipping = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
