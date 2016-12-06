<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * NotificationUserDataType
 * User data related to notifications.
 */
class NotificationUserDataType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SMSSubscriptionType | User data related to SMS notifications.
     */
    public $SMSSubscription;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SummaryEventScheduleType | User account activity summary alert delivery schedule. Returned if PreferenceLevel is
     * set to UserData in GetNotificationPreferences. See "Working with Platform Notifications"
     * for instructions on "Informational Alerts".
     */
    public $SummarySchedule;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param SMSSubscriptionType $val
     * @throws Exception
     */
    public function setSMSSubscription($val)
    {
        $this->SMSSubscription = $val;
    }

    /**
     * @param SummaryEventScheduleType $val
     * @throws Exception
     */
    public function setSummarySchedule($val)
    {
        $this->SummarySchedule = $val;
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
