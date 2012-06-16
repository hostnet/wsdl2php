<?php

namespace Controle\sub1\sub2;
/**
 * SMSSubscriptionType
 * (in/out) User data related to notifications.
 */
class SMSSubscriptionType {
	/**
	 * @var string | The wireless phone number to be used for receiving SMS messages. Max length of phone number
	 * varies by country.
	 */
	public $SMSPhone;
	/**
	 * @var \Controle\sub1\sub2\SMSSubscriptionUserStatusCodeType | Registered/Unregistered/Pending.
	 */
	public $UserStatus;
	/**
	 * @var \Controle\sub1\sub2\WirelessCarrierIDCodeType | The wireless carrier ID.
	 */
	public $CarrierID;
	/**
	 * @var \Controle\sub1\sub2\SMSSubscriptionErrorCodeCodeType | Reason for SMS subscription error (postback from thired-party integrator).
	 */
	public $ErrorCode;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | ID of item to unsubscribe from SMS notification.
	 */
	public $ItemToUnsubscribe;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

