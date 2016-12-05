<?php

namespace Controle;

/**
 * SiteWideCharacteristicsType
 * A list of one or more characteristics sets mapped to the category, if any. Use this information
 * when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs)
 * functionality.
 */
class SiteWideCharacteristicsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\CharacteristicsSetType | Container for site-wide characteristics set information.
	 */
	public $CharacteristicsSet;
	/**
	 * @var string | A category that does not support the specified site-wide characteristics set.
	 */
	public $ExcludeCategoryID;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CharacteristicsSetType $val
	 * @throws Exception
	 */
	public function setCharacteristicsSet($val)
	{
        $this->CharacteristicsSet = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setExcludeCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExcludeCategoryID');
        }
        $this->ExcludeCategoryID = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
