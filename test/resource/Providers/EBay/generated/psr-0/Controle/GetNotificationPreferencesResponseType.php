<?php

namespace Controle;
/**
 * GetNotificationPreferencesResponseType
 * Contains the requesting application's notification preferences. GetNotificationPreferences
 * retrieves preferences that you have deliberately set. For example, if you enable the EndOfAuction
 * event and then later disable it, the response shows the EndOfAuction event preference as
 * Disabled. But if you have never set a preference for the EndOfAuction event, no EndOfAuction
 * preference is returned at all.
 */
class GetNotificationPreferencesResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\ApplicationDeliveryPreferencesType | Specifies application-based event preferences that have been enabled.
	 */
	public $ApplicationDeliveryPreferences;
	/**
	 * @var \Controle\NotificationEnableArrayType | Array of NotificationEventEnableTypes. Each NotificationEventEnableType contains an EventSetting
	 * and an EventType.
	 */
	public $UserDeliveryPreferenceArray;
	/**
	 * @var \Controle\NotificationUserDataType | Specifies user data for notification settings such as mobile phone number.
	 */
	public $UserData;
	/**
	 * @var \Controle\NotificationEventPropertyType | Characteristics or details of an event such as type, name and value. Currently can only
	 * be set for wireless applications.
	 */
	public $EventProperty;
	/**
	 * @param ApplicationDeliveryPreferencesType $val
	 * @throws Exception
	 */
	public function setApplicationDeliveryPreferences($val) {
		
		$this->ApplicationDeliveryPreferences = (int)$val;
	}

	/**
	 * @param NotificationEnableArrayType $val
	 * @throws Exception
	 */
	public function setUserDeliveryPreferenceArray($val) {
		
		$this->UserDeliveryPreferenceArray = (int)$val;
	}

	/**
	 * @param NotificationUserDataType $val
	 * @throws Exception
	 */
	public function setUserData($val) {
		
		$this->UserData = (int)$val;
	}

	/**
	 * @param NotificationEventPropertyType $val
	 * @throws Exception
	 */
	public function setEventProperty($val) {
		
		$this->EventProperty = (int)$val;
	}

}

