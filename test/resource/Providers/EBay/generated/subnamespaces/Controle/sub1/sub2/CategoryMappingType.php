<?php

namespace Controle\sub1\sub2;

/**
 * CategoryMappingType
 * Mapping between an old category ID and an active category ID.
 */
class CategoryMappingType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var string
	 */
	public $oldID;
	/**
	 * @var string
	 */
	public $id;
	// @codingStandardsIgnoreEnd

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOldID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for oldID');
        }
        $this->oldID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for id');
        }
        $this->id = $val;
	}
}
