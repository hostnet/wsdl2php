<?php

namespace Controle\sub1\sub2;
class VerifyMXRecordResponse {
	/**
	 * @var int
	 */
	public $VerifyMXRecordResult;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVerifyMXRecordResult($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->VerifyMXRecordResult = (int)$val;
	}

}

