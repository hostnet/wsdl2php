<?php

namespace Controle\sub1\sub2;

/**
 * StoreColorSchemeType
 * Store color scheme.
 */
class StoreColorSchemeType
{
	/**
	 * @var int | Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme
	 * IDs).
	 */
	public $colorschemeid;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $name;
	/**
	 * @var \Controle\sub1\sub2\StoreColorType | Store color set.
	 */
	public $color;
	/**
	 * @var \Controle\sub1\sub2\StoreFontType | Store font set.
	 */
	public $font;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setColorSchemeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->colorschemeid = (int)$val;
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
        $this->name = (int)$val;
	}

	/**
	 * @param StoreColorType $val
	 * @throws Exception
	 */
	public function setColor($val)
	{
        $this->color = (int)$val;
	}

	/**
	 * @param StoreFontType $val
	 * @throws Exception
	 */
	public function setFont($val)
	{
        $this->font = (int)$val;
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
