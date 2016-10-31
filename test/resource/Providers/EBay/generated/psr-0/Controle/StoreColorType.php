<?php

namespace Controle;

/**
 * StoreColorType
 * Store color set.
 */
class StoreColorType
{
	/**
	 * @var string | Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $primary;
	/**
	 * @var string | Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $secondary;
	/**
	 * @var string | Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $accent;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPrimary($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Primary');
        }
        $this->primary = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSecondary($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Secondary');
        }
        $this->secondary = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccent($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Accent');
        }
        $this->accent = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
