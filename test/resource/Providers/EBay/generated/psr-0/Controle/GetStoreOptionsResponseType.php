<?php

namespace Controle;
/**
 * GetStoreOptionsResponseType
 * Contains the current list of options for Store configurations.
 */
class GetStoreOptionsResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\StoreThemeArrayType | The current set of basic themes. Each basic theme definition specifies a valid color scheme
	 * for the theme.
	 */
	public $BasicThemeArray;
	/**
	 * @var \Controle\StoreThemeArrayType | The current set of advances themes. Unlike basic themes, you can use any colorscheme with
	 * an advanced theme. These themes are suitable for more advanced customization.
	 */
	public $AdvancedThemeArray;
	/**
	 * @var \Controle\StoreLogoArrayType | The current set of Store logos. These logos are used in the Store header.
	 */
	public $LogoArray;
	/**
	 * @var \Controle\StoreSubscriptionArrayType | The current set of eBay Store subscription tiers and corresponding subscription prices.
	 */
	public $SubscriptionArray;
	/**
	 * @var int | Maximum quantity of matching categories to return at the first level of the
	 *  category hierarchy (CategoryLevel 1).
	 */
	public $MaxCategories;
	/**
	 * @var int | The maximum number of category levels in this store.
	 */
	public $MaxCategoryLevels;
}

