<?php

namespace Controle;
/**
 * NotificationEventPropertyType
 * Defines properties associated with particular event.
 */
class NotificationEventPropertyType {
	/**
	 * @var \Controle\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\NotificationEventPropertyNameCodeType | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

