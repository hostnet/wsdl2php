<?php

namespace Controle\sub1\sub2;

/**
 * ThemeGroupType
 * Data for one theme group. Returned for GetDescriptionTemplates if theme groups are requested.
 */
class ThemeGroupType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Unique identifier for this theme group.
	 */
	public $GroupID;
	/**
	 * @var string | Name of this theme group (localized to the language associated with the eBay site).
	 */
	public $GroupName;
	/**
	 * @var int | Unique identifier for each theme in this group. There is at least one theme in a theme
	 * group.
	 */
	public $ThemeID;
	/**
	 * @var int | The number of ThemeID elements in this group.
	 */
	public $ThemeTotal;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setGroupID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->GroupID = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setGroupName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for GroupName');
        }
        $this->GroupName = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ThemeID = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeTotal($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ThemeTotal = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
