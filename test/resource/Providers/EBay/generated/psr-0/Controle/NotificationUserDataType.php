<?php

namespace Controle;
/**
 * NotificationUserDataType
 * User data related to notifications.
 */
class NotificationUserDataType {
	/**
	 * @var \Controle\SMSSubscriptionType | User data related to SMS notifications.
	 */
	public $SMSSubscription;
	/**
	 * @var \Controle\SummaryEventScheduleType | User account activity summary alert delivery schedule. Returned if PreferenceLevel is set
	 * to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for
	 * instructions on "Informational Alerts".
	 */
	public $SummarySchedule;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param SMSSubscriptionType $val
	 * @throws Exception
	 */
	public function setSMSSubscription($val) {
		
		$this->SMSSubscription = (int)$val;
	}

	/**
	 * @param SummaryEventScheduleType $val
	 * @throws Exception
	 */
	public function setSummarySchedule($val) {
		
		$this->SummarySchedule = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

