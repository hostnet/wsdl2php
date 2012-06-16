<?php

namespace Controle\sub1\sub2;
class SOAPStruct {
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

}

