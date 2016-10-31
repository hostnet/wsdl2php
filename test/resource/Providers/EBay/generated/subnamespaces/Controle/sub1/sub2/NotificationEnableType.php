<?php

namespace Controle\sub1\sub2;

/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType
{
	/**
	 * @var \Controle\sub1\sub2\NotificationEventTypeCodeType | 	 */
	public $eventtype;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | Whether the event is enabled or disabled.
	 */
	public $eventenable;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
