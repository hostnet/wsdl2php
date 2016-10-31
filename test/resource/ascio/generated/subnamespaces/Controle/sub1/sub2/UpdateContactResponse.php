<?php

namespace Controle\sub1\sub2;
class UpdateContactResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $UpdateContactResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUpdateContactResult($val) {
		
		$this->UpdateContactResult = (int)$val;
	}

}

