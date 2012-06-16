<?php

class ReturnCodesResponse {
    /**
     * @var ControleArrayOfAnyType
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


