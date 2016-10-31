<?php

namespace Controle;
/**
 * ThemeGroupType
 * Data for one theme group. Returned for GetDescriptionTemplates if theme groups are requested.
 */
class ThemeGroupType {
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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setGroupID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->GroupID = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setGroupName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for GroupName');
		$this->GroupName = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ThemeID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeTotal($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ThemeTotal = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

