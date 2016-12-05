<?php

namespace Controle;

class Clause
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Attribute;
	/**
	 * @var \Controle\SearchOperatorType
	 */
	public $Operator;
	/**
	 * @var string
	 */
	public $Value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Attribute');
        }
        $this->Attribute = (string)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val)
	{
        $this->Operator = (SearchOperatorType)$val;
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
        $this->Value = (string)$val;
	}
}
