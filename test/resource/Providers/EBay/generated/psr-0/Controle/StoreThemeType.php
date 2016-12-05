<?php

namespace Controle;

/**
 * StoreThemeType
 * Store theme.
 */
class StoreThemeType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Unique identifier for each theme in this group. There is at least one theme in a theme
	 * group.
	 */
	public $ThemeID;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var \Controle\StoreColorSchemeType | Theme color scheme.
	 */
	public $ColorScheme;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ThemeID = (int)$val;
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
	 * @param StoreColorSchemeType $val
	 * @throws Exception
	 */
	public function setColorScheme($val)
	{
        $this->ColorScheme = (StoreColorSchemeType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
