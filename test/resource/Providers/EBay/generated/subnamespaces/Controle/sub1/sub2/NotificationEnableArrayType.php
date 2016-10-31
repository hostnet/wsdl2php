<?php

namespace Controle\sub1\sub2;

/**
 * NotificationEnableArrayType
 * A list of NotificationEnable entries. Each entry specifies one notification and whether
 * it is enabled.
 */
class NotificationEnableArrayType
{
	/**
	 * @var \Controle\sub1\sub2\NotificationEnableType | Specifies one notification event and whether it is enabled or disabled. Returned if previously
	 * set.
	 */
	public $notificationenable;
	/**
	 * @param NotificationEnableType $val
	 * @throws Exception
	 */
	public function setNotificationEnable($val)
	{
        $this->notificationenable = (int)$val;
	}
}
