<?php

namespace Controle;

/**
 * StoreCustomCategoryArrayType
 * Set of custom categories for the Store.
 */
class StoreCustomCategoryArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\StoreCustomCategoryType | A Store custom category.
	 */
	public $CustomCategory;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreCustomCategoryType $val
	 * @throws \Exception
	 */
	public function setCustomCategory($val)
	{
        $this->CustomCategory = $val;
	}
}
