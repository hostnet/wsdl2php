<?php

namespace Controle\sub1\sub2;
/**
 * RemindersType
 * Specifies the type of reminders for which you want information.
 */
class RemindersType {
	/**
	 * @var int | The number of reminders requesting that the buyer send payment.
	 */
	public $PaymentToSendCount;
	/**
	 * @var int | The number of reminders that feedback has not yet been received by the buyer or seller.
	 */
	public $FeedbackToReceiveCount;
	/**
	 * @var int | The number of reminders that feedback has not yet been sent by the buyer or seller.
	 */
	public $FeedbackToSendCount;
	/**
	 * @var int | The number of reminders advising the buyer that the buyer has been outbid.
	 */
	public $OutbidCount;
	/**
	 * @var int | The number of reminders that the seller has not yet received a payment.
	 */
	public $PaymentToReceiveCount;
	/**
	 * @var int | The number of reminders requesting that the seller review second chance offers.
	 */
	public $SecondChanceOfferCount;
	/**
	 * @var int | The number of reminders advising the seller that shipping is needed.
	 */
	public $ShippingNeededCount;
	/**
	 * @var int | The number of reminders advising the seller that relisting is needed.
	 */
	public $RelistingNeededCount;
}

