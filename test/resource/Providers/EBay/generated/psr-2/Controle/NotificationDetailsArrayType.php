<?php

namespace Controle;
/**
 * NotificationDetailsArrayType
 * Returns information about notifications sent to the given application for the given ItemID.
 * It will only be returned if ItemID was specified in the input parameters.
 */
class NotificationDetailsArrayType {
    /**
     * @var \Controle\NotificationDetailsType | List of notifications, if there are any, for the given ItemID and given time period.
     */
    public $NotificationDetails;
}

