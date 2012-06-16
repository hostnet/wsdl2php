<?php

namespace Controle;
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
     * @var \Controle\StoreColorType | Store color set.
     */
    public $Color;
    /**
     * @var \Controle\StoreFontType | Store font set.
     */
    public $Font;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

