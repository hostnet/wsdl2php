<?php

namespace Controle;
/**
 * MyMessagesAlertIDArrayType
 * Contains a list of up to 10 AlertID values.
 */
class MyMessagesAlertIDArrayType {
	/**
	 * @var \Controle\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
	 */
	public $AlertID;
	/**
	 * @param MyMessagesAlertIDType $val
	 * @throws Exception
	 */
	public function setAlertID($val) {
		
		$this->AlertID = (int)$val;
	}

}

