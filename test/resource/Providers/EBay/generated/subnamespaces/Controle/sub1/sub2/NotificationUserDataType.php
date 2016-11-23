<?php

namespace Controle\sub1\sub2;

/**
 * NotificationUserDataType
 * User data related to notifications.
 */
class NotificationUserDataType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\SMSSubscriptionType | User data related to SMS notifications.
	 */
	public $SMSSubscription;
	/**
	 * @var \Controle\sub1\sub2\SummaryEventScheduleType | User account activity summary alert delivery schedule. Returned if PreferenceLevel is set
	 * to UserData in GetNotificationPreferences. See "Working with Platform Notifications" for
	 * instructions on "Informational Alerts".
	 */
	public $SummarySchedule;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SMSSubscriptionType $val
	 * @throws Exception
	 */
	public function setSMSSubscription($val)
	{
        $this->SMSSubscription = (int)$val;
	}

	/**
	 * @param SummaryEventScheduleType $val
	 * @throws Exception
	 */
	public function setSummarySchedule($val)
	{
        $this->SummarySchedule = (int)$val;
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
