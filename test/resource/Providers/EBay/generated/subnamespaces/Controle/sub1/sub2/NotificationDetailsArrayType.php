<?php

namespace Controle\sub1\sub2;

/**
 * NotificationDetailsArrayType
 * Returns information about notifications sent to the given application for the given ItemID.
 * It will only be returned if ItemID was specified in the input parameters.
 */
class NotificationDetailsArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\NotificationDetailsType | List of notifications, if there are any, for the given ItemID and given time period.
	 */
	public $NotificationDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param NotificationDetailsType $val
	 * @throws Exception
	 */
	public function setNotificationDetails($val)
	{
        $this->NotificationDetails = (NotificationDetailsType)$val;
	}
}
