<?php

namespace Controle\sub1\sub2;
class CheckoutStatusType {
	/**
	 * @var \Controle\sub1\sub2\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
	 * applicable if the buyer chose PayPal as the payment method for the transaction. If the
	 * payment failed, the value returned indicates the reason for the failure. Output only.
	 */
	public $eBayPaymentStatus;
	/**
	 * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
	 */
	public $LastModifiedTime;
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | 	 */
	public $PaymentMethod;
	/**
	 * @var \Controle\sub1\sub2\CompleteStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $Status;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

