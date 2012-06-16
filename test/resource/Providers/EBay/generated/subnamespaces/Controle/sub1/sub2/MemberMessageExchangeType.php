<?php

namespace Controle\sub1\sub2;
/**
 * MemberMessageExchangeType
 * Container for message metadata.
 */
class MemberMessageExchangeType {
	/**
	 * @var \Controle\sub1\sub2\ItemType | Information about the item that spawned the transaction. It is a purchase from this item's
	 * listing that the transaction represents. To remove a property from an item, specify it
	 * in ModifyType as a changed property, but do not give it a value in Item. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $Item;
	/**
	 * @var \Controle\sub1\sub2\MemberMessageType | Contains all the information about the question being asked.  Returned if the parent container
	 * is returned.
	 */
	public $Question;
	/**
	 * @var string | An answer to the question. Returned if the parent container is returned.
	 */
	public $Response;
	/**
	 * @var \Controle\sub1\sub2\MessageStatusTypeCodeType | The status of the message. Returned if the parent container is returned.
	 */
	public $MessageStatus;
	/**
	 * @var dateTime | The date and time that a message was created by the sender.
	 */
	public $CreationDate;
	/**
	 * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
	 */
	public $LastModifiedDate;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

