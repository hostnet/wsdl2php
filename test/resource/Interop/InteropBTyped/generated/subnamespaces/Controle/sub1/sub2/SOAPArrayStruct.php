<?php

namespace Controle\sub1\sub2;
class SOAPArrayStruct {
	/**
	 * @var \Controle\sub1\sub2\anyType
	 */
	public $varString;
	/**
	 * @var \Controle\sub1\sub2\anyType
	 */
	public $varInt;
	/**
	 * @var \Controle\sub1\sub2\anyType
	 */
	public $varFloat;
	/**
	 * @var array \Controle\sub1\sub2\string
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

