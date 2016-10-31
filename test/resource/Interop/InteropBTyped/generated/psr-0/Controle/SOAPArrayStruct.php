<?php

namespace Controle;
class SOAPArrayStruct {
	/**
	 * @var \Controle\anyType
	 */
	public $varString;
	/**
	 * @var \Controle\anyType
	 */
	public $varInt;
	/**
	 * @var \Controle\anyType
	 */
	public $varFloat;
	/**
	 * @var array \Controle\string
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

