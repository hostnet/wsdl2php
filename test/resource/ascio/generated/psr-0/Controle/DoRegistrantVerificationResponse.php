<?php

namespace Controle;
class DoRegistrantVerificationResponse {
	/**
	 * @var \Controle\Response
	 */
	public $DoRegistrantVerificationResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val) {
		
		$this->DoRegistrantVerificationResult = (int)$val;
	}

}

