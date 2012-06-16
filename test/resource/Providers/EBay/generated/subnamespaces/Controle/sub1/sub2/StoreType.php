<?php

namespace Controle\sub1\sub2;
/**
 * StoreType
 * The configuration of an eBay Store.
 */
class StoreType {
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | The URL path of the Store (58 characters maximum). Only if you are using Chinese characters
	 * in the Name property do you need to use this field, such as if you are opening a Store
	 * on the Taiwan site. The reason for this is that the URL path is normally derived from the
	 * Store name, but it cannot be derived from the name of the Store if it contains Chinese
	 * characters because URLs cannot contain Chinese characters.
	 */
	public $URLPath;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $URL;
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
	 */
	public $SubscriptionLevel;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\sub1\sub2\StoreLogoType | Store logo.
	 */
	public $Logo;
	/**
	 * @var \Controle\sub1\sub2\StoreThemeType | Store theme.
	 */
	public $Theme;
	/**
	 * @var \Controle\sub1\sub2\StoreHeaderStyleCodeType | Style for the Store header.
	 */
	public $HeaderStyle;
	/**
	 * @var int | Page to use as the Store's homepage (default is 0). To change the homepage, specify the
	 * PageID of one of the Store's custom pages.
	 */
	public $HomePage;
	/**
	 * @var \Controle\sub1\sub2\StoreItemListLayoutCodeType | The default layout type to use for the Store items.
	 */
	public $ItemListLayout;
	/**
	 * @var \Controle\sub1\sub2\StoreItemListSortOrderCodeType | The default sort order to use for the items for sale in the Store.
	 */
	public $ItemListSortOrder;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomHeaderLayoutCodeType | Layout for the Store's custom header.
	 */
	public $CustomHeaderLayout;
	/**
	 * @var string | Custom header text for the Store.
	 */
	public $CustomHeader;
	/**
	 * @var boolean | Specifies whether to export the Store listings to comparison shopping websites.
	 */
	public $ExportListings;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomCategoryArrayType | Custom categories for the Store. Deprecated (input ignored) for SetStore with request version
	 * 449 or higher. Use SetStoreCategories with request verison 449 or higher to modify store
	 * category structures.
	 */
	public $CustomCategories;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomListingHeaderType | Custom listing header for the Store.
	 */
	public $CustomListingHeader;
	/**
	 * @var \Controle\sub1\sub2\MerchDisplayCodeType | Specifies the chosen customization display scheme for this store's Merch Widgets. See MerchDisplayCodeType
	 * for specific values.
	 */
	public $MerchDisplay;
	/**
	 * @var dateTime | Indicates the time the store was last opened or reopened.
	 */
	public $LastOpenedTime;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

