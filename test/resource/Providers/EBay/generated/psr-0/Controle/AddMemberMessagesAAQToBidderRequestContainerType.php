<?php

namespace Controle;
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
	 * @var \Controle\MemberMessageType | Holds the content of the message.
	 */
	public $MemberMessage;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCorrelationID($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CorrelationID');
		$this->CorrelationID = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setItemID($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ItemID');
		$this->ItemID = (int)$val;
	}

	/**
	 * @param MemberMessageType $val
	 * @throws Exception
	 */
	public function setMemberMessage($val) {
		
		$this->MemberMessage = (int)$val;
	}

}

