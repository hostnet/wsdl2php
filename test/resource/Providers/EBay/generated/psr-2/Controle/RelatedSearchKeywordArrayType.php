<?php

namespace Controle;

/**
 * RelatedSearchKeywordArrayType
 * Container for a list of related keywords.
 */
class RelatedSearchKeywordArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Related keyword.
     */
    public $Keyword;
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
}
