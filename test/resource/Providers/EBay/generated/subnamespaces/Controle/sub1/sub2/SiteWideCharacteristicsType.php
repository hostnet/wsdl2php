<?php

namespace Controle\sub1\sub2;
/**
 * SiteWideCharacteristicsType
 * A list of one or more characteristics sets mapped to the category, if any. Use this information
 * when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs)
 * functionality.
 */
class SiteWideCharacteristicsType {
	/**
	 * @var \Controle\sub1\sub2\CharacteristicsSetType | Container for site-wide characteristics set information.
	 */
	public $CharacteristicsSet;
	/**
	 * @var string | A category that does not support the specified site-wide characteristics set.
	 */
	public $ExcludeCategoryID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

