<?php

namespace Controle\sub1\sub2;
class GetRegistrantResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantResult;
	/**
	 * @var \Controle\sub1\sub2\Registrant
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

