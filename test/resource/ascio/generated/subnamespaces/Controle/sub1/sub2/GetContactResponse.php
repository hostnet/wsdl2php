<?php

namespace Controle\sub1\sub2;
class GetContactResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetContactResult;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetContactResult($val) {
		
		$this->GetContactResult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

