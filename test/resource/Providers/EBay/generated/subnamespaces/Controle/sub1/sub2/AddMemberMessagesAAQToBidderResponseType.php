<?php

namespace Controle\sub1\sub2;
/**
 * AddMemberMessagesAAQToBidderResponseType
 * Contains the response information.
 */
class AddMemberMessagesAAQToBidderResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\AddMemberMessagesAAQToBidderResponseContainerType | Contains the response information.
	 */
	public $AddMemberMessagesAAQToBidderResponseContainer;
	/**
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $val
	 * @throws Exception
	 */
	public function setAddMemberMessagesAAQToBidderResponseContainer($val) {
		
		$this->AddMemberMessagesAAQToBidderResponseContainer = (int)$val;
	}

}

