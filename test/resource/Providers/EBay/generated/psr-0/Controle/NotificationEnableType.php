<?php

namespace Controle;

/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType
{
	/**
	 * @var \Controle\NotificationEventTypeCodeType | 	 */
	public $eventtype;
	/**
	 * @var \Controle\EnableCodeType | Whether the event is enabled or disabled.
	 */
	public $eventenable;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param NotificationEventTypeCodeType $val
	 * @throws Exception
	 */
	public function setEventType($val)
	{
        $this->eventtype = (int)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setEventEnable($val)
	{
        $this->eventenable = (int)$val;
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
