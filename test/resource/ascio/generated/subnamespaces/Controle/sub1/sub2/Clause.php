<?php

namespace Controle\sub1\sub2;
class Clause {
	/**
	 * @var string
	 */
	public $Attribute;
	/**
	 * @var \Controle\sub1\sub2\SearchOperatorType
	 */
	public $Operator;
	/**
	 * @var string
	 */
	public $Value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Attribute');
		$this->Attribute = (int)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val) {
		
		$this->Operator = (int)$val;
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

