<?php

namespace Controle;
class AdvancedVerifyEmailResponse {
	/**
	 * @var \Controle\ReturnIndicator
	 */
	public $AdvancedVerifyEmailResult;
	/**
	 * @param ReturnIndicator $val
	 * @throws Exception
	 */
	public function setAdvancedVerifyEmailResult($val) {
		
		$this->AdvancedVerifyEmailResult = (int)$val;
	}

}

