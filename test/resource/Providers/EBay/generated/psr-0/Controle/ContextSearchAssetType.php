<?php

namespace Controle;

/**
 * ContextSearchAssetType
 * Score and rank for a keyword identified for a web page.
 */
class ContextSearchAssetType
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyword($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Keyword');
        }
        $this->Keyword = $val;
	}

	/**
	 * @param CategoryType $val
	 * @throws Exception
	 */
	public function setCategory($val)
	{
        $this->Category = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRanking($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Ranking = $val;
	}
}
