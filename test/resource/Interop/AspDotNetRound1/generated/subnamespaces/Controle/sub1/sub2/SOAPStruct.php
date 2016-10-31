<?php

namespace Controle\sub1\sub2;
class SOAPStruct {
	/**
	 * @var int
	 */
	public $varInt;
	/**
	 * @var string
	 */
	public $varString;
	/**
	 * @var float
	 */
	public $varFloat;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setVarInt($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->varInt = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVarString($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for varString');
		$this->varString = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setVarFloat($val) {
		
		$this->varFloat = (int)$val;
	}

}

