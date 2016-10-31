<?php

namespace Controle;

/**
 * StoreCustomCategoryArrayType
 * Set of custom categories for the Store.
 */
class StoreCustomCategoryArrayType
{
	/**
	 * @var \Controle\StoreCustomCategoryType | A Store custom category.
	 */
	public $customcategory;
	/**
	 * @param StoreCustomCategoryType $val
	 * @throws Exception
	 */
	public function setCustomCategory($val)
	{
        $this->customcategory = (int)$val;
	}
}
