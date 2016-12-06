<?php

namespace Controle;

/**
 * CategoryType
 * Container for data on one listing category.
 */
class CategoryType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $BestOfferEnabled;
	/**
	 * @var boolean | If true, indicates that the category supports immediate payment. If false or not present,
	 * the category does not support immediate payment.
	 */
	public $AutoPayEnabled;
	/**
	 * @var boolean | If true, the category supports business-to-business (B2B) VAT listings. Applicable to the
	 * eBay Germany (DE), Austria (AT), and Switzerland CH) sites only. If false or not present, the
	 * category does not support this feature.
	 */
	public $B2BVATEnabled;
	/**
	 * @var boolean | If true, the category is associated with catalog content and the corresponding catalog
	 * is identified by the characteristic set ID. See CharacteristicsSets. As the Pre-filled
	 * Item Information feature uses the Item Specifics feature, the set of catalog-enabled categories is
	 * a subset of the categories that are mapped to characteristic sets. Not returned if false.
	 */
	public $CatalogEnabled;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var int | The level where the category fits in the site's category hierarchy. For example, if this
	 * field has a value of 2, then the category is two levels below the root category in the
	 * site's category hierarchy. For the GetSearchResults response, NumOfItems indicates the
	 * total quantity of matching items in a category. Matching categories at the same level (i.e.,
	 * in sibling categories) are sorted by NumOfItems, descending order.
	 */
	public $CategoryLevel;
	/**
	 * @var string | Display name of the category as it would appear on the eBay Web site. In GetItem, this
	 * is a fully qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel,
	 * Goebel).
	 */
	public $CategoryName;
	/**
	 * @var string | Category ID identifying a category that is an ancestor of the category indicated in CategoryID. For
	 * GetCategories, returns the same value as CategoryID if the CategoryLevel is 1. For GetSuggestedCategories,
	 * multiple CategoryParentID fields can be returned in sequence, starting with the root category and
	 * ending with the category that is the direct parent of the category specified in CategoryID. Use
	 * these parent fields and the CategoryID field to build the fully qualified category browse
	 * path or "breadcrumbs" (e.g., 58058:3516:3517). For GetPopularKeywords, -1 represents the
	 * root category.
	 */
	public $CategoryParentID;
	/**
	 * @var string | Display name of the category indicated in CategoryParentID. For GetSuggestedCategories,
	 * multiple CategoryParentName fields can be returned in sequence, starting with the root
	 * category and ending with the category that is the direct parent of the category specified
	 * in CategoryName. Use these parent fields and the CategoryName field to build the fully
	 * qualified category browse path or "breadcrumbs" (e.g., Computers & Networking > Technology
	 * Books > Certification).
	 */
	public $CategoryParentName;
	/**
	 * @var int | Numeric identifier for a buy-side product finder. A product finder defines how to
	 *        search for Item Specifics in listings (e.g., how to search against a particular
	 * shoe size).            See the eBay Web Services guide for details about product finders.
	 *            You need to specify a product finder ID when you are searching against a listing's
	 *             Item Specifics (i.e., when you use SearchAttributes). A few categories, such
	 * as US Event Tickets and US eBay Motors, can also return a subset of Item Specifics (e.g.,
	 * the event venue, section, and row for a ticket listing) in the search results. To retrieve
	 * this data, you must specify the product finder ID, and also specify a detail level of ItemReturnAttributes
	 * or ReturnAll. Use GetProductFinder to determine valid product finder IDs.
	 */
	public $ProductFinderID;
	/**
	 * @var boolean | Returned from GetCategory2CS calls. Supports listing with Pre-filled Item Information. If
	 * the category supports single-attribute search, this field returns a value of true. Otherwise
	 * this field not returned or returned as false.
	 */
	public $ProductSearchPageAvailable;
	/**
	 * @var boolean | Previous behavior: Supports listing with Pre-filled Item Information. If the category supports
	 * a product finder-based search, this field returns a value of true. Otherwise this field
	 * returns null or false.
	 */
	public $ProductFinderAvailable;
	/**
	 * @var \Controle\ExtendedProductFinderIDType | Returned from GetCategory2CS calls with compatibility level 369 and higher. Supports listing
	 * with Pre-filled Item Information. Specifies the buy-side and/or sell-side product finder
	 * IDs associated with this category, if any.
	 */
	public $ProductFinderIDs;
	/**
	 * @var \Controle\CharacteristicsSetType | Returned from GetCategory2CS calls. A list of one or more characteristics sets mapped to
	 * the category. Use this information when working with Item Specifics (Attributes) and Pre-filled
	 * Item Information (Catalogs) functionality. Output only.
	 */
	public $CharacteristicsSets;
	/**
	 * @var boolean | If true, indicates a category that has expired and to which items may not be listed.
	 */
	public $Expired;
	/**
	 * @var boolean | If true, indicates that the category is a fixed-fee category. Use this information to identify
	 * categories are not eligible for eBay Stores Inventory format listings. You cannot list
	 * eBay Store Inventory format listings in fixed-fee categories on international sites. Output
	 * only.
	 */
	public $IntlAutosFixedCat;
	/**
	 * @var boolean | If true, indicates that the category indicated in CategoryID is a leaf category, in which
	 * items may be listed (if the category is not also expired or virtual).
	 */
	public $LeafCategory;
	/**
	 * @var boolean | If true, indicates the that category indicated in CategoryID is a virtual category, to
	 * which items may not be listed.
	 */
	public $Virtual;
	/**
	 * @var int | The total quantity of matching items in the category. In the GetSearchResults response,
	 * matching categories at the same level (i.e., sibling categories) are sorted by this value.
	 * That is, if the request specifies that fewer categories or subcategories should be returned, the
	 * ones with the most matching items are returned first. See the Developer's guide for more
	 * information.
	 */
	public $NumOfItems;
	/**
	 * @var boolean | Indicates whether this category is eligible for Motors Seller Guarantee program. This tag
	 * is emitted for eligible categories only on the eBay Motors site.
	 */
	public $SellerGuaranteeEligible;
	/**
	 * @var boolean | Indicates whether the category (and its subcategories) allows or disallows listing with
	 * a reserve price, depending on the prevailing site configuration indicated by ReservePriceAllowed. ORPA
	 * (override reserve price allowed) indicates when the category is an exception to the site's
	 * ReservePriceAllowed policy.<br> <br> If ORPA is true, the category overrides (toggles or
	 * reverses) the site's ReservePriceAllowed setting. In other words:<br> - If ReservePriceAllowed
	 * is true, reserve price is not allowed in this category.<br> - If ReservePriceAllowed is
	 * false, reserve price is allowed in this category.<br><br> If ORPA is not present (or false),
	 * there is no override. That is, the category's setting is the same as the site's ReservePriceAllowed
	 * setting.<br> <br> This toggling logic is designed to reduce the size of the GetCategories response
	 * by only returning ORPA when the category's policy is different from the site's policy.
	 * (If ORPA is true for a category, you can assume its subcategories inherit the same setting
	 * unless otherwise specified.)
	 */
	public $ORPA;
	/**
	 * @var boolean | Indicates whether the category (and its subcategories) allows or disallows reducing a listing's
	 * reserve price, depending on the prevailing site configuration indicated by ReduceReserveAllowed. ORRA
	 * (override reduce reserve allowed) indicates when the category is an exception to the site's
	 * ReduceReserveAllowed policy.<br><br> If ORRA is true, the category overrides (toggles or
	 * reverses) the site's ReduceReserveAllowed setting. In other words:<br> - If ReduceReserveAllowed
	 * is true, reserve price reduction is not allowed in this category.<br> - If ReduceReserveAllowed
	 * is false, reserve price reduction is allowed in this category.<br><br> If ORRA is not present
	 * (false), there is no override. That is, the category's setting is the same as the site's
	 * ReduceReserveAllowed setting.<br> <br> This toggling logic is designed to reduce the size
	 * of the GetCategories response by only returning ORRA when the category's policy is different from
	 * the site's policy.  (If ORRA is true for a category, you can assume its subcategories inherit
	 * the same setting unless otherwise specified.)
	 */
	public $ORRA;
	/**
	 * @var boolean | Item.LotSize is not permitted when you list in this category. If true, indicates that lot
	 * sizes are disabled in the specified category.
	 */
	public $LSD;
	/**
	 * @var string | The list of keywords returned by GetPopularKeywords.
	 */
	public $Keywords;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferEnabled($val)
	{
        $this->BestOfferEnabled = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setAutoPayEnabled($val)
	{
        $this->AutoPayEnabled = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setB2BVATEnabled($val)
	{
        $this->B2BVATEnabled = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCatalogEnabled($val)
	{
        $this->CatalogEnabled = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCategoryLevel($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CategoryLevel = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryName');
        }
        $this->CategoryName = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryParentID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryParentID');
        }
        $this->CategoryParentID = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryParentName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryParentName');
        }
        $this->CategoryParentName = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setProductFinderID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ProductFinderID = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setProductSearchPageAvailable($val)
	{
        $this->ProductSearchPageAvailable = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setProductFinderAvailable($val)
	{
        $this->ProductFinderAvailable = $val;
	}

	/**
	 * @param ExtendedProductFinderIDType $val
	 * @throws Exception
	 */
	public function setProductFinderIDs($val)
	{
        $this->ProductFinderIDs = $val;
	}

	/**
	 * @param CharacteristicsSetType $val
	 * @throws Exception
	 */
	public function setCharacteristicsSets($val)
	{
        $this->CharacteristicsSets = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpired($val)
	{
        $this->Expired = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIntlAutosFixedCat($val)
	{
        $this->IntlAutosFixedCat = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLeafCategory($val)
	{
        $this->LeafCategory = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setVirtual($val)
	{
        $this->Virtual = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setNumOfItems($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->NumOfItems = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSellerGuaranteeEligible($val)
	{
        $this->SellerGuaranteeEligible = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setORPA($val)
	{
        $this->ORPA = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setORRA($val)
	{
        $this->ORRA = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLSD($val)
	{
        $this->LSD = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeywords($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Keywords');
        }
        $this->Keywords = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
