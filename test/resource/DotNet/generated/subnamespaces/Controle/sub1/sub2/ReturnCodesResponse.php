<?php

namespace Controle\sub1\sub2;
class ReturnCodesResponse {
	/**
	 * @var array \Controle\sub1\sub2\AnyType
	 */
	public $ReturnCodesResult;
	/**
	 * @param ArrayOfAnyType $val
	 * @throws Exception
	 */
	public function setReturnCodesResult($val) {
		
		$this->ReturnCodesResult = (int)$val;
	}

}

