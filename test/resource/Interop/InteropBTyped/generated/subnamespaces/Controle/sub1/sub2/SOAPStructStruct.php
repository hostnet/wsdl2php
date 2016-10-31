<?php

namespace Controle\sub1\sub2;
class SOAPStructStruct {
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
	 * @var \Controle\sub1\sub2\SOAPStruct
	 */
	public $varStruct;
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
	 * @param SOAPStruct $val
	 * @throws Exception
	 */
	public function setVarStruct($val) {
		
		$this->varStruct = (int)$val;
	}

}

