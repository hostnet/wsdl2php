<?php

namespace Controle\sub1\sub2;
class AdvancedVerifyEmailResponse {
	/**
	 * @var \Controle\sub1\sub2\ReturnIndicator
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

