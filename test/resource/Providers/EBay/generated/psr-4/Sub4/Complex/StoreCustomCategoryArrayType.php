<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreCustomCategoryArrayType
 * Set of custom categories for the Store.
 */
class StoreCustomCategoryArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryType | A Store custom category.
     */
    public $CustomCategory;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreCustomCategoryType $val
     * @throws Exception
     */
    public function setCustomCategory($val)
    {
        $this->CustomCategory = $val;
    }
}
