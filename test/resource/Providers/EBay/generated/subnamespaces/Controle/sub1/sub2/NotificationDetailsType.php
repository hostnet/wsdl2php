<?php

namespace Controle\sub1\sub2;
/**
 * NotificationDetailsType
 * Information about a single notification. Notification information includes the reference
 * ID, notification type, current status, time delivered, error code, and error message for
 * the notification. If notification details are included in the response, all of the detail
 * fields are returned.
 */
class NotificationDetailsType {
	/**
	 * @var \Controle\sub1\sub2\anyURI | Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
	 */
	public $DeliveryURL;
	/**
	 * @var string | Reference identifier for the notification.
	 */
	public $ReferenceID;
	/**
	 * @var dateTime | Date and time when this notification will be removed from the eBay system.
	 */
	public $ExpirationTime;
	/**
	 * @var \Controle\sub1\sub2\NotificationEventTypeCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
	 * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
	 * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
	 * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
	 */
	public $Type;
	/**
	 * @var int | Returns the total number of retries for the given notification.
	 */
	public $Retries;
	/**
	 * @var \Controle\sub1\sub2\NotificationEventStateCodeType | Revise only
	 */
	public $DeliveryStatus;
	/**
	 * @var dateTime | Returns the time when the notification is scheduled for retry. This won't be included if
	 * the DeliveryStatus is Delivered.
	 */
	public $NextRetryTime;
	/**
	 * @var dateTime | Returns the time when the notification was delivered.
	 */
	public $DeliveryTime;
	/**
	 * @var string | Returns the error message.
	 */
	public $ErrorMessage;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

