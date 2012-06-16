<?php

namespace Controle\sub1\sub2;
/**
 * MyMessagesAlertIDArrayType
 * Contains a list of up to 10 AlertID values.
 */
class MyMessagesAlertIDArrayType {
	/**
	 * @var \Controle\sub1\sub2\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
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

