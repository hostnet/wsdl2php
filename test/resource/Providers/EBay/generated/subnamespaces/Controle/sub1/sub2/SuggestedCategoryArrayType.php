<?php

namespace Controle\sub1\sub2;

/**
 * SuggestedCategoryArrayType
 * Contains an array of categories that contain listings with     specified keywords in their
 * titles or descriptions. The array     can contain up to 10 categories.
 */
class SuggestedCategoryArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\SuggestedCategoryType | Describes a category that contains listings that match    specified keywords in the query.
	 * Returned if a category matches the query.
	 */
	public $SuggestedCategory;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SuggestedCategoryType $val
	 * @throws \Exception
	 */
	public function setSuggestedCategory($val)
	{
        $this->SuggestedCategory = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
