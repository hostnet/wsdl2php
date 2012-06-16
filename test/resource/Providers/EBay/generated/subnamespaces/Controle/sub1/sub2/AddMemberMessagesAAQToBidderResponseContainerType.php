<?php

namespace Controle\sub1\sub2;
/**
 * AddMemberMessagesAAQToBidderResponseContainerType
 * Contains the response information.
 */
class AddMemberMessagesAAQToBidderResponseContainerType {
	/**
	 * @var string | Unique key to distinguish between recommendations for each item.              Matches a
	 * correlation ID you defined in the request, if any.
	 */
	public $CorrelationID;
	/**
	 * @var \Controle\sub1\sub2\AckCodeType | Indicates the response status (e.g., success).
	 */
	public $Ack;
}

