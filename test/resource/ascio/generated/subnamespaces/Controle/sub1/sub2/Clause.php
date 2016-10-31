<?php

namespace Controle\sub1\sub2;

class Clause
{
	/**
	 * @var string
	 */
	public $attribute;
	/**
	 * @var \Controle\sub1\sub2\SearchOperatorType
	 */
	public $operator;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Attribute');
        }
        $this->attribute = (int)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val)
	{
        $this->operator = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->value = (int)$val;
	}
}
