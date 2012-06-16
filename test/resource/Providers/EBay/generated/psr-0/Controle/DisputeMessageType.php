<?php

namespace Controle;
/**
 * DisputeMessageType
 * Contains a message posted to a dispute. The message can be posted by the buyer, the seller,
 * or an eBay representative.
 */
class DisputeMessageType {
	/**
	 * @var int | An ID that uniquely identifies a message for a given user. <br /><br /> This value is not
	 * the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
	 * value for used as the GetMyMessages ExternalID instead.
	 */
	public $MessageID;
	/**
	 * @var \Controle\DisputeMessageSourceCodeType | The party who posted the message: the buyer, the seller, or an eBay representative.
	 */
	public $MessageSource;
	/**
	 * @var dateTime | The date and time the message was created, in GMT.
	 */
	public $MessageCreationTime;
	/**
	 * @var string | The text of the message.
	 */
	public $MessageText;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

