<?php

namespace Controle;

/**
 * StoreType
 * The configuration of an eBay Store.
 */
class StoreType
{
	// @codingStandardsIgnoreStart
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
	 * @var \Controle\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $URL;
	/**
	 * @var \Controle\StoreSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
	 */
	public $SubscriptionLevel;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\StoreLogoType | Store logo.
	 */
	public $Logo;
	/**
	 * @var \Controle\StoreThemeType | Store theme.
	 */
	public $Theme;
	/**
	 * @var \Controle\StoreHeaderStyleCodeType | Style for the Store header.
	 */
	public $HeaderStyle;
	/**
	 * @var int | Page to use as the Store's homepage (default is 0). To change the homepage, specify the
	 * PageID of one of the Store's custom pages.
	 */
	public $HomePage;
	/**
	 * @var \Controle\StoreItemListLayoutCodeType | The default layout type to use for the Store items.
	 */
	public $ItemListLayout;
	/**
	 * @var \Controle\StoreItemListSortOrderCodeType | The default sort order to use for the items for sale in the Store.
	 */
	public $ItemListSortOrder;
	/**
	 * @var \Controle\StoreCustomHeaderLayoutCodeType | Layout for the Store's custom header.
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
	 * @var \Controle\StoreCustomCategoryArrayType | Custom categories for the Store. Deprecated (input ignored) for SetStore with request version
	 * 449 or higher. Use SetStoreCategories with request verison 449 or higher to modify store
	 * category structures.
	 */
	public $CustomCategories;
	/**
	 * @var \Controle\StoreCustomListingHeaderType | Custom listing header for the Store.
	 */
	public $CustomListingHeader;
	/**
	 * @var \Controle\MerchDisplayCodeType | Specifies the chosen customization display scheme for this store's Merch Widgets. See MerchDisplayCodeType
	 * for specific values.
	 */
	public $MerchDisplay;
	/**
	 * @var dateTime | Indicates the time the store was last opened or reopened.
	 */
	public $LastOpenedTime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setURLPath($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for URLPath');
        }
        $this->URLPath = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws \Exception
	 */
	public function setURL($val)
	{
        $this->URL = $val;
	}

	/**
	 * @param StoreSubscriptionLevelCodeType $val
	 * @throws \Exception
	 */
	public function setSubscriptionLevel($val)
	{
        $this->SubscriptionLevel = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param StoreLogoType $val
	 * @throws \Exception
	 */
	public function setLogo($val)
	{
        $this->Logo = $val;
	}

	/**
	 * @param StoreThemeType $val
	 * @throws \Exception
	 */
	public function setTheme($val)
	{
        $this->Theme = $val;
	}

	/**
	 * @param StoreHeaderStyleCodeType $val
	 * @throws \Exception
	 */
	public function setHeaderStyle($val)
	{
        $this->HeaderStyle = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHomePage($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HomePage = $val;
	}

	/**
	 * @param StoreItemListLayoutCodeType $val
	 * @throws \Exception
	 */
	public function setItemListLayout($val)
	{
        $this->ItemListLayout = $val;
	}

	/**
	 * @param StoreItemListSortOrderCodeType $val
	 * @throws \Exception
	 */
	public function setItemListSortOrder($val)
	{
        $this->ItemListSortOrder = $val;
	}

	/**
	 * @param StoreCustomHeaderLayoutCodeType $val
	 * @throws \Exception
	 */
	public function setCustomHeaderLayout($val)
	{
        $this->CustomHeaderLayout = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCustomHeader($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CustomHeader');
        }
        $this->CustomHeader = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setExportListings($val)
	{
        $this->ExportListings = $val;
	}

	/**
	 * @param StoreCustomCategoryArrayType $val
	 * @throws \Exception
	 */
	public function setCustomCategories($val)
	{
        $this->CustomCategories = $val;
	}

	/**
	 * @param StoreCustomListingHeaderType $val
	 * @throws \Exception
	 */
	public function setCustomListingHeader($val)
	{
        $this->CustomListingHeader = $val;
	}

	/**
	 * @param MerchDisplayCodeType $val
	 * @throws \Exception
	 */
	public function setMerchDisplay($val)
	{
        $this->MerchDisplay = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setLastOpenedTime($val)
	{
        $this->LastOpenedTime = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
