<?php

namespace Controle;
/**
 * StoreLogoType
 * Store logo.
 */
class StoreLogoType {
    /**
     * @var int | Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     */
    public $LogoID;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

