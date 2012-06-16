<?php

namespace Controle\sub1\sub2;
class CreateRegistrantResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateRegistrantResult;
	/**
	 * @var \Controle\sub1\sub2\Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val) {
		
		$this->CreateRegistrantResult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->registrant = (int)$val;
	}

}

