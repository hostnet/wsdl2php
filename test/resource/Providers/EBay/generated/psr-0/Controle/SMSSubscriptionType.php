<?php

namespace Controle;
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
	 * @var \Controle\SMSSubscriptionUserStatusCodeType | Registered/Unregistered/Pending.
	 */
	public $UserStatus;
	/**
	 * @var \Controle\WirelessCarrierIDCodeType | The wireless carrier ID.
	 */
	public $CarrierID;
	/**
	 * @var \Controle\SMSSubscriptionErrorCodeCodeType | Reason for SMS subscription error (postback from thired-party integrator).
	 */
	public $ErrorCode;
	/**
	 * @var \Controle\ItemIDType | ID of item to unsubscribe from SMS notification.
	 */
	public $ItemToUnsubscribe;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSMSPhone($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for SMSPhone');
		$this->SMSPhone = (int)$val;
	}

	/**
	 * @param SMSSubscriptionUserStatusCodeType $val
	 * @throws Exception
	 */
	public function setUserStatus($val) {
		
		$this->UserStatus = (int)$val;
	}

	/**
	 * @param WirelessCarrierIDCodeType $val
	 * @throws Exception
	 */
	public function setCarrierID($val) {
		
		$this->CarrierID = (int)$val;
	}

	/**
	 * @param SMSSubscriptionErrorCodeCodeType $val
	 * @throws Exception
	 */
	public function setErrorCode($val) {
		
		$this->ErrorCode = (int)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemToUnsubscribe($val) {
		
		$this->ItemToUnsubscribe = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

