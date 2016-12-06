<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSuggestedCategoriesRequestType
 * Requests a list of up to 10 categories with the highest percentage of listings whose titles
 * or descriptions contain the keywords you specify.
 */
class GetSuggestedCategoriesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->Query = $val;
    }
}
