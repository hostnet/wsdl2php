<?php

namespace Controle;

/**
 * NotificationDetailsArrayType
 * Returns information about notifications sent to the given application for the given ItemID.
 * It will only be returned if ItemID was specified in the input parameters.
 */
class NotificationDetailsArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\NotificationDetailsType | List of notifications, if there are any, for the given ItemID and given time period.
	 */
	public $NotificationDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param NotificationDetailsType $val
	 * @throws \Exception
	 */
	public function setNotificationDetails($val)
	{
        $this->NotificationDetails = $val;
	}
}
