<?php

namespace Controle\sub1\sub2;

/**
 * CategoryArrayType
 * Container for a list of categories.
 */
class CategoryArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CategoryType | Describes a category that contains items that match the query.
	 */
	public $Category;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CategoryType $val
	 * @throws Exception
	 */
	public function setCategory($val)
	{
        $this->Category = (CategoryType)$val;
	}
}
