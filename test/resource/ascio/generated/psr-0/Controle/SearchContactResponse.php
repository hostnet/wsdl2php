<?php

namespace Controle;
class SearchContactResponse {
	/**
	 * @var \Controle\Response
	 */
	public $SearchContactResult;
	/**
	 * @var array \Controle\Contact
	 */
	public $contacts;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val) {
		
		$this->SearchContactResult = (int)$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val) {
		
		$this->contacts = (int)$val;
	}

}

