<?php

namespace Controle;
class CheckoutStatusType {
	/**
	 * @var \Controle\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
	 * applicable if the buyer chose PayPal as the payment method for the transaction. If the
	 * payment failed, the value returned indicates the reason for the failure. Output only.
	 */
	public $eBayPaymentStatus;
	/**
	 * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
	 */
	public $LastModifiedTime;
	/**
	 * @var \Controle\BuyerPaymentMethodCodeType | 	 */
	public $PaymentMethod;
	/**
	 * @var \Controle\CompleteStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $Status;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

