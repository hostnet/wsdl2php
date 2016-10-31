<?php

namespace Controle\sub1\sub2;
class Extension {
	/**
	 * @var string
	 */
	public $Key;
	/**
	 * @var string
	 */
	public $Value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKey($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Key');
		$this->Key = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Value');
		$this->Value = (int)$val;
	}

}

