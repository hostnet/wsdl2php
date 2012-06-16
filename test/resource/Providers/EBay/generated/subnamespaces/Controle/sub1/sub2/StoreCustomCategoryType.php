<?php

namespace Controle\sub1\sub2;
/**
 * StoreCustomCategoryType
 * Configuration of a store custom category.
 */
class StoreCustomCategoryType {
	/**
	 * @var int | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var int | Order in which the page is displayed in the list of custom pages.
	 */
	public $Order;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomCategoryType | Container for store custom subcategory configuration information. This field is being deprecated.
	 * Use ChildCategory to specify subcategories.
	 */
	public $ChildrenCategories;
	/**
	 * @var \Controle\sub1\sub2\StoreCustomCategoryType | Describes the configuration of a store custom subcategory. Stores support three levels
	 * of categories.
	 */
	public $ChildCategory;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

