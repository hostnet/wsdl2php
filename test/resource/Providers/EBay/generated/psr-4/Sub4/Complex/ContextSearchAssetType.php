<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ContextSearchAssetType
 * Score and rank for a keyword identified for a web page.
 */
class ContextSearchAssetType
{
    /**
     * @var string | Related keyword.
     */
    public $keyword;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryType | Describes a category that contains items that match the query.
     */
    public $category;
    /**
     * @var int | The ranking of this keyword and category relative to other keywords and categories (when
     * scores are sorted).
     */
    public $ranking;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyword($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Keyword');
        }
        $this->keyword = (int)$val;
    }

    /**
     * @param CategoryType $val
     * @throws Exception
     */
    public function setCategory($val)
    {
        $this->category = (int)$val;
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
        $this->ranking = (int)$val;
    }
}
