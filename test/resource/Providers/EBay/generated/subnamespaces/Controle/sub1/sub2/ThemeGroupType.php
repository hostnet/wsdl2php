<?php

namespace Controle\sub1\sub2;

/**
 * ThemeGroupType
 * Data for one theme group. Returned for GetDescriptionTemplates if theme groups are requested.
 */
class ThemeGroupType
{
	/**
	 * @var int | Unique identifier for this theme group.
	 */
	public $groupid;
	/**
	 * @var string | Name of this theme group (localized to the language associated with the eBay site).
	 */
	public $groupname;
	/**
	 * @var int | Unique identifier for each theme in this group. There is at least one theme in a theme
	 * group.
	 */
	public $themeid;
	/**
	 * @var int | The number of ThemeID elements in this group.
	 */
	public $themetotal;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setGroupID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->groupid = (int)$val;
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
        $this->groupname = (int)$val;
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
        $this->themeid = (int)$val;
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
        $this->themetotal = (int)$val;
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
