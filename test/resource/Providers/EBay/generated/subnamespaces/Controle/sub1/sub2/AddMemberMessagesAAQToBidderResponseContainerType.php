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
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCorrelationID($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CorrelationID');
		$this->CorrelationID = (int)$val;
	}

	/**
	 * @param AckCodeType $val
	 * @throws Exception
	 */
	public function setAck($val) {
		
		$this->Ack = (int)$val;
	}

}

