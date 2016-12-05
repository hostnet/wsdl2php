<?php

namespace Controle\sub1\sub2;

class BankAccount
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var string
	 */
	public $IBAN;
	/**
	 * @var string
	 */
	public $BIC;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var \Controle\sub1\sub2\BankAccountType
	 */
	public $Type;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Id = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Number');
        }
        $this->Number = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIBAN($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IBAN');
        }
        $this->IBAN = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBIC($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BIC');
        }
        $this->BIC = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for City');
        }
        $this->City = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (string)$val;
	}

	/**
	 * @param BankAccountType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (BankAccountType)$val;
	}
}
