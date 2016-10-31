<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetNotificationPreferencesRequestType
 * Manages a user's notification preferences. This is part of the eBay Platform Notifications
 * feature. Notification can be used to alert production-certified applications of selected
 * events on the eBay site, helping reduce the number of times your application needs to retrieve
 * certain information.
 */
class SetNotificationPreferencesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApplicationDeliveryPreferencesType | Specifies application-based event preferences that have been enabled.
     */
    public $applicationdeliverypreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEnableArrayType | Array of NotificationEventEnableTypes. Each NotificationEventEnableType contains an
     * EventSetting and an EventType.
     */
    public $userdeliverypreferencearray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationUserDataType | Specifies user data for notification settings such as mobile phone number.
     */
    public $userdata;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventPropertyType | Characteristics or details of an event such as type, name and value. Currently can only
     * be set for wireless applications.
     */
    public $eventproperty;
    /**
     * @param ApplicationDeliveryPreferencesType $val
     * @throws Exception
     */
    public function setApplicationDeliveryPreferences($val)
    {
        $this->applicationdeliverypreferences = (int)$val;
    }

    /**
     * @param NotificationEnableArrayType $val
     * @throws Exception
     */
    public function setUserDeliveryPreferenceArray($val)
    {
        $this->userdeliverypreferencearray = (int)$val;
    }

    /**
     * @param NotificationUserDataType $val
     * @throws Exception
     */
    public function setUserData($val)
    {
        $this->userdata = (int)$val;
    }

    /**
     * @param NotificationEventPropertyType $val
     * @throws Exception
     */
    public function setEventProperty($val)
    {
        $this->eventproperty = (int)$val;
    }
}
