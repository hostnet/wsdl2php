<?php

namespace Controle\sub1\sub2;
/**
 * AddMemberMessagesAAQToBidderRequestContainerType
 * Holds the content of the request.
 */
class AddMemberMessagesAAQToBidderRequestContainerType {
	/**
	 * @var string | Unique key to distinguish between recommendations for each item.              Matches a
	 * correlation ID you defined in the request, if any.
	 */
	public $CorrelationID;
	/**
	 * @var string | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\MemberMessageType | Holds the content of the message.
	 */
	public $MemberMessage;
}

