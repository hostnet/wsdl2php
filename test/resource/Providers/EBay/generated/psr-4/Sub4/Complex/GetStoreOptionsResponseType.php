<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreOptionsResponseType
 * Contains the current list of options for Store configurations.
 */
class GetStoreOptionsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreThemeArrayType | The current set of basic themes. Each basic theme definition specifies a valid color
     * scheme for the theme.
     */
    public $BasicThemeArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreThemeArrayType | The current set of advances themes. Unlike basic themes, you can use any colorscheme
     * with an advanced theme. These themes are suitable for more advanced customization.
     */
    public $AdvancedThemeArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreLogoArrayType | The current set of Store logos. These logos are used in the Store header.
     */
    public $LogoArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionArrayType | The current set of eBay Store subscription tiers and corresponding subscription prices.
     */
    public $SubscriptionArray;
    /**
     * @var int | Maximum quantity of matching categories to return at the first level of the
     *     category hierarchy (CategoryLevel 1).
     */
    public $MaxCategories;
    /**
     * @var int | The maximum number of category levels in this store.
     */
    public $MaxCategoryLevels;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreThemeArrayType $val
     * @throws \Exception
     */
    public function setBasicThemeArray($val)
    {
        $this->BasicThemeArray = $val;
    }

    /**
     * @param StoreThemeArrayType $val
     * @throws \Exception
     */
    public function setAdvancedThemeArray($val)
    {
        $this->AdvancedThemeArray = $val;
    }

    /**
     * @param StoreLogoArrayType $val
     * @throws \Exception
     */
    public function setLogoArray($val)
    {
        $this->LogoArray = $val;
    }

    /**
     * @param StoreSubscriptionArrayType $val
     * @throws \Exception
     */
    public function setSubscriptionArray($val)
    {
        $this->SubscriptionArray = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setMaxCategories($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxCategories = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setMaxCategoryLevels($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxCategoryLevels = $val;
    }
}
