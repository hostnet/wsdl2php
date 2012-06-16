<?php

namespace Controle;
/**
 * StoreCustomListingHeaderType
 * Configuration of a Store custom listing header.
 */
class StoreCustomListingHeaderType {
    /**
     * @var \Controle\StoreCustomListingHeaderDisplayCodeType | Display type for the custom listing header.
     */
    public $DisplayType;
    /**
     * @var boolean | Store logo.
     */
    public $Logo;
    /**
     * @var boolean | Specifies whether the custom header has a search box.
     */
    public $SearchBox;
    /**
     * @var \Controle\StoreCustomListingHeaderLinkType | Link to include in the custom header.
     */
    public $LinkToInclude;
    /**
     * @var boolean | Specifies whether the custom header has a link to Add to Favorite Stores.
     */
    public $AddToFavoriteStores;
    /**
     * @var boolean | Specifies whether the custom header has a link to Sign up for Store Newsletter.
     */
    public $SignUpForStoreNewsletter;
    /**
     * @var boolean | Specifies whether the bread crumb needs to be displayed above the listing header.
     */
    public $BreadCrumb;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

