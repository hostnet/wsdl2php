<?php

namespace Controle\sub1\sub2;
/**
 * CategoryArrayType
 * Container for a list of categories.
 */
class CategoryArrayType {
	/**
	 * @var \Controle\sub1\sub2\CategoryType | Describes a category that contains items that match the query.
	 */
	public $Category;
	/**
	 * @param CategoryType $val
	 * @throws Exception
	 */
	public function setCategory($val) {
		
		$this->Category = (int)$val;
	}

}

