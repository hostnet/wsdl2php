<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * NotificationDetailsArrayType
 * Returns information about notifications sent to the given application for the given ItemID.
 * It will only be returned if ItemID was specified in the input parameters.
 */
class NotificationDetailsArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationDetailsType | List of notifications, if there are any, for the given ItemID and given time period.
     */
    public $notificationdetails;
    /**
     * @param NotificationDetailsType $val
     * @throws Exception
     */
    public function setNotificationDetails($val)
    {
        $this->notificationdetails = (int)$val;
    }
}