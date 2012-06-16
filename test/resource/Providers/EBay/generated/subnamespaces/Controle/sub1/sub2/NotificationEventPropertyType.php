<?php

namespace Controle\sub1\sub2;
/**
 * NotificationEventPropertyType
 * Defines properties associated with particular event.
 */
class NotificationEventPropertyType {
	/**
	 * @var \Controle\sub1\sub2\NotificationEventTypeCodeType | 	 */
	public $EventType;
	/**
	 * @var \Controle\sub1\sub2\NotificationEventPropertyNameCodeType | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

