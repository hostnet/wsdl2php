<?php

namespace Controle\sub1\sub2;

/**
 * StoreType
 * The configuration of an eBay Store.
 */
class StoreType
{
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $name;
	/**
	 * @var string | The URL path of the Store (58 characters maximum). Only if you are using Chinese characters
	 * in the Name property do you need to use this field, such as if you are opening a Store
	 * on the Taiwan site. The reason for this is that the URL path is normally derived from the
	 * Store name, but it cannot be derived from the name of the Store if it contains Chinese
	 * characters because URLs cannot contain Chinese characters.
	 */
	public $urlpath;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $url;
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
	 */
	public $subscriptionlevel;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $description;
	/**
	 * @var \Controle\sub1\sub2\StoreLogoType | Store logo.
	 */
	public $logo;
	/**
	 * @var \Controle\sub1\sub2\StoreThemeType | Store theme.
	 */
	public $theme;
	/**
	 * @var \Controle\sub1\sub2\StoreHeaderStyleCodeType | Style for the Store header.
	 */
	public $headerstyle;
	/**
	 * @var int | Page to use as the Store's homepage (default is 0). To change the homepage, specify the
	 * PageID of one of the Store's custom pages.
	 */
	public $homepage;
	/**
	 * @var \Controle\sub1\sub2\StoreItemListLayoutCodeType | The default layout type to use for the Store items.
	 */
	public $itemlistlayout;
	/**
	 * @var \Controle\sub1\sub2\StoreItemListSortOrderCodeType | The default sort order to use for the items for sale in the Store.
	 */
	public $itemlistsortorder;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomHeaderLayoutCodeType | Layout for the Store's custom header.
	 */
	public $customheaderlayout;
	/**
	 * @var string | Custom header text for the Store.
	 */
	public $customheader;
	/**
	 * @var boolean | Specifies whether to export the Store listings to comparison shopping websites.
	 */
	public $exportlistings;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomCategoryArrayType | Custom categories for the Store. Deprecated (input ignored) for SetStore with request version
	 * 449 or higher. Use SetStoreCategories with request verison 449 or higher to modify store
	 * category structures.
	 */
	public $customcategories;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomListingHeaderType | Custom listing header for the Store.
	 */
	public $customlistingheader;
	/**
	 * @var \Controle\sub1\sub2\MerchDisplayCodeType | Specifies the chosen customization display scheme for this store's Merch Widgets. See MerchDisplayCodeType
	 * for specific values.
	 */
	public $merchdisplay;
	/**
	 * @var dateTime | Indicates the time the store was last opened or reopened.
	 */
	public $lastopenedtime;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setURLPath($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for URLPath');
        }
        $this->urlpath = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setURL($val)
	{
        $this->url = (int)$val;
	}

	/**
	 * @param StoreSubscriptionLevelCodeType $val
	 * @throws Exception
	 */
	public function setSubscriptionLevel($val)
	{
        $this->subscriptionlevel = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
	}

	/**
	 * @param StoreLogoType $val
	 * @throws Exception
	 */
	public function setLogo($val)
	{
        $this->logo = (int)$val;
	}

	/**
	 * @param StoreThemeType $val
	 * @throws Exception
	 */
	public function setTheme($val)
	{
        $this->theme = (int)$val;
	}

	/**
	 * @param StoreHeaderStyleCodeType $val
	 * @throws Exception
	 */
	public function setHeaderStyle($val)
	{
        $this->headerstyle = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setHomePage($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->homepage = (int)$val;
	}

	/**
	 * @param StoreItemListLayoutCodeType $val
	 * @throws Exception
	 */
	public function setItemListLayout($val)
	{
        $this->itemlistlayout = (int)$val;
	}

	/**
	 * @param StoreItemListSortOrderCodeType $val
	 * @throws Exception
	 */
	public function setItemListSortOrder($val)
	{
        $this->itemlistsortorder = (int)$val;
	}

	/**
	 * @param StoreCustomHeaderLayoutCodeType $val
	 * @throws Exception
	 */
	public function setCustomHeaderLayout($val)
	{
        $this->customheaderlayout = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCustomHeader($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CustomHeader');
        }
        $this->customheader = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExportListings($val)
	{
        $this->exportlistings = (int)$val;
	}

	/**
	 * @param StoreCustomCategoryArrayType $val
	 * @throws Exception
	 */
	public function setCustomCategories($val)
	{
        $this->customcategories = (int)$val;
	}

	/**
	 * @param StoreCustomListingHeaderType $val
	 * @throws Exception
	 */
	public function setCustomListingHeader($val)
	{
        $this->customlistingheader = (int)$val;
	}

	/**
	 * @param MerchDisplayCodeType $val
	 * @throws Exception
	 */
	public function setMerchDisplay($val)
	{
        $this->merchdisplay = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastOpenedTime($val)
	{
        $this->lastopenedtime = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
