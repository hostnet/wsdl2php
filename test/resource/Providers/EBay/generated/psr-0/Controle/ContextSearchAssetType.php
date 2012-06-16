<?php

namespace Controle;
/**
 * ContextSearchAssetType
 * Score and rank for a keyword identified for a web page.
 */
class ContextSearchAssetType {
	/**
	 * @var string | Related keyword.
	 */
	public $Keyword;
	/**
	 * @var \Controle\CategoryType | Describes a category that contains items that match the query.
	 */
	public $Category;
	/**
	 * @var int | The ranking of this keyword and category relative to other keywords and categories (when
	 * scores are sorted).
	 */
	public $Ranking;
}

