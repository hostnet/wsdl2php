<?php

namespace Controle;
/**
 * StoreThemeType
 * Store theme.
 */
class StoreThemeType {
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
}

