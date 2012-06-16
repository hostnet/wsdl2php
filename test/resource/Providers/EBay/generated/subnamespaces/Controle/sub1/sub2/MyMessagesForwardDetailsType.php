<?php

namespace Controle\sub1\sub2;
/**
 * MyMessagesForwardDetailsType
 * Details relating to the forwarding of an alert or message.
 */
class MyMessagesForwardDetailsType {
	/**
	 * @var dateTime | The date and time a user forwarded an alert or message.
	 */
	public $UserForwardDate;
	/**
	 * @var string | Encoding used to forward an alert or message.
	 */
	public $ForwardMessageEncoding;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

