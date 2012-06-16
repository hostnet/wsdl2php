<?php

namespace Controle\sub1\sub2;
/**
 * StoreColorSchemeType
 * Store color scheme.
 */
class StoreColorSchemeType {
	/**
	 * @var int | Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme
	 * IDs).
	 */
	public $ColorSchemeID;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var \Controle\sub1\sub2\StoreColorType | Store color set.
	 */
	public $Color;
	/**
	 * @var \Controle\sub1\sub2\StoreFontType | Store font set.
	 */
	public $Font;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

