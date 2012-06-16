<?php

namespace Controle;
/**
 * MyMessagesResponseDetailsType
 * Details relating to the response to an alert or message.
 */
class MyMessagesResponseDetailsType {
	/**
	 * @var boolean | Whether or not an alert or message can be responded to. To respond to an alert or message,
	 * use the URL in ResponseURL. You may need to log into the eBay Web site to complete the
	 * response.
	 */
	public $ResponseEnabled;
	/**
	 * @var \Controle\anyURI | A URL that the recipient must visit to respond to an alert or message. Responding may require
	 * logging into the eBay Web site.
	 */
	public $ResponseURL;
	/**
	 * @var dateTime | The date and time the user responded to an alert or message
	 */
	public $UserResponseDate;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

