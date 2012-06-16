<?php

class SOAPArrayStruct {
    /**
     * @var ControleanyType
     */
    public $varString;
    /**
     * @var ControleanyType
     */
    public $varInt;
    /**
     * @var ControleanyType
     */
    public $varFloat;
    /**
     * @var ControleArrayOfstring
     */
    public $varArray;

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarString($val) {
		
		$this->varString = (int)$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarInt($val) {
		
		$this->varInt = (int)$val;
	}

	/**
	 * @param anyType $val
	 * @throws Exception
	 */
	public function setVarFloat($val) {
		
		$this->varFloat = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setVarArray($val) {
		
		$this->varArray = (int)$val;
	}
}


