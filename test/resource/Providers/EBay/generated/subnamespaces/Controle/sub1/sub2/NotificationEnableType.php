<?php

namespace Controle\sub1\sub2;

/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param NotificationEventTypeCodeType $val
	 * @throws Exception
	 */
	public function setEventType($val)
	{
        $this->EventType = (NotificationEventTypeCodeType)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setEventEnable($val)
	{
        $this->EventEnable = (EnableCodeType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
