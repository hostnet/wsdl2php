<?php

namespace Controle\sub1\sub2;
/**
 * CrossPromotionPreferencesType
 * Contains preferences describing how items similar to the one the user is  presently viewing
 * are promoted.
 */
class CrossPromotionPreferencesType {
	/**
	 * @var boolean | (For eBay store owners only) Specifies whether cross-promotions are enabled for the seller's
	 * listings.
	 */
	public $CrossPromotionEnabled;
	/**
	 * @var \Controle\sub1\sub2\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items should be shown in cross-sell promotions
	 * (such as Buy It Now or Store Inventory items) and in which sequence.
	 */
	public $CrossSellItemFormatSortFilter;
	/**
	 * @var \Controle\sub1\sub2\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
	 * and whether they should precede other items in cross-sell promotions.
	 */
	public $CrossSellGallerySortFilter;
	/**
	 * @var \Controle\sub1\sub2\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items displayed in a cross-sell promotion.
	 */
	public $CrossSellItemSortFilter;
	/**
	 * @var \Controle\sub1\sub2\ItemFormatSortFilterCodeType | (For eBay store owners only) Specifies which items (such as Buy It Now or Store Inventory
	 * items) should be shown in upsell promotions and in which sequence.
	 */
	public $UpSellItemFormatSortFilter;
	/**
	 * @var \Controle\sub1\sub2\GallerySortFilterCodeType | (For eBay store owners only) Specifies whether to display only items with gallery images
	 * in upsell promotions and whether they should precede other items.
	 */
	public $UpSellGallerySortFilter;
	/**
	 * @var \Controle\sub1\sub2\ItemSortFilterCodeType | (For eBay store owners only) Specifies how to sort items used in an upsell promotion.
	 */
	public $UpSellItemSortFilter;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

