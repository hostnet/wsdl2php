<?php

namespace Controle\sub1\sub2;

/**
 * GetStoreOptionsResponseType
 * Contains the current list of options for Store configurations.
 */
class GetStoreOptionsResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\StoreThemeArrayType | The current set of basic themes. Each basic theme definition specifies a valid color scheme
	 * for the theme.
	 */
	public $basicthemearray;
	/**
	 * @var \Controle\sub1\sub2\StoreThemeArrayType | The current set of advances themes. Unlike basic themes, you can use any colorscheme with
	 * an advanced theme. These themes are suitable for more advanced customization.
	 */
	public $advancedthemearray;
	/**
	 * @var \Controle\sub1\sub2\StoreLogoArrayType | The current set of Store logos. These logos are used in the Store header.
	 */
	public $logoarray;
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionArrayType | The current set of eBay Store subscription tiers and corresponding subscription prices.
	 */
	public $subscriptionarray;
	/**
	 * @var int | Maximum quantity of matching categories to return at the first level of the
	 *  category hierarchy (CategoryLevel 1).
	 */
	public $maxcategories;
	/**
	 * @var int | The maximum number of category levels in this store.
	 */
	public $maxcategorylevels;
	/**
	 * @param StoreThemeArrayType $val
	 * @throws Exception
	 */
	public function setBasicThemeArray($val)
	{
        $this->basicthemearray = (int)$val;
	}

	/**
	 * @param StoreThemeArrayType $val
	 * @throws Exception
	 */
	public function setAdvancedThemeArray($val)
	{
        $this->advancedthemearray = (int)$val;
	}

	/**
	 * @param StoreLogoArrayType $val
	 * @throws Exception
	 */
	public function setLogoArray($val)
	{
        $this->logoarray = (int)$val;
	}

	/**
	 * @param StoreSubscriptionArrayType $val
	 * @throws Exception
	 */
	public function setSubscriptionArray($val)
	{
        $this->subscriptionarray = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMaxCategories($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxcategories = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMaxCategoryLevels($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxcategorylevels = (int)$val;
	}
}
