<?php

namespace Controle\sub1\sub2;

/**
 * SellerFavoriteItemPreferencesType
 * Contains the data for the seller favorite item preferences, i.e.  the manual or automatic
 * selection criteria to display items for buyer's favourite seller opt in email marketing.
 */
class SellerFavoriteItemPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | The keywords in the item title for the automatic item search criteria.
	 */
	public $SearchKeywords;
	/**
	 * @var int | Numeric ID for a custom category that the seller created in their eBay Store, if any. eBay
	 * Stores sellers can create up to three levels of custom categories for their stores. Items
	 * can only be listed in store categories that have no child categories (subcategories). If
	 * you attempt to list an item in a category that has subcategories, the call response contains
	 * a warning, and the item is listed in the Other store category. In GetSearchResults, this
	 * field currently returns 0. As a workaround, use GetItem or related calls to get the ID.
	 */
	public $StoreCategoryID;
	/**
	 * @var \Controle\sub1\sub2\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
	 */
	public $ListingType;
	/**
	 * @var \Controle\sub1\sub2\StoreItemListSortOrderCodeType | The sort order chosen from the standard ebay sorts for the automatic search criteria.
	 */
	public $SearchSortOrder;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the lower limit of price range for the automatic search criteria.
	 */
	public $MinPrice;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the upper limit of price range for the automatic search criteria.
	 */
	public $MaxPrice;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | Specifies the list of favorite items.
	 */
	public $FavoriteItemID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchKeywords($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SearchKeywords');
        }
        $this->SearchKeywords = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStoreCategoryID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->StoreCategoryID = (int)$val;
	}

	/**
	 * @param ListingTypeCodeType $val
	 * @throws Exception
	 */
	public function setListingType($val)
	{
        $this->ListingType = (int)$val;
	}

	/**
	 * @param StoreItemListSortOrderCodeType $val
	 * @throws Exception
	 */
	public function setSearchSortOrder($val)
	{
        $this->SearchSortOrder = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMinPrice($val)
	{
        $this->MinPrice = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMaxPrice($val)
	{
        $this->MaxPrice = (int)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setFavoriteItemID($val)
	{
        $this->FavoriteItemID = (int)$val;
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
