<?php

namespace Controle\sub1\sub2;
/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType {
	/**
	 * @var \Controle\sub1\sub2\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | Whether the event is enabled or disabled.
	 */
	public $EventEnable;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

