<?php

namespace Controle\sub1\sub2;
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
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

