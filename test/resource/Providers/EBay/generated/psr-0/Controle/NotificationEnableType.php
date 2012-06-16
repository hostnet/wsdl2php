<?php

namespace Controle;
/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType {
	/**
	 * @var \Controle\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\EnableCodeType | Whether the event is enabled or disabled.
	 */
	public $EventEnable;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

