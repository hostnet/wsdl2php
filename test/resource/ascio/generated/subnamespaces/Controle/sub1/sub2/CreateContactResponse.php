<?php

namespace Controle\sub1\sub2;
class CreateContactResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateContactResult;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val) {
		
		$this->CreateContactResult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

