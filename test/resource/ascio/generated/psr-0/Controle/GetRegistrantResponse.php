<?php

namespace Controle;
class GetRegistrantResponse {
	/**
	 * @var \Controle\Response
	 */
	public $GetRegistrantResult;
	/**
	 * @var \Controle\Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantResult($val) {
		
		$this->GetRegistrantResult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->registrant = (int)$val;
	}

}

